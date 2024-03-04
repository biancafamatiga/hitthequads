<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        /* Styling for the popup */
        .popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.2); 
        }

        .popup-content {
            background-color: #fff;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 35px;
            border: 1px solid #000;
            border-radius: 20px;
            text-align: center;
            font-size: large;
        }

        .close {
            position: absolute;
            top: -5px;
            right: 10px;
            font-size: 35px;
            cursor: pointer;
        }

        .back-btn {
            margin-top: 15px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .button-box {
            margin-top: 15px;
        }

        .home-btn {
            text-decoration: none; 
            padding: 10px 20px;
            background-color: #4CAF50; 
            color: #fff;
            border: none;
            border-radius: 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div id="popup" class="popup">
    <div class="popup-content">
        <span class="close" id="closePopup">&times;</span>
        <p>Thank you for submitting! Please wait for us to get in touch.</p>
        <div class="button-box">
            <a href="http://localhost/NAPWC/index.php/napwc/" class="home-btn">Home</a>
        </div>
    </div>
</div>

<script>
    // Get the modal and the close button
    var popup = document.getElementById("popup");
    var closeBtn = document.getElementById("closePopup");

    window.addEventListener("load", function () {
        popup.style.display = "block";
    });

    closeBtn.addEventListener("click", function () {
        popup.style.display = "none";
    });

    window.addEventListener("click", function (event) {
        if (event.target == popup) {
            popup.style.display = "none";
        }
    });

</script>
</body>
</html>
