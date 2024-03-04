<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>ADMIN</title>
  <style>
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
      background-color: #204c37; 
      background: url('https://lh3.googleusercontent.com/p/AF1QipOzqAWtCPv9e7rSS_cyIPz_oHkOcU2uAAFlxkSb=s1360-w1360-h1020') center/cover no-repeat fixed;
      background-image: rgba(32, 76, 55, 0.7);
  
    }

    .container {
      margin-top:70px;
      padding-top:100px;
      display: flex;
      align-items: center;
      justify-content: center;
      flex-direction: column; 
    
    }

    .form-container {
      background-color: #ffffff; 
      padding: 20px;
      border-radius: 5px; 
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      background-color: rgba(255, 255, 255, 0.9);
      width: 600px;
    
    }

    .btn-primary {
      background-color: #204c37;
      border: none;
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

    .btn-primary:hover {
        background-color: #50623A;
    }

  </style>
</head>

<body>
  <div class="container">

    <form class="text-center form-container" action ="<?= base_url('index.php/napwc/r_dashboard');?>" method="post">
    <h1>NAPWC ADMIN</h1><br>
      <div class="form-group-label">
        <label for="Email">Username:</label>
        <input type="email" class="form-control" name = "email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
      </div>

      <div class="form-group-label">
        <label for="Password">Password:</label>
        <input type="password" class="form-control" name = "password" id="password" placeholder="Password">
      </div>

      <input class = "btn btn-primary" type = "submit" value = "Login">

      
  </form>

     
    </form>
  </div>
</body>
