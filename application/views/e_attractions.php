<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Attractions</title>
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

    header {
      background-color: #333;
      color: #fff;
      padding: 10px;
      text-align: center;
    }

    .gallery-container {
      margin-left:40px;
      margin-right:40px;
      display: flex;
      justify-content: center;
      align-items: center;
    
    }

    .card {
      perspective: 1000px;
      width: 500px;
      height: 300px;
      position: relative;
      transform-style: preserve-3d;
      transition: transform 0.5s;
      margin: 10px;
      border-radius:20px;

    }

    .card:hover {
      transform: rotateY(180deg);
    }

    .card .card-inner {
      width: 100%;
      height: 100%;
      position: absolute;
      transform-style: preserve-3d;
      border-radius:20px;

    }

    .card .card-inner .front img,
    .card .card-inner .back img {
      width: 100%;
      height: 100%;
      object-fit: cover; 
      border-radius:5px;
      
    }

    .card .card-inner .card-face {
      width: 100%;
      height: 100%;
      position: absolute;
      backface-visibility: hidden;
      display: flex;
      justify-content: center;
      align-items: center;
      font-size: 18px;
      color: #fff;
      border-radius:5px;
    }

    .card .card-inner .front {
      background-color: #E3E1D9;
    }

    .card .card-inner .back {
      background-color: #ADBC9F;
      transform: rotateY(180deg);
      padding-left:50px;
      padding-right:50px;
    }


    h1 {
        color: #204c37;
        text-align: center;
        font-weight: 700;
        padding-top: 20px;
        padding-bottom: 10px;
    }

    .card .card-inner .front::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(132, 164, 139, 0.0);
      z-index: 1;
      border-radius:5px;
    }

    h3{
        padding-left:200px;
        padding-right:200px;
        font-size: 16px;
        text-align: center;

    }
  </style>
</head>
<body><br>

<h1>FACILITIES</h1>
<h3>Various structures and facilities can be found within the Park – from an open-air venue to a serene patch, which serve as venues for special, social and educational activities.</h3>

<div class="gallery-container">

  <div class="card">
    <div class="card-inner">
      <div class="card-face front">
        <img src="https://i.imgur.com/mcaXdyf.png" alt="Amphitheater" style="max-width: 100%; max-height: 100%;">
      </div>
      <div class="card-face back">
        <div>
          <h2>Amphitheater</h2>
          <p>The open-air amphitheater allows the visitors to enjoy an impressive view of the man-made lagoon and can accommodate about 500 – 600 people.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-inner">
      <div class="card-face front">
        <img src="https://i.imgur.com/zN22oW3.png" alt="Tea House" style="max-width: 100%; max-height: 100%;">
      </div>
      <div class="card-face back">
        <div>
          <h2>Tea House</h2>
          <p>The Tea House can accommodate 40 – 50 persons and is ideal for workshops, seminars, meetings and for intimate celebrations.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-inner">
      <div class="card-face front">
        <img src="https://i.imgur.com/3W4m3n8.jpeg" alt="Fishing Village" style="max-width: 100%; max-height: 100%;">
      </div>
      <div class="card-face back">
        <div>
          <h2>Fishing Village</h2>
          <p>The Fishing Village imitates the native fishing villages in Mindanao. It includes five (5) houses on stilts at the edge of the lagoon, which can accommodate 100 – 150 persons. This venue is ideal for wedding receptions and other social functions.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="gallery-container">
  <div class="card">
    <div class="card-inner">
      <div class="card-face front">
        <img src="https://i.imgur.com/ylufUrm.png" alt="Picnic Sheds" style="max-width: 100%; max-height: 100%;">
      </div>
      <div class="card-face back">
        <div>
          <h2>Picnic Sheds</h2>
          <p>The Park offers five (5) picnic sheds which can be rented by the visitors.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-inner">
      <div class="card-face front">
        <img src="https://lakansining.files.wordpress.com/2020/07/14-1983-parks-wildlife-center-lagoon-pavilion.jpg" alt="Gazebo" style="max-width: 100%; max-height: 100%;">
      </div>
      <div class="card-face back">
        <div>
          <h2>Gazebo</h2>
          <p>Gazebo, an open farm-type cottage almost hidden among the lush vegetation in the middle of the lagoon, is for official use.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-inner">
      <div class="card-face front">
        <img src="https://i.imgur.com/wVrZiIO.png" alt="Wildlife-Rescue Center" style="max-width: 100%; max-height: 100%;">
      </div>
      <div class="card-face back">
        <div>
          <h2>Wildlife-Rescue Center</h2>
          <p>It serves as a repository and rehabilitation facility for confiscated, donated or abandoned wild animals. It serves as a venue for public education, training and research for students, biologists and researchers.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="gallery-container">
  <div class="card">
    <div class="card-inner">
      <div class="card-face front">
        <img src="https://i.imgur.com/9mWCfCf.jpeg" alt="Native Garden of Flora<" style="max-width: 100%; max-height: 100%;">
      </div>
      <div class="card-face back">
        <div>
          <h2>Native Garden of Flora</h2>
          <p>Found within the premises of Bulwagan Ninoy, this Native Garden was inaugurated in honor of Leonard Co, a botanist and plant taxonomist, who had remarkable contributions in the world of botany.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-inner">
      <div class="card-face front">
        <img src="https://i.imgur.com/Mj2zh7j.jpeg" alt="Biodiversity Museum" style="max-width: 100%; max-height: 100%;">
      </div>
      <div class="card-face back">
        <div>
          <h2>Biodiversity Museum</h2>
          <p>
            Dedicated to showcasing the variety of life on Earth. It houses collections of biological and zoological specimens, includes exhibits on the origins and importance of biodiversity.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card-inner">
      <div class="card-face front">
        <img src="https://i.imgur.com/DPvAkBu.jpeg" alt="Grotto" style="max-width: 100%; max-height: 100%;">
      </div>
      <div class="card-face back">
        <div>
          <h2>Grotto</h2>
          <p>Also known as a Marian Grotto, small cave-like structure or niche that houses a statue or image of the Virgin Mary, also referred to as “Mama Mary”. </p>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  // You can add additional JavaScript logic if required
</script>

<br><br><br></body>
</html>
