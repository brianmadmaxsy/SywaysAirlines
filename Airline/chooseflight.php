<?php
require 'php/getflightlist.php';
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
  <!--  jQuery -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

  <!-- Isolated Version of Bootstrap, not needed if your site already uses Bootstrap -->
  <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
  
  <!--
  <script type="text/javascript">
    
    function DisplayPrice(price){
      var val1 = 0;
      for( i = 0; i < document.form1.price1.length; i++ ){
          if( document.form1.price1[i].checked == true ){
              val1 = document.form1.price1[i].value;
          }
      }

      var val2 = 0;
      for( i = 0; i < document.form2.price2.length; i++ ){
          if( document.form2.price2[i].checked == true ){
              val2 = document.form2.price2[i].value;
          }
      }

      var sum=parseFloat(val1) + parseFloat(val2);
      document.getElementById('totalSum').value=sum;
    }
    
  </script>
  -->
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
  <div class="jumbotron" style="height:1100px; background-image: url(images/bg_img.jpg); background-size: 100% auto; background-repeat: repeat-y; margin: 10px auto auto auto;">
  <div class="col-md-3">&nbsp;</div>
  <div class="col-md-6 chooseflightflight">
  <form method="post" action="php/getchosenflight.php">
    <div class="container" style="background-color: white; border: 1px solid black; border-radius: 10px; margin: 10px auto auto auto;">
        <div class="row" style="padding: 10px;">
          <h2>Choose Departure Flight</h2>
          <font size="4">
            <label style="text-transform: uppercase;"><?php echo $origin; ?></label>
            <span class="glyphicon glyphicon-menu-right"></span>
            <span class="glyphicon glyphicon-menu-right"></span>
            <span class="glyphicon glyphicon-menu-right"></span>
            <span class="glyphicon glyphicon-plane"></span>
            <span class="glyphicon glyphicon-menu-right"></span>
            <span class="glyphicon glyphicon-menu-right"></span>
            <span class="glyphicon glyphicon-menu-right"></span>
            <label style="text-transform: uppercase;"><?php echo $destination ?></label>
          </font>
          <font size="5"><label>(<?php echo $departuredate ?>)</label></font>
            
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Flight No.</th>
                    <th>Depart/Arrive</th>
                    <th>Destination</th>
                    <th>Duration</th>
                    <th>Fare</th>
                  </tr>

                </thead>
                <tbody>
                  <?php
                  if($result)
                  {
                    $counter=0;
                    while($row = $result->fetch_assoc())
                    {
                      $counter+=1;
                    ?>
                      <tr>
                        <th scope="row"><?php echo $counter; ?></th>
                        <td><?php echo $row['flightnum']; ?></td>
                        <td><?php echo $row['departuretime']; ?><br/><?php echo $row['arrivaltime']; ?></td>
                        <td><?php echo $row['origin']; ?><br/><?php echo $row['destination'] ?></td>
                        <td><?php echo $row['duration']; ?></td>
                        <td>
                          <input type="radio" name="flight1" value="<?php echo $row['flightnum']; ?>">PHP <?php echo $row['fare']; ?>
                        </td>
                      </tr>
                  <?php
                      
                    }
                    $result->free();
                  }

                  else
                  {
                  ?>
                      <tr>
                        
                        <td>No flights available on this date.</td>
                        
                      </tr>
                  <?php
                  }
                  $db->close();
                  ?>  
                </tbody>
              </table>
            
        </div>  
    </div>

   

    <?php
    if($flighttype=="roundtrip")
    {  
    ?>
    <div class="container" style="background-color: white; border: 1px solid black; border-radius: 10px; margin: 10px auto auto auto;">
        <div class="row" style="padding: 10px;">
          <h2>Choose Return Flight</h2>
          <font size="4">
            <label style="text-transform: uppercase;"><?php echo $destination; ?></label>
            <span class="glyphicon glyphicon-menu-right"></span>
            <span class="glyphicon glyphicon-menu-right"></span>
            <span class="glyphicon glyphicon-menu-right"></span>
            <span class="glyphicon glyphicon-plane"></span>
            <span class="glyphicon glyphicon-menu-right"></span>
            <span class="glyphicon glyphicon-menu-right"></span>
            <span class="glyphicon glyphicon-menu-right"></span>
            <label style="text-transform: uppercase;"><?php echo $origin; ?></label>
          </font>
          <font size="5"><label>(<?php echo $returndate; ?>)</label></font>
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Flight No.</th>
                    <th>Depart/Arrive</th>
                    <th>Destination</th>
                    <th>Duration</th>
                    <th>Fare</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if($result2)
                  {
                    $counter=0;
                    while($row = $result2->fetch_assoc())
                    {
                      $counter+=1;
                    ?>
                      <tr>
                        <th scope="row"><?php echo $counter; ?></th>
                        <td><?php echo $row['flightnum']; ?></td>
                        <td><?php echo $row['departuretime']; ?><br/><?php echo $row['arrivaltime']; ?></td>
                        <td><?php echo $row['origin']; ?><br/><?php echo $row['destination'] ?></td>
                        <td><?php echo $row['duration']; ?></td>
                        <td><input type="radio" name="flight2" value="<?php echo $row['flightnum']; ?>">PHP <?php echo $row['fare']; ?></td>
                      </tr>
                  <?php
                    }
                    $result2->free();
                  }

                  else
                  {
                  ?>
                      <tr>
                        
                        <td>No flights available on this date.</td>
                        
                      </tr>
                  <?php
                  }
                  require 'php/connect.php';
                  $db->close();
                  ?>  
                </tbody>
              </table>
        </div>  
    </div>
    <?php
    }
    ?>

    <!--
    <div class="container" style="background-color: white; border: 1px solid black; border-radius: 10px; margin: 10px auto auto auto;">
      <div class="row" style="padding: 10px;">
        <table>
          <tr>
            <td width="100"><h4>Subtotal</h4></td>
            <td><input type="text" name="totalSum" id="totalSum" value="" readonly="readonly"></td>
          </tr>
        </table>
        
      </div>
    </div>  
    -->
    <div class="container" style="background-color: white; border: 1px solid black; border-radius: 10px; margin: 10px auto auto auto;">
      <div class="row" style="padding: 10px;">
        <div class="col-md-4">
          &nbsp;
        </div>
        <div class="col-md-4">
          <table>
            <tr>
              <td>
                <input type="hidden" name="flighttype" value="<?php echo $_SESSION['flighttype']; ?>">
                <input type="submit" name="bookflightbutton" value="Book Flight!" class="btn btn-success">
              </td>
            </tr>
          </table>
        </div>
        <div class="col-md-4">
          &nbsp;
        </div>  
      </div>
    </div>
  </form>
  </div>  

  <div class="col-md-3">&nbsp;</div>  
      
    
  </div> <!--End of Jumbotron -->

  

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








