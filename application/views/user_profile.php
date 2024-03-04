<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #204c37; 
            background: url('https://i.imgur.com/oFmr2Mu.png') center/cover no-repeat fixed;
            background-image: rgba(32, 76, 55, 0.7);
            margin: 0;
            padding: 0;
            color: black; 
        }

        .container {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-grow: 1;
            padding-top:100px;
        }
            
        .profile-container,
        .reservation-box {
            color: black; 
            padding: 70px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 450px;
            height: 400px;
            text-align: left;
            border-radius: 3px;
            opacity: 0.9;
            line-height: 0.8; 
            margin-top: -90px;
            margin-left:8px;
            position: relative;
            border: 1px solid #ADBC9F;

        }

        .reservation-box {
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            color: black;
            padding: 70px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 450px;
            height: 400px;
            text-align: left;
            border-radius: 3px;
            opacity: 0.9;
            line-height: 0.8;
            margin-top: -90px;
            margin-left: 8px;
            position: relative;
            border: 1px solid #ADBC9F;
        }


        .profile-container {
            margin-right: 4px;
            background-image: url('https://i.imgur.com/fx7f7mE.png'); 
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            padding: 70px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 450px;
            height: 400px;
            text-align: left;
            border-radius: 3px;
            opacity: 0.9;
            line-height: 0.8;
            margin-top: -90px;
            margin-left: 8px;
            position: relative;
            border: 1px solid #ADBC9F;
        }

        .cancel-button {
            background-color: #A94438;
            color: white;
            border: none;
            padding: 9px 18px;
            border-radius: 50px;
            cursor: pointer;
            margin-left: 160px;
            margin-top:10px;
            font-size:11px;
            
        }

        .cancel-button:hover {
            background-color: darkred;
        }

        .left-column {
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }

        .profile-picture {
            width: 100px; 
            height: 100px; 
            border-radius: 50%;
            margin-bottom: 20px;
            margin-left:28px;
        }    

        .user-box {
            line-height: 0.8; 
            color: black; 
            text-align: left; 
        }

        .reservation-details {
            padding: 20px;
            border-radius: 10px;
            margin-top: 20px;
            background-color:#E3E1D9;
            border: 1px solid #C7C8CC;

        }

        h3 {
            text-align: center;
            padding-bottom: 10px;
            padding-top:-10 px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="profile-container">
            <img src="https://64.media.tumblr.com/3ad704a5a1513f139edfd290a79668a9/16a2ea308fe801ba-da/s1280x1920/84b52a6e21cc420428099335e2af2a50cb2ff5f9.jpg" alt="Profile Picture" class="profile-picture">
            <div class="user-box">
                <h3><strong>Ritz Azul</strong></h3>
                <p><strong>Email: </strong> ritzblu18@gmail.com</p>
                <p><strong>Contact No: </strong> 09770194135</p>
                <p><strong>Address: </strong> Manila</p>
            </div>
        </div>
        <div class="reservation-box">
            <h3><strong>RESERVATIONS</strong></h3>
            <div class="reservation-details">
                <p><strong>Reservation ID:</strong> #143143</p>
                <p><strong>Type of Reservation: </strong>Facility Booking</p>
                <p><strong>Facility: </strong> Tea House</p>
                <p><strong>Date of Reservation: </strong>February 7, 2024</p>
                <p><strong>Time: </strong>8:00-10:00am</p>
                <p><strong>Status:</strong><span style="color: green;"> Approved!</p>
                <button class="cancel-button">Cancel</button>
            </div>
            
        </div>
    </div>
</body>
</html>
