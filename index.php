<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="bootstrap.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="navbar.css">

    <title>Bank Of Sparks</title>
    <style>
.footer{
  background: #647aa3;
}
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #647aa3;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 19px;
  padding: 10px;
  width: 400px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 3px;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}
.button a{
  color : #fff;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
  color : #fff;

}

.button:hover span {
  padding-right: 25px;
  color : #fff;

}

.button:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
  </head>
  <body>

  <?php
  include 'navbar.php';
?>
  
      <div class="container-fluid">
      <!-- Introduction section -->
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <h3>Welcome to the</h3>
                  <h1>BANK OF SPARKS</h1>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="bank.jpg" class="img-fluid pt-2">
              </div>
            </div>
            <br>
            <center><a href="transfermoney.php"><button class="button" style="vertical-align:middle"><span>VIEW ALL CUSTOMERS </span>
</a></center>
<br>

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
