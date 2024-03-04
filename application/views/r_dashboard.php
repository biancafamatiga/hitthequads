<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <style>
        
        header {
            background-color: #333;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
     
        
        th, td {
            padding: 10px;
            border-bottom: 1px solid #12372A;
            text-align: left;
        }
        th {
            background-color: #ADBC9F;
        }

        h1 {
            color: #204c37;
            text-align: center;
            font-weight: 700;
            padding-top: 20px;

        }

       
        .container {
            display: flex;
            justify-content: space-between;
            padding: 10px;
        }
        table {
            width: 48%; 
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #C7C8CC;
        }


        
        .th3 {
            background-color: #EEEEEE;
            padding-right: -10px;

        }

        .pending{
            color:#D24545;
            font-weight:400;
        }
        .calendar {
            display: flex;
            flex-wrap: wrap;
            max-width: 510px;
            margin-left: 50px;
            
        }
        .calendar-day {
            width: calc(100% / 7);
            border: 1px solid #ccc;
            padding: 10px;
            box-sizing: border-box;
        }
        .calendar-day:hover {
            background-color: #f0f0f0;
            cursor: pointer;
        }
  
    </style>
</head>
<body>
    <?php require_once('admin_nav.php'); ?>

     <h1>Reservation Dashboard</h1>
    
    
     <div class="container">
        <table>
            <thead>
                <th class="th3">TODAY</th>   
                <th class="th3"></th>
                <th class="th3"></th>   
            </thead>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Reservation</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Bianca</td>
                    <td>Fieldtrip</td>
                    <td>7:00am</td>
                </tr>
                <tr>
                    <td>Haelena</td>
                    <td>Appointment</td>
                    <td>8:00am</td>
                </tr>
                <tr>
                    <td>Nico</td>
                    <td>Facility</td>
                    <td>9:00am</td>
                </tr>
                <tr>
                    <td>Earl</td>
                    <td>Appointment</td>
                    <td>6:00am</td>
                </tr>
            </tbody>
        </table>
        <table>
            <thead>
                <th class="th3">UPCOMING</th>   
                <th class="th3"></th>
                <th class="th3"></th>
                <th class="th3"></th>   
            </thead>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Reservation</th>
                    <th>Date</th>
                    <th>Time</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Bianca</td>
                    <td>Fieldtrip</td>
                    <td>02/20/2024</td>
                    <td>7:00am</td>
                </tr>
                <tr>
                    <td>Haelena</td>
                    <td>Appointment</td>
                    <td>02/20/2024</td>
                    <td>8:00am</td>
                </tr>
                <tr>
                    <td>Nico</td>
                    <td>Facility</td>
                    <td>02/20/2024</td>
                    <td>9:00am</td>
                </tr>
                <tr>
                    <td>Earl</td>
                    <td>Appointment</td>
                    <td>02/20/2024</td>
                    <td>6:00am</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="container">
        <table>
            <thead>
                <th class="th3">PENDING</th>   
                <th class="th3"></th>
                <th class="th3"></th>
                <th class="th3"></th>   
                <th class="th3"></th>   
            </thead>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Reservation</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Bianca</td>
                    <td>Fieldtrip</td>
                    <td>02/20/2024</td>
                    <td>7:00am</td>
                    <td class="pending">PENDING</td>
                </tr>
                <tr>
                    <td>Haelena</td>
                    <td>Appointment</td>
                    <td>02/20/2024</td>
                    <td>8:00am</td>
                    <td class="pending">PENDING</td>
                </tr>
                <tr>
                    <td>Nico</td>
                    <td>Facility</td>
                    <td>02/20/2024</td>
                    <td>9:00am</td>
                    <td class="pending">PENDING</td>
                </tr>
                <tr>
                    <td>Earl</td>
                    <td>Appointment</td>
                    <td>02/20/2024</td>
                    <td>6:00am</td>
                    <td class="pending">PENDING</td>
                </tr>
            </tbody>
            
        </table>
        
          
        
        <div class="calendar" id="calendar"></div>
  
            
        <script>
       function generateCalendar() {
        const calendar = document.getElementById("calendar");
        const days = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];

        const currentDate = new Date();

        const firstDayOfMonth = new Date(currentDate.getFullYear(), currentDate.getMonth(), 1);

        const startDay = firstDayOfMonth.getDay();

        const numDays = new Date(currentDate.getFullYear(), currentDate.getMonth() + 1, 0).getDate();

        calendar.innerHTML = '';

        for (let i = 0; i < 7; i++) {
            const day = document.createElement('div');
            day.classList.add('calendar-day');
            day.textContent = days[i];
            calendar.appendChild(day);
        }

        for (let i = 1; i <= numDays; i++) {
            const day = document.createElement('div');
            day.classList.add('calendar-day');
            day.textContent = i;

        
            if (i == 9) { 
                day.style.backgroundColor = "#C68484"; 
                const text = document.createElement('span');
                text.textContent = " Holiday";
                day.appendChild(text);
            }

            if (i == 10) { 
                day.style.backgroundColor = "#C68484"; 
                const text = document.createElement('span');
                text.textContent = " Holiday";
                day.appendChild(text);
            }


            if (i == 29) { 
                day.style.backgroundColor = "#BBC3A4"; 
                const text = document.createElement('span');
                text.textContent = " Booked";
                day.appendChild(text);
            }

            if (i == 21) { 
                day.style.backgroundColor = "#BBC3A4"; 
                const text = document.createElement('span');
                text.textContent = " Booked";
                day.appendChild(text);
            }

    
            if (i == 20) { 
                day.style.backgroundColor = "#BBC3A4"; 
                const text = document.createElement('span');
                text.textContent = " Booked";
                day.appendChild(text);
            }

            calendar.appendChild(day);
        }
    }

    generateCalendar();
    </script>
    </div>
  
    
    
</body>
</html>
