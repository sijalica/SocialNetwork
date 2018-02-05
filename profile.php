<!doctype html>
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>People</title>
  </head>
  <body>
   
        
        
        <nav class="navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="firstPage.php">People</a> 
</nav>
       
       
       
    <div class="float-right mt-5 mr-5 w-25 p-2">
           
        <h2>Suggested friends</h2>
           
<table class="table">
  <thead>
    <tr>
      <th scope="col">First</th>
      <th scope="col">Last</th>
    </tr>
  </thead>
  <tbody>
 <?php

        $str = file_get_contents("data.json");
        $json = json_decode($str, true);

        $i = $_GET['id'];

      foreach($json[$i - 1]["friends"] as $a) {

        for ($j=0; $j<sizeof($json); $j++)
        {
          if (in_array($a, $json[$j]["friends"])) {


               if ($json[$i-1]['firstName'] != $json[$j]['firstName'] && !(in_array($json[$i-1]['id'],  $json[$j]['friends']))) { ?>
              <tr>
                    <td> <?php echo $json[$j]['firstName']; ?> </td>
                    <td><?php echo $json[$j]['surname']; ?></td>
              </tr>
            <?php } ?>
               <?php
          }
        }
    }?>
  </tbody>
</table>
           
    </div>
       
       
           
        
        <div class="container">
        <?php 
      
            $str = file_get_contents("data.json");
            $json = json_decode($str, true);
            
            $i = $_GET['id'];
            
        ?>
        
           <br><br>
             <div class="container">    
                <div class="row">
                    <div class="panel panel-default">
                      <div class="panel-heading">  <h4 >User Profile</h4></div>
                          <div class="panel-body">
                              <div class="col-md-4 col-xs-12 col-sm-6 col-lg-4">
                      <?php switch ($json[$i-1]["gender"]) {
    case "male": ?>
        
                       <img height="50%" width="50%" alt="User Pic" src="male.jpg" id="profile-image1" class="img-circle img-responsive"> 
                     <?php 
                        
                    break;
                case "female":?>
        <img height="50%" width="50%" alt="User Pic" src="female.jpg" id="profile-image1" class="img-circle img-responsive"> 
        <?php
        break;                      
    
                    
                    } ?>
                 
                              </div>
                              <div class="col-md-8 col-xs-12 col-sm-6 col-lg-8" >
                                  <div class="container" >
                            <h2><?php echo $json[$i-1]["firstName"]." ".$json[$i-1]["surname"]; ?></h2>
                                  </div>
                            <hr>
                          <ul class="container details" >
                            <li><p><span class="glyphicon glyphicon-user one" style="width:50px;">Age: </span><?php echo $json[$i-1]["age"]; ?></p></li>
                            <li><p><span class="glyphicon glyphicon-envelope one" style="width:50px;">Gender: </span><?php echo $json[$i-1]["gender"]; ?></p></li>
                          </ul>
                          
                          <div class="container">
<table class="table">
           
  <thead>
   <tr>
       <th><h2>Friends:</h2></th>
   </tr>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Profile</th>
      <th scope="col">Friends</th>
    </tr>
  </thead>
  <tbody>
    <?php 
            
                for($m = 0; $m < sizeof($json[$i-1]['friends']); $m++) { 
                
    ?>
    <tr>
      <th scope="row"><?php echo $json[$json[$i-1]['friends'][$m] - 1]["id"]; ?></th>
      <td><?php echo $json[$json[$i-1]['friends'][$m] - 1]["firstName"]; ?></td>
      <td><?php echo $json[$json[$i-1]['friends'][$m] - 1]["surname"]; ?></td>
      <td><a href="profile.php?id=<?php echo $json[$json[$i-1]['friends'][$m] - 1]["id"]; ?>">Profile</a></td>
      <?php for($j = 0; $j < sizeof($json[$json[$i-1]['friends'][$m] - 1]["friends"]); $j++) { ?>
          <td><?php echo $json[$json[$json[$i-1]['friends'][$m] - 1]["friends"][$j] - 1]["firstName"]." ".$json[$json[$json[$i-1]['friends'][$m] - 1]["friends"][$j] - 1]["surname"]; ?></td>
    <?php   } ?>
    </tr>
   <?php } ?>
  </tbody>
</table>
                          </div>
                          </div>
                              </div>
                                  </div>
                                      </div>
                                          </div>
                                              </div>
            
            
            
  
   
   
   
   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>