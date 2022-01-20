<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="bootstrap.css">

    <link rel="stylesheet" type="text/css" href="table.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">
    <link rel="stylesheet" type="text/css" href="createuser.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
    @import url("https://fonts.googleapis.com/css2?family=Raleway:wght@600&display=swap");
.nav-link {
  margin-right: 50px;
  color: #205ba7;
  letter-spacing: 0.5px;
  transition: 0.5s;
}
.navbar-brand {
  color: #f32b0c;
  letter-spacing: px;
}
h2 {
  color: #4c4b4b;
  letter-spacing: 0.5px;
  font-family: raleway;
}

</style>
</head>

<body>
<?php
    include 'config.php'; 
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='createuser.php';
                     </script>";
                    
    }
  }
?>

<!-- navbar --> 
<nav class="navbar navbar-expand-md navbar-light bg-light">
      <a class="navbar-brand" href="index.php">BANK OF SPARKS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="createuser.php">Create User</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="transfermoney.php">Transfer Money</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="transactionhistory.php">Transaction History</a>
              </li>
          </div>
       </nav>


        <h2 class="text-center pt-4">Create a New User</h2>
        <br>

  <div class="background">
  <div class="container">
    <div class="screen">
      <div class="screen-body">
        <div class="screen-body-item">
          <form class="app-form" method="post">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
            </div>
            <br>
            <div class="app-form-group button">
              <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
              <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="footer">
              <br>
<br>
<center><a href="https://www.facebook.com/thesparksfoundation.info"><img src="https://img.icons8.com/color/48/000000/facebook-new.png"/></a>
<a href="https://www.instagram.com/thesparksfoundation.info/?hl=en"><img src="https://img.icons8.com/fluency/48/000000/instagram-new.png"/></a>
<a href="https://www.thesparksfoundationsingapore.org/"><img src="https://img.icons8.com/color/48/000000/google-logo.png"/></a>
<a href="https://www.linkedin.com/company/the-sparks-foundation/"><img src="https://img.icons8.com/color/48/000000/linkedin.png"/></a>
<br>
<br>
<br>
<br>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
