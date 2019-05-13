<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>First steps in Melbourne - Introduction</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/mdb.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <style type="text/css">
    * {
        font-family: MetaSerif-Book, Georgia, "Times New Roman", Times, serif;
        font-size: 18px;
    }

    ul li {
        margin-left: 10px;

    }
    #btn{
          background-color: rgb(78,191,233);
          border-color: rgb(78,191,233);
          font-size: 16px;
          color: white; 
          border-radius: 5px; 
          margin: 0;
          width: 45px;
          height: 120px;
          font-weight: bolder;
          position: fixed;
          right: -10px;
          top: 40%;
          opacity: 0.5;
    }

    .collapse ul li a {
        font-family: 'Humanist521BT-Roman';
        font-weight: bolder;
        font-size: 16px;
/*        font-size: 2rem;
        font-family: MetaSerif-Book, Georgia, "Times New Roman", Times, serif;
        line-height: 1.5;*/
    }
    </style>
</head>

<body>
    <!--nav-->
    <nav class="mb-1 navbar navbar-expand-lg col-xs-12 col-md-12 col-xs-12" style="background: white; width: 95%;text-align:center;margin: auto; font-size: 20px; border-radius: 5px; height: 62px;box-shadow: 4px 4px 20px lightblue;height: 62px;">
        <a class="navbar-brand" href="http://www.firststepsinmel.ml/"><img src="img/webLogo3.png" style="display: inline; height: 52px; margin-top: -5px;background-color: rgb(34,34,34); border-radius: 10px;">
            <span style="font-family: 'Arial Black';font-size: 24px;color:black; margin-left: 10px;">First Steps in Melbourne</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation" style="width: 200px; height: 100px;">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-333" style=" width: 70% ">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item dropdown" id="costDrag" style="margin-top: 7px;font-size: 16px;">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: black;" id="costFont"><span class="caret"></span>&nbsp;&nbsp;Living Cost Calculator</a>
                    <ul class="dropdown-menu">
                        <li><a href="introduction.php">Calculator</a></li>
                        <li><a href="Bills.html">Other expenses</a></li>
                    </ul>
                </li>
                <!-- <li class="nav-item">
    <a class="nav-link" href="http://www.firststepsinmel.ml:3838/easyaussie/recommendation/" style="color: black;font-size: 16px;">Student Support</a>
</li> -->
                <li class="dropdown" id="subSupDrag" style="margin-top: 7px;">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: black;" id="stuSup"><span class="caret"></span>&nbsp;&nbsp;Student Support</a>
                    <ul class="dropdown-menu">
                        <li><a href="http://www.firststepsinmel.ml:3838/easyaussie/find_a_suburb/">Find a Suburb</a></li>
                        <li><a href="TipsList.html">Guidance</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="comparison.html" style="color: black;font-size: 16px; margin-top: -3px;">Compare with Shanghai</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="prediction.php" style="color: black;font-size: 16px; margin-top: -3px;">Prediction</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="display: none;">Quick start here
                    </a>
                    <div class="dropdown-menu dropdown-default">
                        <a class="dropdown-item" href="introduction.php">Living Cost Calculator</a>
                        <a class="dropdown-item" href="http://www.firststepsinmel.ml:3838/easyaussie/find_a_suburb/">Student Support</a>
                        <a class="dropdown-item" href="comparison.html">Compare with Shanghai</a>
                        <a class="dropdown-item" href="prediction.php">Prediction</a>
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
        <div class="container col-lg-12 col-md-12 col-xs-12" style="text-align: center; margin: auto; width: 60%; margin-top: 30px;">
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
                                <p style="line-height: 200%; display: inline;">The living cost calculator helps you get a better understanding of your living expenses in Melbourne.</p>
                                 
                                <font style="line-height:200%; text-align: justify;">Each selection has a variety of inputs to act as a guide for your financial position. It will then calculate how much you are spending in total and separated based on the input you provided.</font>
                                <p></p>
                                <p>
                                    <!--改-->
                                    <a href="firstStepForm.php" id="start"><button class="btn btn-primary " style="border-radius: 20px; width: 200px; font-size: 20px; height:60px;">Start</button></a>
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
                    <div class="modal-content">
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
                            <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="backPage()">Back to homePage</button>
                        </div>
                    </div>
                </div>
            </div>
            <a href='sendgrid-php/feedback.php'><button type="button" id="btn" class="" data-button-for="2a8f783514fa91e03666bbb8c444ac4a0b967074" title="Feedback" tabindex="0" style="opacity: 1; visibility: visible;" onmousemove="btnAction()" onmouseout="btnOut()"><i class="mopicon mopicon-commenting-o " icon="fa-commenting-o"><svg viewBox="0 0 28 28"><path d="M10 14c0 1.109-0.891 2-2 2s-2-0.891-2-2 0.891-2 2-2 2 0.891 2 2zM16 14c0 1.109-0.891 2-2 2s-2-0.891-2-2 0.891-2 2-2 2 0.891 2 2zM22 14c0 1.109-0.891 2-2 2s-2-0.891-2-2 0.891-2 2-2 2 0.891 2 2zM14 6c-6.5 0-12 3.656-12 8 0 2.328 1.563 4.547 4.266 6.078l1.359 0.781-0.422 1.5c-0.297 1.109-0.688 1.969-1.094 2.688 1.578-0.656 3.016-1.547 4.297-2.672l0.672-0.594 0.891 0.094c0.672 0.078 1.359 0.125 2.031 0.125 6.5 0 12-3.656 12-8s-5.5-8-12-8zM28 14c0 5.531-6.266 10-14 10-0.766 0-1.531-0.047-2.266-0.125-2.047 1.813-4.484 3.094-7.187 3.781-0.562 0.156-1.172 0.266-1.781 0.344h-0.078c-0.313 0-0.594-0.25-0.672-0.594v-0.016c-0.078-0.391 0.187-0.625 0.422-0.906 0.984-1.109 2.109-2.047 2.844-4.656-3.219-1.828-5.281-4.656-5.281-7.828 0-5.516 6.266-10 14-10v0c7.734 0 14 4.484 14 10z" fill="currentColor"></path></svg></i><span style="writing-mode: vertical-lr; transform: rotate(-180deg);">Feedback</span></button></a>
            <!-- Footer -->
            <!-- class="page-footer" -->
            <footer id="footer" style="background: white;position: absolute; bottom: 0;left:0px;right: 0px;  width:95%; margin: auto;border-radius: 5px;box-shadow: 4px 4px 20px lightblue; border:1px solid rgb(247,247,247);">
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
            function getHelp() {
                $('#myModal').modal('show');
            }

            function getClose() {
                $('#myModal2').modal('show');
            }

            function backPage() {
                window.open('http://www.firststepsinmel.ml/', "", "", false);
            }
            function btnAction(){
                $("#btn").css('right','0px');
            }
             function btnOut(){
                $("#btn").css('right','-10px');
            }
    </script>
</body>

</html>