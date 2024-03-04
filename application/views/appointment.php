<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
    <style>
          body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #204c37; 
            background: url('https://i.imgur.com/oFmr2Mu.png') center/cover no-repeat fixed;
            background-image: rgba(32, 76, 55, 0.7);
            padding-bottom:100px;
        }

        }
      .container {
          background-color: rgba(255, 255, 255, 0.6);
          border-radius: 6px; 
          padding: 20px;
          max-width: 600px; 
          width: 100%;x
          
      }
      h1{
            color:#204c37;
            text-align:center;
            font-weight:700;
            padding-top:20px;
            padding-bottom:25px;
        }
        
      h4{
        text-align:center;
      }
      .container form button {
            display: block;
            margin: 0 auto; 
            background-color: #204c37; 
            color: #fff; 
            border: none;
            padding: 10px 10px;
            border-radius: 5px;
            cursor: pointer;
        }
      h1{
            color:#204c37;
            text-align:center;
            font-weight:700;
            padding-top:20px;
            padding-bottom:25px;
        }
        
      h4{
        text-align:center;
      }
      .container form button {
            display: block;
            margin: 0 auto; 
            background-color: #789461;
            border: none;
            border-radius: 50px;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        
        .container form button:hover {
            background-color: #50623A;
        }

        .mb-4 {
            display: flex;
            align-items: center; 
            margin-bottom: 15px;
        }
        .mb-4 label {
            margin-bottom: 0; 
            margin-left: 20px; 
        }
        .mb-4 input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 2px;
        }
        footer a:hover {
            color: #fff;
        }
        </style>
</head>
<body>
    
    </div>
    <br>
    <h1> Appointment Reservation </h2>
      <!--form-->
      <div class="container"> 
       
      <form action="http://localhost/NAPWC/index.php/napwc/add_appointment" method = "post">
        <h4> Contact Information </h4>
  <div class="mb-3">
    <label for="name" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="" required>
  </div>
  <div class="mb-3">
    <label for="organization" class="form-label">Organization/Company/School</label>
    <input type="text" class="form-control" name="organization" id="organization" aria-describedby="emailHelp" placeholder="" required>
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email Address</label>
    <input type="email" class="form-control" name="email" id="email" required>
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone Number</label>
    <input type="text" class="form-control" name="phone" id="phone" required>
  </div>
  <h4> Appointment Details </h4>
  <div class="mb-3">
    <label for="date" class="form-label">Preferred Date</label>
    <input type="date" class="form-control" name="date" id="date" required>
  </div>
  <div class="mb-3">
    <label for="time" class="form-label">Preferred Time</label>
    <input type="time" class="form-control" name="time" id="time" required>
  </div>
  <div class="mb-3">
    <label for="purpose" class="form-label">Purpose of Appointment</label>
    <input type="text" class="form-control" name="purpose" id="purpose" required>
  </div>
  <div class="mb-3">
    <label for="topics" class="form-label">Specific topics/questions </label>
    <input type="text" class="form-control" name="questions" id="questions" required>
  </div>
  <!-- <div class="mb-4">
    <input type="checkbox" class="form-check-input" name="agree" id="agree">
    <label for="agree" class="form-label"> I understand that this appointment is subject to availability, 
        and I agree to comply with the rules and regulations of Ninoy Aquino Parks and Wildlife Center during my visit.
    </label>
  </div> -->
  <div class="mb-3">
    <label for="id_image" class="form-label">Upload ID Image</label>
    <input type="file" class="form-control" name="id_image" id="id_image">
    <small class="form-text text-muted">Please upload an image of your ID for validation purposes.</small>
  </div>  
  <button type="submit" class="btn btn-primary" value="submit" name="submit">Submit</button>
</form>
      </div>
</div><br><br><br><br>

</body>
</html>