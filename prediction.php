<!DOCTYPE html>
<html lang="en">

<head>
    <!-- <meta charset="UTF-8"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <link rel="icon" src="href/logo.ico">
    <title>First Steps in Melbourne - International Students Guide to Melbourne</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
    #navbar>ul li a {
        font-size: 16px;
        color: black;
    }

    #navbar>ul li a:hover {
        color: gray;
    }
    </style>
</head>

<body>
       <div class="navbar-wrapper" style="position: fixed; top: 15px;z-index: 999;left: 10px;right: 10px;">
        <div>
            <nav class="navbar navbar-inverse navbar-static-top" style="background-color: white; color: white; border: 1px solid rgb(224,227,230);margin-top: -20px;box-shadow: 4px 4px 20px lightblue;">
                <div class="container-fluid">
                    <div class="navbar-header" style="height: 62px;">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" value="click here to start" style="background-color: black; width: 40px;height: 40px; text-align: center;">
                        </button>
                        <!-- <a class="navbar-brand active" href="http://www.firststepsinmel.ml/" ><img src="img/logoBtn.png" style="width:50%;margin-top: -16px;"></a>
                        <span style="line-height: 52px;border:1px solid white; font-size: 20px;">First Steps in Melbourne</span> -->
                        <a class="navbar-brand active" href="http://www.firststepsinmel.ml/" ><img src="img/webLogo3.png" style="display: inline; height: 43px; margin-top: -10px;">
                         <span class="hidden-sm-down hidden-xs" style="font-family: 'Arial Black';font-size: 24px;color:black; height: 20px; line-height: 20px;margin-left: 10px;">First Steps in Melbourne</span></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse col-md-5" style="margin-top: 3px;">
                        <ul class="nav navbar-nav" >
                            <li><a href="http://www.firststepsinmel.ml/">Home</a></li>
                            <!-- <li><a href="introduction.php">Living Cost Calculator</a></li> -->
                            <li class="dropdown" id="costDrag" onclick="calculatorDrag()">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: black;" id="costFont"><span class="caret"></span>&nbsp;&nbsp;Living Cost Calculator</a>
                                <ul class="dropdown-menu">
                                    <li><a href="introduction.php">Calculator</a></li>
                                    <li><a href="Bills.php">Other expenses</a></li>
                                  </ul>
                                </li>

                            <!-- <li><a href="http://www.firststepsinmel.ml:3838/easyaussie/recommendation/">Student Support</a></li> -->
                            <li class="dropdown" id="subSupDrag" onclick="calculatorDrag()">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: black;" id="stuSup"><span class="caret"></span>&nbsp;&nbsp;Student Support</a>
                                <ul class="dropdown-menu">
                                    <li><a href="https://www.firststepsinmel.ml/shiny/easyaussie/find_a_suburb/">Find a Suburb</a></li>
                                    <li><a href="TipsList.html">Guidance</a></li>
                                  </ul>
                                </li>
                            <li><a href="comparison.html">Comparison</a></li>
                            <li><a href="prediction.php">Prediction</a></li>
                           <!--  <li class="dropdown" id="preDrag" onclick="calculatorDrag()">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: black;" id="preSup"><span class="caret"></span>&nbsp;&nbsp;Prediction</a>
                                <ul class="dropdown-menu">
                                    <li><a href="prediction.php">Your future costs</a></li>
                                    <li><a href="#">article 1</a></li>
                                    <li><a href="#">article 2</a></li>
                                  </ul>
                                </li> -->
                         <!--    <li><a href="#about">About us</a></li> -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="display: none;"><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="introduction.php">Living Cost Calculator</a></li>
                                    <li><a href="https://www.firststepsinmel.ml/shiny/easyaussie/find_a_suburb/">Student Support</a></li>
                                    <li><a href="comparison.html">Comparison</a></li>
                                    <li><a href="prediction.php">Prediction</a></li>
                                    <!--<li><a href="#">About us</a></li> -->
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!--style='position: relative;margin-top: 40px; margin: auto; top:120px;'-->
    <div class='tableauPlaceholder' id='viz1558052662192' style='position: relative;margin-top: 40px; margin: auto; top:120px;'><noscript>< a href=' '>< img alt=' ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;co&#47;costprediction&#47;Story1&#47;1_rss.png' style='border: none' /></ a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='costprediction&#47;Story1' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;co&#47;costprediction&#47;Story1&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='filter' value='publish=yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1558052662192');                    var vizElement = divElement.getElementsByTagName('object')[0];                    vizElement.style.width='1016px';vizElement.style.height='991px';                    var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>

     <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
        <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
        </script>
        <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="assets/js/vendor/holder.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
        <script type="text/javascript">
          function calculatorDrag(){
              $("#costFont").css('background-color',"white");
              $("#stuSup").css('background-color',"white");
              $("#preSup").css('background-color',"white");
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