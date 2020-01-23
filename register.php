<?php
    
    include('database/config.php');

if(isset($_POST['btnregister']))
{
    $fullname   = $_POST['txtFullname'];
    $email      = $_POST['txtEmail'];
    $username   = md5($_POST['txtUsername']);
    $password   = md5($_POST['txtPassword']);
    $status     = 'active';
    
   $_SQL = "INSERT INTO members(fullname, email, username, pass, statuss)
            VALUES('$fullname', '$email', '$username', '$password', '$status')";
    
    $query = mysqli_query($$conn, $_SQL) or die(mysqli_error());
    
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container panel_reg">
        <div class="row">
          
          <div class="panel-group">
            <div class="panel panel-primary">
              <div class="panel-heading">Register Form</div>
              <div class="panel-body">
     <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
  <div class="form-group">
    <label for="fullname">Fullname:</label>
    <input type="text" class="form-control" id="fullname" name="txtFullname">
  </div>
  <div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" name="txtEmail">
  </div>
  <div class="form-group">
    <label for="username">Username:</label>
    <input type="text" class="form-control" id="username" name="txtUsername">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd" name="txtPassword">
  </div>
  <button type="submit" class="btn btn-primary btn-block" name="btnregister" id="btnRegister">Register</button>
</form>
      </div>
    </div>
            </div>
        </div>
    </div>
    
    
    <script>
        $(document).ready(function(){
             $('#btnRegister').click(function(){
            
            var fullname = $('#fullname').val();
            var email = $('#email').val();
            var username = $('#username').val();
            var password = $('#pwd').val();
            
            if(fullname == '' || email == '' || username == '' || password == '')
                {
                    swal({
                          title: "Empty Fields",
                          text: "All Fields are Requried!",
                          icon: "warning",
                          button: "Ok",
                        });
                }
            else
                {
                    swal("Data has been successfully inserted!", "success");
                }
            
        });    
        });
       
    </script>
    
    
</body>
</html>