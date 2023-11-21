<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1 {
            color: #204c37;
            text-align: center;
            font-weight: 700;
            padding-top: 20px;
            padding-bottom: 10px;
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
            background-color: #407a5e;
            color:white;
        }

    </style>
</head>
<body>
    <h1>EXPLORE</h1>

    
    <div class="image-container">
        <img src="https://w0.peakpx.com/wallpaper/860/241/HD-wallpaper-little-bird-on-a-lotus-leaves-lotus-bird-flower-beautiful-pink.jpg" alt="flora 1">
        <img src="https://img.traveltriangle.com/blog/wp-content/uploads/2019/06/og-for-Ninoy-Aquino-Wildlife-Park.jpg" alt="fauna 2">
        <img src="https://media-cdn.tripadvisor.com/media/photo-s/04/80/a1/7e/ninoy-aquino-parks-and.jpg" alt="attractions 3">
    </div>

    <div class="labell">
        <div class="image-label">Flora</div>
        <div class="image-label">Fauna</div>
        <div class="image-label">Attractions</div>
    </div>

    <div class="button-container">
        <button class="button">See 3D Interactive Map! ></button>
    </div>
   
</body>
</html>