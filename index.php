<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="css/style.css">

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #29ca8e;
        }

        #contact-form {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .form-control {
            margin-bottom: 15px;
        }
        button {
    background: #29ca8e;
    border-radius: 50px;
    border: 1px solid #ffffff;
    
    font-size: inherit;
    font-weight: normal;
    padding: 15px 30px;
    transition: 0.5s;
    
  }
  .error{
   background: #f2dede;
   color: #a94442;
   padding: 10px;
   width: 95%;


  }
    </style>
</head>
<body id="top">
    <form id="contact-form" action="login.php" method="post">
        <h2>LOGIN:</h2>
        <?php if(isset($_GET['error'])){ ?>
           <p class="error"><?php echo $_GET['error'] ; ?></p> 
         <?php } ?>   
        <div class="col-lg-8 col-xs-12">
            <label>User Name:</label>
            <input type="text" class="form-control" placeholder="User Name" name="uname" required>
        </div>
        <div class="col-lg-8 col-xs-12">
            <label>Password:</label>
            <input type="password" class="form-control" placeholder="Password" name="password" required>
        </div>
        <div class="col-lg-8 col-xs-12">
            <button type="submit">Login</button>
        </div>
    </form>
</body>
</html>
