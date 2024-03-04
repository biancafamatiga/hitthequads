<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
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

        h1{
            color:#204c37;
            text-align:center;
            font-weight:700;
            padding-top:70px;
        }

        h3{
            text-align:center;
            padding-bottom:20px;
        }
        .c{
            text-align:center;
        }
        
        .button-link {
            display: block;
            padding: 10px 20px;
            margin: 10px auto; 
            text-align: center;
            text-decoration: none;
            color: #fff;
            background-color: #204c37;
            border-radius: 5px;
            max-width:400px;
        }

        .button-link:hover {
            background-color: grey;
        }

        //services
        .symbols{
        padding: 8px;
        position: relative;
        height: 300px;
        width: 80px;
        margin-bottom: 15px;
        }

        .shead {
        text-align: center;
        }

        .shead h1 {
        color: darkgreen;
        font-size: 3rem;
        font-weight: 400;
        letter-spacing:1px ;
        margin: 0px;
        }

        .shead p {
        color: #789461;
        font-size: 1rem;
        margin: 5px;
        text-align: center;
        }

        .sboxcontainer {
        width: 100%;
        display: flex;
        justify-content: center;
        align-items: center;
        margin-top:20px;

        }
        
        .sbox img {
        height: 85px;
        }

        .sbox {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        border-radius: 10px;
        width: 260px;
        height: 350px;
        padding: 90px 25px;
        box-sizing: border-box;
        position: relative;

        }

        .sbox h1 {
        color: #576975;
        letter-spacing: 1px;
        font-size: 1.5rem ;
        margin-bottom: 10px;
        }

        .sbox p {
        color: rgba(87, 105, 117, 0.9);
        text-align: center;
        }

        .sbtn {
        width: 120px;
        border-radius: 40px;
        border: 1px solid forestgreen;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #789461;
        margin-top: 10px;

        }

        .sbox:hover {
        box-shadow: 2px 2px 30px rgba(0, 0, 0, 0.2);
        transition: all ease 0.3s;
        }

        .sbtn:hover {
        background-color: #789461;
        border: 1px #789461;
        color: white;
        transition: all ease 0.3s;
        }

        .bar {
        width: 100px;
        height: 6px;
        position: absolute;
        left: 50%;
        top: 0px;
        transform: translateX(-50%);
        background-color: #789461;
        border-radius: 0px 0px 10px 10px;
        display: none;
        animation: bar 0.5s;
        }

        .sbox:hover .bar{
        display: block;
        }

        @keyframes bar {
        0% {
            width: 0px;
        }
        100%{
            width: 100px;

        }
        }

        @media (max-width: 1050px){
        .sboxcontainer{
            flex-wrap: wrap;
        }
        .services {
            height: auto;
        }
        .shead {
            margin: 15px;
        }
        .sbox {
            flex-grow: 1;
        }
        }


        .container {
        padding-top: 150px;
        }

        a {
        text-decoration: none;
        }

        </style>
</head>
<body>
    <h1> Make a Reservation </h1>


    <!---SERVICES--->
    <div class="sboxcontainer">

    <!---BOX1--->
    <div class="sbox">
    <!---TOP BAR--->
    <div class="bar"></div>
    <!---IMAGE--->
    <img  class="symbols" src="https://i.imgur.com/SyXqP7J.png" >
    <!---SERVICES NAME--->
    <h1>Fieldtrip</h1>
    <!---DETAILS--->
    <p>Schools/ Organization Trips.</p>
    <!---BUTTON--->
    <a href="http://localhost/NAPWC/index.php/napwc/fieldtrip" class="sbtn">RESERVE</a>
    </div>

    <!---BOX2--->
    <div class="sbox">
    <!---TOP BAR--->
    <div class="bar"></div>
    <!---IMAGE--->
    <img  class="symbols" src="https://i.imgur.com/3mjX8mA.png">
    <!---SERVICES NAME--->
    <h1>Book A Facility</h1>
    <!---DETAILS--->
    <p> Choose an area.</p>
    <!---BUTTON--->
    <a href="http://localhost/NAPWC/index.php/napwc/bookfacility" class="sbtn">RESERVE</a>
    </div>

    <!---BOX3--->
    <div class="sbox">
    <!---TOP BAR--->
    <div class="bar"></div>
    <!---IMAGE--->
    <img  class="symbols"src="https://i.imgur.com/XFMa6X2.png">
    <!---SERVICES NAME--->
    <h1>Appointment</h1>
    <!---DETAILS--->
    <p>Meet our management.</p>
    <!---BUTTON--->
    <a href="http://localhost/NAPWC/index.php/napwc/appointment" class="sbtn">RESERVE</a>
    </div>    
    </section>

</body>
</html>