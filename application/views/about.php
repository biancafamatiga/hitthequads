<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
      
        h1{
            color:#204c37;
            text-align:center;
            font-weight:700;
            padding-top:20px;
            padding-bottom:10px;
        }
  

        #content {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
            text-align: left;
        }

        #content img {
            width: 100%;
            max-width: 400px;
            height: auto;
            margin-left: 180px; 
            margin-right: 20px;
        }

      
        .shark {
            margin-left: 20px;
            margin-right: 180px;
            width: 100%; 
        }

        #content2 {
            display: flex;
            align-items: center;
            justify-content: center;
            margin-top: 20px;
            text-align: left;
        }

        #content2 img {
            width: 100%;
            max-width: 400px;
            height: auto;
            margin-right: 180px; 
            margin-left: 20px;
        }

      
        .shark2 {
            margin-right: 20px;
            margin-left: 180px;
            width: 100%; 
        }


        
        @media (min-width: 600px) {
            #content {
                flex-direction: row;
            }

            #content img {
                margin-right: 20px;
            }
        }

        h2{
            font-weight:700;
            color:#3b3b32;
        }

        
    </style>
</head>
<h1>ABOUT </h1>
<body>
    <div id="content">
        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0d/a6/b5/40/photo0jpg.jpg?w=2200&h=-1&s=1" alt="Ninoy Wildlife Park">
        <div class="shark">
        <h2>A SUSTAINABLE TOURISM DESTINATION</h2>
        <p>Home to a diverse array of flora and fauna, the center offers a unique opportunity for visitors to connect with nature 
            and gain a deeper understanding of the country's rich ecological heritage. With its well-curated exhibits and dedicated 
            conservation efforts, the Ninoy Aquino Wildlife Center plays a crucial role in raising awareness about endangered species 
            and the importance of sustainable coexistence.</p></div>
    </div><br><br>

    <div id="content2">
        <div class="shark2">
        <h2>OUR HISTORY</h2>
        <p>The Ninoy Aquino Wildlife Center, situated in the heart of Manila, is a testament to the Philippines' 
            commitment to biodiversity conservation. Established to honor the legacy of former Senator Benigno "Ninoy" Aquino Jr., 
            the center serves as a vital hub for wildlife education and preservation. </p></div>
        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/10/91/26/1a/photo2jpg.jpg?w=2200&h=-1&s=1" alt="Ninoy Wildlife Park">
    </div><br><br>

    <div id="content">
        <img src="https://dynamic-media-cdn.tripadvisor.com/media/photo-o/0e/8d/05/23/2.jpg?w=2000&h=-1&s=1" alt="Ninoy Wildlife Park">
        <div class="shark">
        <h2>VISIT US NOW!</h2>
        <p>A visit to this sanctuary not only provides a tranquil escape from the urban hustle but also 
            fosters a sense of responsibility towards the protection of our planet's precious wildlife.</p></div>
    </div><br><br>
    
</body>
<br><br><br>
</html>
