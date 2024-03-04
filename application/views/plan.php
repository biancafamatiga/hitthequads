<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visit Us</title>
    <style>
        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #204c37; 
            background: url('https://i.imgur.com/31SfCLZ.jpeg') center/cover no-repeat fixed;
            background-image: rgba(32, 76, 55, 0.7);
            margin-bottom: 200px;
        }

        h2 {
            color: #204c37;
            text-align: center;
            font-weight: 700;
        }

        .h2o {
            color: #204c37;
            text-align: center;
            font-weight: 700;
            padding-top: 80px;
            padding-right: 350px;
            padding-left:200px;
        }

        .h3o {
            color: #204c37;
            text-align: center;
            padding-right:150px;
        }

        .c {
            text-align: center;
            padding-right: 350px;
        }

        .right-column {
            position: absolute;
            top: 80px;
            right: 100px;
            font-size: 18px;
            line-height: 1.5;
            width: 400px;
            color: #204c37;
            font-weight: 700;
            padding: 20px;
            border-radius: 15px;
            background-color: rgba(174, 193, 174, 0.4);
        }

        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 10px; 
        }

        .button-link {
            display: block;
            padding: 10px 20px;
            text-align: center;
            text-decoration: none;
            color: #fff;
            background-color: #789461;
            border-radius: 50px;
            max-width: 350px;
        }

        .button-link:hover {
            background-color: #50623A;
        }


        h3 {
            font-size: 18px;
            font-weight: 600;
        }

        p {
            font-size: 12px;
        }

        a{
            font-weight:100;
        }
    </style>
</head>
<body>
    <h2 class="h2o"> Visit the City's Heart <br>Protected Area.</h2>
    <h3 class="h3o"> Book your reservations now!</h3>

    <div class="right-column">
        <h2 >PARK FEES</h2>
        <h3>Entrance Fee</h3>
        <p> Entrance fee for adults is priced at <strong>PHP 30.00 while PHP 15.00 </strong>for students. Senior 
        Citizen and Persons with Disability (PWD) as well as children below seven (7) years old are 
        exempted from the entrance fee. </p>
        <h3>Fishing Village</h3>
        <p> The rent costs <strong>PHP 2,500.00</strong> for the whole day (7:00AM – 5:00PM) exclusive of electricity fee which is PHP 100.00/hr.</p>
        <h3>Tea House</h3>
        <p> A whole day rent will cost <strong>PHP 500.00</strong> exclusive of electricity fee which is PHP 100.00/hr.</p>
        <h3>Amphitheater</h3>
        <p> Rental fee is <strong>PHP 1,350.00</strong> exclusive of electricity fee which is PHP 100.00/hr.</p>
        <h3>Picnic Shed</h3>
        <p>The Park offers five (5) Picnic Sheds which the visitors can rent for the whole day for only <strong>PHP 500.00</strong></p>
        <div class="button-container">
        <a href="http://localhost/NAPWC/index.php/napwc/log_in" class="button-link">Make a reservation</a>
    </div>
    </div>
</body>
</html>
