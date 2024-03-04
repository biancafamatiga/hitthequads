<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <style>
         body {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #204c37; 
            background: url('https://i.imgur.com/qPvzlAa.jpeg') center/cover no-repeat fixed;
            background-image: rgba(32, 76, 55, 0.7);
        }
        
        .container {
            margin-bottom: 70px;
            padding: 0;
            max-width: 100%;
        }

        h1, h2 {
            
            text-align: center;
            font-weight: 700;
            padding-top: 20px;
            padding-bottom: 10px;
        }

        h1{
            color:white;
            font-size:25px;
        }

        h2 {
            font-weight: 700;
            color: #12372A;
            text-align: center;
            font-size:20px;
        }

        .content-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 10px;
        }

        .content-box {
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 20px;
            padding: 15px;
            margin: 10px;
            max-width: 400px;
            max-height:500px;
            text-align: left;
            background-image: url('https://i.imgur.com/oFmr2Mu.png');
            background-size: cover;
            background-position: center;
            position: relative;
        }

        .content-box img {
            width: 100%;
            border-radius: 5px;
            max-width: 500px;
        }

        .content-box h2 {
            margin-top: 0;
        }

        .content-box p {
            color: #3b3b32;
            text-align: justify;
            padding-left:10px;
            padding-right:10px;
        
        }

        .carousel-caption {
        bottom: 3rem;
        z-index: 10;
        color: #f2f2f2;
        }

        .carousel-item {
        height: 22rem;
        background: black;
        color: white;
        position: relative;
        background-position: center;
        background-size: cover;
        overflow: hidden;
        padding:0px;
        max-width: 800px; 
        margin: 0 auto; 
        }

        .carousel-container {
            max-width: 800px;
            margin: 0 auto; 
        }
        
        .carousel-item img {
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        top: 0;
        background-position: center;
        background-size: cover;
        width: 100%;
        height: 100%;
        object-fit: cover;
        opacity: 80%;
        backdrop-filter: blur(10px); 
        }
    
        .carousel-indicators {
            position: absolute;
            bottom: 10px;
            left: 0;
            right: 0;
            display: flex;
            justify-content: center;
            padding: 0;
        }
            
        .carousel-indicators li {
            width: 6px;
            height: 6px;
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-indent: -9999px;
            overflow: hidden;
            white-space: nowrap;
        }

        .carousel-indicators li.active {
            background-color: #fff; 
        }

        .headd{
            color: #12372A;
            font-size:40px;
        }

        h3{
            color: #12372A;
            font-size:18px;
            text-align: left;
            padding-left: 400px;
            position: relative;
            margin-bottom: 10px;
        }

        h3 img {
            height: 18px;
            position: absolute;
            left: 370px;
            top: 0;
        }

        .pdd{
            padding-bottom:100px;
        }

    </style>
</head>
<body>
    <h1 class="headd">ABOUT US</h1>
    
    <div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
        <li data-target="#myCarousel" data-slide-to="3"></li>
    </ol>


        <div class="carousel-inner carousel-container">
            <div class="carousel-item active">
                <img src="https://4.bp.blogspot.com/-MSPxjvRFc2Y/UGlyL8aD8LI/AAAAAAAAAAY/x0yP5dbdL98/s1600/lagoon1.jpg" alt="Slide 1">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1 class ="h11">“A Protected Area in the City’s Heart”</h1>
                        <p>A breather from hectic city life and serves as an oasis in a highly urbanized environment. Beyond 
                    being a green space that boasts more than 4,000 individual trees, NAPWC also endeavors 
                    to be a venue for ex-situ conservation that is seen to augment biodiversity conservation. </p>
                    </div>
                    </div>
                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
            <div class="carousel-item">
                <img src="https://live.staticflickr.com/7269/7471733686_0130df6651_b.jpg" alt="Slide 2">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1 class ="h11">Ex-situ Conservation</h1>
                        <p>As NAPWC transforms its current living plant collection of mostly exotic into an arboretum 
                        of native and endemic trees, it further underscores its uniqueness as it is the only 
                        protected area that currently nurtures, ex-situ, the 19 critically endangered native and 
                        endemic tree species of the country.  </p>
                    </div>
                    </div>
                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
            <div class="carousel-item">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/a3/Ninoy_Aquino_Parks_and_Wildlife_01.jpg/1200px-Ninoy_Aquino_Parks_and_Wildlife_01.jpg" alt="Slide 2">
                <div class="container">
                    <div class="carousel-caption text-start">
                        <h1 class ="h11"> Ninoy Aquino Parks and Wildlife Center </h1>
                        <p>is a showcase of various species of flora and fauna that highlights urban biodiversity known to bring economic, 
                        health and ecological benefits to a wide variety of life. Classified as National Park by virtue of the Expanded National Integrated Protected Areas 
                        System (ENIPAS) Act of 2018 or RA 11038, an amendment of the National Integrated 
                        Protected Areas System (NIPAS) Act of 1992 or RA 7586  </p>
                    </div>
                    </div>
                <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
        
    </div>
</div>


    <div class="content-container">
        <div class="content-box">
            <h2>VISION</h2>
            <p>The Ninoy Aquino Parks and Wildlife Center as a sustainable tourism destination; a learning laboratory on Philippine native and endemic flora and fauna; with rich biodiversity that reduces the impacts of urbanization and improves the health and well-being of the people.</p>
            <img src="https://i.imgur.com/ovKv37s.jpeg" alt="Ninoy Wildlife Park">
        </div>
        <div class="content-box">
            <h2>MISSION</h2>
            <p>To assimilate nature in order to provide holistic outdoor recreation and sustainable tourism opportunities in a highly urbanized environment, with areas for recreation, nature appreciation and education on Philippine wildlife and biodiversity conservation.<br></p>
            <img src="https://i.imgur.com/ZqFUD7q.jpeg" alt="Ninoy Wildlife Park">
        </div>
    </div>

    <h1 class="headd">CONTACT US</h1>
    <div class="pdd">
        <h3><img src="https://static.vecteezy.com/system/resources/thumbnails/016/586/172/small/gps-icon-black-free-png.png" alt="icon"> Address: 1100 Diliman Quezon City, Philippines</h3>
        <h3><img src="https://iconape.com/wp-content/files/vw/61845/svg/facebook-icon-1.svg" alt="icon"> Facebook: https://www.facebook.com/bmbnapwc</h3>
        <h3><img src="https://cdn-icons-png.freepik.com/512/2767/2767188.png" alt="icon"> Email Address: bmb@bmb.gov.ph</h3>
        <h3><img src="https://cdn-icons-png.freepik.com/256/552/552724.png" alt="icon"> Contact Number: +(632) 89246031-35</h3>
    </div>
       

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>
