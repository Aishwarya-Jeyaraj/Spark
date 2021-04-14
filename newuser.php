<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <link rel="stylesheet" type="text/css" href="css/signin.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/footerstyle.css">
</head>

<body>
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $s = " select * from users where name='$name' && email='$email'";
    $res=mysqli_query($conn,$s);
    $num=mysqli_num_rows($res);
    if($num==1){
        echo '<script>alert("Username Already Taken")</script>';
       
    }
  else{
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='transfermoney.php';
                     </script>";
    }              
    }
  }
?>

<?php
  include 'navbar.php';
?>
<br>

<div class="login">
  <div class="login-header">
    <h1>Create a User</h1>
  </div>
  <form method="post">
  <div class="login-form">
    <h4>Username:</h4>
    <input type="text" name="name" placeholder="Username"/><br>
    <h4>Email:</h4>
    <input type="email" name="email" placeholder="Email"/>
    <h4>Balance:</h4>
    <input type="balance" name="balance" placeholder="Balance"/>
    <br><br>
    <input type="submit" name="submit" value="SignIn" class="login-button"/>
    <input type="reset" name="reset" value="Reset" class="login-button"/>
</form>  
    <br>
    </div>
</div>


<?php
  include 'footer.php';
  ?>
</body>
</html>