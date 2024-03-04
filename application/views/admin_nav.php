

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: "Lato", sans-serif;
  margin-left: 300px; 
  

}

.sidenav {
  height: 100%;
  width: 280px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #12372A;
  overflow-x: hidden;
  padding-top: 20px;
  display: flex;
  flex-direction: column;
  align-items: center; 
  background-image: rgba(32, 76, 55, 0.7);

}


.sidenav a {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #C7C8CC;
  display: block;
}

.sidenav a:hover {
  background-color: #789461;
  width:200px;
  display: block;
}

.main {
  margin-left: 390px; 
  font-size: 18px; 
  padding: 0px 10px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

.profile-photo {
  width: 120px; 
  height: 120px; 
  border-radius: 50%; 
  margin-bottom: 20px; 
  margin-top: 20px;
}

.logout-link {
  margin-top: auto; 
  margin-bottom:70px;
  color:red;
}

.dropdown-content {
  display: none;
  background-color: #204c37;
}

.nav-link:hover .dropdown-content {
  display: block;
}

.dropdown-item {
  color: white;
  padding: 10px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-item:hover {
  background-color: #789461;
  width:200px;
}

.nav-link{
      color:#C7C8CC;
      font-size:20px;
    }

p{
  font-weight:600;
  color:#C7C8CC;
  font-size:20px;
}

</style>
</head>
<body>


<div class="sidenav">
  <p>NAPWC</p>
  <img class="profile-photo" src="https://i.pinimg.com/474x/81/8a/1b/818a1b89a57c2ee0fb7619b95e11aebd.jpg" alt="Profile Photo">
  <p>Admin<br><br></p>
  <a class="nav-link" href="http://localhost/NAPWC/index.php/napwc/r_dashboard">Dashboard</a>
  <div class="nav-link">
     <a class="nav-link">Reservation </a>
      <div class="dropdown-content">
      <a href="http://localhost/NAPWC/index.php/napwc/admin_fieldtrip" class="dropdown-item">Fieldtrip</a>
      <a href="http://localhost/NAPWC/index.php/napwc/admin_appointment" class="dropdown-item">Appointment</a>
      <a href="http://localhost/NAPWC/index.php/napwc/admin_facilities" class="dropdown-item">Facility</a>
    </div>
  </div>  
  <a class="nav-link" href="http://localhost/NAPWC/index.php/napwc/cms">Content</a>
  <a class="nav-link" href="http://localhost/NAPWC/index.php/napwc/adma">Admin</a>
  <a class="logout-link" href="http://localhost/NAPWC/index.php/napwc/loginview">Logout</a>
</div>


   
</body>
</html> 
