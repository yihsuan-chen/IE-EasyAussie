<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Material Design Bootstrap</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style type="text/css">
    * {
        font-family: "Arial";
        font-size: 15px;
    }
    ul li{
        margin-left: 10px;
    }
    .collapse ul li a {
        font-family: 'Humanist521BT-Roman';
        font-weight: bolder; 
        font-size: 17px;
    }
    </style>
</head>

<body>
    <!--nav-->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark" style="background: rgb(34,34,34); width: 95%;text-align:center;margin: auto; font-size: 20px; border-radius: 5px;">
        <a class="navbar-brand" href="http://www.firststepsinmel.ml/" ><img src="img/webLogo3.png" style="display: inline; height: 52px; margin-top: -5px;background-color: rgb(34,34,34); border-radius: 10px;">
        <span style="font-family: 'Arial Black';font-size: 24px;color:white; margin-left: 10px;">First Steps in Melbourne</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-333" style="margin-left: 100px;">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="https://www.firststepsinmel.ml/">Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="firstStepForm.php">Living Cost Calculator
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://www.firststepsinmel.ml:3838/easyaussie/recommendation/">Student Support</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="comparsion.html">Compare with Shanghai</a>
                </li>
         <!--        <li class="nav-item">
                    <a class="nav-link" href="#">Prediction</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About us</a>
                </li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="display: none;">Quick start here
                    </a>
                    <div class="dropdown-menu dropdown-default">
                        <a class="dropdown-item" href="firstStepForm.php">Living Cost Calculator</a>
                        <a class="dropdown-item" href="http://www.firststepsinmel.ml:3838/easyaussie/recommendation/">Student Support</a>
                        <a class="dropdown-item" href="comparsion.html">Comparision with Shanghai</a>
               <!--          <a class="dropdown-item" href="#">Prediction</a>
                        <a class="dropdown-item" href="#">About us</a> -->
                    </div>
                </li>
            </ul>
        </div>
    </nav>
        <!------------------------------------------------------------------------->
        <div class="icon" style="position: absolute; right: 30px;">
        <img style="opacity: 0.4; margin-right: 10px;" src="svg/dripicons-master/SVG/information.svg" width="32px" height="32px" class="svgIcon" title="click here for help" onclick="getHelp()" data-toggle="modal" data-target="#exampleModalCenter">
        <img style="opacity: 0.4;" src="svg/dripicons-master/SVG/cross.svg" width="32px" height="32px" class="svgIcon" title="close" onclick="getClose()">
      </div>
    <div>
        <!--body-->
        <!--container-->
        <div class="container container-lg bg-white p-a-1" style="text-align: center; margin: auto; width: 60%; margin-top: 30px;">
            <div class="row">
                <div id="main" class="col-xs-12 cf" role="main">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="active equalizeThis" id="bgssplash">
                                <p>
                                    <!-- <img src="https://insiderguides.com.au/wp-content/plugins/costOfLivingCalculator/assets/img/calculator.svg"> -->
                                    <img src="img/calculator.jpg" width="15%" height="15%">
                                </p>
                                <h3 style="font-weight: bolder;">LIVING COST CALCULATOR</h3>
                                <p>
                                </p>
                                <p>The living cost calculator helps you get a better understanding of your living expenses in Melbourne.</p> 
 
                                <p>Each selection has a variety of inputs to act as a guide for your financial position. It will then calculate how much you are spending in total and separated based on the input you provided.</p>
                                <p>
                                    <!--改-->
                                    <a href="firstStepForm.php" id="start"><button class="btn btn-primary " style="border-radius: 20px; width: 200px; font-size: 20px;">Start</button></a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Model-->
<div class="container" style="width: 100px;">
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content" >
          <div class="modal-header">
            <h2 class="modal-title" id="exampleModalLongTitle" style="text-align:left">Measurement in weekly</h2>
          </div>
          <p></p>
          <span>&nbsp;&nbsp;&nbsp;&nbsp;All the data is processed as weekly measurement. The result also will &nbsp;&nbsp;&nbsp;&nbsp;the weekly total and sperate cost.</span>
          <div class="modal-header" style="text-align:left;">
            <h2 class="modal-title" id="exampleModalLongTitle">Rounding</h2>
          </div>
          <div class="modal-body" style="text-align: left; font-size: 15px;">
            Each estimated and overall expense total is rounded down to the nearest dollar expect food expense is rounded down to the nearest dollar with one decimal place.<br><br>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    </div>

    <!--Model 2-->

    <div class="container" style="width: 100px;">
     <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title" id="exampleModalLongTitle" style="text-align:center">All done?</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" style="text-align: center; font-size: 15px;">
            Closing the calculator of your Living Cost will lose your progress.<br> Are you sure to quit this function?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-dismiss="modal">Not finish yet</button>
            <button type="button" class="btn btn-primary" data-dismiss="modal" onclick = "backPage()">Back to homePage</button>
          </div>
        </div>
      </div>
    </div>
        
        <!-- Footer -->
        <footer class="page-footer" style="background: rgb(34,34,34);position: absolute; bottom: 0;left:0px;right: 0px;  width:95%; margin: auto;border-radius: 5px;">
            <!-- Copyright -->
            <div class="footer-copyright text-center">&copy;2019 by 'First steps in Melbourne'. Proudly created with EasyAussie team. &middot;
                <a href="http://www.firststepsinmel.ml">firststepsinmel.ml</a>
            </div>
        </footer>

        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/popper.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/mdb.min.js"></script>
        <script type="text/javascript">
            function getHelp(){
              $('#myModal').modal('show');
            }

            function getClose(){
              $('#myModal2').modal('show');
            }

            function backPage(){
              window.open('http://www.firststepsinmel.ml/',"","",false);
            }
        </script>
</body>

</html>