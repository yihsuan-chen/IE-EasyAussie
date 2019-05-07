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

#library(bigrquery)
#setwd("/home/easyaussie/ShinyApps/recommendation")
#set_service_token("augmented-tract-236700-2d404b41427a.json")


#close code below on GCP
setwd("C:/Users/YHChen/@my/Course/FIT5120/Dataset/ShinyApp_v4") 

getTool <- function(inputId) {
  tagList(
    tags$html(includeHTML('menu4.html'))
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

url <- a(icon("home", lib = "glyphicon"),"Back to Homapage", href="http://www.firststepsinmel.ml",target="_self")
icon_uni <- makeAwesomeIcon(icon= 'flag', markerColor = 'red', iconColor = 'black')
#icon_sub <- makeAwesomeIcon(icon = 'map-marker-alt', markerColor = 'blue', iconColor = 'black')

server <-function(input, output, session) {
  
  observeEvent(input$navibar,{
    if(input$navibar == "home"){
      browseURL("http://www.firststepsinmel.ml")
    }
  })
  
  formulaText <- reactive({
    paste("*Map around",'"', input$select_uni ,"-", input$select_campus,"campus",'"', "and the Top 5 best suburbs for you")
  })
  
  output$title1 <- renderText({formulaText()})
  
  
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
  
  output$tab2 <- renderUI({
    tagList(url,"")
  })
  output$table_recom <- DT::renderDataTable({
    datatable( filterdata()
               , class = "cell-border compact hover order-column",options=list(pageLength = 5, lengthMenu = c(5,10))
               , rownames = FALSE,  colnames = c("Suburb", "Weekly rent per one room in flat($)","Weekly rent per one room in house($)","Distance to your campus (km)","Convenient Level","Food Service Level")
    )
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
#  setBackgroundColor(
#  color = c("#D3D3D3", "#696969"),
#  gradient = "linear",
#  direction = "bottom"
#),
#theme =  shinytheme("journal"), 
                br(), getTool(),
                         # Application title
                h2("Find accommodation-Recommend a suburb",align="center"),
                h4("Do you think you spend too much on your accommodation?",align="center"), 
                h4("We provide information for helping you find a suitable suburb based on distance to your campus, rent cost, convenient level, and food service level.",align="center"), 
                #h4("rent cost, convenient level, and food service level.",align="center"),
                h4("Adjust the panel on the left based on your situation!",align="center"),
                
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
                              tabPanel("List of Recommended Suburbs", icon=icon("th")
                                       , DT::dataTableOutput("table_recom"),
                                       br(), h4(textOutput("title1")), actionButton("reset_button", "Reset view"),leafletOutput("sitemap"),  br(),uiOutput("tab")
                                       ),  
                              tabPanel(type="tabs","Explanation of each factor",icon=icon("bell"),
                                       h3("*Note:",style = "font-family: 'times'; font-si16pt"),
                                       h4("1) Distance to your campus:"),"The distance from the center of the suburb to the campus location in google map",br(),br(), 
                                       h4("2) Convenient level:"),"Number of all kinds of retail business registered to government",br(),br(), 
                                       h4("3) Food service level:"),"Number of food service business registered to government",br(),br(), 
                                       h3("*Data sources:"),
                                       h4("1) Median rent price by suburbs in Victoria"), "The Victorian Government Data Directory, https://www.data.vic.gov.au/data/dataset", br(),br(),
                                       h4("2) Data by Region (2012-17)") ,"Australian Bureau of Statistics"
                                       )   
                  )            
                  )

  )



# Create Shiny app ----
shinyApp(ui = ui, server = server)


