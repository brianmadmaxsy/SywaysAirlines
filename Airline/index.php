<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Syways Airlines</title>

  <!-- Bootstrap core CSS -->
  <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="bootstrap/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
  <script src="bootstrap/js/ie-emulation-modes-warning.js"></script>

  <link rel="stylesheet" type="text/css" href="css/bookflighttab.css">


  <!--  jQuery -->
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

<!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
<link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />

<!-- Bootstrap Date-Picker Plugin -->
<script type="text/javascript" src="bootstrap/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="bootstrap/css/bootstrap-datepicker3.css"/>
 
</head>

<body>

  <nav class="navbar navbar-inverse navbar-fixed-top" style="background-color:#045FB4; border:1px solid #045FB4;">
    <div class="container">
      <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"><font color="white">Syways Airlines</font></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        <form class="navbar-form navbar-right">
          <div class="form-group">
          <input type="text" placeholder="Username" class="form-control">
          </div>
          <div class="form-group">
          <input type="password" placeholder="Password" class="form-control">
          </div>
          <button type="submit" class="btn btn-success">Sign in</button>
          <a href="#" style="color: #40FF00;">Register Now!</a>
        </form>
      </div><!--/.navbar-collapse -->
    </div>
  </nav>

  <!-- Main jumbotron for a primary marketing message or call to action -->
  <div class="jumbotron" style="height:700px; background-image: url(images/bg_img.jpg); background-size: 100% 100%; margin: 10px auto auto auto;">
  <div class="col-md-4">&nbsp;</div>
  <div class="col-md-4 bookflight" style="background-color:rgba(10,10,10,0.7); height:580px; padding:10px; margin: 20px 0px 0px 0px;">
    <font color="white"><h3>Book A Flight Now!</h3></font>
    <div id="exTab1" class="container"> 
        <ul  class="nav nav-pills">
          <li class="active">
            <a  href="#1a" data-toggle="tab">Round Trip</a>
          </li>
          <li><a href="#2a" data-toggle="tab">One Way</a>
          </li>
          
        </ul>

          <div class="tab-content clearfix">
            <div class="tab-pane active" id="1a"><!--Round Trip content-->
                <form action="php/getbookflight.php" method="post">
                    <div class="form-group">
                      <label for="exampleInputEmail1">From</label><br/>
                      <select name="origin">
                        <option selected="" value="null">Choose Origin</option>
                        <option value="bacolod">BACOLOD</option>
                        <option value="bohol">BOHOL</option>
                        <option value="davao">DAVAO</option>
                        <option value="cebu">CEBU</option>
                        <option value="manila">MANILA</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">To</label><br/>
                      <select name="destination">
                        <option selected="">Choose Destination</option>
                        <option value="bacolod">BACOLOD</option>
                        <option value="bohol">BOHOL</option>
                        <option value="davao">DAVAO</option>
                        <option value="cebu">CEBU</option>
                        <option value="manila">MANILA</option>
                      </select>
                    </div>
                    <div class="form-group"> <!-- Date input -->
                      <label class="control-label" for="date">Departure</label>
                      <input class="form-control" id="date" name="departure" placeholder="MM/DD/YYY" type="text"/>
                    </div>
                    <div class="form-group"> <!-- Date input -->
                      <label class="control-label" for="date">Return</label>
                      <input class="form-control" id="date" name="return" placeholder="MM/DD/YYY" type="text"/>
                    </div>
                    <label for="exampleInputEmail1">Passengers</label><br/>
                    <div class="input-group spinner">
                      <input name="passengers" type="text" class="form-control" value="1" min="1" max="100">
                      <div class="input-group-btn-vertical">
                        <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                        <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                      </div>
                    </div>
                    <div class="form-group" style="margin-top: 10px;">
                      <input type="hidden" name="flighttype" value="roundtrip">
                      <input type="submit" name="bookflightbutton" class="btn btn-primary" value="FIND FLIGHTS">
                    </div>
                </form>
            </div>
            <div class="tab-pane" id="2a"><!--One Way content-->
                <form action="php/getbookflight.php" method="post">
                    <div class="form-group">
                      <label for="exampleInputEmail1">From</label><br/>
                      <select name="origin">
                        <option selected="" value="null">Choose Origin</option>
                        <option value="bacolod">BACOLOD</option>
                        <option value="bohol">BOHOL</option>
                        <option value="davao">DAVAO</option>
                        <option value="cebu">CEBU</option>
                        <option value="manila">MANILA</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputEmail1">To</label><br/>
                      <select name="destination">
                        <option selected="">Choose Destination</option>
                        <option value="bacolod">BACOLOD</option>
                        <option value="bohol">BOHOL</option>
                        <option value="davao">DAVAO</option>
                        <option value="cebu">CEBU</option>
                        <option value="manila">MANILA</option>
                      </select>
                    </div>
                    <div class="form-group"> <!-- Date input -->
                      <label class="control-label" for="date">Departure</label>
                      <input class="form-control" id="date" name="departure" placeholder="MM/DD/YYY" type="text"/>
                    </div>
                    
                    <label for="exampleInputEmail1">Passengers</label><br/>
                    <div class="input-group spinner">
                      <input name="passengers" type="text" class="form-control" value="1" min="1" max="100">
                      <div class="input-group-btn-vertical">
                        <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                        <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                      </div>
                    </div>
                    <div class="form-group" style="margin-top: 10px;">
                      <input type="hidden" name="flighttype" value="oneway">
                      <input type="submit" name="bookflightbutton" class="btn btn-primary" value="FIND FLIGHTS">
                    </div>
                </form>
            </div>
            
          </div>
    </div>
    <script src="bootstrap/jquery/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-formhelpers.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-formhelpers.min.css">
    <script src="bootstrap/js/bootstrap-formhelpers.js"></script>
    <script src="bootstrap/js/bootstrap-formhelpers.min.js"></script>
    <script src="js/datepickerfunction.js"></script>
    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="bootstrap/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap-datepicker3.css"/>
    <link rel="stylesheet" type="text/css" href="css/numberspinner.css">
    <script src="js/numberspinner.js"></script>

  </div>  
  <div class="col-md-4">&nbsp;</div>  
      
    
  </div>

  <div class="container">
  <!-- Example row of columns -->
    <div class="row">
      <div class="col-md-4">
        <h2>Best Price Guarantee</h2>
        <p>Find our lowest price to destinations worldwide, guaranteed</p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2>Easy Booking</h2>
        <p>Search, select and save - the fastest way to book your trip</p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
      </div>
      <div class="col-md-4">
        <h2>24/7 Customer Care</h2>
        <p>Get booking assistance and special deals by calling +1 800 889 9898 </p>
        <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
    </div>
  </div>

  <hr>

  <footer>
  <p>&copy; 2018 All Rights Reserved Syways Airline, Inc.</p>
  </footer>
  </div> <!-- /container -->


  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="bootstrap/jquery/1.12.4/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="bootstrap/js/vendor/jquery.min.js"><\/script>')</script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
  <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  <script src="bootstrap/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>








