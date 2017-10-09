<?php
session_start();
?>
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
  <div class="jumbotron" style="height:750px; background-image: url(images/bg_img.jpg); background-size: 100% auto; background-repeat: repeat-y; margin: 10px auto auto auto;">
  <div class="col-md-3">&nbsp;</div>
  <div class="col-md-6 chooseflightflight" style="background-color:rgba(10,10,10,0.7); padding:10px; margin: 20px 0px 0px 0px;">
    <font color="white"><h3>Enter Passenger Details</h3></font>
    <form method="post" action="php/savepassengerdetails.php">
    <div id="exTab1" class="container"> 
        <ul  class="nav nav-pills">
          <?php
          $counter=0;
          while($counter < $_SESSION['numofpassengers'])
          {
            $counter+=1;
          ?>
            <li <?php if($counter==1){ ?> class="active" <?php } ?>>
              <a  href="<?php echo "#".$counter."a" ?>" data-toggle="tab">Passenger <?php echo $counter; ?></a>
            </li>
          <?php
          }
          ?>
          
        </ul>

          <div class="tab-content clearfix" style="height:auto;">
            <?php
            
            for($count=1;$count<=$_SESSION['numofpassengers'];$count++)
            {
              
            ?>
              <div <?php if($count==1){ ?> class="tab-pane active" <?php } else{ ?> class="tab-pane" <?php } ?> id="<?php echo $count."a" ?>" style="padding:10px;"><!--Round Trip content-->
                  
                  <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="inputEmail4" class="col-form-label">First Name</label>
                      <input type="text" name="<?php echo "firstname".$count; ?>" class="form-control" id="inputEmail4" placeholder="ex. John">
                    </div>
                    <div class="form-group col-md-6">
                      <label for="inputPassword4" class="col-form-label">Last Name</label>
                      <input type="text" name="<?php echo "lastname".$count; ?>" class="form-control" id="inputPassword4" placeholder="ex. Doe">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputAddress" class="col-form-label">Date Of Birth</label>
                    <select name="<?php echo "month".$count; ?>">
                      <option selected="">MONTH</option>
                      <option>JANUARY</option>
                      <option>FEBRUARY</option>
                      <option>MARCH</option>
                      <option>APRIL</option>
                      <option>MAY</option>
                      <option>JUN</option>
                      <option>JULY</option>
                      <option>AUGUST</option>
                      <option>SEPTEMBER</option>
                      <option>OCTOBER</option>
                      <option>NOVEMBER</option>
                      <option>DECEMBER</option>
                    </select>
                    <select name="<?php echo "day".$count; ?>">
                      <option selected="">DAY</option>
                      <option>01</option>
                      <option>02</option>
                      <option>03</option>
                      <option>04</option>
                      <option>05</option>
                      <option>06</option>
                      <option>07</option>
                      <option>08</option>
                      <option>09</option>
                      <option>10</option>
                      <option>11</option>
                      <option>12</option>
                      <option>13</option>
                      <option>14</option>
                      <option>15</option>
                      <option>16</option>
                      <option>17</option>
                      <option>18</option>
                      <option>19</option>
                      <option>20</option>
                      <option>21</option>
                      <option>22</option>
                      <option>23</option>
                      <option>24</option>
                      <option>25</option>
                      <option>26</option>
                      <option>27</option>
                      <option>28</option>
                      <option>29</option>
                      <option>30</option>
                      <option>31</option>
                    </select>
                    <input type="text" name="<?php echo "year".$count; ?>" placeholder="ex. 1990">
                  </div>
                  <div class="form-group">
                    <label for="inputAddress" class="col-form-label">Address</label>
                    <input type="text" name="<?php echo "address".$count; ?>" class="form-control" id="inputAddress" placeholder="1234 Main St">
                  </div>
                  
                  <div class="form-row">
                    <div class="form-group col-md-4">
                      <label for="inputCity" class="col-form-label">Nationality</label>
                      <input type="text" name="<?php echo "nationality".$count; ?>" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputCity" class="col-form-label">Email Address</label>
                      <input type="email" name="<?php echo "email".$count; ?>" class="form-control" id="inputCity">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="inputState" class="col-form-label">Contact Number</label>
                      <input type="text" name="<?php echo "contact".$count; ?>" class="form-control" id="inputState">
                    </div>
                    
                  </div>
                  
                  <div class="form-group">
                    <label for="inputState" class="col-form-label">Avail Baggage</label>
                    <select name="<?php echo "baggage".$count; ?>" class="form-control">
                      <option selected="" value="0kg">No Baggage</option>
                      <option value="15kg">15KG (P250)</option>
                      <option value="20kg">20KG (P300)</option>
                      <option value="25kg">25KG (P350)</option>
                      <option value="30kg">30KG (P400)</option>
                      <option value="35kg">35KG (P450)</option>
                      <option value="40kg">40KG (P500)</option>
                    </select>  
                  </div>
              </div><!--end of div class="tab-pane active" -->
            <?php
            }
            ?>
          </div><!--end of div class="tab-content clearfix" -->
          <div class="col-md-4">&nbsp;</div>
          <div class="col-md-4"><input type="submit" name="continuebutton" value="Continue Next Step" class="btn btn-info" style="margin-top:10px;"></div>
          <div class="col-md-4">&nbsp;</div>
    </div>
    </form>
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
    <!--
    <div class="container" style="background-color: white; border: 1px solid black; border-radius: 10px; margin: 50px auto auto auto; padding:10px;">
        
    </div>
    -->
  </div>  
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








