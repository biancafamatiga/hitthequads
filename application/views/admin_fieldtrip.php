<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .admin_search {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <?php require_once('admin_nav.php'); ?>
    <div class="container">
        <div class="admin_search">
            <form class="d-flex" role="search"
                form action="http://localhost/quads/index.php/napwc/search_fieldtrip" method="post">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                    name="search_key">
                <button class="btn btn-outline-success" type="submit" value="search" name="search">Search</button>
            </form>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name of School /Organization</th>
                        <th scope="col">Contact Person</th>
                        <th scope="col">Email Address</th>
                        <th scope="col">Phone Number</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th scope="col">No. of Participants</th>
                        <th scope="col">Grade Level</th>
                        <th scope="col">Requests</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!--loop-->
                    <?php
                    for ($i = 0; $i < sizeof($item); $i++) {
                    ?>
                        <tr>
                            <td><?php echo urldecode($item[$i]->id); ?></td>
                            <td><?php echo urldecode($item[$i]->name); ?></td>
                            <td><?php echo urldecode($item[$i]->contactperson); ?></td>
                            <td><?php echo urldecode($item[$i]->email); ?></td>
                            <td><?php echo urldecode($item[$i]->phone); ?></td>
                            <td><?php echo urldecode($item[$i]->date); ?></td>
                            <td><?php echo urldecode($item[$i]->time); ?></td>
                            <td><?php echo urldecode($item[$i]->participants); ?></td>
                            <td><?php echo urldecode($item[$i]->gradelevel); ?></td>
                            <td><?php echo urldecode($item[$i]->request); ?></td>
                            <td>
                                <a href="<?php echo 'http://localhost/quads/index.php/napwc/delete_fieldtrip/' . $item[$i]->id; ?>"
                                    class="btn btn-danger btn-sm">Delete</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Bootstrap JS and any additional scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-rLQU8wfZYg6aRq63t1N5/IOZVeV6SjlF8eZuAgP4W1qzDqAryuXVMO8aDc80Jgj9" crossorigin="anonymous">
    </script>
</body>

</html>
