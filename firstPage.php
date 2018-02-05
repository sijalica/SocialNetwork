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
        
        
        <div class="container">
           
           
        <?php 
      
            $str = file_get_contents("data.json");
            $json = json_decode($str, true);
      
        ?>
        
            
            <form action="" method="get">
<table class="table">           
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Profile</th>
    </tr>
  </thead>
  <tbody>
    <?php 
            
                foreach($json as $values){
                    $id = $values['id'];
                    $firstName = $values['firstName'];
                    $surname = $values['surname'];
                
                
            ?>
    <tr>
      <th scope="row"><?php echo $id; ?></th>
      <td><?php echo $firstName; ?></td>
      <td><?php echo $surname; ?></td>
      <td><a href="profile.php?id=<?php echo $id; ?>">Profile</a></td>
    </tr>
   <?php } ?>
  </tbody>
</table>
            </form>        
            
            
        </div>
   
   
   
   
   
   
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>