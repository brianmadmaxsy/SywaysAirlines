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
  <div class="jumbotron" style="height:500px; background-image: url(images/bg_img.jpg); background-size: 100% auto; background-repeat: repeat-y; margin: 10px auto auto auto;">
  <div class="col-md-3">&nbsp;</div>
  <div class="col-md-6 chooseflightflight">
    
    <div class="container" style="background-color: white; border: 1px solid black; border-radius: 10px; margin: 50px auto auto auto;">
        <form method="post" action="php/getbaggageweight.php">
          <div class="row" style="padding: 10px;">
              <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Check-in Baggage</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Baggage Weight</td>
                      <td>
                          <select name="baggage">
                            <option selected="" value="0kg">No Baggage</option>
                            <option value="15kg">15KG (P250)</option>
                            <option value="20kg">20KG (P300)</option>
                            <option value="25kg">25KG (P350)</option>
                            <option value="30kg">30KG (P400)</option>
                            <option value="35kg">35KG (P450)</option>
                            <option value="40kg">40KG (P500)</option>
                          </select>  
                      </td>
                    </tr>
                    
                  </tbody>
              </table>
              <div class="col-md-4">
                &nbsp;
              </div>
              <div class="col-md-4">
                <input type="submit" name="availbaggagebutton" value="Avail Baggage!" class="btn btn-success">
              </div>
              <div class="col-md-4">
                &nbsp;
              </div>
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








