<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Sign Up</title>
  <style>
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      background-color: #FFFF;
      background: url('https://i.imgur.com/qPvzlAa.jpeg') center/cover no-repeat fixed;

    }

    .container {
      margin-top: 5px;
      display: flex;
      align-items: center;
      justify-content: center; 
      flex-direction: row; 
    }

    .form-container {
      padding: 20px;
      border-radius: 3px;
      width: 600px;
    }

    .btn-primary {
      background-color: #789461;
      border: none;
      border-radius: 50px;
      padding:10px;
      width:100px;
    }

    .btn-primary:hover {
            background-color: #50623A;
        }


    .btn-primary a {
      color: inherit;
      text-decoration: none;
    }

    h1 {
      color: #204c37;
      text-align: center;
      font-weight: 700;
      padding-top: 20px;
      padding-bottom: 10px;
    }

    .form-group-label {
      display: flex;
      flex-direction: row;
      align-items: center;
      margin-bottom: 15px;
    }

    .form-group-label label {
      flex: 1;
      margin-right: 15px;
    }

    .form-group-label input {
      flex: 2;
    }

    .form-group-label label {
      font-weight: bold;
    }

    .form-control {
        border-radius:15px;
    }
  </style>
</head>

<body>
  <div class="container">

    <!-- Sign Up Form -->
    <form class="text-center form-container" action="<?= base_url('index.php/napwc/signup');?>" method="post">
      <br><h1>CREATE AN ACCOUNT</h1><br>
      <div class="form-group-label">
        <label for="FullName">Full Name:</label>
        <input type="text" class="form-control" name="full_name" id="full_name" placeholder="Enter your full name...">
      </div>

      <div class="form-group-label">
        <label for="Email">Email address:</label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp"
          placeholder="Enter email...">
      </div>

      <div class="form-group-label">
        <label for="Password">Password:</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Password...">
      </div>

      <div class="form-group-label">
        <label for="RePassword">Re-Enter Password:</label>
        <input type="repassword" class="form-control" name="repassword" id="repassword" placeholder="Re-Enter Password...">
      </div>

      <input class="btn btn-primary" type="submit" value="Sign Up">

    </form>

  </div><br><br><br>
</body>

</html>
