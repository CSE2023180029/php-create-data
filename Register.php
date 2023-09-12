<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="CSS/Style.css">
   <title>Register Up</title>
   <style>
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
         <h1>Register Form</h1>
      </div>
      <form action="" method="post">
         <input type="text" name="name" placeholder="full name">
         <input type="text" name="phone" placeholder="phone number">
         <input type="text" name="email" placeholder="Email">
         <input type="password" name="pass" placeholder="Password">
         <input type="password" name="confipass" placeholder="Confi Password">
         <input type="submit" name="signup_btn" value="Register">
         <p>Have a accout <a href="Login.php">Login</a> now!</p>
      </form>
   </div>
</body>
</html>