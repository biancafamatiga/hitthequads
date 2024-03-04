<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fieldtrip</title>
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
            background-color: #789461;
            border: none;
            border-radius: 50px;
            padding: 10px 20px;
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

        </style>
      
</head>
<body>
    
    </div>
    <br>
    <h1> Field Trip Reservation </h2>
      <!--form-->
      <div class="container"> 
  
    <form action="http://localhost/NAPWC/index.php/napwc/add_fieldtrip" method = "post">
        <h4> Contact Information </h4>
      <div class="mb-3">
        <label for="pokename" class="form-label">Name of School/Organization</label>
        <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="">
      </div>
      <div class="mb-3">
        <label for="typeone" class="form-label">Contact Person</label>
        <input type="text" class="form-control" name="contactperson" id="contactperson">
      </div>
      <div class="mb-3">
        <label for="typetwo" class="form-label">Email Address</label>
        <input type="email" class="form-control" name="email" id="email">
      </div>
      <div class="mb-3">
        <label for="typetwo" class="form-label">Phone Number</label>
        <input type="text" class="form-control" name="phone" id="phone">
      </div>
      <h4> Field Trip Details </h4>
      <div class="mb-3">
        <label for="typetwo" class="form-label">Preferred Date</label>
        <input type="date" class="form-control" name="date" id="date">
      </div>
      <div class="mb-3">
        <label for="typetwo" class="form-label">Preferred Time</label>
        <input type="time" class="form-control" name="time" id="time">
      </div>
      <div class="mb-3">
        <label for="typetwo" class="form-label">Number of Participants</label>
        <input type="number" class="form-control" name="participants" id="participants">
      </div>
      <div class="mb-3">
        <label for="typetwo" class="form-label">Grade Level</label>
        <input type="text" class="form-control" name="gradelevel" id="gradelevel">
      </div>
      <div class="mb-3">
        <label for="typetwo" class="form-label">Any special requests/comments? (optional) </label>
        <input type="text" class="form-control" name="request" id="request">
      </div>

      <div class="mb-3">
        <label for="id_image" class="form-label">Upload ID Image</label>
        <input type="file" class="form-control" name="id_image" id="id_image">
        <small class="form-text text-muted">Please upload an image of your ID for validation purposes.</small>
      </div>
      <!-- <div class="mb-4">
        <input type="checkbox" class="form-check-input" name="agree" id="agree">
        <label for="typetwo" class="form-label">I agree to abide by the rules and regulations of Ninoy Aquino Parks and Wildlife Center for the field trip.  </label>
        
      </div> -->
      <button type="submit" class="btn btn-primary" value="submit" name="submit">Submit</button>
</form>
      </div>
      <br><br><br><br><br>
</div>

</body>
</html>