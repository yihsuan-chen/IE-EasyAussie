<?php 

  $lat = array();
  $lng = array();
  require('config/db.php');

  // $queryPlace = "SELECT * FROM livingcost;";
  // $results = mysqli_query($conn, $queryPlace);


  // while($row = mysqli_fetch_assoc($results)){
  //   $lat[] = $row['lat'];
  //   $lng[] = $row['lon'];
  //   $content[] = $row['Suburb'];
  //   $region[] = $row['Region'];
  //   $post[] = $row['postcode'];
  // }

  $queryPlace = "SELECT * FROM maptest;";
  $mapResult = mysqli_query($conn, $queryPlace);


  while($row = mysqli_fetch_assoc($mapResult)){
    $lat[] = $row['lat'];
    $lng[] = $row['lon'];
    $content[] = $row['Suburb'];
    $region[] = $row['Region'];
    //$post[] = $row['postcode'];
    $website[] = $row['website'];
    $cost[] = $row['Average_per_person'];
  }
 ?>


<!DOCTYPE html>
<html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- test -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" src="href/logo.ico">
    <title>First Steps in Melbourne - International Students Guide to Melbourne</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <style type="text/css">
      *{
        font-family:'Humanist521BT-Roman';
      }
      ul li{
        font-size:16px;
      }
      #navbar ul li a{
        color: black;
      }
      #navbar ul li a:hover{
          color: gray;
    </style>
    <script src="assets/js/ie-emulation-modes-warning.js"></script>
    <script>
        // map
    // function initMap() {
    //   var Melbourne = {lat: -37.815018, lng: 144.946014};
    //   var map = new google.maps.Map(
    //       document.getElementById('map'), {zoom: 12, center: Melbourne});
    //   var marker = new google.maps.Marker({position: Melbourne, map: map});
    // }

    var lat = [], lng = [], reg = [], post = [], content = [], website = [], cost = [];

    <?php foreach ($lat as $la): ?>
      lat.push(<?php echo $la; ?>);
    <?php endforeach ?>
    <?php foreach ($lng as $ln): ?>
      lng.push(<?php echo $ln; ?>);
    <?php endforeach ?>
    <?php foreach ($content as $co): ?>
      content.push("<?php echo $co; ?>");
    <?php endforeach ?>
    <?php foreach ($region as $re): ?>
      reg.push("<?php echo $re ?>");
    <?php endforeach ?>
    //测试
    <?php foreach ($website as $we): ?>
      website.push("<?php echo $we ?>");
      // console.log(website);
    <?php endforeach ?>
    <?php foreach ($cost as $co): ?>
      cost.push("<?php echo $co ?>");
    <?php endforeach ?>
    function initMap(){
      // Map options
      var options = {
        zoom:12,
        center:{lat:-37.815018,lng:144.946014}
      }

      var map = new google.maps.Map(document.getElementById('map'), options);

      // 
      // google.maps.event.addListener(map, 'click', function(event){
      //   // Add marker
      //   addMarker({coords:event.latLng});
      // });

      // Array of markers

      var markers = [];
        {
          for (var i = 0; i < lat.length; i++) {
            markers.push(
                {
                  coords:{lat:lat[i],lng:lng[i]},
                  content:"<h5 style='text-align:center;'>" + content[i] + '</h5>' +  'Region: ' + reg[i] +  '<br>' + 'Average Rent: ' + cost[i] + '<br>' + "<a target='_blank' href= '"+website[i]+"'>" + 'View suburb detail on googleMap' + "</a>",
                  iconImage:'img/school4.png'
                }
              );
          }
        }
        //'http://maps.google.com/mapfiles/kml/pal3/icon31.png'
        // Array of Schools
      var schools = [
        {
          coords:{lat:-37.8770427,lng:145.0427296},
          iconImage:'img/cap1.png',
          content:'<h5>Monash university Caulfield campus</h5>' + "<a target='_blank' href='https://www.monash.edu/'>" + 'More Details' + '</a>'
        },
        {
          coords:{lat:-37.9105195,lng:145.1340295},
          iconImage:'img/cap1.png',
          content:'<h5>Monash university Clayton campus</h5>'+ "<a target='_blank' href='https://www.monash.edu/'>" + 'More Details' + '</a>'
        },
        {
          coords:{lat:-38.0929346,lng:144.5818199},
          iconImage:'img/cap1.png',
          content:'<h5>Monash university Peninsula campus</h5>'+ "<a target='_blank' href='https://www.monash.edu/'>" + 'More Details' + '</a>'
        },
        {
          coords:{lat:-37.7839826,lng:144.956559},
          iconImage:'img/cap1.png',
          content:'<h5>Monash university Parkville campus</h5>'+ "<a target='_blank' href='https://www.monash.edu/'>" + 'More Details' + '</a>'
        },
        {
          coords:{lat:-38.0400985,lng:145.3374053},
          iconImage:'img/cap1.png',
          content:'<h5>Monash university Berwick campus</h5>'+ "<a target='_blank' href='https://www.monash.edu/'>" + 'More Details' + '</a>'
        },
        {
          coords:{lat:-37.7963646,lng:144.9589851},
          iconImage:'img/cap1.png',
          content:'<h5>University of Melbourne Parkville campus</h5>'+ "<a target='_blank' href='https://www.unimelb.edu.au/'>" + 'More Details' + '</a>'
        },
        {
          coords:{lat:-37.8291306,lng:145.0200142},
          iconImage:'img/cap1.png',
          content:'<h5>University of Melbourne Burnley campus</h5>'+ "<a target='_blank' href='https://www.unimelb.edu.au/'>" + 'More Details' + '</a>'
        },
        {
          coords:{lat:-37.8241568,lng:144.967967},
          iconImage:'img/cap1.png',
          content:'<h5>University of Melbourne Southbank campus</h5>'+ "<a target='_blank' href='https://www.unimelb.edu.au/'>" + 'More Details' + '</a>'
        },
        {
          coords:{lat:-37.888191,lng:144.6907359},
          iconImage:'img/cap1.png',
          content:'<h5>University of Melbourne Werribee campus</h5>'+ "<a target='_blank' href='https://www.rmit.edu.au/'>" + 'More Details' + '</a>'
        },
        {
          coords:{lat:-37.8499904,lng:144.7171033},
          iconImage:'img/cap1.png',
          content:'<h5>RMIT City campus</h5>'+ "<a target='_blank' href='https://www.rmit.edu.au/'>" + 'More Details' + '</a>'
        },
        {
          coords:{lat:-37.7718346,lng:144.9557433},
          iconImage:'img/cap1.png',
          content:'<h5>RMIT Brunswick campus</h5>'+ "<a target='_blank' href='https://www.rmit.edu.au/'>" + 'More Details' + '</a>'
        },
        {
          coords:{lat:-37.6785406,lng:145.0661148},
          iconImage:'img/cap1.png',
          content:'<h5>RMIT Bundoora campus</h5>'+ "<a target='_blank' href='https://www.rmit.edu.au/'>" + 'More Details' + '</a>'
        },
        {
          coords:{lat:-37.8221461,lng:145.0367659},
          iconImage:'img/cap1.png',
          content:'<h5>Swinburne University of Technology Hawthorn campus</h5>'+ "<a target='_blank' href='https://www.swinburne.edu.au/'>" + 'More Details' + '</a>'
        },
        {
          coords:{lat:-37.801902,lng:145.2834803},
          iconImage:'img/cap1.png',
          content:'<h5>Swinburne University of Technology Croydon campus</h5>'+ "<a target='_blank' href='https://www.swinburne.edu.au/'>" + 'More Details' + '</a>'
        },
        {
          coords:{lat:-37.8735422,lng:145.2330874},
          iconImage:'img/cap1.png',
          content:'<h5>Swinburne University of Technology Wantirna campus</h5>'+ "<a target='_blank' href='https://www.swinburne.edu.au/'>" + 'More Details' + '</a>'
        },
        {
          coords:{lat:-37.8057709,lng:145.0346205},
          iconImage:'img/cap1.png',
          content:'<h5>University of Divinity</h5>'+ "<a target='_blank' href='https://divinity.edu.au/'>" + 'More Details' + '</a>'
        },
        {
          coords:{lat:-37.8180796,lng:144.961857},
          iconImage:'img/cap1.png',
          content:'<h5>Victoria University City Flinders Campus</h5>'+ "<a target='_blank' href='https://www.vu.edu.au/'>" + 'More Details' + '</a>'
        },
        {
          coords:{lat:-37.8048565,lng:144.8962084},
          iconImage:'img/cap1.png',
          content:'<h5>Victoria University Footscray Nicholson Campus</h5>'+ "<a target='_blank' href='https://www.vu.edu.au/'>" + 'More Details' + '</a>'
        },
        {
          coords:{lat:-37.8895715,lng:144.6980071},
          iconImage:'img/cap1.png',
          content:'<h5>Victoria University Werribee Campus</h5>'+ "<a target='_blank' href='https://www.vu.edu.au/'>" + 'More Details' + '</a>'
        },
        {
          coords:{lat:-37.7768426,lng:144.8333154},
          iconImage:'img/cap1.png',
          content:'<h5>Victoria University Sunshine Campus</h5>'+ "<a target='_blank' href='https://www.vu.edu.au/'>" + 'More Details' + '</a>'
        },
        {
          coords:{lat:-37.8468742,lng:145.1125844},
          iconImage:'img/cap1.png',
          content:'<h5>Deakin University Burwood Campus</h5>'+ "<a target='_blank' href='https://www.deakin.edu.au/'>" + 'More Details' + '</a>'
        }
      ];

      for(var i = 0;i < schools.length;i++){
        addMarker(schools[i]);
      }

      for(var i = 0;i < markers.length;i++){
        addMarker(markers[i]);
      }

      // Add Marker Function
      function addMarker(props){
        var marker = new google.maps.Marker({
          position:props.coords,
          map:map,
          //icon:props.iconImage
        });

        if(props.iconImage){
          // Set icon image
          marker.setIcon(props.iconImage);
        }

        // Check content
        if(props.content){
          var infoWindow = new google.maps.InfoWindow({
            content:props.content
          });

          marker.addListener('click', function(){
            infoWindow.open(map, marker);
          });
          // marker.addListener('mouseout', function(){
          //   infoWindow.close(map, marker);
          // });
        }
      }
    }

    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBP-O19kkdm7neiuZWGbcf_M0wZ30zM3Tw&callback=initMap">
    </script>
    <link href="css/carousel.css" rel="stylesheet">

</head>
<!--nav-->

<body>
    <div class="navbar-wrapper" style="position: fixed;">
        <div class="container-fluid">
            <nav class="navbar navbar-inverse navbar-static-top" style="background-color: white; color: white; border: 0.5px solid white;">
                <div class="container">
                    <div class="navbar-header" style="height: 52px;">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="background-color: black;">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!-- <a class="navbar-brand active" href="http://www.firststepsinmel.ml/" ><img src="img/logoBtn.png" style="width:50%;margin-top: -16px;"></a>
                        <span style="line-height: 52px;border:1px solid white; font-size: 20px;">First Steps in Melbourne</span> -->
                        <a class="navbar-brand active" href="http://www.firststepsinmel.ml/" ><img src="img/webLogo3.png" style="display: inline; height: 52px; margin-top: -15px;">
                         <span class="hidden-sm-down hidden-xs" style="font-family: 'Arial Black';font-size: 24px;color:black; margin-left: 10px;">First Steps in Melbourne</span></a>
                    </div>
                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav" style="margin-left:100px;">
                            <li><a href="http://www.firststepsinmel.ml/">Home</a></li>
                            <li><a href="introduction.php">Living Cost Calculator</a></li>
                            <li><a href="http://www.firststepsinmel.ml:3838/easyaussie/recommendation/">Student Support</a></li>
                            <li><a href="comparsion.html">Compare with Shanghai</a></li>
                      <!--       <li><a href="#pred">Prediction</a></li>
                            <li><a href="#about">About us</a></li> -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="display: none;"><span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="introduction.php">Living Cost Calculator</a></li>
                                    <li><a href="http://www.firststepsinmel.ml:3838/easyaussie/recommendation/">Student Support</a></li>
                                    <li><a href="comparsion.html">Compare with Shanghai</a></li>
                        <!--             <li><a href="#">Prediction</a></li>
                                    <li><a href="#">About us</a></li> -->
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <br>
    <br>
    <br>
    <div style="height: 13px;"></div>
    <!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img class="first-slide" src="img/CBD2.jpg" alt="First slide" style="background-color: #000;opacity: 0.9;">
                <div class="container">
                    <div class="carousel-caption">
                        <h1 style="font-size:46px; font-weight: bolder;">Living Cost in Melbourne</h1>
                        <p style="font-size: 17px;">Complete our online living cost calculator and get a clear picture of your expenses when you study in Melbourne. With selecting the input like university, living location, transportation preference and diet habits, you will see straight away what you are paying every week in total and each part.</p>
                        <p><a class="btn btn-lg btn-primary" href="introduction.php" role="button">Living Cost Calculator</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="second-slide" src="img/5.png" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1 style="font-size:46px; font-weight: bolder;">Need student support to make a change?</h1>
                        <p style="font-size: 17px;">We provide information for helping you find a suitable suburb based on distance to your campus, rent cost, convenient level, and food service level.</p>
                        <p><a class="btn btn-lg btn-primary" href="http://www.firststepsinmel.ml:3838/easyaussie/recommendation/" role="button">Student Support</a></p>
                    </div>
                </div>
            </div>
            <div class="item">
                <img class="third-slide" src="img/6.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1 style="font-size:46px; font-weight: bolder;">Living in Melbourne and Shanghai</h1>
                        <p style="font-size: 17px;">Melbourne and Shanghai have different living cost in each aspect. You can find out more comparisons in price index between Melbourne and Shanghai. </p>
                        <p><a class="btn btn-lg btn-primary" href="comparsion.html" role="button">Start Compare Now</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div><!-- /.carousel -->
    <!-- Video -->
    <div class="iframe" style="overflow: hidden;">
          <div class="video col-lg-7 col-md-7" style="width: 700px;">
            <iframe width="640" height="340" src="https://www.youtube.com/embed/6Gw70FIB2Ss" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen >
            </iframe>
          </div>
          <div class="introVedio col-lg-5 col-md-5" style="text-align: left;" >
            <h1 style="font-weight: bolder; font-size: 55px; color: rgb(51,122,183);font-family: 'poppins'">Melbourne</h1>
            <br>
            <span style="font-size: 20px;">
            Melbourne has been voted the world is most livable city for six years in a row, and it is not hard to see why. It is a very cool city with a fantastic quality of life. The locals share many passions, with a particular focus on coffee, sport, music, the arts and food.
            Melbourne is a city of many cultures and backgrounds and is accepting and inclusive of all.
            </span>
          </div>
    </div>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;Source from: https://liveinmelbourne.vic.gov.au/</p>

    <hr class="featurette-divider" width="1150px" style="margin:auto;">
    <br>
    <br>
    <br>
    <br>

    <div class="container marketing">
        <div class="row">
          <!--class="img-circle"-->
            <div class="col-lg-4">
                <a href="introduction.php"><img src="img/calculator1.png" alt="Generic placeholder image" width="140" height="140" style="width: 80px;height: 80px;"></a>
                <h2>Living Cost Calculator</h2>
                <p>Have a brief idea about the average cost based on your cost situation from rental cost, daily consumption to transportation. Note that the outcome may vary by different cost level, here we consider about the most common group with median level cost.</p>
                <p><a class="btn btn-default" href="introduction.php" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <a href="http://www.firststepsinmel.ml:3838/easyaussie/recommendation/"><img src="img/bulb2.png" alt="Generic placeholder image" width="140" height="140" style="width: 80px;height: 80px;"></a>
                <h2>Student Support</h2>
                <p>Looking for some place to live with great convenient or close to your university? With a personalized recommendation system, you can find some suggestions based on your own spending habits.</p>
                <br>
                <p><a class="btn btn-default" href="http://www.firststepsinmel.ml:3838/easyaussie/recommendation/" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <a href="comparison.html"><img src="img/tianping3.png" alt="Generic placeholder image" width="140" height="140" style="width: 80px;height: 80px;"></a>
                <h2>Compare with Shanghai</h2>
                <p>For comparing the cost of living in Shanghai to Melbourne, it will show the different percentage and cost. It will be considered about cloth, food, leisure, transport and utilities. </p>
                <br>
                <br>
                <p><a class="btn btn-default" href="comparsion.html" role="button">View details &raquo;</a></p>
            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
        <!-- START THE FEATURETTES -->
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-6" style="margin-top: -120px;">
                <h2 class="featurette-heading" style="font-size: 55px; color: rgb(51,122,183);font-family: 'poppins';font-weight: bolder;">Make Melbourne be your home</h2>
                <br>
                <p class="lead">Melbourne is one of the most livable places all over the world. People who are living in Melbourne will enjoy a safe city, world- class education, business opportunities and relaxing and healthy environment. There are some amazing discover that Melbourne has to offer you.</p>
            </div>
            <div class="col-md-6">
                <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image" src="img/CBD1.jpg" style="width: 500px;height: 300px; border-radius: 20px;">
            </div>
        </div>
       <hr class="featurette-divider" style="height: 5px;"> 
        <div class="row featurette">
            <div class="col-md-7 col-md-push-5" style="margin-top: -30px; margin-top: -120px;">
                <h2 class="featurette-heading" style="font-size: 55px; color: rgb(51,122,183);font-family: 'poppins';font-weight: bolder;">Discover Melbourne lifestyle</h2>
                <br>
                <p class="lead">Discover the new Melbourne life in the southern hemisphere. You will easily find it to indulge in this premium and new lifestyle Melbourne has to provide. As an international student, you can enjoy an easy transition into your new life in Melbourne. Discover more and you will like this new Melbourne lifestyle.</p>
            </div>
            <div class="col-md-5 col-md-pull-7" >
                <img class="featurette-image img-responsive center-block" data-src="holder.js/500x500/auto" alt="Generic placeholder image" src="img/run.jpg" style="width: 500px; border-radius: 20px;">
            </div>
        </div>
        <hr class="featurette-divider-map">
        <h1>The overview of Melbourne</h1>
        <div class="col-md-12 col-lg-12" id="map" style="width: 100%;height: 300px;">
        </div>
        <br>
        <hr class="featurette-divider">
        <!-- FOOTER -->
        <footer class="col-md-12 col-lg-12 col-xs-12 col-sm-12" style="height: 50px; width:100%;">
            <p class="pull-right" style="line-height: 50px;"><a href="#">Back to top</a></p>
            <p style="line-height: 50px;">&copy;2019 by 'First steps in Melbourne'. Proudly created with EasyAussie team. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
        </footer>
    </div>
        <script src="https://cdn.bootcss.com/jquery/1.12.4/jquery.min.js"></script>
        <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
        </script>
        <script src="https://cdn.bootcss.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
        <script src="assets/js/vendor/holder.min.js"></script>
        <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
        <script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>

</html>
<!--

      var infoWindow = new google.maps.InfoWindow({
        content: '<h3>11<h3>'
      });

      marker.addListener('click', function(){
        infoWindow.open(map, marker);
      })

-->