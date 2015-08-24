<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>List user</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
 
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	 
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style>
       tbody tr td a {
         color:brown;
       }
    </style>
    
  </head>
  <body>
  <div class='wrapper'>
      <div class="container">
        <div class="col-sm-10 col-sm-push-1">
            <h2 class="text-center">Wellcome admin : List user</h2>           
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th>STT</th>
                  <th style="padding-left:122px;">Name</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
              </thead>
              <tbody>
                <?php
                    $stt=0;
                    foreach($mu as $key){
                        $stt++;
                     echo " <tr>";
                    echo "<td>$stt</th>";
                    echo "<td>$key[user_name]</td>";
                    echo "<td><a href='edit/index/$key[user_id]'>Edit</a></td>";
                     echo "<td><a href='user_list'>Delete</a></td>";
                echo "</tr>";  
                    }
                
                ?>
               
              </tbody>
          </div>
      </div>
  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>