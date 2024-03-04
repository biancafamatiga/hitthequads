  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
    <style>
      body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        background-color: #204c37; 
        background: url('https://lh3.googleusercontent.com/p/AF1QipMTRcCjgegQea0LFRZugBUkjYoyNE9x4FLhpTwt=s1360-w1360-h1020') center/cover no-repeat fixed;
        background-image: rgba(32, 76, 55, 0.7);
    
      }

      .container {
        margin-top:-5px;
        padding-top:100px;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction: column; 
      
      }

      .form-container {
        background-color: #ffffff; 
        padding: 20px;
        border-radius: 2px; 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background-color: rgba(255, 255, 255, 0.9);
        width: 600px;
      
      }

      .btn-primary {
        background-color: #204c37;
        border: none;
        border-radius:50px;
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

      .sign-up-link {
        text-align: center;
        margin-top: 20px;
      }

      .sign-up-link a {
        color: white;
        text-decoration: none;
        font-size:15px;
      }

      .sign-up-link a:hover {
        text-decoration: underline;
      }

      p{
        color:white;
        font-size:15px;
      }
    </style>
  </head>

  <body>
    <div class="container">

      <form class="text-center form-container" action ="<?= base_url('index.php/napwc/reservation');?>" method="post">
      <h1>Welcome to NAPWC!</h1><br>
        <div class="form-group-label">
          <label for="Email">Email address:</label>
          <input type="email" class="form-control" name = "email" id="email" aria-describedby="emailHelp" placeholder="Enter email">
        </div>

        <div class="form-group-label">
          <label for="Password">Password:</label>
          <input type="password" class="form-control" name = "password" id="password" placeholder="Password">
        </div>

        <input class = "btn btn-primary" type = "submit" value = "Login">

        
    </form>

    <div class="sign-up-link">
        <p>No account yet? <a href="http://localhost/NAPWC/index.php/napwc/sign_up"   >Sign up</a></p>
      </div>


      
      </form>
    </div>
  </body>
