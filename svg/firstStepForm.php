<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="icon" src="href/logo.ico">
  <title>First Steps in Melbourne - Cost Of Living Calculator</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/firstStepForm.css">
  <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<!-- validation-->
<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/lib/jquery.js"></script>
<script src="http://static.runoob.com/assets/jquery-validation-1.14.0/dist/jquery.validate.min.js"></script>


  <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</head>
<body>
  <!--navigaiton -->
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="http://www.firststepsinmel.ml/">First steps in Melbourne</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a href="firstStepForm.php">Your living cost</a></li>
                <li><a href="http://www.firststepsinmel.ml:3838/easyaussie/recommendation/">Recommendation</a></li>
                <li><a href="#com">Comparision</a></li>
                <li><a href="#pred">Prediction</a></li>
                <li><a href="#about">About us</a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Quick start here <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="fisrtStepForm.html">Your living cost</a></li>
                    <li><a href="http://www.firststepsinmel.ml:3838/easyaussie/recommendation/">Recommendation</a></li>
                    <li><a href="#">Comparision</a></li>
                    <li><a href="#">Prediction</a></li>
                    <li><a href="#">About us</a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
      <!--SVG tag-->
      <div class="icon" style="position: absolute; right: 60px;">
        <img src="svg/dripicons-master/SVG/information.svg" width="32px" height="32px" class="svgIcon" title="click here for help" onclick="getHelp()" data-toggle="modal" data-target="#exampleModalCenter">
        <img src="svg/dripicons-master/SVG/cross.svg" width="32px" height="32px" class="svgIcon" title="close" onclick="getClose()">
      </div>
    </div>
    
    <!-- form -->
  <form id="regForm" name="submit" method="POST" action="firstStepResult.php" style=" position: absolute; left:0px;right: 0px; margin:50px auto; height: 400px">
    <div class="form-group form1 tab" style="height: 100px">  
      <label for="" style="font-weight: bold;font-size: 35px" >1. In which univetsity will you be studying in Melbourne?</label>
      <select class="form-control universityList" id="university" name="university" style="width: 200px;">
        <option checked="checked" value="default">Please select</option>
        <option value="0">Monash University</option>
        <option value="1">University of Melbourne</option>
        <option value="2">RMIT University</option>
        <option value="3">Swinburne University of Technology</option>
        <option value="4">University of Divinity</option>
        <option value="5">Victoria University</option>
        <option value="6">Deakin University</option>
      </select>
    </div>
    <br/>
    <span class="spa spa1"></span><!--验证学校-->
    <div class="form-group form2 tab">
      <label for="" style="font-weight: bold;font-size: 35px">2. Select you study campus</label>
      <select class="form-control custom-select" id="campus" name="campus" style="width: 200px">
      </select><span class="spa spa2"></span><br /><!--验证学院-->
    </div>
    <!-- One "tab" for each step in the form: -->
    <div class="form-group tab">
      <label for="" style="font-weight: bold;font-size: 35px" >3. Where would you like to live?</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="livingPlace" id="radio1" value="CityLiving" checked>
        <label class="form-check-label" for="exampleRadios1">
          City
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="livingPlace" id="radios" value="campusSuburb">
        <label class="form-check-label" for="exampleRadios2">
          The suburb of the campus
        </label>
      </div> 
      <div class="form-check">
        <input class="form-check-input" type="radio" name="livingPlace" id="otherCheck" value="OtherSuburb">
        <label class="form-check-label" for="exampleRadios2">
          Other suburbs
        </label>
        <br>
<!--Other suburb form--> 
    <div class="col-xs-8">
        <div class="form-group" id="othersInput"> 
          <label for="otherInput">Please enter the suburb name: </label>
          <input type="text" class="form-control" name="otherInput" id="otherInput" onkeyup="getSuggestion(this.value)" onblur="getMatching(this.value)">
          <span class="spa spa4"></span><!--验证 other suburb-->
          <p id="hint" style="font-weight: bolder;"></p>
          </div>   
        </div>     
      </div>   
    </div>   

<!--     <div class="form-group tab">
      <label for="" style="font-weight: bold;font-size: 35px" >4. Select the type of accommodation you like.</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="AccomSelect" id="radio1" value="house" checked>
        <label class="form-check-label" for="exampleRadios1">
          House
        </label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="AccomSelect" id="radios" value="apartment">
        <label class="form-check-label" for="exampleRadios2">
          Apartment
        </label>
      </div>    
    </div> -->

<!--     <div class="form-group tab">
      <label for="" style="font-weight: bold;font-size: 35px" >5. What's number of people you want to share?</label>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="customRadioInline1" name="number" value="0" class="custom-control-input" value="1"> 
        <label class="custom-control-label" for="customRadioInline1">None</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="customRadioInline2" name="number" value="1" class="custom-control-input" value="2">
        <label class="custom-control-label" for="customRadioInline2">One</label>
      </div>
      <div class="custom-control custom-radio custom-control-inline">
        <input type="radio" id="customRadioInline2" name="number" value="two" class="custom-control-input" value="2">
        <label class="custom-control-label" for="customRadioInline2">two</label>
      </div>
    </div> -->
<!--transportation-->
    <div class="form-group tab">
      <label for="" style="font-weight: bold;font-size: 30px" >4. How many times will plan to go to the university per week?</label>
       <ul>
          <li>
            <input type="radio" name="transportTimes" value="01" checked/>
            <label for="transport_public_never">one</label>
          </li>
          <li>
            <input type="radio" name="transportTimes" value="02" />
            <label for="transport_public_rarely">two</label>
          </li>
          <li>
            <input type="radio" name="transportTimes" value="03" />
            <label for="transport_public_sometimes">three</label>
          </li>
          <li>
            <input type="radio" name="transportTimes" value="04" />
            <label for="transport_public_often">four</label>
          </li>
          <li>
            <input type="radio" name="transportTimes" value="05" />
            <label for="transport_public_often">five</label>
          </li>
          <li>
            <input type="radio" name="transportTimes" value="06" />
            <label for="transport_public_often">six</label>
          </li>
          <li>
            <input type="radio" name="transportTimes" value="07" />
            <label for="transport_public_often">seven</label>
          </li>
      </ul>
      <span class="spa spa5"></span><br /><!--验证顿数-->
      <label for="" style="font-weight: bold;font-size: 30px" >5. Which way of transportation do you use?</label>
        <select class="form-control univetsityList" id="university" name="transSelect" style="width: 200px">
          <option value="onFoot/bicycle">OnFoot/bicycle</option>
          <option value="Public">Public transport</option>
          <option value="car">Car</option>
          <option value="taxi">Taxi</option>
        </select>
    </div>
    <span class="spa spa6"></span><br /><!--验证出行方式-->
    <!--Food-->
    <div class="form-group tab">
      <label for="" style="font-weight: bold;font-size: 30px" >6. How many time are you prefer to eat out per week?</label>
        <label for="formControlRange" style="font-size: 18px">Drag this slider to get the exact day.</label>
        <output id="dayOutput" style="font-size: 15px; font-weight: bolder; text-align: right;"></output>
      <input type="range" class="custom-range slider" id="formControlRange" min="0" max="14" name="eatOutside" onchange="evalSlider()">
      <br>
      <label class="form-check-label" for="exampleRadios1">
         Your preference:&nbsp;&nbsp;&nbsp;&nbsp;
      <input class="form-check-input" type="radio" name="vegan" id="exampleRadios1" value="vegan" checked="unchecked">Vegan<!-- <br> -->
      <input style="margin-left: 30px" class="form-check-input" type="radio" name="vegan" id="exampleRadios1" value="mm" checked="checked">Meat-lover
    
  </label>
      
    </div>

    <div style="overflow:auto;">
      <div style="float:right; margin-top: 20px">
        <button type="button" class="btn btn-primary btn-sm" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
        <button type="button" class="btn btn-primary btn-sm" id="nextBtn" onclick="nextPrev(1)">Next</button>
      </div>
    </div>

    <!-- Circles -->
    <div style="text-align:center;margin-top:40px;" class="stepDiv">
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
      <span class="step"></span>
<!--       <span class="step"></span>
      <span class="step"></span> -->
      <span class="step"></span>
    </div>

    <!--测试-->

</form>
  <div class="container" style="width: 100px;">
     <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h2 class="modal-title" id="exampleModalLongTitle" style="text-align:center">About this Calculator</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body" style="text-align: center; ">
            The cost of living tool is designed to help you discover how much it would cost to have the lifestyle you choose in Australia.<br><br>

            You can compare accommodation arrangements, transportation options, entertainment activities and much more.
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Not finish yet</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal" onclick = "backPage()">Back to homePage</button>
          </div>
        </div>
      </div>
    </div>
    </div>
  </body>
</body>
<script type="text/javascript" src="js/firstStepForm.js"></script>
<script type="text/javascript">
  var matchingResult;
  $(document).ready(function(){
      $(":radio[name='livingPlace']").click(function(){
      var index = $(":radio[name='livingPlace']").index($(this));
      if(index == 2){
        $('#othersInput').show();
      }else{
          $('#othersInput').hide();
      }       
    });
  })

  function getSuggestion(str){
    if (str.length == 0) {
        document.getElementById('hint').innerHTML = '';
      } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
          if(this.readyState == 4 && this.status == 200){
            $("#hint").css("color","black");
            document.getElementById('hint').innerHTML = this.responseText;
          }
        }
        xmlhttp.open("GET","suggestion.php?q="+str, true);
        xmlhttp.send();
      }
  }

  /*matching from php test*/

  function getMatching(str){
    if (str.length == 0) {
        document.getElementById('hint').innerHTML = '';
      } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function(){
          if(this.readyState == 4 && this.status == 200){
            if(this.responseText == 'nothing found please enter the right suburb name'){
              document.getElementById('hint').innerHTML = this.responseText;
              matchingResult = this.responseText;
              $("#hint").css("color","red");
            }else{
              document.getElementById('hint').innerHTML = '';
              matchingResult = this.responseText;
            }
            
          }
        }
        xmlhttp.open("GET","matching.php?m="+str, true);
        xmlhttp.send();
      }
  }


  function evalSlider() {
      var day = document.getElementById("formControlRange").value;
      document.getElementById("dayOutput").innerHTML = day + ' Times per week.';
    }

    function getHelp(){
      $('#myModal').modal('show');
    }

    function getClose(){
      $('#myModal2').modal('show');
    }

    function backPage(){
      window.open('http://www.firststepsinmel.ml/',"","",false);
    }

//验证othersuburb 失焦
    $("#otherInput").blur(function(){
      //console.log(matchingResult);
        if($(this).is("#otherInput")){             //check otherInput
          var na=/^[a-zA-Z ]{1,20}$/
          if($(this).val()!=""){
            if(!(na.test($(this).val())) ){
              $(".spa4").text("Only accept letters between 1 and 30");
              $(this).css("border","1px solid red");
              $("#hint").text("");
              return false;
            }else if(na){
              $(".spa4").text("");
              return true;
            }
          }else{
            $(".spa4").text("");
          }
        }
      });
    
//othersuburb 聚焦
  $("#otherInput").focus(function(){
    $(".spa4").text("");
          if($(this).is("#otherInput")){
            $(this).css("border","1px solid lightblue");
            $('#otherInput').attr('class','form-control');
            $('#hint').text('');
          }
        });
</script>
</html>