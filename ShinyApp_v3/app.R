<<<<<<< master
rm(list=ls())
library(ggplot2)
library(shiny)   # web framework
library(DT)      # interface to the JavaScript library DataTables
library(shinyjs)
library(shinythemes)
library(shinydashboard)
library(dplyr)
library(shinyWidgets)
library(leaflet)
library(raster)
library(leaflet.extras)
library(shinymaterial)


#open on GCP
#library(bigrquery)
#setwd("/home/easyaussie/ShinyApps/find_a_suburb")
#set_service_token("augmented-tract-236700-2d404b41427a.json")


#close code below on GCP
setwd("C:/Users/YHChen/@my/Course/FIT5120/Dataset/ShinyApp_v5") 

getTool <- function(inputId) {
  tagList(
    tags$html(includeHTML(inputId))
  )
}





# input data and wranlging data
sub_detail <- read.csv("suburb_detail_final_v4.csv")
data1 <- read.csv("campus_loc_v3.csv")
dist <- read.csv("sub_distance_final_v5.csv")
dist$distance = round(dist$distance, 2)
colnames(dist) <- c("x","university","campus","Suburb","distance")
data2 <- merge(dist, sub_detail, by.x="Suburb" , by.y="Suburb",sort=FALSE,all.x = TRUE) 
keepcol <- c("Suburb","university","campus","Average_per_person","House_rent","distance","convenient_level","food_service_level")
data3 <- data2[,keepcol]

data3$convenient_level <- factor(data3$convenient_level,
          levels = c(1,2,3,4,5),
          labels = c("Very Low", "Low", "Medium", "High","Very High"))

data3$food_service_level <- factor(data3$food_service_level,
                                 levels = c(1,2,3,4,5),
                                 labels = c("Very Low", "Low", "Medium", "High","Very High"))

data3$min_rent = apply(data3[,c("Average_per_person","House_rent")], 1, min, na.rm = TRUE)
  
#data3 <- transform(data3, min_rent = pmin(Average_per_person, House_rent))
uni <- unique(as.vector(data1$University))
campus <- list()


# subset of original dataset
for (i in 1:length(uni)){ 
  temp <- subset(data1, University==uni[i])
  campus[[uni[i]]] <- as.vector(temp$Campus)
}

temp <- subset(data1, University==uni[2])
campus1 <- as.vector(temp$Campus)

url <- a(icon("home", lib = "glyphicon"),"Back to Homapage", href="https://www.firststepsinmel.ml",target="_self")
ref_1 <- a("https://discover.data.vic.gov.au/dataset/rental-report-quarterly-moving-annual-rents-by-suburb", href="https://discover.data.vic.gov.au/dataset/rental-report-quarterly-moving-annual-rents-by-suburb",target="_self")
ref_2 <- a("http://www.abs.gov.au/AUSSTATS/abs@.nsf/DetailsPage/1410.02012-17?OpenDocument", href="http://www.abs.gov.au/AUSSTATS/abs@.nsf/DetailsPage/1410.02012-17?OpenDocument",target="_self")
ref_3 <- a("http://www.corra.com.au/australian-postcode-location-data/", href="http://www.corra.com.au/australian-postcode-location-data/",target="_self")



icon_uni <- makeAwesomeIcon(icon= 'flag', markerColor = 'red', iconColor = 'black')
#icon_sub <- makeAwesomeIcon(icon = 'map-marker-alt', markerColor = 'blue', iconColor = 'black')

server <-function(input, output, session) {
  

  
  formulaText <- reactive({
    paste("Map around",'"', input$select_uni ,"-", input$select_campus,"campus",'"', "and the Top 5 best suburbs for you")
  })
  
  formulaText2 <- reactive({
    paste('Map around', input$select_uni ,input$select_campus,"campus","and Top 5 best suburbs for you")
  })
  
  output$title1 <- renderText({formulaText2()})
  
  
  ############# First Panel ################ 
  observe({
    uni1 <- input$select_uni
    
    # update the input choice
    updateSelectInput(session, "select_campus",
                      label = paste("Select your campus"),
                      choices = campus[[uni1]]
    )
  })
  
  

  
  filterdata = reactive({
    data_new <- data3[(data3$university== input$select_uni ) & (data2$campus ==  input$select_campus),]
    
    if (input$select_sort=="Distance to your campus"){
      data_new1 <- data_new[with(data_new, order(distance, min_rent)),]
    }
    else if (input$select_sort=="Convenient level"){
      data_new1 <- data_new[with(data_new, order(convenient_level,  -distance,decreasing = TRUE)),]
    }
    else if (input$select_sort=="Food service level"){
      data_new1 <- data_new[with(data_new, order(food_service_level, -distance, decreasing = TRUE)),]
    }
    else {
      data_new1 <- data_new[with(data_new, order(min_rent, distance)),]
    }
    
    data_new2 <- data_new1[(data_new1$distance >= input$dist_range[1] & data_new1$distance <= input$dist_range[2]) & (data_new1$Average_per_person >= input$rent_range[1] & data_new1$Average_per_person <= input$rent_range[2]),]
    
    data_new2[1:10,c(1,4:8)]
  })
  
  
  output$tab <- renderUI({
    tagList(url,"")
  })
  
  output$ref1 <- renderUI({
    tagList(ref_1,"")
  })
  output$ref2 <- renderUI({
    tagList(ref_2,"")
  })
  
  output$ref3 <- renderUI({
    tagList(ref_3,"")
  })

  

  
  
  ## if else for this table????
  output$table_recom <- DT::renderDataTable({
    DT::datatable( filterdata()
               , class = "cell-border compact hover order-column stripe",options=list(pageLength = 5, info=FALSE,lengthChange = FALSE, searching = FALSE) #lengthMenu = c(5,-1)
               , rownames = FALSE
               ,colnames = c("Suburb", "Weekly rent per one room in flat($)","Weekly rent per one room in house($)","Distance to your campus (km)","Convenience Level","Food Service Level")
    )
#    %>%formatStyle(background = 'white',color='black')
  }) 
 
  
  output$sitemap <- renderLeaflet( {
    temp1 <- data1[(data1$University== input$select_uni)& (data1$Campus== input$select_campus),]
    filter_df <- filterdata()
    select_sub <- as.vector(filter_df[1:5,1])
    temp2 <- sub_detail[(sub_detail$Suburb %in% select_sub), c(2:4) ] 
    temp3 <- merge(temp2, filter_df, by.x="Suburb" , by.y="Suburb",sort=FALSE,all.x = TRUE)
    names(temp3) <- c("Suburb","lat","lon","flat_rent","house_rent","distance","convenient_level","food_service_level")
      p1 <-leaflet(data=temp1) %>% 
              addProviderTiles(providers$OpenStreetMap) %>%   #addTiles() %>%
        addAwesomeMarkers(~temp1$long, ~temp1$lat, popup = ~paste(input$select_uni , ",", input$select_campus,"campus"), icon= icon_uni) %>%
        addMarkers(~temp3$lon, ~temp3$lat, popup = ~paste( "<b>", temp3$Suburb,"</b>", "<br/> Weekly rent(flat): ",temp3$flat_rent, "<br/> Weekly rent(house): ",temp3$house_rent, "<br/> Distance to Uni: ",temp3$distance, "<br/> Convinent level: ",temp3$convenient_level, "<br/> Food service level: ",temp3$food_service_level) ) %>% 
      addResetMapButton()
    print(p1)
  }) 
}


ui <- fluidPage(    
 # setBackgroundColor(
#  color = c("#D3D3D3", "#696969"),
#  gradient = "linear",
#  direction = "bottom"
#),
#theme =  shinytheme("journal"), 
                 getTool('menu5.html'),   #menu bar
                 br(),br(),br(), br(), br(),   
                # Application title   
                h2("Find Your Ideal Location!", align="center", style= "font-family: 'Arial Black'; font-size: 55px; color: rgb(51,122,183);"),
                #h4("Do you think you spend too much on your accommodation?",align="center"), 
                #h4("We provide information for helping you find a suitable suburb based on distance to your campus, rent cost, convenient level, and food service level.",align="center"), 
                #h4("rent cost, convenient level, and food service level.",align="center"),
                #h4("Adjust the panel on the left based on your situation!",align="center"),
                br(),
                sidebarPanel(
                  h4("Where do you study?"),
                  selectInput("select_uni", "University:",  
                              uni),
                  selectInput("select_campus","Campus:",
                              campus1),
                  br(),
                  
                  selectInput("select_sort", h4("Which factor you care about the most?"),c("Distance to your campus","Minimum rent cost","Convenient level","Food service level")),
                  br(),
                  h4("Filter the results by:"),
                  sliderInput("dist_range"
                              , label = "Distance to your campus (km)", value = c(0, 80)
                              , min = 0, max = 80),
                  sliderInput("rent_range"
                              , label = "Weekly Rent Cost ($)", value = c(0, 320)
                              , min = 80, max = 320)
                ),
                
                mainPanel(
                  tabsetPanel(type = "tabs",
                
                              tabPanel("Your results", icon=icon("map-marked-alt"),
                                       dashboardPage(
                                         dashboardHeader(disable = TRUE),
                                         #dashboardHeader(title=p("Your results",style = "font-family: 'Arial Black'")),
                                         dashboardSidebar(disable =TRUE),skin = "blue",
                                         dashboardBody(
                                          
                                           box(width = 12,status = "primary",solidHeader = TRUE,
                                        title=p(icon("star"),"List of Recommended Suburbs",style= "font-family:arial; font-weight:bold;font-size: 20px") ,
                                        fluidPage(
                                        div(
                                          style = 'overflow-x: scroll', 
                                          DT::dataTableOutput("table_recom", width = "auto")))),
                                       br(), 
                                       #p("Map around",style= "font-family:arial; font-weight:bold;font-size: 20px"), 
                                       box(width = 12,status = "primary",solidHeader = TRUE,
                                      tags$head(tags$style("
                  #container * {     display: inline;
                     }")),
                                       title =div(id="container",icon("star"), textOutput("title1"), 
                                           style= "display:inline;font-family:arial;font-weight:bold;font-size:20px"
                                           ),
                                       
                                       #div(icon("star"),textOutput("title1"),style= "display:inline;font-family:arial;font-weight:bold;font-size:20px"), 
                                       #p(" With Top 5 best suburbs for you", style= "font-family:arial;font-weight:bold;font-size:18px"),
                                       leafletOutput("sitemap")),  br(), box(uiOutput("tab"), uiOutput("num_test"))
                                         ))
                                       ),  
                              tabPanel(type="tabs","About the data",icon=icon("question-circle"),
                                      
                                      dashboardPage(
                                        dashboardHeader(disable = TRUE),
                                        #dashboardHeader(title=p("About the data",style = "font-family: 'Arial Black'")),
                                        dashboardSidebar(disable =TRUE),
                                        dashboardBody(
                                          tags$head(tags$style(HTML('
                                                                     /* body */
                                .content-wrapper, .right-side {
                                background-color: white;
                                height: auto !important; position:relative; overflow-x:hidden; overflow-y:hidden
                                }
                                                                    '))),
                                          
                                            box(width = 12,status = "primary",solidHeader = TRUE,
                                            
                                            title = p(icon('clipboard'),"Detail of the factors",style = "font-family: 'Arial Black'; font-size: 20px"),
                                             p(
                                               p(icon("hand-point-right"),"Weekly rent per one room in flat", style = "font-family: 'Arial Black'; font-size: 16px"),
                                               p("The value is calculated from the median rent of 2-room flat for a given suburb, and we divided it by 2 for presenting it as a Weekly rent per room. In some suburbs, the rent cost in flat is more expensive than the rent cost in house. We use the minimum of the two prices to filter the results for users."
                                                 ,style = "font-family: 'Arial'; font-size: 14px"),
                                                  
                                               p(icon("hand-point-right"),"Weekly rent per one room in house", style = "font-family: 'Arial Black'; font-size: 16px"),
                                               p("The value is calculated from the median rent of 3-room house for a given suburb, and we divided it by 3 for presenting it as a Weekly rent per room. The living density is higher near city, some suburbs near city do not have rental data for house."
                                                 
                                                 ,style = "font-family: 'Arial'; font-size: 14px"),
                                               
                                               
                                            p(icon("hand-point-right"),"Distance to your campus", style = "font-family: 'Arial Black'; font-size: 16px"),
                                            p("The distance is calculated by the latitude and longitude of the center of the given suburb and the campus location in google map.",style = "font-family: 'Arial'; font-size: 14px"),
                                            
                                            
                                            p(icon("hand-point-right"),"Convenience level:", style = "font-family: 'Arial Black'; font-size: 16px"),
                                            p('Number of business from all kinds of industry registered to government such as retail trade, health care, and financial services. This factor could help you understand more about the prosperity of a suburb. For people who do not have a car, they would prefer to live in a suburb with retail stores and supermarkets nearby. "Very High" means the number of services is higher 8000 in the given suburb. "High" means the number of services is between 2200 and 8000 in the given suburb. "Medium" means the number of services is between 1200 and 2200. "Low" means the number of services is between 600 and 1200. "Very Low" means the number of services is lower than 600.'
                                              , style = "font-family: 'Arial'; font-size: 14px"),
                                            
                                            p(icon("hand-point-right"),"Food service level:",  style = "font-family: 'Arial Black'; font-size: 16px"),
                                            p('Number of accommodation and food service business registered to government. We assume the number of accommodation and food service are in direct proportion. For people who do not want to cook at home, this factor would be an important index to help them find a suitable suburb with many food options. "Very High" means the number of services is higher 1000 in the given suburb. "High" means the number of services is between 110 and 1000. "Medium" means the number of services is between 50 and 110. "Low" means the number of services is between 20 and 50. "Very Low" means the number of services is lower than 20.'
                                              , style = "font-family: 'Arial'; font-size: 14px")
                                            )
                                        ),
                                       
                                        box(width = 12, title = p(icon('database'),"Data sources",style = "font-family: 'Arial Black'; font-size: 20px"), status = "primary", solidHeader = TRUE,
                                            div(style = 'overflow-x: scroll', p("[1] Median rent price by suburbs in Victoria",style = "font-family: 'Arial Black'; font-size: 16px" ), 
                                           p("The Victorian Government Data Directory,", uiOutput("ref1"),
                                         style = "font-family: 'Arial'; font-size: 14px"
                                         ), 
                                       p("[2] Data by Region (2012-17)", style = "font-family: 'Arial Black'; font-size: 16px") ,
                                       p("Australian Bureau of Statistics,",uiOutput("ref2"),style = "font-family: 'Arial'; font-size: 14px"),
                                       
                                       p("[3] Australian Postcode Location Data", style = "font-family: 'Arial Black'; font-size: 16px") ,
                                       p("Released by CorraApps,",uiOutput("ref3"),style = "font-family: 'Arial'; font-size: 14px")
                                       ))   
                                      
                              )))
                                         
                              
                  )           
                  )

  )



# Create Shiny app ----
shinyApp(ui = ui, server = server)

=======
rm(list=ls())
library(bigrquery)
library(ggplot2)
library(shiny)   # web framework
library(DT)      # interface to the JavaScript library DataTables
library(shinyjs)
library(shinythemes)
library(shinydashboard)
library(dplyr)

setwd("/home/easyaussie/ShinyApps/recommendation")
set_service_token("augmented-tract-236700-2d404b41427a.json")

#setwd("C:/Users/YHChen/@my/Course/FIT5120/Dataset")

# input data and wranlging data
sub_detail <- read.csv("suburb_detail_final_v2.csv")
data1 <- read.csv("campus_loc_v1.csv")
dist <- read.csv("sub_distance_final.csv")
dist$distance = round(dist$distance, 2)
colnames(dist) <- c("x","university","campus","Suburb","distance")

data2 <- merge(dist, sub_detail, by.x="Suburb" , by.y="Suburb",sort=FALSE,all.x = TRUE) 
keepcol <- c("Suburb","university","campus","Average_per_person","distance","convenient_level","food_service_level")
data3 <- data2[,keepcol]
uni <- unique(as.vector(data1$University))
campus <- list()
# subset of original dataset
for (i in 1:length(uni)){ 
  temp <- subset(data1, University==uni[i])
  campus[[uni[i]]] <- as.vector(temp$Campus)
}

temp <- subset(data1, University==uni[1])
campus1 <- as.vector(temp$Campus)

url <- a(icon("home", lib = "glyphicon"),"Back to Homapage", href="http://www.firststepsinmel.ml",target="_self")
server <-function(input, output, session) {
  # Compute the forumla text in a reactive expression since it is 
  #options(shiny.deprecation.messages=FALSE)
  #observeEvent(input$navibar,{
  #  if(input$navibar == "home"){
  #    browseURL("http://www.firststepsinmel.ml")
  #  }
  #})
  
  ############# First Panel ################ 
  observe({
    uni1 <- input$select_uni
    
    # update the input choice
    updateSelectInput(session, "select_campus",
                      label = paste("Select your campus"),
                      choices = campus[[uni1]]
    )
  })
  
  
  formulaText <- reactive({
    paste("Find accommendation", input$select_uni , "and", input$select_campus)
  })

  
  
  filterdata = reactive({
    data_new <- data3[(data3$university== input$select_uni ) & (data2$campus ==  input$select_campus),]
    
    if (input$select_sort=="distance"){
      data_new1 <- data_new[with(data_new, order(distance, Average_per_person)),]
    }
    else if (input$select_sort=="convenient level"){
      data_new1 <- data_new[with(data_new, order(convenient_level,  -distance,decreasing = TRUE)),]
    }
    else if (input$select_sort=="food service level"){
      data_new1 <- data_new[with(data_new, order(food_service_level, -distance, decreasing = TRUE)),]
    }
    else {
      data_new1 <- data_new[with(data_new, order(Average_per_person, distance)),]
    }
    
    data_new2 <- data_new1[(data_new1$distance >= input$dist_range[1] & data_new1$distance <= input$dist_range[2]) & (data_new1$Average_per_person >= input$rent_range[1] & data_new1$Average_per_person <= input$rent_range[2]),]
    
    data_new2[1:30,c(1,4:7)]
  })
  
  
  output$tab <- renderUI({
    tagList(url,"")
  })
  
  output$tab2 <- renderUI({
    tagList(url,"")
  })
  output$table_recom <- DT::renderDataTable({
    datatable( filterdata()
               , class = "cell-border compact hover order-column",options=list(pageLength = 10, lengthMenu = c(10, 20, 30))
               , rownames = FALSE,  colnames = c("Suburb", "Rent cost per room","Distance to Uni","Convenient Level","Food Service Level")
    )
  })
}



ui <- fluidPage(theme =  shinytheme("united"),
                navbarPage( "First steps in Melbourne", id = "navibar",
                            tabPanel("Accommondation",
                                     # Application title
                                     headerPanel("Find accommendation-Recommend a suburb"),
                                     
                                     # Sidebar with controls to select the variable to plot against
                                     sidebarPanel(
                                       h4("Select where you study:"),
                                       selectInput("select_uni", "University:",  
                                                   uni),
                                       selectInput("select_campus","Campus:",
                                                   campus1),
                                       br(),
                 
                                       selectInput("select_sort", h4("Select a factor for sorting:"),c("distance","rent cost","convenient level","food service level")),
                                       br(),
                                       h4("Filter the results by:"),
                                       sliderInput("dist_range"
                                                   , label = "Distance to university", value = c(0, 200)
                                                   , min = 0, max = 200),
                                       sliderInput("rent_range"
                                                   , label = "Rent Cost", value = c(0, 320)
                                                   , min = 80, max = 320)
                                     ),
                                     
                                     mainPanel(
                                       tabsetPanel(type = "tabs",
                                                   tabPanel("List of Recommended Suburbs", icon=icon("th")
                                                            , DT::dataTableOutput("table_recom"))
                                                   
                                       ),  uiOutput("tab")) 
                            ),
                            tabPanel( "",icon = icon("home", lib = "glyphicon"),value="home",uiOutput("tab2")
                        
                                      ),
                            selected = "Accommondation"
                            
                )
)


# Create Shiny app ----
shinyApp(ui = ui, server = server)
  
>>>>>>> master
