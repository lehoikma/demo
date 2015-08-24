
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Create user</title>

    <!-- Bootstrap -->
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
 
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
	 
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link href="demo4.css" rel="stylesheet">
    <style>
    .form {
  background: #ccc;
  border-radius: 10px;
  padding: 30px;
  box-shadow: -2px 2px 5px #ccc;
}

h1 {
  color: green;
}

    </style>
  </head>
  <body>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-sm-push-1">
                <h1 class="text-center">Creater user</h1>
                    <div class="form">
                          <form class="form-horizontal" method="post" action="">
                              <div class="form-group">
                                <label class="col-sm-2 control-label">Username</label>
                                <div class="col-sm-10">
                                  <input type="text" class="form-control" id="inputEmail3" placeholder="Username" name="name">
                                  <span class="text-danger"><?php echo form_error('name'); ?></span>
                                </div>
                              </div>
                              <div class="form-group">
                                <label class="col-sm-2 control-label">Password</label>
                                <div class="col-sm-10">
                                  <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="pass">
                                   <span class="text-danger"><?php echo form_error('pass'); ?></span>
                                </div>
                              </div>
                              
                              <div class="form-group">
                                <label class="col-sm-2 control-label">Level</label>
                                <div class="col-sm-10">
                                    <select name="level">
                                        <option value="1">Admin</option>
                                        <option value="2">Member</option>                               
                                    </select>
                                </div>
                              </div>                              
                              <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                  <button type="submit" class="btn btn-primary" name="submit" value="login">submit</button>
                                </div>
                              </div>
                          </form>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>   