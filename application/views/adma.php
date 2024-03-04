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

        h1 {
            color: #204c37;
            text-align: center;
            padding-top: 20px;
        }

        table {
            width: 80%;
            margin: 20px auto;
            border-collapse: collapse;
        }

        table, th, td {
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #C7C8CC;
            color: black;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #ddd;
        }

        td a {
            margin-right: 5px;
            text-decoration: none;
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
    </style>
</head>
<body>
    <?php require_once('admin_nav.php'); ?>
    <h1>Admin Management</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Password</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>14279</td>
                <td>Bianca Famatiga</td>
                <td>proman@quads.com</td>
                <td>*******</td>
                <td><a href="#" class="edit-button">Edit</a></td>
                <td><a href="#" class="delete-button">Delete</a></td>
            </tr>
            <tr>
                <td>98463</td>
                <td>Nico Cruz</td>
                <td>3D_1@quads.com</td>
                <td>*******</td>
                <td><a href="#" class="edit-button">Edit</a></td>
                <td><a href="#" class="delete-button">Delete</a></td>
            </tr>
            <tr>
                <td>89732</td>
                <td>Earl Navarro</td>
                <td>externalR@quads.com</td>
                <td>*******</td>
                <td><a href="#" class="edit-button">Edit</a></td>
                <td><a href="#" class="delete-button">Delete</a></td>
            </tr>
            <tr>
                <td>29018</td>
                <td>Haelena Tabara</td>
                <td>3D_2@quads.com</td>
                <td>*******</td>
                <td><a href="#" class="edit-button">Edit</a></td>
                <td><a href="#" class="delete-button">Delete</a></td>
            </tr>
            <tr>
                <td>94012</td>
                <td>Camilla Villarama</td>
                <td>prog@quads.com</td>
                <td>*******</td>
                <td><a href="#" class="edit-button">Edit</a></td>
                <td><a href="#" class="delete-button">Delete</a></td>
            </tr>
    
        </tbody>
    </table>
</body>
</html>
