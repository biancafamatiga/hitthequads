<!DOCTYPE html>
<html lang="en">
<head>
    <title>3D Virtual Tour</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>

        body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #204c37; 
            background: url('https://i.imgur.com/WI5deI4.jpg') center/cover no-repeat fixed;
            background-image: rgba(32, 76, 55, 0.7);
        
            }

        h3 {
            color: #204c37;
            text-align: center;
            font-weight: 700;
             padding-top: 150px;
            padding-bottom: 15px;

        }

        .image-container {
            display: flex;
            justify-content: space-around;
            margin: 20px;
        }

        .labell {
            display: flex;
            justify-content: space-around;
            margin: 20px;
        }

        .image-container img {
            width: 30%;
            height: auto;
            border-radius: 20px;
            margin-bottom: 10px;
        }

        .image-container img:hover {
            transform: scale(0.9);
            filter: blur(3px);
        }

        .image-label {
            padding-left:40px;
            text-align: center;
            font-weight:600;
            color:#204c37;
            margin-top:-10px;
        }

        .button-container {
            text-align: center;
            
        }

        .button {
            padding: 10px 20px;
            font-size: 16px;
            color: #204c37;
            border: #204c37;
            border-radius: 30px;
            cursor: pointer;
        }

        .button:hover {
            background-color: #50623A;
            color:white;
        }

    </style>
</head>
<body>
    
    <h3> Explore Ninoy Aquino Parks <br>and Wildlife Center Virtually! </h3>

    <div class="button-container">
        <button class="button">See 360 Interactive Map! ></button>
    </div>


</body>
</html>