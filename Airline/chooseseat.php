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
  <div class="jumbotron" style="height:1000px; background-image: url(images/bg_img.jpg); background-size: 100% auto; background-repeat: repeat-y; margin: 10px auto auto auto;">
    <div class="col-md-3">&nbsp;</div>
    <div class="col-md-6">
      <div class="container" style="background-color: white; border: 1px solid black; border-radius: 10px; margin: 50px auto auto auto;">
          <div class="col-md-4">
            &nbsp;
          </div>
          <div class="col-md-4">
            <form method="post" action="php/getchosenseat.php">
              <h3>Choose A Seat</h3>
              <table class="table table-bordered">
                <tr>
                  <td>
                    &nbsp;
                  </td>
                  <td>
                    <input type="radio" value="P1" name="seat">P1
                  </td>
                  <td width="100px">
                    
                  </td>
                  <td>
                    <input type="radio" value="P2" name="seat">P2
                  </td>
                  <td>
                    &nbsp;
                  </td>
                </tr>  
                <tr>
                  <td>
                    <input type="radio" value="A1" name="seat">A1
                  </td>
                  <td>
                    <input type="radio" value="A2" name="seat">A2
                  </td>
                  <td width="100px">
                    
                  </td>
                  <td>
                    <input type="radio" value="A3" name="seat">A3
                  </td>
                  <td>
                    <input type="radio" value="A4" name="seat">A4
                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="radio" value="B1" name="seat">B1
                  </td>
                  <td>
                    <input type="radio" value="B2" name="seat">B2
                  </td>
                  <td width="100px">
                    
                  </td>
                  <td>
                    <input type="radio" value="B3" name="seat">B3
                  </td>
                  <td>
                    <input type="radio" value="B4" name="seat">B4
                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="radio" value="C1" name="seat">C1
                  </td>
                  <td>
                    <input type="radio" value="C2" name="seat">C2
                  </td>
                  <td width="100px">
                    
                  </td>
                  <td>
                    <input type="radio" value="C3" name="seat">C3
                  </td>
                  <td>
                    <input type="radio" value="C4" name="seat">C4
                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="radio" value="D1" name="seat">D1
                  </td>
                  <td>
                    <input type="radio" value="D2" name="seat">D2
                  </td>
                  <td width="100px">
                    
                  </td>
                  <td>
                    <input type="radio" value="D3" name="seat">D3
                  </td>
                  <td>
                    <input type="radio" value="D4" name="seat">D4
                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="radio" value="E1" name="seat">E1
                  </td>
                  <td>
                    <input type="radio" value="E2" name="seat">E2
                  </td>
                  <td width="100px">
                    
                  </td>
                  <td>
                    <input type="radio" value="E3" name="seat">E3
                  </td>
                  <td>
                    <input type="radio" value="E4" name="seat">E4
                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="radio" value="F1" name="seat">F1
                  </td>
                  <td>
                    <input type="radio" value="F2" name="seat">F2
                  </td>
                  <td width="100px">
                    
                  </td>
                  <td>
                    <input type="radio" value="F3" name="seat">F3
                  </td>
                  <td>
                    <input type="radio" value="F4" name="seat">F4
                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="radio" value="G1" name="seat">G1
                  </td>
                  <td>
                    <input type="radio" value="G2" name="seat">G2
                  </td>
                  <td width="100px">
                    
                  </td>
                  <td>
                    <input type="radio" value="G3" name="seat">G3
                  </td>
                  <td>
                    <input type="radio" value="G4" name="seat">G4
                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="radio" value="H1" name="seat">H1
                  </td>
                  <td>
                    <input type="radio" value="H2" name="seat">H2
                  </td>
                  <td width="100px">
                    
                  </td>
                  <td>
                    <input type="radio" value="H3" name="seat">H3
                  </td>
                  <td>
                    <input type="radio" value="H4" name="seat">H4
                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="radio" value="I1" name="seat">I1
                  </td>
                  <td>
                    <input type="radio" value="I2" name="seat">I2
                  </td>
                  <td width="100px">
                    
                  </td>
                  <td>
                    <input type="radio" value="I3" name="seat">I3
                  </td>
                  <td>
                    <input type="radio" value="I4" name="seat">I4
                  </td>
                </tr>
                <tr>
                  <td>
                    <input type="radio" value="J1" name="seat">J1
                  </td>
                  <td>
                    <input type="radio" value="J2" name="seat">J2
                  </td>
                  <td width="100px">
                    
                  </td>
                  <td>
                    <input type="radio" value="J3" name="seat">J3
                  </td>
                  <td>
                    <input type="radio" value="J4" name="seat">J4
                  </td>
                </tr>

                <tr>
                  <td>
                    <input type="radio" value="K1" name="seat">K1
                  </td>
                  <td>
                    <input type="radio" value="K2" name="seat">K2
                  </td>
                  <td width="100px">
                    
                  </td>
                  <td>
                    <input type="radio" value="K3" name="seat">K3
                  </td>
                  <td>
                    <input type="radio" value="K4" name="seat">K4
                  </td>
                </tr>

                <tr>
                  <td>
                    <input type="radio" value="L1" name="seat">L1
                  </td>
                  <td>
                    <input type="radio" value="L2" name="seat">L2
                  </td>
                  <td width="100px">
                    
                  </td>
                  <td>
                    <input type="radio" value="L3" name="seat">L3
                  </td>
                  <td>
                    <input type="radio" value="L4" name="seat">L4
                  </td>
                </tr>
              </table>
              <div class="col-md-4">&nbsp;</div>
              <div class="col-md-4">
                <input type="submit" name="chooseseatbutton" value="Choose Seat" class="btn btn-success" style="margin:0px auto 10px auto;">
              </div>
              <div class="col-md-4">&nbsp;</div>
            </div>
            
            <div class="col-md-4">
              &nbsp;
            </div>
          </form>
      </div>
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








