<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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
          z-index: 999;
    }
    </style>
</head>

<body>
     <a href='sendgrid-php/feedback.php'><button type="button" id="btn" class="" data-button-for="2a8f783514fa91e03666bbb8c444ac4a0b967074" title="Feedback" tabindex="0" style="opacity: 1; visibility: visible;" onmousemove="btnAction()" onmouseout="btnOut()"><i class="mopicon mopicon-commenting-o " icon="fa-commenting-o"><svg viewBox="0 0 28 28"><path d="M10 14c0 1.109-0.891 2-2 2s-2-0.891-2-2 0.891-2 2-2 2 0.891 2 2zM16 14c0 1.109-0.891 2-2 2s-2-0.891-2-2 0.891-2 2-2 2 0.891 2 2zM22 14c0 1.109-0.891 2-2 2s-2-0.891-2-2 0.891-2 2-2 2 0.891 2 2zM14 6c-6.5 0-12 3.656-12 8 0 2.328 1.563 4.547 4.266 6.078l1.359 0.781-0.422 1.5c-0.297 1.109-0.688 1.969-1.094 2.688 1.578-0.656 3.016-1.547 4.297-2.672l0.672-0.594 0.891 0.094c0.672 0.078 1.359 0.125 2.031 0.125 6.5 0 12-3.656 12-8s-5.5-8-12-8zM28 14c0 5.531-6.266 10-14 10-0.766 0-1.531-0.047-2.266-0.125-2.047 1.813-4.484 3.094-7.187 3.781-0.562 0.156-1.172 0.266-1.781 0.344h-0.078c-0.313 0-0.594-0.25-0.672-0.594v-0.016c-0.078-0.391 0.187-0.625 0.422-0.906 0.984-1.109 2.109-2.047 2.844-4.656-3.219-1.828-5.281-4.656-5.281-7.828 0-5.516 6.266-10 14-10v0c7.734 0 14 4.484 14 10z" fill="currentColor"></path></svg></i><span style="writing-mode: vertical-lr; transform: rotate(-180deg);">Feedback</span></button></a>
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
                                    <li><a href="Bills.html">Other expenses</a></li>
                                  </ul>
                                </li>

                            <!-- <li><a href="http://www.firststepsinmel.ml:3838/easyaussie/recommendation/">Student Support</a></li> -->
                            <li class="dropdown" id="subSupDrag" onclick="calculatorDrag()">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: black;" id="stuSup"><span class="caret"></span>&nbsp;&nbsp;Student Support</a>
                                <ul class="dropdown-menu">
                                    <li><a href="http://www.firststepsinmel.ml:3838/easyaussie/find_a_suburb/">Find a Suburb</a></li>
                                    <li><a href="TipsList.html">Guidance</a></li>
                                  </ul>
                                </li>
                            <li><a href="comparison.html">Compare with Shanghai</a></li>
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
                                    <li><a href="http://www.firststepsinmel.ml:3838/easyaussie/find_a_suburb/">Student Support</a></li>
                                    <li><a href="comparison.html">Compare with Shanghai</a></li>
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
    <div class='tableauPlaceholder' id='viz1557647320318' style='position: relative;margin-top: 40px; margin: auto; top:60px;'><noscript>< a href=' '>< img alt=' ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;co&#47;costprediction&#47;fin_story&#47;1_rss.png' style='border: none' /></ a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='costprediction&#47;fin_story' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;co&#47;costprediction&#47;fin_story&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='filter' value='publish=yes' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1557647320318');                    var vizElement = divElement.getElementsByTagName('object')[0];                    vizElement.style.width='1016px';vizElement.style.height='991px';                    var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>

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