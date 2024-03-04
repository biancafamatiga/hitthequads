<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explore</title>
    <style>
        body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
        background-color: #204c37; 
        background: url('https://i.imgur.com/oFmr2Mu.png') center/cover no-repeat fixed;
        background-image: rgba(32, 76, 55, 0.7);
        }

        h1 {
            color: #204c37;
            text-align: center;
            font-weight: 700;
            padding-top: 20px;
            padding-bottom: 10px;
        }

        .container {
            position: relative;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .image-container {
            display: flex;
            justify-content: center;
            position: relative;
        }

        .image-container img {
            width: 100%;
            height: 90%;
            border-radius: 10px;
            margin-bottom: 0;
            display: block;
        }

        .image-container a {
            width: 30%;
            display: inline-block;
            text-decoration: none;
            margin: 0 10px;
            position: relative;
        }

        .image-container img:hover {
            transform: scale(0.9);
            filter: blur(2px);
        }

        .image-label {
            text-align: center;
            font-weight: 600;
            color: #204c37;
            position: absolute;
            bottom: -20px;
            left: 50%;
            transform: translateX(-50%);
            padding: 5px 10px;
            border-radius: 5px;
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
            color: white;
        }

    </style>
</head>
<body>
    <br>
    <h1>EXPLORE</h1>
    <div class="container">
        <div class="image-container">
            <a href="http://localhost/NAPWC/index.php/napwc/e_flora">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a8/Donna_Aurora_and_it%27s_flower_in_Ninoy_Aquino_Parks_and_Wildlife_Center.jpg"
                    alt="flora 1">
                <div class="image-label">Flora</div>
            </a>
            <a href="http://localhost/NAPWC/index.php/napwc/e_attractions">
                <img src="https://scontent.fmnl9-4.fna.fbcdn.net/v/t1.6435-9/202834395_3080514085516897_591595661660984194_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=7f8c78&_nc_eui2=AeFBnzEcfXSExJwksAJBQaPyDEWrgGcFSXMMRauAZwVJc5CsessZd9CGxQk5erM1EKlz1MQSCmaITLbw6HaZ0Vef&_nc_ohc=rwi2BOLXFisAX8QhNyV&_nc_ht=scontent.fmnl9-4.fna&oh=00_AfATDEwAaSF1-fv4cxqABuu42wIn5M7H-tIW95hnTw0gdQ&oe=66045191"
                    alt="attractions 3">
                <div class="image-label">Attractions</div>
            </a>
        </div>
    </div>
</body>
</html>
