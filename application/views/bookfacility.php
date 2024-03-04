<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facility</title>
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
              
      h4{
        text-align:center;
      }
      footer a:hover {
            color: #fff;
      }
        </style>
</head>
<body>
    
    </div>
      <!--form-->
      <br>
      <h1> Book a Facility </h1>
      <div class="container"> 
     
      <form action="http://localhost/NAPWC/index.php/napwc/add_facilities" method = "post">
        <h4> Contact Information </h4>
  <div class="mb-3">
    <label for="name" class="form-label">Name of School/Organization</label>
    <input type="text" class="form-control" name="name" id="name" aria-describedby="emailHelp" placeholder="">
  </div>
  <div class="mb-3">
    <label for="contactperson" class="form-label">Contact Person</label>
    <input type="text" class="form-control" name="contactperson" id="contactperson">
  </div>
  <div class="mb-3">
    <label for="email" class="form-label">Email Address</label>
    <input type="email" class="form-control" name="email" id="email">
  </div>
  <div class="mb-3">
    <label for="phone" class="form-label">Phone Number</label>
    <input type="text" class="form-control" name="phone" id="phone">
  </div>
  <h4> Booking Details </h4>
  <div class="mb-3">
    <label for="date" class="form-label">Preferred Date</label>
    <input type="date" class="form-control" name="date" id="date">
  </div>
  <div class="mb-3">
    <label for="time" class="form-label">Start Time</label>
    <input type="time" class="form-control" name="time" id="time">
  </div>
  <div class="mb-3">
    <label for="time" class="form-label">End Time</label>
    <input type="time" class="form-control" name="time" id="time">
  </div>
  <div class="mb-3">
    <label for="guests" class="form-label">No. of Guests</label>
    <input type="text" class="form-control" name="guests" id="guests">
  </div>
  <div class="mb-3">
    <label for="guests" class="form-label">No. of Vehicle</label>
    <input type="text" class="form-control" name="vehicle" id="vehicle">
  </div>
  <div class="mb-3">
    <label for="guests" class="form-label">Vehicle Type</label>
    <input type="text" class="form-control" name="vehicle" id="vehicle">
  </div>
  <div class="mb-3">
    <div class="form-group">
    <label for="type" class="form-label">Type of Facility</label> <br>
    <input type="radio" class="form-check-input" name="type" id="type" value="Amphitheater"> Ampitheater<br>
    <input type="radio" class="form-check-input" name="type" id="type" value="Tea House"> Tea House <br>
    <input type="radio" class="form-check-input" name="type" id="type" value="Fishing Village"> Fishing Village<br>
    <input type="radio" class="form-check-input" name="type" id="type" value="Picnic Sheds"> Picnic Sheds<br> 
    <input type="radio" class="form-check-input" name="type" id="type" value="Bulwagan Ninoy"> Bulwagan Ninoy <br>
    </div>
  </div>
  <div class="mb-3">
    <div class="form-group">
    <label for="purpose" class="form-label">Purpose of Booking</label> <br>
    <input type="radio" class="form-check-input" name="purpose" id="purpose" value="Commercial Filming/Photography"> Commercial Filming/Photography <br>
    <input type="radio" class="form-check-input" name="purpose" id="purpose" value="Photoshoot"> Photoshoot <br>
    <input type="radio" class="form-check-input" name="purpose" id="purpose" value="Seminar/Conference"> Seminar/Conference <br>
    <input type="radio" class="form-check-input" name="purpose" id="purpose" value="Recreational"> Recreational <br>
    <input type="radio" class="form-check-input" name="purpose" id="purpose" value="Birthday"> Birthday<br>
    <input type="radio" class="form-check-input" name="purpose" id="purpose" value="Wedding"> Wedding <br>
    </div>
  </div>
  <div class="mb-3">
    <input type="radio" class="form-check-input" name="purpose" id="purpose" value="Others"> Other Purpose <br>
    <input type="text" class="form-control" name="other" id="other">
  </div>
  <div class="mb-3">
    <div class="form-group">
    <label for="purpose" class="form-label">Electricity Use</label> <br>
    <input type="radio" class="form-check-input" name="yes" id="yes" value="yes"> Yes <br>
    <input type="radio" class="form-check-input" name="no" id="no" value="no"> No <br>
    </div>
  </div>
  <div class="mb-3">
    <label for="typetwo" class="form-label">Any special requests/accomodations needed? (optional) </label>
    <input type="text" class="form-control" name="request" id="request">
  </div>
  <!-- <div class="mb-3">
    <input type="checkbox" class="form-check-input" name="agree" id="agree">
    <label for="typetwo" class="form-label">I agree to abide by the rules and regulations of Ninoy Aquino Parks and Wildlife Center's facilites.
    </label>
  </div> -->
  <div class="mb-3">
    <label for="id_image" class="form-label">Upload ID Image</label>
    <input type="file" class="form-control" name="id_image" id="id_image">
    <small class="form-text text-muted">Please upload an image of your ID for validation purposes.</small>
  </div>
  <button type="submit" class="btn btn-primary" value="submit" name="submit">Submit</button> <br> <br> <br> <br>
</form>
      </div>
</div>
</body>
</html>