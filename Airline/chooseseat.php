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
  <div class="jumbotron" style="height:1000px; background-image: url(images/bg_img.jpg); background-size: 100% auto; background-repeat: repeat-y; margin: 10px auto auto auto;">
    <div class="col-md-2">&nbsp;</div>
    <div class="col-md-8" style="background-color:rgba(10,10,10,0.7); padding:10px; margin: 20px 0px 0px 0px;">
      <?php
      if($_SESSION['flighttype']=="roundtrip")
      {
      ?>  
        <font color="white"><h3>Choose A Seat</h3></font>
        <form method="post" action="php/getchosenseat.php">
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

                <div class="tab-content clearfix" style="height:650px;">
                  <?php
              
                  for($count=1;$count<=$_SESSION['numofpassengers'];$count++)
                  {
                    
                  ?>
                  <div <?php if($count==1){ ?> class="tab-pane active" <?php } else{ ?> class="tab-pane" <?php } ?> id="<?php echo $count."a" ?>" style="padding:10px;"><!--Round Trip content-->
                      <div class="col-md-5">
                          <font size="4">
                            <label style="text-transform: uppercase;"><?php echo $_SESSION['origin']; ?></label>
                            <span class="glyphicon glyphicon-menu-right"></span>
                            <span class="glyphicon glyphicon-menu-right"></span>
                            <span class="glyphicon glyphicon-menu-right"></span>
                            <span class="glyphicon glyphicon-plane"></span>
                            <span class="glyphicon glyphicon-menu-right"></span>
                            <span class="glyphicon glyphicon-menu-right"></span>
                            <span class="glyphicon glyphicon-menu-right"></span>
                            <label style="text-transform: uppercase;"><?php echo $_SESSION['destination']; ?></label>
                          </font>
                          <table class="table table-bordered">
                            <tr>
                              <td>
                                &nbsp;
                              </td>
                              <td>
                                <input type="radio" value="P1" name="<?php echo "seat1".$count; ?>">P1
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="P2" name="<?php echo "seat1".$count; ?>">P2
                              </td>
                              <td>
                                &nbsp;
                              </td>
                            </tr>  
                            <tr>
                              <td>
                                <input type="radio" value="A1" name="<?php echo "seat1".$count; ?>">A1
                              </td>
                              <td>
                                <input type="radio" value="A2" name="<?php echo "seat1".$count; ?>">A2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="A3" name="<?php echo "seat1".$count; ?>">A3
                              </td>
                              <td>
                                <input type="radio" value="A4" name="<?php echo "seat1".$count; ?>">A4
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input type="radio" value="B1" name="<?php echo "seat1".$count; ?>">B1
                              </td>
                              <td>
                                <input type="radio" value="B2" name="<?php echo "seat1".$count; ?>">B2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="B3" name="<?php echo "seat1".$count; ?>">B3
                              </td>
                              <td>
                                <input type="radio" value="B4" name="<?php echo "seat1".$count; ?>">B4
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input type="radio" value="C1" name="<?php echo "seat1".$count; ?>">C1
                              </td>
                              <td>
                                <input type="radio" value="C2" name="<?php echo "seat1".$count; ?>">C2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="C3" name="<?php echo "seat1".$count; ?>">C3
                              </td>
                              <td>
                                <input type="radio" value="C4" name="<?php echo "seat1".$count; ?>">C4
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input type="radio" value="D1" name="<?php echo "seat1".$count; ?>">D1
                              </td>
                              <td>
                                <input type="radio" value="D2" name="<?php echo "seat1".$count; ?>">D2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="D3" name="<?php echo "seat1".$count; ?>">D3
                              </td>
                              <td>
                                <input type="radio" value="D4" name="<?php echo "seat1".$count; ?>">D4
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input type="radio" value="E1" name="<?php echo "seat1".$count; ?>">E1
                              </td>
                              <td>
                                <input type="radio" value="E2" name="<?php echo "seat1".$count; ?>">E2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="E3" name="<?php echo "seat1".$count; ?>">E3
                              </td>
                              <td>
                                <input type="radio" value="E4" name="<?php echo "seat1".$count; ?>">E4
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input type="radio" value="F1" name="<?php echo "seat1".$count; ?>">F1
                              </td>
                              <td>
                                <input type="radio" value="F2" name="<?php echo "seat1".$count; ?>">F2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="F3" name="<?php echo "seat1".$count; ?>">F3
                              </td>
                              <td>
                                <input type="radio" value="F4" name="<?php echo "seat1".$count; ?>">F4
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input type="radio" value="G1" name="<?php echo "seat1".$count; ?>">G1
                              </td>
                              <td>
                                <input type="radio" value="G2" name="<?php echo "seat1".$count; ?>">G2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="G3" name="<?php echo "seat1".$count; ?>">G3
                              </td>
                              <td>
                                <input type="radio" value="G4" name="<?php echo "seat1".$count; ?>">G4
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input type="radio" value="H1" name="<?php echo "seat1".$count; ?>">H1
                              </td>
                              <td>
                                <input type="radio" value="H2" name="<?php echo "seat1".$count; ?>">H2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="H3" name="<?php echo "seat1".$count; ?>">H3
                              </td>
                              <td>
                                <input type="radio" value="H4" name="<?php echo "seat1".$count; ?>">H4
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input type="radio" value="I1" name="<?php echo "seat1".$count; ?>">I1
                              </td>
                              <td>
                                <input type="radio" value="I2" name="<?php echo "seat1".$count; ?>">I2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="I3" name="<?php echo "seat1".$count; ?>">I3
                              </td>
                              <td>
                                <input type="radio" value="I4" name="<?php echo "seat1".$count; ?>">I4
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input type="radio" value="J1" name="<?php echo "seat1".$count; ?>">J1
                              </td>
                              <td>
                                <input type="radio" value="J2" name="<?php echo "seat1".$count; ?>">J2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="J3" name="<?php echo "seat1".$count; ?>">J3
                              </td>
                              <td>
                                <input type="radio" value="J4" name="<?php echo "seat1".$count; ?>">J4
                              </td>
                            </tr>

                            <tr>
                              <td>
                                <input type="radio" value="K1" name="<?php echo "seat1".$count; ?>">K1
                              </td>
                              <td>
                                <input type="radio" value="K2" name="<?php echo "seat1".$count; ?>">K2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="K3" name="<?php echo "seat1".$count; ?>">K3
                              </td>
                              <td>
                                <input type="radio" value="K4" name="<?php echo "seat1".$count; ?>">K4
                              </td>
                            </tr>

                            <tr>
                              <td>
                                <input type="radio" value="L1" name="<?php echo "seat1".$count; ?>">L1
                              </td>
                              <td>
                                <input type="radio" value="L2" name="<?php echo "seat1".$count; ?>">L2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="L3" name="<?php echo "seat1".$count; ?>">L3
                              </td>
                              <td>
                                <input type="radio" value="L4" name="<?php echo "seat1".$count; ?>">L4
                              </td>
                            </tr>
                          </table>
                      </div>
                      <div class="col-md-2">
                        &nbsp;
                      </div>
                      <div class="col-md-5">
                          <font size="4">
                            <label style="text-transform: uppercase;"><?php echo $_SESSION['destination']; ?></label>
                            <span class="glyphicon glyphicon-menu-right"></span>
                            <span class="glyphicon glyphicon-menu-right"></span>
                            <span class="glyphicon glyphicon-menu-right"></span>
                            <span class="glyphicon glyphicon-plane"></span>
                            <span class="glyphicon glyphicon-menu-right"></span>
                            <span class="glyphicon glyphicon-menu-right"></span>
                            <span class="glyphicon glyphicon-menu-right"></span>
                            <label style="text-transform: uppercase;"><?php echo $_SESSION['origin']; ?></label>
                          </font>
                          <table class="table table-bordered">
                            <tr>
                              <td>
                                &nbsp;
                              </td>
                              <td>
                                <input type="radio" value="P1" name="<?php echo "seat2".$count; ?>">P1
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="P2" name="<?php echo "seat2".$count; ?>">P2
                              </td>
                              <td>
                                &nbsp;
                              </td>
                            </tr>  
                            <tr>
                              <td>
                                <input type="radio" value="A1" name="<?php echo "seat2".$count; ?>">A1
                              </td>
                              <td>
                                <input type="radio" value="A2" name="<?php echo "seat2".$count; ?>">A2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="A3" name="<?php echo "seat2".$count; ?>">A3
                              </td>
                              <td>
                                <input type="radio" value="A4" name="<?php echo "seat2".$count; ?>">A4
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input type="radio" value="B1" name="<?php echo "seat2".$count; ?>">B1
                              </td>
                              <td>
                                <input type="radio" value="B2" name="<?php echo "seat2".$count; ?>">B2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="B3" name="<?php echo "seat2".$count; ?>">B3
                              </td>
                              <td>
                                <input type="radio" value="B4" name="<?php echo "seat2".$count; ?>">B4
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input type="radio" value="C1" name="<?php echo "seat2".$count; ?>">C1
                              </td>
                              <td>
                                <input type="radio" value="C2" name="<?php echo "seat2".$count; ?>">C2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="C3" name="<?php echo "seat2".$count; ?>">C3
                              </td>
                              <td>
                                <input type="radio" value="C4" name="<?php echo "seat2".$count; ?>">C4
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input type="radio" value="D1" name="<?php echo "seat2".$count; ?>">D1
                              </td>
                              <td>
                                <input type="radio" value="D2" name="<?php echo "seat2".$count; ?>">D2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="D3" name="<?php echo "seat2".$count; ?>">D3
                              </td>
                              <td>
                                <input type="radio" value="D4" name="<?php echo "seat2".$count; ?>">D4
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input type="radio" value="E1" name="<?php echo "seat2".$count; ?>">E1
                              </td>
                              <td>
                                <input type="radio" value="E2" name="<?php echo "seat2".$count; ?>">E2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="E3" name="<?php echo "seat2".$count; ?>">E3
                              </td>
                              <td>
                                <input type="radio" value="E4" name="<?php echo "seat2".$count; ?>">E4
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input type="radio" value="F1" name="<?php echo "seat2".$count; ?>">F1
                              </td>
                              <td>
                                <input type="radio" value="F2" name="<?php echo "seat2".$count; ?>">F2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="F3" name="<?php echo "seat2".$count; ?>">F3
                              </td>
                              <td>
                                <input type="radio" value="F4" name="<?php echo "seat2".$count; ?>">F4
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input type="radio" value="G1" name="<?php echo "seat2".$count; ?>">G1
                              </td>
                              <td>
                                <input type="radio" value="G2" name="<?php echo "seat2".$count; ?>">G2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="G3" name="<?php echo "seat2".$count; ?>">G3
                              </td>
                              <td>
                                <input type="radio" value="G4" name="<?php echo "seat2".$count; ?>">G4
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input type="radio" value="H1" name="<?php echo "seat2".$count; ?>">H1
                              </td>
                              <td>
                                <input type="radio" value="H2" name="<?php echo "seat2".$count; ?>">H2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="H3" name="<?php echo "seat2".$count; ?>">H3
                              </td>
                              <td>
                                <input type="radio" value="H4" name="<?php echo "seat2".$count; ?>">H4
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input type="radio" value="I1" name="<?php echo "seat2".$count; ?>">I1
                              </td>
                              <td>
                                <input type="radio" value="I2" name="<?php echo "seat2".$count; ?>">I2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="I3" name="<?php echo "seat2".$count; ?>">I3
                              </td>
                              <td>
                                <input type="radio" value="I4" name="<?php echo "seat2".$count; ?>">I4
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input type="radio" value="J1" name="<?php echo "seat2".$count; ?>">J1
                              </td>
                              <td>
                                <input type="radio" value="J2" name="<?php echo "seat2".$count; ?>">J2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="J3" name="<?php echo "seat2".$count; ?>">J3
                              </td>
                              <td>
                                <input type="radio" value="J4" name="<?php echo "seat2".$count; ?>">J4
                              </td>
                            </tr>

                            <tr>
                              <td>
                                <input type="radio" value="K1" name="<?php echo "seat2".$count; ?>">K1
                              </td>
                              <td>
                                <input type="radio" value="K2" name="<?php echo "seat2".$count; ?>">K2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="K3" name="<?php echo "seat2".$count; ?>">K3
                              </td>
                              <td>
                                <input type="radio" value="K4" name="<?php echo "seat2".$count; ?>">K4
                              </td>
                            </tr>

                            <tr>
                              <td>
                                <input type="radio" value="L1" name="<?php echo "seat2".$count; ?>">L1
                              </td>
                              <td>
                                <input type="radio" value="L2" name="<?php echo "seat2".$count; ?>">L2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="L3" name="<?php echo "seat2".$count; ?>">L3
                              </td>
                              <td>
                                <input type="radio" value="L4" name="<?php echo "seat2".$count; ?>">L4
                              </td>
                            </tr>
                          </table>
                      </div>
                  </div> <!--end of tab-pane active -->
                  <?php
                  }
                  ?>
                </div> 
                <div class="col-md-4">&nbsp;</div>
                <div class="col-md-4"><input type="submit" name="chooseseatbutton" value="Continue Next Step" class="btn btn-info" style="margin-top:10px;"></div>
                <div class="col-md-4">&nbsp;</div> 
          </div>
        </form>
        <?php
        }
        
        elseif($_SESSION['flighttype']=="oneway")
        {
        ?>
        <font color="white"><h3>Choose A Seat</h3></font>
        <form method="post" action="php/getchosenseat.php">
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

                <div class="tab-content clearfix" style="height:650px;">
                  <?php
              
                  for($count=1;$count<=$_SESSION['numofpassengers'];$count++)
                  {
                    
                  ?>
                  <div <?php if($count==1){ ?> class="tab-pane active" <?php } else{ ?> class="tab-pane" <?php } ?> id="<?php echo $count."a" ?>" style="padding:10px;"><!--Round Trip content-->
                      <div class="col-md-3">
                        &nbsp;
                      </div>
                      <div class="col-md-6">
                          <font size="4">
                            <label style="text-transform: uppercase;"><?php echo $_SESSION['origin']; ?></label>
                            <span class="glyphicon glyphicon-menu-right"></span>
                            <span class="glyphicon glyphicon-menu-right"></span>
                            <span class="glyphicon glyphicon-menu-right"></span>
                            <span class="glyphicon glyphicon-plane"></span>
                            <span class="glyphicon glyphicon-menu-right"></span>
                            <span class="glyphicon glyphicon-menu-right"></span>
                            <span class="glyphicon glyphicon-menu-right"></span>
                            <label style="text-transform: uppercase;"><?php echo $_SESSION['destination']; ?></label>
                          </font>
                          <table class="table table-bordered">
                            <tr>
                              <td>
                                &nbsp;
                              </td>
                              <td>
                                <input type="radio" value="P1" name="<?php echo "seat1".$count; ?>">P1
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="P2" name="<?php echo "seat1".$count; ?>">P2
                              </td>
                              <td>
                                &nbsp;
                              </td>
                            </tr>  
                            <tr>
                              <td>
                                <input type="radio" value="A1" name="<?php echo "seat1".$count; ?>">A1
                              </td>
                              <td>
                                <input type="radio" value="A2" name="<?php echo "seat1".$count; ?>">A2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="A3" name="<?php echo "seat1".$count; ?>">A3
                              </td>
                              <td>
                                <input type="radio" value="A4" name="<?php echo "seat1".$count; ?>">A4
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input type="radio" value="B1" name="<?php echo "seat1".$count; ?>">B1
                              </td>
                              <td>
                                <input type="radio" value="B2" name="<?php echo "seat1".$count; ?>">B2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="B3" name="<?php echo "seat1".$count; ?>">B3
                              </td>
                              <td>
                                <input type="radio" value="B4" name="<?php echo "seat1".$count; ?>">B4
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input type="radio" value="C1" name="<?php echo "seat1".$count; ?>">C1
                              </td>
                              <td>
                                <input type="radio" value="C2" name="<?php echo "seat1".$count; ?>">C2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="C3" name="<?php echo "seat1".$count; ?>">C3
                              </td>
                              <td>
                                <input type="radio" value="C4" name="<?php echo "seat1".$count; ?>">C4
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input type="radio" value="D1" name="<?php echo "seat1".$count; ?>">D1
                              </td>
                              <td>
                                <input type="radio" value="D2" name="<?php echo "seat1".$count; ?>">D2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="D3" name="<?php echo "seat1".$count; ?>">D3
                              </td>
                              <td>
                                <input type="radio" value="D4" name="<?php echo "seat1".$count; ?>">D4
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input type="radio" value="E1" name="<?php echo "seat1".$count; ?>">E1
                              </td>
                              <td>
                                <input type="radio" value="E2" name="<?php echo "seat1".$count; ?>">E2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="E3" name="<?php echo "seat1".$count; ?>">E3
                              </td>
                              <td>
                                <input type="radio" value="E4" name="<?php echo "seat1".$count; ?>">E4
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input type="radio" value="F1" name="<?php echo "seat1".$count; ?>">F1
                              </td>
                              <td>
                                <input type="radio" value="F2" name="<?php echo "seat1".$count; ?>">F2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="F3" name="<?php echo "seat1".$count; ?>">F3
                              </td>
                              <td>
                                <input type="radio" value="F4" name="<?php echo "seat1".$count; ?>">F4
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input type="radio" value="G1" name="<?php echo "seat1".$count; ?>">G1
                              </td>
                              <td>
                                <input type="radio" value="G2" name="<?php echo "seat1".$count; ?>">G2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="G3" name="<?php echo "seat1".$count; ?>">G3
                              </td>
                              <td>
                                <input type="radio" value="G4" name="<?php echo "seat1".$count; ?>">G4
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input type="radio" value="H1" name="<?php echo "seat1".$count; ?>">H1
                              </td>
                              <td>
                                <input type="radio" value="H2" name="<?php echo "seat1".$count; ?>">H2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="H3" name="<?php echo "seat1".$count; ?>">H3
                              </td>
                              <td>
                                <input type="radio" value="H4" name="<?php echo "seat1".$count; ?>">H4
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input type="radio" value="I1" name="<?php echo "seat1".$count; ?>">I1
                              </td>
                              <td>
                                <input type="radio" value="I2" name="<?php echo "seat1".$count; ?>">I2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="I3" name="<?php echo "seat1".$count; ?>">I3
                              </td>
                              <td>
                                <input type="radio" value="I4" name="<?php echo "seat1".$count; ?>">I4
                              </td>
                            </tr>
                            <tr>
                              <td>
                                <input type="radio" value="J1" name="<?php echo "seat1".$count; ?>">J1
                              </td>
                              <td>
                                <input type="radio" value="J2" name="<?php echo "seat1".$count; ?>">J2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="J3" name="<?php echo "seat1".$count; ?>">J3
                              </td>
                              <td>
                                <input type="radio" value="J4" name="<?php echo "seat1".$count; ?>">J4
                              </td>
                            </tr>

                            <tr>
                              <td>
                                <input type="radio" value="K1" name="<?php echo "seat1".$count; ?>">K1
                              </td>
                              <td>
                                <input type="radio" value="K2" name="<?php echo "seat1".$count; ?>">K2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="K3" name="<?php echo "seat1".$count; ?>">K3
                              </td>
                              <td>
                                <input type="radio" value="K4" name="<?php echo "seat1".$count; ?>">K4
                              </td>
                            </tr>

                            <tr>
                              <td>
                                <input type="radio" value="L1" name="<?php echo "seat1".$count; ?>">L1
                              </td>
                              <td>
                                <input type="radio" value="L2" name="<?php echo "seat1".$count; ?>">L2
                              </td>
                              <td width="100px">
                                
                              </td>
                              <td>
                                <input type="radio" value="L3" name="<?php echo "seat1".$count; ?>">L3
                              </td>
                              <td>
                                <input type="radio" value="L4" name="<?php echo "seat1".$count; ?>">L4
                              </td>
                            </tr>
                          </table>
                      </div>
                      <div class="col-md-3">
                        &nbsp;  
                      </div>
                  </div> <!--end of tab-pane active -->
                  <?php
                  }
                  ?>
                </div> 
                <div class="col-md-4">&nbsp;</div>
                <div class="col-md-4"><input type="submit" name="chooseseatbutton" value="Continue Next Step" class="btn btn-info" style="margin-top:10px;"></div>
                <div class="col-md-4">&nbsp;</div> 
          </div>
        </form>
        
        <?php
        }
        ?>
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
    </div> <!--end of div class="col-md-8" -->
    <div class="col-md-2">&nbsp;</div>
    

      
    
  </div><!--End of div class="jumbotron"-->

  

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








