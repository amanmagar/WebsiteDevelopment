<!DOCTYPE html>
<html>

<head>
    <title>Personal dataset | Sunkoshi Rural Municipalaity</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href='https://fonts.googleapis.com/css?family=Bellota Text' rel='stylesheet'>
    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: 'Bellota Text';
        }
    </style>
</head>

<body>
    <main>
        <div>
            <center><h4>Personal Dataset | Sunkoshi Rural Municipality</h4>
            </center>
        <div class="container-fluid">
            <a href="userNew.php" class="btn btn-success">Add new users</a>
            <a href="/WebsiteDevelopment/sessionauthentication/dashboard.php" class="btn btn-info">Dashboard</a>
            <?php
            session_start();
            if (!(isset($_SESSION['Username']))) {
                header("Location: ../sessionauthentication/login.php");
            }
            require 'connect.php';
            $sql = "SELECT * from tblPersonal";
            $result = mysqli_query($conn, $sql);
            ?>
            <center>
                <table class="table table-bordered table-hover table-sm table-responsive-lg">
                    <caption>This is the official data of all the citizens of the web application of Sunkoshi Rural Municipality</caption>
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">PersonalId</th>
                            <th scope="col">Name</th>
                            <th scope="col">Address</th>
                            <th scope="col">DateOfBirth</th>
                            <th scope="col">Profession</th>
                            <th scope="col">Contact</th>
                        </tr>
                    </thead>
                    <?php
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                            <tbody>
                                <tr>
                                    <td><?= $row['PersonalId']; ?></td>
                                    <td><?= $row['Name']; ?></td>
                                    <td><?= $row['Address']; ?></td>
                                    <td><?= $row['DateOfBirth']; ?></td>
                                    <td><?= $row['Profession']; ?></td>
                                    <td><?= $row['Contact']; ?></td>
                                    <td>
                                        <a href="personalEdit.php?PersonalId=<?= $row['PersonalId']; ?>" class="btn btn-primary">Edit</a>
                                        <a id="delete" href="personalDelete.php?PersonalId=<?= $row['PersonalId']; ?>" class="btn btn-danger" onclick=" return confirm('Are you sure you want to delete this item?');">Delete</a>
                                    </td>
                                </tr>
                            </tbody>
                    <?php
                        }
                    }
                    ?>
                </table>
            </center>
        </div>
        </div>
    </main>
</body>

</html>