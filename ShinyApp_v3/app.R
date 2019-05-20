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
  
