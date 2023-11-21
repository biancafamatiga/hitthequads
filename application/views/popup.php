<!DOCTYPE html>
<html>
<head>
    <style>
        /* Styling for the popup */
.popup {
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0.7);
}

.popup-content {
  background-color: #fff;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  padding: 35px;
  border: 1px solid #000;
  border-radius: 30px;
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
    </style>
</head>
<body>
    <!-- Your HTML content -->
    
    <div id="popup" class="popup">
        <div class="popup-content">
            <span class="close" id="closePopup">&times;</span>
            <p>Registration Successful!</p>
        </div>
    </div>
    <script>// Get the modal and the close button
var popup = document.getElementById("popup");
var closeBtn = document.getElementById("closePopup");

// Display the popup when the page loads
window.addEventListener("load", function() {
  popup.style.display = "block";
});

// Close the popup when the close button is clicked
closeBtn.addEventListener("click", function() {
  popup.style.display = "none";
});

// Close the popup when the user clicks outside the modal
window.addEventListener("click", function(event) {
  if (event.target == popup) {
    popup.style.display = "none";
  }
});</script>
</body>
</html>