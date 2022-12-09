<?php
  session_start();
  error_reporting(0);
  include 'connection.php';
  if($_SESSION['U_TYPE']!=''){
    $_SESSION['U_TYPE']='';
    session_destroy();
  }
  if(isset($_POST['submit'])){
    session_start();
    $uname=$_POST['uname'];
    $password=$_POST['password'];

    $query="SELECT * FROM `user` WHERE `user_name`='$uname' AND `user_password`='$password'";
    $result=mysqli_query($con,$query);
    if(mysqli_num_rows($result) == 1){
     while($row=mysqli_fetch_assoc($result)){
        $_SESSION['U_TYPE']="USER";
        $_SESSION['U_ID']=$row['user_id'];
        $_SESSION['U_NAME']=$row['user_name'];
      }
      echo "<script type='text/javascript'> document.location ='index.php'; </script>";
    }
    else{
      echo "<script>alert('Your Credential Details are invalid.Please Try Again!');</script>";
    }
  }
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign up</title>
  <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="form">

      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Jiandikishe</a></li>
        <li class="tab"><a href="#login">Ingia</a></li>
      </ul>

      <div class="tab-content">
        <div id="signup">
          <h1>Jiandikishe Plan B</h1>

          <form action="connection.php" method="post">

          <div class="top-row">
            <div class="field-wrap">
              <label>
                Jina la Kwanza<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" />
            </div>

            <div class="field-wrap">
              <label>
             Jina la Mwisho<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off"/>
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Barua Pepe<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Neno lako la siri<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>

          <button type="submit" class="button button-block"/>Jiandikishe</button>

          </form>

      </div>
      <div id="login">
          <h1>Karibu Plan B  Jua Kali !</h1>

          <form action="server.php" method="post">

            <div class="field-wrap">
            <label>
              Barua Pepe<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off"/>
          </div>

          <div class="field-wrap">
            <label>
              Neno la siri<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off"/>
          </div>


          <button class="button button-block"/>Ingia</button>

          </form>

        </div>
</div>
      </div><!-- tab-content -->

</div> <!-- /form -->
<!-- partial -->
  <script src='//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="./script.js"></script>

</body>
</html>
