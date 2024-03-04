<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .admin_search {
            margin-bottom: 20px;
        }

        .table-responsive {
            overflow-x: auto;
        }

        body {
            margin-left: 290px;
            margin-top: 60px;
        }

        .update-record-button {
            position: fixed;
            right: 20px;
            background-color: #1B1A55;
            border: 0px;
            border-radius: 50px;
            margin-right: 10px;
            font-size: 18px;
            padding: 8px;
            width: 170px;
        }

        .btn-group .btn {
            width: 140px;
            height:33px;
            border-radius: 50px;
            padding-top:3px;
        }

        .btn-group .btn-success {
            background-color: #436850;
        }

        .btn-group .btn-primary {
            background-color: #0B60B0;
        }

        h1 {
            color: #204c37;
            text-align: center;
            font-weight: 700;
            padding-bottom: 20px;

        }

     
    </style>
</head>

<body>
    <?php require_once('admin_nav.php'); ?>
    <h1>Appointment Reservations</h1>

    <div class="container">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Status</th>
                        <th scope="col">Reference No</th>
                        <th scope="col">Contact Person</th>
                        <th scope="col">School/Organization</th>
                        <th scope="col">Date</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Approved
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">For Approval</a></li>
                                </ul>
                            </div>
                        </td>
                        <td>REF123456</td>
                        <td>Riri Smith</td>
                        <td>FEU Tech</td>
                        <td>2024-03-01</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Pending
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Approved</a></li>
                                </ul>
                            </div>
                        </td>
                        <td>REF489642</td>
                        <td>Miguel Tan</td>
                        <td>Outsoured</td>
                        <td>2024-03-03</td>
                    </tr>
                    <tr>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Approved
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">For Approval</a></li>
                                </ul>
                            </div>
                        </td>
                        <td>REF144456</td>
                        <td>Jennie Yu</td>
                        <td>Canva Corp</td>
                        <td>2024-03-11</td>
                    </tr>
                    <tr>
                        <td>
                             <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Pending
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Approved</a></li>
                                </ul>
                            </div>
                        </td>
                        <td>REF123888</td>
                        <td>Ritz Azul</td>
                        <td>Another Coffee</td>
                        <td>2024-03-12</td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>

    <button class="btn btn-primary update-record-button">Update Record</button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-rLQU8wfZYg6aRq63t1N5/IOZVeV6SjlF8eZuAgP4W1qzDqAryuXVMO8aDc80Jgj9" crossorigin="anonymous">
    </script>
</body>

</html>
