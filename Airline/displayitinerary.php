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

<style type="text/css">
  .user-row {
    margin-bottom: 14px;
}

.user-row:last-child {
    margin-bottom: 0;
}

.dropdown-user {
    margin: 13px 0;
    padding: 5px;
    height: 100%;
}

.dropdown-user:hover {
    cursor: pointer;
}

.table-user-information > tbody > tr {
    border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information > tbody > tr:first-child {
    border-top: 0;
}


.table-user-information > tbody > tr > td {
    border-top: 0;
}
.toppad
{margin-top:20px;
}

</style> 
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
  <div class="jumbotron" style="height:900px; background-image: url(images/bg_img.jpg); background-size: 100% auto; background-repeat: repeat-y; margin: 10px auto auto auto;">
  <div class="col-md-2">&nbsp;</div>
  <div class="col-md-8 chooseflightflight" style="background-color:rgba(10,10,10,0.7); padding:10px; margin: 20px 0px 0px 0px;">
      <font color="white"><h3>Itinerary Receipt</h3></font>
      <div id="exTab1" class="container"> 
        <ul  class="nav nav-pills">
          <?php
          $counter=0;
          while($counter < $_SESSION['numofpassengers'])
          {
            $counter+=1;
          ?>
            <li <?php if($counter==1){ ?> class="active" <?php } ?>>
              <a  href="<?php echo "#".$counter."a" ?>" data-toggle="tab"><?php echo $_SESSION['firstname'.$counter]; ?></a>
            </li>
          <?php
          }
          ?>
          
        </ul>

          <div class="tab-content clearfix" style="height:700px; padding:20px;">
            <?php
            
            for($count=1;$count<=$_SESSION['numofpassengers'];$count++)
            {
              
            ?>
            <div <?php if($count==1){ ?> class="tab-pane active" <?php } else{ ?> class="tab-pane" <?php } ?> id="<?php echo $count."a" ?>" style="padding:10px;">
                <div class="col-md-2">&nbsp;</div>  
                <div class="col-md-8">
                  <div class="row">
                    <div class="panel panel-info">
                      <div class="panel-heading">
                        <h3 class="panel-title"><?php echo $_SESSION['firstname'.$count]." ".$_SESSION['lastname'.$count]; ?></h3>
                      </div>
                      <div class="panel-body">
                        <div class="row">
                          
                          <div class=" col-md-12 col-lg-12 "> 
                            <table class="table table-user-information">
                              <tbody>
                                <tr>
                                  <td>Transaction ID:</td>
                                  <td><?php echo $_SESSION['transactionid']; ?></td>
                                </tr>
                                <tr>
                                  <td>Reservation Number</td>
                                  <td><?php echo $_SESSION['reservationid1'.$count]; ?></td>
                                </tr>
                                <tr>
                                  <td>Date of Birth</td>
                                  <td><?php echo $_SESSION['birthday'.$count]; ?></td>
                                </tr>
                             
                                <tr>
                                  <td>Address</td>
                                  <td><?php echo $_SESSION['passengeraddress'.$count]; ?></td>
                                </tr>
                                <tr>
                                  <td>Nationality</td>
                                  <td><?php echo $_SESSION['nationality'.$count]; ?></td>
                                </tr>
                                <tr>
                                  <td>Email</td>
                                  <td><a href="<?php echo $_SESSION['email'.$count]; ?>"><?php echo $_SESSION['email'.$count]; ?></a></td>
                                </tr>
                                  <td>Phone Number</td>
                                  <td><?php echo $_SESSION['contact'.$count]; ?></td>
                                </tr>
                               
                              </tbody>
                            </table>
                          </div>
                        </div>
                      </div>
                           <div class="panel-footer">
                                  <a data-original-title="Broadcast Message" data-toggle="tooltip" type="button" class="btn btn-sm btn-primary"><i class="glyphicon glyphicon-envelope"></i></a>
                                  <span class="pull-right">
                                      <a href="edit.html" data-original-title="Edit this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-warning"><i class="glyphicon glyphicon-edit"></i></a>
                                      <a data-original-title="Remove this user" data-toggle="tooltip" type="button" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a>
                                  </span>
                              </div>
                    </div>
                  </div><!--end of div class="row" -->  
                </div>
                <div class="col-md-2">&nbsp;</div> 
              
              <div class="row">
                  <table class="table table-bordered">
                      <thead>
                          <th>Flight Type</th>
                          <th>Flight Number</th>
                          <th>Origin</th>
                          <th>Destination</th>
                          <th>Departure Date</th>
                          <th>Departure Time</th>
                          <th>Arrival Time</th>
                          <th>Seat</th>
                          <th>Baggage</th>
                      </thead>
                      <tbody>
                          <td><?php echo $_SESSION['flighttype']; ?></td>
                          <td><?php echo $_SESSION['flight1']; ?></td>
                          <td><?php echo $_SESSION['origin']; ?></td>
                          <td><?php echo $_SESSION['destination']; ?></td>
                          <td><?php echo $_SESSION['departuredate']; ?></td>
                          <td><?php echo $_SESSION['flight1_departuretime']; ?></td>
                          <td><?php echo $_SESSION['flight1_arrivaltime']; ?></td>
                          <td><?php echo $_SESSION['seat1'.$count]; ?></td>
                          <td><?php echo $_SESSION['baggage'.$count]; ?></td>
                      </tbody>
                  </table>
              </div>  
              <?php
              if($_SESSION['flighttype']=="roundtrip")
              {
              ?>
              <div class="row">
                  <table class="table table-bordered">
                      <thead>
                          <th>Flight Type</th>
                          <th>Flight Number</th>
                          <th>Origin</th>
                          <th>Destination</th>
                          <th>Departure Date</th>
                          <th>Departure Time</th>
                          <th>Arrival Time</th>
                          <th>Seat</th>
                          <th>Baggage</th>
                      </thead>
                      <tbody>
                          <td><?php echo $_SESSION['flighttype']; ?></td>
                          <td><?php echo $_SESSION['flight1']; ?></td>
                          <td><?php echo $_SESSION['destination']; ?></td>
                          <td><?php echo $_SESSION['origin']; ?></td>
                          <td><?php echo $_SESSION['returndate']; ?></td>
                          <td><?php echo $_SESSION['flight2_departuretime']; ?></td>
                          <td><?php echo $_SESSION['flight2_arrivaltime']; ?></td>
                          <td><?php echo $_SESSION['seat2'.$count]; ?></td>
                          <td><?php echo $_SESSION['baggage'.$count]; ?></td>
                      </tbody>
                  </table>
              </div>  
              <?php
              }
              ?>    
            </div>
            <?php
            }
            ?>
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
    
    
  </div>  
  <div class="col-md-2">&nbsp;</div>  
    
    
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








