<?php  

    $university = htmlentities($_POST['university']);
    $livingPlace = strtoupper(htmlentities($_POST['livingPlace']));
    $transportTimes = htmlentities($_POST['transportTimes']);
    $transSelect = htmlentities($_POST['transSelect']);
    $mealOut = htmlentities($_POST['eatOutside']);
    $vegan = htmlentities($_POST['vegan']);
    $otherSuburb = strtoupper(htmlentities($_POST['otherInput']));

    switch ($university) {
        case '0':
            $university = "Monash University";
            break;
        case '1':
        $university = "University of Melbourne";
            break;
        case '2':
        $university = "RMIT University";
            break;
        case '3':
        $university = "Swinburne University of Technology";
            break;
        case '4':
        $university = "University of Divinity";
            break;
        case '5':
        $university = "Victoria University";
            break;
        default:
        $university = "Deakin University";
            break;
    }

    $campus = strtoupper(htmlentities($_POST['campus']));

    if($campus === 'CITY'){
        $campus = 'CBD';
    }else if($campus === 'CAUFIELD'){
        $campus = 'CAULFIELD';
    }
    
//test---------------------------------------------------------------------
    // echo "campus".$campus."<br>";
    // echo "transSelect".$transSelect."<br>";
    // echo "university".$university."<br>";
    // echo "otherSuburb".$otherSuburb."<br>";
    $distance="1.1";
    require('config/db.php');
    $queryCost = "SELECT * FROM distance";
    $resultCost = mysqli_query($conn, $queryCost);

    while($row = mysqli_fetch_array($resultCost)){
        //var_dump($row['suburb']);
        if($transSelect==='car'|| $transSelect==="taxi"){
            //echo strtoupper($row['campus']);
            if($row['suburb'] === $otherSuburb && $row['university'] === $university 
                && strtoupper($row['campus']) === $campus){
                $distance = $row['distance'];
            }else if($row['suburb'] === 'CBD' && $row['university'] === $university 
                && strtoupper($row['campus']) === $campus){
                $distance = $row['distance'];
            }

        }   
    } 
     //echo "distance".$distance;
    
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/firstStepForm_result.css">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript">
    var accPrice, transportCost, foodPrice;


    $(document).ready(function() {


        <?php if ($livingPlace==='CITYLIVING'): ?>
        fixedPrice();
        <?php endif; ?>
        <?php if ($livingPlace==='CAMPUSSUBURB' && $campus === 'CBD'): ?>
        fixedPrice();
        <?php endif; ?>
        <?php if ($livingPlace === 'CAMPUSSUBURB'): ?>
        accoCost();
        <?php endif ?>

        /*添加othersuburb*/
        <?php if ($livingPlace === 'OTHERSUBURB'): ?>
        accoOtherCost();
        <?php endif ?>

        /*----------------------*/

        <?php if ($transSelect === 'car'): ?>
        carCost();
        <?php endif ?>

        <?php if ($transSelect === 'taxi'): ?>
        taxiCost();
        <?php endif ?>

        <?php if ($transSelect === 'Public'): ?>
        var time = parseInt(<?php echo $transportTimes; ?>);
        transCost(time);
        <?php endif ?>

        <?php if ($transSelect === 'onFoot/bicycle'): ?>
        footCost();
        <?php endif ?>


        // food cost
        var numOfDay = parseInt(<?php echo $mealOut; ?>);
        // var price = 0;
        var classSel = $('#proFood');
        if ('<?php echo $vegan; ?>' === 'vegan') {
            foodPrice = (numOfDay * 12 + (14 - numOfDay) * 7 + 7 * 2.5) * 0.8;
            var totalCostShow = "$" + foodPrice;
            //console.log(classSel);
            totalCostPer = foodPrice / 200 * 100 + "%";
            classSel.html(totalCostShow);
            classSel.css("width", totalCostPer);
        } else {
            foodPrice = (numOfDay * 12 + (14 - numOfDay) * 7 + 7 * 2.5);
            var totalCostShow = "$" + foodPrice;
            console.log(classSel);
            totalCostPer = foodPrice / 200 * 100 + "%";
            classSel.html(totalCostShow);
            classSel.css("width", totalCostPer);
        }

        var totalCost = accPrice + transportCost + foodPrice;
        // console.log(accPrice);
        // console.log(transportCost);
        // console.log(foodPrice);
        var totalShow = $(".span1");
        //totalShow.html('Your total cost of living: $' + totalCost);
        $('#costShow').html('$' + totalCost);
    });

    //Accommodtion Cost function
    function fixedPrice() {
        accPrice = 294;
        var classSel = $('#proAcc');
        totalCostPer = accPrice / 400 * 100 + "%";
        classSel.html('$' + accPrice);
        classSel.css("width", totalCostPer);
    };

    function accoCost() {
        <?php 
                    require('config/db.php');
                    $queryCost = "SELECT * FROM livingcost WHERE Suburb = '$campus'";
                    $resultCost = mysqli_query($conn, $queryCost);
                    $postsCost = mysqli_fetch_assoc($resultCost);
                    mysqli_close($conn);
                 ?>
        accPrice = parseInt(<?php echo $postsCost['Average_per_person']; ?>);
        var classSel = $('#proAcc');
        //console.log(classSel);
        totalCostPer = accPrice / 400 * 100 + "%";
        classSel.html('$' + accPrice);
        classSel.css("width", totalCostPer);
    };
    /*添加othersuburb*/
    function accoOtherCost() {
        <?php 
                    require('config/db.php');
                    $queryCost = "SELECT * FROM livingcost WHERE Suburb = '$otherSuburb'";
                    $resultCost = mysqli_query($conn, $queryCost);
                    $postsCost = mysqli_fetch_assoc($resultCost);
                    mysqli_close($conn);
                 ?>
        accPrice = parseInt(<?php echo $postsCost['Average_per_person']; ?>);
        var classSel = $('#proAcc');
        //console.log(classSel);
        totalCostPer = accPrice / 400 * 100 + "%";
        classSel.html('$' + accPrice);
        classSel.css("width", totalCostPer);
    }
    /*-------------------------------------------*/

    function carCost() {
        var classSel = $('#proTr');
        var times = parseInt(<?php echo $transportTimes ?>);
        transportCost = Math.round((9 * 1.47) / 100 * parseFloat(<?php echo $distance; ?>) * 2 * times);
        //console.log(<?php echo $distance; ?>);
        if (<?php echo $distance; ?> > 5 && <?php echo $distance; ?> < 10) {
            totalCostPer = transportCost / 40 * 100 + "%";
        } else if (<?php echo $distance; ?> > 15 && <?php echo $distance; ?> < 30) {
            totalCostPer = transportCost / 50 * 100 + "%";
        } else if (<?php echo $distance; ?> > 30 && <?php echo $distance; ?> < 50) {
            totalCostPer = transportCost / 80 * 100 + "%";
        } else if (<?php echo $distance; ?> > 50 && <?php echo $distance; ?> < 100) {
            totalCostPer = transportCost / 180 * 100 + "%";
        } else {
            totalCostPer = transportCost / 800 * 100 + "%";
        }
        var totalCostShow = '$' + transportCost;
        classSel.html(totalCostShow);
        classSel.css("width", totalCostPer);

    }

    /*测试*/
    function taxiCost() {
        var classSel = $('#proTr');
        var times = parseInt(<?php echo $transportTimes ?>);
        transportCost = Math.round((4.7 + (parseFloat(<?php echo $distance; ?>) - 1) * 1.71) * 2 * times);
        if (<?php echo $distance; ?> > 20) {
            totalCostPer = transportCost / 400 * 100 + "%";
        } else {
            totalCostPer = transportCost / 200 * 100 + "%";
        }
        //totalCostPer = transportCost/200*100 + "%";
        var totalCostShow = '$' + transportCost;
        classSel.html(totalCostShow);
        classSel.css("width", totalCostPer);

    }

    function transCost(times) {
        var classSel = $('#proTr');
        var sequence = parseInt(times);
        transportCost = 8.8 * sequence;
        totalCost = "$" + transportCost.toFixed(1);
        totalCostPer = transportCost / 100 * 100 + "%";
        classSel.html(totalCost);
        classSel.css("width", totalCostPer);
    }

    function footCost() {
        var classSel = $('#proTr');
        transportCost = 0;
        totalPer = 0 / 100 * 100 + "%";
        classSel.html("$0");
        classSel.css("width", totalPer);

    }
     function btnAction(){
        $("#btn").css('right','0px');
    }
      function btnOut(){
            $("#btn").css('right','-10px');
        }
    </script>
    <style type="text/css">
    * {
        font-family: 'Humanist521BT-Roman';
    }

    ul li {
        margin-left: 20px;

    }

    #navbar>ul li a {
        color: black;
        text-decoration: none;
        font-family: 'Arial';
        font-size: 18px;
    }

    #navbar>ul li a:hover {
        color: gray;
    }

    #float {
        position: absolute;
        z-index: 1;
        cursor: pointer;
    }
    </style>
</head>

<body>
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark" style="background: white; width: 95%;text-align:center;margin: auto; font-size: 20px;border-radius: 5px; height:50px;border: 1px solid rgb(224,227,230); height: 62px; box-shadow: 4px 4px 20px lightblue;">
        <a class="navbar-brand active" href="http://www.firststepsinmel.ml/"><img src="img/webLogo3.png" style="display: inline; height: 52px; margin-top: -5px;background-color: rgb(34,34,34); border-radius: 10px;">
            <span style="font-family: 'Arial Black';font-size: 24px;color:black; margin-left: 10px;">First Steps in Melbourne</span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333" aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav" style="margin-left:20px;">
                <li><a href="http://www.firststepsinmel.ml">Home</a></li>
                <li><a href="introduction.php">Living Cost Calculator</a></li>
                <li><a href="https://www.firststepsinmel.ml/shiny/easyaussie/find_a_suburb/">Student Support</a></li>
                <li><a href="comparison.html">Comparison</a></li>
                <!--       <li><a href="#pred">Prediction</a></li>
                            <li><a href="#about">About us</a></li> -->
                <!-------------------------------------------------------------->
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="display: none;"><span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li class="active"><a href="introduction.php" style="text-decoration: none;">Living Cost Calculator</a></li>
                        <li><a href="http://www.firststepsinmel.ml:3838/easyaussie/recommendation/">Student Support</a></li>
                        <li><a href="comparison.html">Comparison</a></li>
                        <!--             <li><a href="#">Prediction</a></li>
                                    <li><a href="#">About us</a></li> -->
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="header" style="height: 160px; width: 100%">
            <div class="intro">
                <img style="margin-top: 15px;" src="https://insiderguides.com.au/wp-content/plugins/costOfLivingCalculator/assets/img/calculator.svg">
                <br>
                <span class="span1" style="font-size: 35px; font-family: 'Arial Black'; font-weight: normal;">Your cost of living </span>
                <br>
                <p id="costShow" style=" font-size: 35px; display: inline; font-family: 'Arial Black';"></p>
                <span style="font-size: 18px; line-height: 50%"> (per week)</span>
            </div>
        </div>
        <!--jjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj-->
        <!-- <div id="float"><img id="floatImg" src="img/feedback2.jpg" style="width:30%; height:30%; border-radius: 40%; z-index: 1; position: relative; opacity: 0.3"></div> -->
        <div class="table">
            <table>
                <tr>
                    <td class="title" style="font-family: BrandonTextWeb-Regular;font-size: 20px; width: 180px;vertical-align: middle;">Rental Cost</td>
                    <td style="vertical-align: middle;position: relative;z-index: 99">
                        <div class="progress" style="height: 35px;">
                            <div class="progress-bar bg-danger progress-bar-striped" id="proAcc" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                            </div>
                        </div>
                    </td>
                    <td class="col-xd-hidden" style="width: 100px;">
                        <br><a href="accommodationTips.html" style="font-size: 13px;">Need Tips?</a>
                    </td>
                </tr>
                <tr>
                    <td class="title" style="font-family: BrandonTextWeb-Regular;font-size: 20px; width: 180px;vertical-align: middle;">Transport Cost</td>
                    <td width="300px" style="vertical-align: middle;">
                        <div class="progress" style="height: 35px;position: relative;z-index: 99">
                            <div class="progress-bar bg-danger progress-bar-striped" id="proTr" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                Transport
                            </div>
                        </div>
                    </td>
                    <td class="col-xd-hidden" style="width: 100px;">
                        <br><a href="transportationTips.html" style="font-size: 13px;">Need Tips?</a>
                    </td>
                </tr>
                <tr>
                    <td class="title" style="font-family: BrandonTextWeb-Regular;font-size: 20px; width: 180px;vertical-align: middle;">Food Cost</td>
                    <td width="300px" style="vertical-align: middle;">
                        <div class="progress" style="height: 35px;position: relative;z-index: 99">
                            <div class="progress-bar bg-danger progress-bar-striped" id="proFood" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                Food
                            </div>
                        </div>
                    </td>
                    <td class="col-xd-hidden" style="width: 100px;">
                        <br><a href="EatingIn.html" style="font-size: 13px;">Need Tips?</a>
                    </td>
                </tr>
            </table>
        </div>
        <div class="recommendation" style="height: 300px;width: 100%;text-align:center;">
            <div>
                <div class="col-xs-12">
                    <div>
                        <h3 style="font-weight: bolder;">How we can help you get more out of life?</h3>
                        <p>
                        </p>
                        <p style="text-align: left; line-height:2em;">There are many student recommendations and support tips available for international students. This includes some suburb living information which has distance, rental level, living convenience and food service level.</p>
                        <p>Check out student support and see how you reach your goals.</p>

                            <a href="https://www.firststepsinmel.ml/shiny/easyaussie/find_a_suburb/"><button class="btn btn-success btn-lg">Student Support</button></a>
                            <a href="index.php"><button class="btn btn-success btn-lg">Back to Homepage</button></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
      <!--   <script type="text/javascript">
        var moveX = 0;
        var moveY = 0;
        var stepX = 5;
        var stepY = 6;
        var directionX = 0;
        var directionY = 0;

        function changePos() {
            var img = document.getElementById("float");
            var height = document.documentElement.clientHeight;
            var width = document.documentElement.clientWidth;
            var imgHeight = document.getElementById("floatImg").height;
            var imgWidth = document.getElementById("floatImg").width;
            img.style.left = parseInt(moveX + document.documentElement.scrollLeft) + "px";

            img.style.top = parseInt(moveY + document.documentElement.scrollTop) + "px";

            if (directionY == 0) {

                moveY += stepY;
            } else {

                moveY -= stepY;
            }
            if (moveY < 0) {

                directionY = 0;
                moveY = 0;
            }
            if (moveY > (height - imgHeight)) {

                directionY = 1;
                moveY = (height - imgHeight);
            }


            if (directionX == 0) {
                moveX += stepX;
            } else {
                moveX -= stepX;
            }
            if (moveX < 0) {
                directionX = 0;
                moveX = 0;
            }
            if (moveX > (width - imgWidth)) {

                directionX = 1;
                moveX = (width - imgWidth);
            }
        }
        setInterval("changePos()", 50);

        $(document).ready(function() {
            $(floatImg).click(function() {
                window.open('sendgrid-php/feedback.php');
            });
        });
        </script> -->
</body>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>

</html>