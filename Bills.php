<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" href="image/favicon.ico" type="image/favicon">
    <link rel="icon" href="image/favicon.ico" type="image/favicon">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bills</title>
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

        body{
            background-image: url(img/blue.jpg);
            background-repeat: no-repeat;
            background-color: #000000;
        }
        #regForm label{
            color: black;
        }
        *{
            font-size:15px;
        }
    </style>

    <style>
        body {font-family: Arial; max-width:auto; margin: auto; text-decoration: none;}

        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 0px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            float: left;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            color: #212529;
            text-decoration: none;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 0px solid #ccc;
            border-top: none;
        }
        .btn-primary {
            background-color: #4285f4 !important;
            color: #fff; }
        .btn-primary:hover {
            background-color: #5a95f5;
            color: #fff; }
        .btn-primary:focus, .btn-primary.focus {
            -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
            box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }
        .btn-primary:focus, .btn-primary:active, .btn-primary.active {
            background-color: #0b51c5; }
        .btn-primary.dropdown-toggle {
            background-color: #4285f4 !important; }
        .btn-primary.dropdown-toggle:hover, .btn-primary.dropdown-toggle:focus {
            background-color: #5a95f5 !important; }
        .btn-primary:not([disabled]):not(.disabled):active, .btn-primary:not([disabled]):not(.disabled).active,
        .show > .btn-primary.dropdown-toggle {
            -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
            box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
            background-color: #0b51c5 !important; }
        .btn-primary:not([disabled]):not(.disabled):active:focus, .btn-primary:not([disabled]):not(.disabled).active:focus,
        .show > .btn-primary.dropdown-toggle:focus {
            -webkit-box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15);
            box-shadow: 0 5px 11px 0 rgba(0, 0, 0, 0.18), 0 4px 15px 0 rgba(0, 0, 0, 0.15); }

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
                <a class="nav-link" href="Bills.php">Bills</a>
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
                    <a class="dropdown-item" href="Bills.php">Bills</a>
                    <a class="dropdown-item" href="http://www.firststepsinmel.ml:3838/easyaussie/recommendation/">Student Support</a>
                    <a class="dropdown-item" href="comparsion.html">Comparision with Shanghai</a>
                    <!--          <a class="dropdown-item" href="#">Prediction</a>
                             <a class="dropdown-item" href="#">About us</a> -->
                </div>
            </li>
        </ul>
    </div>
</nav>
<div class="container" style="height: 550px;width: 75%;text-align: center; background-color: white; border-radius: 20px; box-shadow: 4px 4px 20px lightblue;">
    <p><h4>Calculate the approximate cost of monthly bills based on usage</h4></p>
    <div class="tab" style="display: inline-block; border-radius: 10px;box-shadow: 4px 4px 20px lightblue;">
        <button class="tablinks" onclick="openEvent(event, 'Phone')">Phone</button>
        <button class="tablinks" onclick="openEvent(event, 'Internet')">Internet</button>
        <button class="tablinks" onclick="openEvent(event, 'Energy')">Electricity & Gas</button>
        <button class="tablinks" onclick="openEvent(event, 'Water')">Water</button>
    </div>
    <div id="Phone" class="tabcontent" style="height: 300px;width: 100%;text-align:center;">
        <div class="header" style="height: 140px; width: 100%">
            <div class="putimage">
                <img style="margin-top: 15px;" src="img/phone.jpg">
                <h2>Phone Usage</h2>
                How much data would you need?
                <div id="RadioButtons1">
                    <input type="radio" name="RadioButtons1" id="Radio1" value="2">
                    <label for="Radio1">2GB</label>
                    <input type="radio" name="RadioButtons1" id="Radio2" value="6">
                    <label for="Radio2">6GB</label>
                    <input type="radio" name="RadioButtons1" id="Radio3" value="10">
                    <label for="Radio3">10GB</label>
                </div>
                Do you require international calling?
                <div id="RadioButtons2">
                    <input type="radio" name="RadioButtons2" id="Radio4" value="1">
                    <label for="Radio4">Yes</label>
                    <input type="radio" name="RadioButtons2" id="Radio5" value="0">
                    <label for="Radio5">No</label>
                </div>
                <div>
                    <button class="btn btn-primary btn" id="Button1" onClick="phonecost()">Calculate</button>
                </div>
                <div> Average cost per month is:<span id="billval"></span></div>
                <!--<div>
                  <button
                      id="Button3" onclick="document.getElementById('popup')">Recommendation
                  </button>
                </div> -->
            </div>
        </div>
    </div>

    <div id="Internet" class="tabcontent" style="height: 300px;width: 100%;text-align:center;">
        <div class="header" style="height: 140px; width: 100%">
            <div class="putimage">
                <img style="margin-top: 15px;" src="img/internet.jpg">
                <h3>Internet</h3>
                How much data do you need per month?
                <div id="RadioButtons3">
                    <input type="radio" name="RadioButtons3" id="Radio6" value="100">
                    <label for="Radio6">100GB</label>
                    <input type="radio" name="RadioButtons3" id="Radio7" value="500">
                    <label for="Radio7">500GB</label>
                    <input type="radio" name="RadioButtons3" id="Radio8" value="Unlimited">
                    <label for="Radio8">Unlimited</label>
                </div>
                <div>
                    <button class="btn btn-primary btn" id="Button2" onClick="intbill()">Calculate</button>
                </div>
                <div> Average cost per month is:<span id="intbillval"></span></div>
            </div>
        </div>
    </div>
    <div id="Energy" class="tabcontent" style="height: 300px;width: 100%;text-align:center;">
        <div class="header" style="height: 140px; width: 100%">
            <div class="putimage">
                <img style="margin-top: 15px;" src="img/electricity.jpg">
                <h3>Electricity</h3>
                Do you use Electric heater?
                <div id="RadioButtons7">
                    <input type="radio" name="RadioButtons7" id="Radio18" value="1">
                    <label for="Radio18">Yes</label>
                    <input type="radio" name="RadioButtons7" id="Radio19" value="0">
                    <label for="Radio19">No</label>
                </div>
                Do you use Air conditioner?
                <div id="RadioButtons8">
                    <input type="radio" name="RadioButtons8" id="Radio20" value="1">
                    <label for="Radio20">Yes</label>
                    <input type="radio" name="RadioButtons8" id="Radio21" value="0">
                    <label for="Radio21">No</label>
                </div>
                Do you use Underfloor heating?
                <div id="RadioButtons9">
                    <input type="radio" name="RadioButtons9" id="Radio22" value="1">
                    <label for="Radio22">Yes</label>
                    <input type="radio" name="RadioButtons9" id="Radio23" value="0">
                    <label for="Radio23">No</label>
                </div>
                Do you use Electric water heater?
                <div id="RadioButtons10">
                    <input type="radio" name="RadioButtons10" id="Radio24" value="1">
                    <label for="Radio24">Yes</label>
                    <input type="radio" name="RadioButtons10" id="Radio25" value="0">
                    <label for="Radio25">No</label>
                </div>
                <button class="btn btn-primary btn" id="Button2" onClick="eleccal()">Calculate</button>
                <div> Your usage<span id="elecost"></span></div>
            </div>
        </div>
    </div>

    <div id="Water" class="tabcontent" style="height: 300px;width: 100%;text-align:center;">
        <div class="header" style="height: 140px; width: 100%">
            <div class="putimage">
                <img style="margin-top: 15px;" src="img/water.jpg">
                <h3>Water</h3>
                No. of residents
                <div id="RadioButtons6">
                    <input type="radio" name="RadioButtons6" id="Radio15">
                    <label for="Radio15">1</label>
                    <input type="radio" name="RadioButtons6" id="Radio16">
                    <label for="Radio16">2</label>
                    <input type="radio" name="RadioButtons6" id="Radio17">
                    <label for="Radio17">3</label>
                </div>
                Dishwasher:
                <div id="RadioButtons11">
                    <input type="radio" name="RadioButtons11" id="Radio26" value="1">
                    <label for="Radio26">Yes</label>
                    <input type="radio" name="RadioButtons11" id="Radio27" value="0">
                    <label for="Radio27">No</label>
                </div>
                <div class="frequency">
                    Frequency(no. of times per week):
                    <select id="frequency" name="frequency">
                        <option checked="checked" value="default">Please select</option>
                        <option value="0">1</option>
                        <option value="1">2</option>
                        <option value="2">3</option>
                        <option value="3">4</option>
                        <option value="4">5</option>
                        <option value="5">6</option>
                        <option value="6">7</option>
                    </select>
                </div>
                Washing Machine:
                <div id="RadioButtons12">
                    <input type="radio" name="RadioButtons12" id="Radio28" value="1">
                    <label for="Radio28">Yes</label>
                    <input type="radio" name="RadioButtons12" id="Radio29" value="0">
                    <label for="Radio29">No</label>
                </div>
                <div class="frequency">
                    Frequency(no. of times per week):
                    <select id="frequency" name="frequency">
                        <option checked="checked" value="default">Please select</option>
                        <option value="0">1</option>
                        <option value="1">2</option>
                        <option value="2">3</option>
                        <option value="3">4</option>
                        <option value="4">5</option>
                        <option value="5">6</option>
                        <option value="6">7</option>
                    </select>
                </div>
                Evaporative Cooler:
                <div id="RadioButtons13">
                    <input type="radio" name="RadioButtons13" id="Radio30" value="1">
                    <label for="Radio30">Yes</label>
                    <input type="radio" name="RadioButtons13" id="Radio31" value="0">
                    <label for="Radio31">No</label>
                </div>
                No. of hours a day:
                <select id="frequency" name="frequency">
                    <option checked="checked" value="default">Please select</option>
                    <option value="0">1</option>
                    <option value="1">2</option>
                    <option value="2">3</option>
                    <option value="3">4</option>
                    <option value="4">5</option>
                    <option value="5">6</option>
                    <option value="6">7</option>
                </select>
            </div>
        </div>
    </div>
    <script>
        function openEvent(evt, Name) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(Name).style.display = "block";
            evt.currentTarget.className += " active";
        }
        $(function() {
            $( "#RadioButtons1" ).buttonset();
        });
        $(function() {
            $( "#RadioButtons2" ).buttonset();
        });
        $(function() {
            $( "#Button1" ).button();
        });
        $(function() {
            $( "#Button2" ).button();
        });
        $(function() {
            $( "#Button3" ).button();
        });
        $(function() {
            $( "#RadioButtons3" ).buttonset();
        });
        $(function() {
            $( "#RadioButtons4" ).buttonset();
        });
        $(function() {
            $( "#RadioButtons5" ).buttonset();
        });
        $(function() {
            $( "#RadioButtons6" ).buttonset();
        });

        function eleccal(){

            var eh = document.querySelector('input[name=RadioButtons7]:checked').value;
            var ac = document.querySelector('input[name=RadioButtons8]:checked').value;
            var uh = document.querySelector('input[name=RadioButtons9]:checked').value;
            var ewh = document.querySelector('input[name=RadioButtons10]:checked').value;
            var finalelec = parseInt(eh) + parseInt(ac) + parseInt(uh) + parseInt(ewh);
            if (finalelec == 4) {
                var highcost = 335;
                document.getElementById("elecost").innerHTML = 'is high and it the average monthly bill would be $'+highcost;
            }
            else if (finalelec == 2 || finalelec == 3) {
                var mediumcost = 205;
                document.getElementById("elecost").innerHTML = 'is medium and it the average monthly bill would be $'+mediumcost;
            }
            else {
                var lowcost = 80;
                document.getElementById("elecost").innerHTML = 'is low and it the average monthly bill would be $'+lowcost;
            }
        }

        function phonecost(){

            var datacost = document.querySelector('input[name=RadioButtons1]:checked').value;
            var intercal = document.querySelector('input[name=RadioButtons2]:checked').value;
            //var phonetotalbill = parseInt(datacost) + parseInt(intercal);
            //document.getElementById("billval").innerHTML = phonetotalbill+'$';
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("billval").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET","phonedb.php?q=" +datacost + "&r=" +intercal, true);

            xmlhttp.send();
        }
        function intbill() {
            var internet = document.querySelector('input[name=RadioButtons3]:checked').value;
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp = new XMLHttpRequest();
            }
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("intbillval").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET","internetdb.php?q=" +internet, true);

            xmlhttp.send();

        }

        $(function() {
            $( "#RadioButtons7" ).buttonset();
        });
        $(function() {
            $( "#RadioButtons8" ).buttonset();
        });
        $(function() {
            $( "#RadioButtons9" ).buttonset();
        });
        $(function() {
            $( "#RadioButtons10" ).buttonset();
        });
        $(function() {
            $( "#RadioButtons11" ).buttonset();
        });
        $(function() {
            $( "#RadioButtons12" ).buttonset();
        });
        $(function() {
            $( "#RadioButtons13" ).buttonset();
        });
    </script>

</body>
</html>