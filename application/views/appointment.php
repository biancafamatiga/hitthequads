<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
             body {
            background-image: url('https://pais.bmb.gov.ph/pas/bmb_assets2/img/website/slider/lagoon1.jpg'); 
            background-size: cover;
            background-repeat: no-repeat; 
            margin: 0; 
            padding: 0; 
            backdrop-filter: blur(7px);
            
        }

      .container {
          background-color: rgba(255, 255, 255, 0.6);
          border-radius: 6px; 
          padding: 20px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.3); 
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
    <h1> Appointment Reservation </h2>
      <!--form-->
      <div class="container"> 
       
      <form action=" " method = "post">
        <h4> Contact Information </h4>
  <div class="mb-3">
    <label for="pokename" class="form-label">Name</label>
    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="mb-3">
    <label for="typetwo" class="form-label">Email Address</label>
    <input type="email" class="form-control" name="email" id="email">
  </div>
  <div class="mb-3">
    <label for="typetwo" class="form-label">Phone Number</label>
    <input type="text" class="form-control" name="phone" id="phone">
  </div>
  <h4> Appointment Details </h4>
  <div class="mb-3">
    <label for="typetwo" class="form-label">Preferred Date</label>
    <input type="date" class="form-control" name="date" id="date">
  </div>
  <div class="mb-3">
    <label for="typetwo" class="form-label">Preferred Time</label>
    <input type="time" class="form-control" name="time" id="time">
  </div>
  <div class="mb-3">
    <label for="typetwo" class="form-label">Purpose of Appointment</label>
    <input type="text" class="form-control" name="purpose" id="purpose">
  </div>
  <div class="mb-3">
    <label for="typetwo" class="form-label">Specific topics/questions </label>
    <input type="text" class="form-control" name="topics" id="topics">
  </div>
  <div class="mb-3">
    <label for="typetwo" class="form-label">Any special requests/comments? (optional) </label>
    <input type="text" class="form-control" name="topics" id="topics">
  </div>
  <div class="mb-4">
    <input type="checkbox" class="form-check-input" name="agree" id="agree">
    <label for="typetwo" class="form-label"> I understand that this appointment is subject to availability, 
        and I agree to comply with the rules and regulations of Ninoy Aquino Parks and Wildlife Center during my visit.
    </label>
  </div>
  <button type="submit" class="btn btn-primary" value="save" name="save">Submit</button>
</form>
      </div>
</div><br><br><br><br>
</body>
</html>
