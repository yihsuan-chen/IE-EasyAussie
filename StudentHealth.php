<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Student Health - Overseas Student Health Cover (OSHC)</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="assets/js/vendor/holder.min.js"></script>
    <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
    <style type="text/css">
    .titleDiv {
        margin-top: 50px;
        text-align: left;
        margin-left: 50px;

    }

    .title {
        font-size: 4rem;
        color: #444A4E;
        font-weight: 700
    }

    .imageStu {
        width: 600px;
        margin-left: 60px;
        border-radius: 20px;
    }

    .imageDiv {}

    .main {
        text-align: left;
        margin-left: 50px;
    }

    .content_body {
        font-size: 2rem;
        font-family: MetaSerif-Book, Georgia, "Times New Roman", Times, serif;
        line-height: 1.5;
    }

    .main .content_body .subTitle {
        font-size: 2.5rem;
        font-family: MetaSerif-Book, Georgia, "Times New Roman", Times, serif;
        font-weight: bolder;
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
    ul li{
        font-size: 15px;
    }
    </style>
</head>

<body>
    <div class="navbar-wrapper" style="position: fixed; top: 12px;left: 10px;right: 10px;z-index: 99">
        <div class="container-fluid">
            <nav class="navbar navbar-inverse navbar-static-top" style="background-color: white; color: white; border: 1px solid rgb(224,227,230);margin-top: -20px;box-shadow: 4px 4px 20px lightblue;">
                <div class="container">
                    <div class="navbar-header" style="height: 62px;">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" value="click here to start" style="background-color: black; width: 40px;height: 40px; text-align: center;">
                        </button>
                        <a class="navbar-brand active" href="http://www.firststepsinmel.ml/"><img src="img/webLogo3.png" style="display: inline; height: 43px; margin-top: -10px;">
                            <span class="hidden-sm-down hidden-xs" style="font-family: 'Arial Black';font-size: 24px;color:black; height: 20px; line-height: 20px;margin-left: 10px;">First Steps in Melbourne</span></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse col-md-5" style="margin-top: 3px;">
                        <ul class="nav navbar-nav">
                            <li><a href="http://www.firststepsinmel.ml/" style="color: black">Home</a></li>
                            <li class="dropdown" id="costDrag" onclick="calculatorDrag()">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: black;" id="costFont"><span class="caret"></span>&nbsp;&nbsp;Living Cost Calculator</a>
                                <ul class="dropdown-menu">
                                    <li><a href="introduction.php">Calculator</a></li>
                                    <li><a href="Bills.html">Other expenses</a></li>
                                </ul>
                            </li>
                            <li class="dropdown" id="subSupDrag" onclick="calculatorDrag()">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: black;" id="stuSup"><span class="caret"></span>&nbsp;&nbsp;Student Support</a>
                                <ul class="dropdown-menu">
                                    <li><a href="http://www.firststepsinmel.ml:3838/easyaussie/find_a_suburb/">Find a Suburb</a></li>
                                    <li><a href="TipsList.html">Guidance</a></li>
                                </ul>
                            </li>
                            <li><a href="comparison.html" style="color: black;">Compare with Shanghai</a></li>
                            <li><a href="prediction.php" style="color: black">Prediction</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="display: none;"><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="introduction.php">Living Cost Calculator</a></li>
                                    <li><a href="http://www.firststepsinmel.ml:3838/easyaussie/find_a_suburb/">Student Support</a></li>
                                    <li><a href="comparison.html">Compare with Shanghai</a></li><li><a href="prediction.php" style="color: black">Prediction</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <div class="total container" style="width: 70%">
        <section class="titleDiv col-md-8 col-xs-12 col-lg-12" style="width: 90%">
            <span class="title">Student Health --- Overseas Student Health Cover (OSHC)</span>
            <br>
        </section>
        <section class="imageDiv">
            <img class="imageStu" src="img/shamate.png">
        </section>
        <br>
        <section class="main">
            <article class="content_body">
                <p class="article">
                    Studying in overseas is not easy to prepare, like planning budget, adapting new lifestyle and even preparing the clothing. Most students are concerned about their study and life, however, Overseas Student Health Cover (OSHC) is one of the most important steps when students plan to come to Australian.
                </p><br>
                <p class="subTitle">
                    Why OSHC Important?
                </p><br>
                <p class="article">
                    Australian medical system is a world-class medical system. The citizen of Australian can get free medical care from their own social welfare, however, for students, even a short medical appointment will spend over $70 and a hospital stay will be cost at least several hundreds. Therefore, OSHC is quite important for international students. If international students get sick or have an accident, ISHC can cover most of your spending, some cases even cove all the expenses.
                </p>
                <br>
                <p class="subTitle">
                    What will be covered?
                </p><br>
                <p class="article">
                    These coverage or partial payments will be covered by Standard Overseas Student Health Cover when international students:
                    <ul style="text-align: left; margin-left: -20px;">
                        <li>Making appointment with general practitioner (GP) or specialist doctor
                            Visiting the hospital for caring of doctor</li>
                        <li>radiology test and surgeons
                            Cost of prescription medication</li>
                        <li>Calling ambulance for accidents</li>
                    </ul>
                </p><br>
                <p class="subTitle">
                    Where Can Know More Health Insurance Plan?
                </p><br>
                <p class="article">
                    The Australian government recommends five main OSHC providers for Student Visa Purposes which are:
                    <ul style="text-align: left; margin-left: -20px;">
                        <li><a href="https://www.medibank.com.au">Medibank Private (https://www.medibank.com.au)</a>
                        </li>
                        <li><a href="https://www.bupa.com.au">Bupa Australia (https://www.bupa.com.au)</a>
                        </li>
                        <li><a href="https://www.allianzassistancehealth.com.au">Allianz Global Assistance (https://www.allianzassistancehealth.com.au)</a>
                        </li>
                        <li><a href="https://www.ahm.com.au">Australian Health Management (AHM) (https://www.ahm.com.au)</a>
                        </li>
                        <li><a href="https://www.nib.com.au">nib Health Insurance (https://www.nib.com.au)</a>
                        </li>
                    </ul>
                    To comparing these OSHC providers, one useful website <a href="https://oshcaustralia.com.au">OSHC Australia</a> can help international student make right decision by comparing the policies differ in terms of features and price.
                </p><br>
            </article>
        </section>
    </div>
    <a href='sendgrid-php/feedback.php'><button type="button" id="btn" class="" data-button-for="2a8f783514fa91e03666bbb8c444ac4a0b967074" title="Feedback" tabindex="0" style="opacity: 1; visibility: visible;" onmousemove="btnAction()" onmouseout="btnOut()"><i class="mopicon mopicon-commenting-o " icon="fa-commenting-o"><svg viewBox="0 0 28 28"><path d="M10 14c0 1.109-0.891 2-2 2s-2-0.891-2-2 0.891-2 2-2 2 0.891 2 2zM16 14c0 1.109-0.891 2-2 2s-2-0.891-2-2 0.891-2 2-2 2 0.891 2 2zM22 14c0 1.109-0.891 2-2 2s-2-0.891-2-2 0.891-2 2-2 2 0.891 2 2zM14 6c-6.5 0-12 3.656-12 8 0 2.328 1.563 4.547 4.266 6.078l1.359 0.781-0.422 1.5c-0.297 1.109-0.688 1.969-1.094 2.688 1.578-0.656 3.016-1.547 4.297-2.672l0.672-0.594 0.891 0.094c0.672 0.078 1.359 0.125 2.031 0.125 6.5 0 12-3.656 12-8s-5.5-8-12-8zM28 14c0 5.531-6.266 10-14 10-0.766 0-1.531-0.047-2.266-0.125-2.047 1.813-4.484 3.094-7.187 3.781-0.562 0.156-1.172 0.266-1.781 0.344h-0.078c-0.313 0-0.594-0.25-0.672-0.594v-0.016c-0.078-0.391 0.187-0.625 0.422-0.906 0.984-1.109 2.109-2.047 2.844-4.656-3.219-1.828-5.281-4.656-5.281-7.828 0-5.516 6.266-10 14-10v0c7.734 0 14 4.484 14 10z" fill="currentColor"></path></svg></i><span style="writing-mode: vertical-lr; transform: rotate(-180deg);">Feedback</span></button></a>
</body>
<script type="text/javascript">
function calculatorDrag() {
    $("#costFont").css('background-color', "white");
    $("#stuSup").css('background-color', "white");
    $("#preSup").css('background-color', "white");
}
function btnAction(){
      $("#btn").css('right','0px');
    }
    function btnOut(){
      $("#btn").css('right','-10px');
    }
</script>

</html>