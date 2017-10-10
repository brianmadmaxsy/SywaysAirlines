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
  <div class="jumbotron" style="height:800px; background-image: url(images/bg_img.jpg); background-size: 100% auto; background-repeat: repeat-y; margin: 10px auto auto auto;">
  <div class="col-md-3">&nbsp;</div>
  <div class="col-md-6 chooseflightflight" style="background-color:rgba(10,10,10,0.7); height:650px; padding:10px; margin: 20px 0px 0px 0px;">
      <font color="white"><h3>Payment Process</h3></font>
      <div id="exTab1" class="container"> 
          <ul  class="nav nav-pills">
            <li class="active">
              <a  href="#1a" data-toggle="tab">Credit Card</a>
            </li>
            <li><a href="#2a" data-toggle="tab">Payment Centers</a>
            </li>
            
          </ul>

            <div class="tab-content clearfix" style="height:520px; padding:20px;">
              <div class="tab-pane active" id="1a"><!--Round Trip content-->
                <form method="post" action="php/getpayment.php">
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4" class="col-form-label">First Name</label>
                      <input type="text" name="firstname" class="form-control" id="inputEmail4" placeholder="ex. John">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4" class="col-form-label">Last Name</label>
                      <input type="text" name="lastname" class="form-control" id="inputPassword4" placeholder="ex. Doe">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputCity" class="col-form-label">Type</label>
                      <input type="text" name="type" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputCity" class="col-form-label">Issuing Bank</label>
                      <input type="text" name="bank" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState" class="col-form-label">Bank Location</label>
                      <input type="text" name="banklocation" class="form-control" id="inputState">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputCity" class="col-form-label">Card Number</label>
                      <input type="text" name="cardnumber" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputCity" class="col-form-label">Validation Number</label>
                      <input type="text" name="validationnumber" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState" class="col-form-label">Expiry Date</label>
                      <input type="text" name="expirydate" class="form-control" id="inputState">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAddress" class="col-form-label">Home Address</label>
                    <input type="text" name="home" class="form-control" id="inputAddress" placeholder="1234 Main St">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress" class="col-form-label">Provincial Address</label>
                    <input type="text" name="province" class="form-control" id="inputAddress" placeholder="1234 Main St">
                  </div>
                  
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputCity" class="col-form-label">Nationality</label>
                      <input type="text" name="nationality" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputCity" class="col-form-label">Email Address</label>
                      <input type="text" name="email" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState" class="col-form-label">Contact Number</label>
                      <input type="text" name="contactnumber" class="form-control" id="inputState">
                    </div>
                  </div>
                  <div class="form-row">
                    <div class="form-group col-md-4">&nbsp;</div>
                    <div class="form-group col-md-4"><input type="submit" name="paymentbutton" value="Submit Payment" class="btn btn-success"></div>
                    <div class="form-group col-md-4">&nbsp;</div>
                  </div>
                </form>  
              </div>
              <div class="tab-pane" id="2a"><!--One Way content-->
                  
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
    
  </div><!--End of div class="col-md-6"-->  
  <div class="col-md-3">&nbsp;</div>  
      
    
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








