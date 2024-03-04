<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        header {
            color: #204c37;
            text-align: center;
            font-size: 20px;
        }
        .container {
            display: flex;
            justify-content: center;
            margin: 20px auto;
            padding: 20px;
            width: 90%;
            max-width:100%;
            height: 550px;
            border: 0px solid #ccc;
            border-radius: 5px;
        }
        .left-column {
            padding-top:100px;
            margin-left: 0px;
            padding-left: 30px;
            padding-right: 30px;
            max-width: 400px;
            color: black;
            background-color:#12372A;
            
        }

        .nav {
            flex-direction: column;
            padding-left: 0;
            margin-bottom: 0;
            list-style: none; 
        }

        .nav-link1 {
            color: black;
            text-decoration: none;
            line-height: 2; 
            color:#C7C8CC;
            font-size:20px;
        }

        .right-column {
            padding-left: 30px;
            padding-right:30px;
            background-color:#EEEDEB;
        }

        table {
            width: 300px;
            border-collapse: collapse;
            margin-top: 30px;
            border:1px solid #ADBC9F;
            margin:10px;
            height:335px;
            position: relative; 
        }
        th, td {
            padding: 10px;
            border-bottom: 1px solid #12372A;
            text-align: left;
            border-bottom: none; 
        }
        th {
            background-color: #EEEDEB;
            border-bottom: none; 
        }

        h1 {
            color: #204c37;
            text-align: center;
            padding-top: 20px;
            
        }

        h2 {
            color: #204c37;
            padding-top: 30px;
        }

        input[type="text"],
        textarea,
        input[type="submit"],
        button {
            margin-bottom: 10px;
            width: 220px;;
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="file"]{
            padding-bottom:20px;
        }

        input[type="submit"],
        button {
            background-color: #436850;
            color: white;
            cursor: pointer;
            width:60px;
            border-radius:8px;
        }

        .sub{
            position: absolute; 
            bottom: 10px; 
            right: 10px; 
            margin-right:20px;
            
        }
        
        input[type="submit"]:hover,
        button:hover {
            background-color: #12372A;
        }

        .image-cell img {
            max-width: 100px;
            max-height: 100px;
        }

        .edit-button {
            background-color: #1B1A55; 
            border: none;
            color: white;
            padding: 6px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 2px 0;
            cursor: pointer;
            border-radius: 8px;
        }

        .delete-button {
            background-color: #A94438; 
            border: none;
            color: white;
            padding: 6px 12px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin: 2px 0;
            cursor: pointer;
            border-radius: 8px;
        }

        #contentForm {
            flex-direction: column;
            margin-left:20px;
            margin-right:-30px;
          
        }

    </style>
</head>
<body>
    <?php require_once('admin_nav.php'); ?>
    <h1>Content Management System</h1>
    <div class="container">
        <div class="left-column">
            <header>
              
            </header>
            <div class="d-flex flex-column flex-shrink-0 p-3 bg-light">
                <hr>
                <ul class="nav nav-pills flex-column mb-auto">
                    
                   <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link1 link-dark" onclick="loadIframe('http://localhost/NAPWC/index.php/napwc/index')">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link1 link-dark" onclick="loadIframe('http://localhost/NAPWC/index.php/napwc/about')">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                            About Us / Contact Us
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link1 link-dark" onclick="loadIframe('http://localhost/NAPWC/index.php/napwc/e_flora')">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                            Explore - Flora
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link1 link-dark" onclick="loadIframe('http://localhost/NAPWC/index.php/napwc/e_attractions')">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                            Explore - Attractions
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link1 link-dark" onclick="loadIframe('http://localhost/NAPWC/index.php/napwc/virtualtour')">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                            3D Virtual Tour
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="javascript:void(0)" class="nav-link1 link-dark" onclick="loadIframe('http://localhost/NAPWC/index.php/napwc/plan')">
                            <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                            Visit Us
                        </a>
                    </li>
                    

                </ul>
                <hr>
            </div>
        </div>
        <div class="right-column">
            <div style="display: flex;">
                <div style="flex: 1;">
                    <h2>Add New Content</h2>
                    <table>
                        <tr>
                            <td>
                                <form id="contentForm">
                                    <label for="contentID">ID:</label><br>
                                    <input type="text" id="contentID" name="contentID"><br>
                                    <label for="contentTitle">Title:</label><br>
                                    <input type="text" id="contentTitle" name="contentTitle"><br>
                                    <label for="contentDescription">Description:</label><br>
                                    <textarea id="contentDescription" name="contentDescription"></textarea><br>
                                    <input type="file" id="imageUpload" name="imageUpload"><br>
                                </form>
                                <input class="sub" type="submit" value="Submit">
                            </td>
                        </tr>
                    </table>
                </div>
                <div style="flex: 1;">
                    <h2>Existing Content</h2>
                    <table>
                        <tr>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                        <tr>
                            <td>Picnic Shed</td>
                            <td> desc</td>
                            <td class="image-cell"><img src="https://i.imgur.com/ylufUrm.png" alt="shed.jpg"></td>
                            <td>
                                <button class="edit-button">Edit</button>
                                <button class="delete-button">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Tea House</td>
                            <td>desc</td>
                            <td class="image-cell"><img src="https://i.imgur.com/zN22oW3.png" alt="tea.jpg"></td>
                            <td>
                                <button class="edit-button">Edit</button>
                                <button class="delete-button">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>Amphitheater</td>
                            <td>desc</td>
                            <td class="image-cell"><img src="https://i.imgur.com/mcaXdyf.png" alt="amp.jpg"></td>
                            <td>
                                <button class="edit-button">Edit</button>
                                <button class="delete-button">Delete</button>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        function loadIframe(url) {
            var iframe = document.getElementById('myFrame');
            iframe.src = url;
        }
    </script>
</body>
</html>
