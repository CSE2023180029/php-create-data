<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="CSS/Style.css">
   <title>Login</title>
   <style>
      .form{
         height: 280px;
      }
      .form form p{
         transform: translateY(50px);
         display: block;
         margin: 8px auto 0px auto;
         font-size: 13px;
         text-align: center;
      }
      .form form p a{
         color: #F5B7B1;
      }
      .form form p a:hover{
         color: #E74C3C;
      }
   </style>
</head>
<body>
   <div class="form">
      <div class="title">
         <h1>Login Form</h1>
      </div>
      <form action="" method="post">
         <input type="text" name="uname" placeholder="Name">
         <input type="password" name="pass" placeholder="Password">
         <input type="submit" name="login_btn" value="Login">
         <p>Don't have a accout <a href="Register.php">Rgister</a> now!</p>
      </form>
   </div>
</body>
</html>