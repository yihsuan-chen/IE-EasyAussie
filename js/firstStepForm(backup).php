      var currentTab = 0; 
      showTab(currentTab); 

      function showTab(n) {
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        // x[n].style.display = "block";
        // ... and fix the Previous/Next buttons:
        if (n == 0) {
          document.getElementById("prevBtn").style.display = "none";
        } else {
          document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
          document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
          document.getElementById("nextBtn").innerHTML = "Next";
        }
        fixStepIndicator(n)
      }

      // function nextPrev(n) {
        
      //   var x = document.getElementsByClassName("tab");
        
      //   if (n == 1 && !validateForm()) return false;
      //   x[currentTab].style.display = "none";
      //   currentTab = currentTab + n;
      //   if (currentTab >= x.length) {
      //     document.getElementById("regForm").submit();
      //     return false;
      //   }
      //   showTab(currentTab);
      // }

//------------------------------------------------------
      function nextPrev(n) {
        
        var x = document.getElementsByClassName("tab");

        if (n == 1 && !validateForm()[0]) return false;
        if (n == 1 && !validateForm()[1]) return false;
        //console.log(validateForm()[0]);
        x[currentTab].style.display = "none";
        currentTab = currentTab + n;
        console.log(currentTab);
        if (currentTab >= x.length) {
          document.getElementById("regForm").submit();
          return false;
        }
        showTab(currentTab);
      }

//------------------------------------------------------
      // function validateForm() {
      //   var x, y, i, valid = true;
      //    x = document.getElementsByClassName("tab");
      //    y = x[currentTab].getElementsByTagName("input");
      //    //console.log(y);
      //   for (i = 0; i < y.length; i++) {
      //     //console.log(y[i].value);
      //     //验证 关键逻辑
      //     var na=/^[a-zA-Z ]{1,20}$/;
      //     if (!(na.test(y[i].value)) && document.getElementById('othersInput')
      //       .style.display == "block") {
      //         y[i].className += " invalid";
      //         valid = false;
      //     }
      //     //测试otherSub正则--通过
      //     // if ($(".spa4").innerHTML == '') {
      //     //   alert($(".spa4").innerHTML);
      //     //   y[i].className += " invalid";
      //     //   valid = true;
      //     // }
      //   }
      //   // 测试universiy正则--bug
      //     if ($(".universityList").val() == 'default') {
      //       valid = false;
      //       $(".spa1").text('Please select your university.');
      //     }else{
      //       valid = true;
      //       $(".spa1").text(''); 
      //     }
          
      //   if (valid) {
      //     document.getElementsByClassName("step")[currentTab].className += " finish";
      //   }
      //   return valid; 
      // }



      /*测试用*/

      function validateForm() {
        var x, y, i, valid = new Array(true,true);
         x = document.getElementsByClassName("tab");
         y = x[currentTab].getElementsByTagName("input");
         //console.log(y);
      // 测试universiy正则--已debug
          if ($(".universityList").val() != 'default') {
            valid[1] = true;
            $(".spa1").text('');
          }else{
            valid[1] = false;
            $(".spa1").text('Please select your university.');
          }

        for (i = 0; i < y.length; i++) {
          //console.log(y[i].value);
          //验证 关键逻辑
          var na=/^[a-zA-Z ]{1,20}$/;
          if (!(na.test(y[i].value)) && document.getElementById('othersInput').style.display == "block") {
              y[i].className += " invalid";
              valid[0] = false;
          }
          // if (na.test(y[i].value)) {
          //  valid[0] = true;
          // }
            
          
          //valid[0] = true;
        }
        // console.log(valid[0]);
     console.log(valid);
          
        if (valid[0] && valid[1]) {
          document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        
        if (currentTab == 3 || currentTab == 4) {
          valid[0] = true;
          console.log(valid[0]);
        }
        return valid; 
      }


      //------------------------------------------------------------------------------

      function fixStepIndicator(n) {

        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
          x[i].className = x[i].className.replace(" active", "");
        }

        x[n].className += " active";
      }

      $(document).ready(function() {
          $(".universityList").change(function(){
            if ($(this).val() != 'default') {
              $('.spa1').text('');
            }
            $("#campus").empty();
            // $("#campus").prepend("<option>please select your campus</option>");
            var campus = new Array(6);
            campus[0] = new Array("Clayton", "Caulfield");
            campus[1] = new Array("Parkville", "Burnley");
            campus[2] = new Array("CBD");
            campus[3] = new Array("Hawthorn");
            campus[4] = new Array("Kew");
            campus[5] = new Array("Footscray");
            campus[6] = new Array("Burwood");
            var uniSelect = this.value;
            $.each(campus, function(i, m) {
              if(uniSelect == i) {
                $.each(campus[i], function(i, m) {
                  var textNode = document.createTextNode(m);
                  var opEle = document.createElement("option");
                  // $(opEle).attr("value",m);
                  //var camp = document.getElementByName("campus");
                  //camp[0].value = m;
                  //$(opEle).attr("class","m");
                  $(opEle).append(textNode);
                  $(opEle).appendTo($("#campus"));
                  // return uniSelect; 
                });
              }
            });
          });
        });


       function getCampus(){
        var opEle = document.createElement("option");
             console.log($(opEle).value); 
       }


    //   function evalSlider() {
    //   var day = document.getElementById("formControlRange").value;
    //   document.getElementById("dayOutput").innerHTML = day;
    // }

    //evalSlider();