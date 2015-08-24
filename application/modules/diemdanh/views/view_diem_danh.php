<!DOCTYPE html>
<?php $this->load->helper('form');
$this->load->helper('url');
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome to admin</title>

    <!-- Bootstrap -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <style type="text/css">
    </style>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-6 col-sm-push-3" style="
    text-align: center;
    background-color: rgba(128, 69, 103, 0.26);
    /* width: 400px; */
    /* margin: auto; */
">
            <h2>Welcome to User : <?php  echo $test[0]['user_name'];  ?> </h2>
            <h3>Điểm danh</h3>
                <form action="" method="post">
                    <input type="radio" name="sex" value="online" <?php echo  set_radio('sex', 'online', TRUE); ?>>Online
                    <input type="radio" name="sex" value="offline" <?php echo  set_radio('sex', 'offline', TRUE); ?>>Offline<br>
                    <input type="submit" name="submit" value="submit"><br/>
                    <a href="<?php echo base_url("tinhluong");;?>">Check ngay luong</a>
                </form>
        </div>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>