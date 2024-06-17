<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Voting</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-align: center;
        }

        .header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
        }

        .logo {
            margin: 0;
        }

        .main {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .main a {
            color: #fff;
            text-decoration: none;
            margin: 0 10px;
        }

        .t1 {
            margin-left: auto;
            margin-right: auto;
            margin-top: 20px;
        }

        .t1 th,
        .t1 td {
            padding: 10px;
        }

        .t1 th {
            background-color: #333;
            color: #fff;
        }

        .t1 tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .t1 tr:hover {
            background-color: #ddd;
        }

        .btn {
            padding: 6px 12px;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
        }

        .btn-success {
            background-color: #4CAF50;
            color: white;
        }

        .btn-danger {
            background-color: #f44336;
            color: white;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1 class="logo">Vote</h1>   
        <div class="main">
            <p><a href="index.html"><b>Home</b></a></p>
            <p><a href="user_details_year.php"><b>Users</b></a></p>
            <p><a href="user_cand_year.php"><b>Candidates</b></a></p>
            <p><a href="logout.php"><b>Logout</b></a></p>
        </div>
    </div>
    <div class="container">
        <?php
        session_start();
        include('dbConnect.php');
        $sql = "SELECT * FROM candidate_3rd ORDER BY id DESC";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $rs =  $stmt->fetchAll();
        ?>
        <table border='2' class='t1'>
            <tr>
                <th>Sno.</th>
                <th>Name</th>
                <th>Email</th>
                <th>Number</th>
                <th>Branch</th>
                <th>Roll No.</th>
                <th>Enroll ID</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <?php
            $i = 1;
            foreach($rs as $row) {
                $cid = $row['id'];
                ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $row['name'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['mobile'] ?></td>
                    <td><?= $row['branch'] ?></td>
                    <td><?= $row['rollno'] ?></td>
                    <td><?= $row['enrollid'] ?></td>
                    <td>
                        <?php
                        if ($row['approve_status'] == 0) {
                            echo "Pending";
                        } elseif ($row['approve_status'] == 1) {
                            echo "Approved";
                        } else {
                            echo "Rejected";
                        }
                        ?>
                    </td>
                    <td>
                        <?php
                        if ($row['approve_status'] == 2) {
                            echo '<a href="change_status_3rd.php?id=' . $cid . '&status=1" class="btn btn-success">Approve</a>';
                        } elseif ($row['approve_status'] == 1) {
                            echo '<a href="change_status_3rd.php?id=' . $cid . '&status=2" class="btn btn-danger">Reject</a>';
                        } elseif ($row['approve_status'] == 0) {
                            echo '<a href="change_status_3rd.php?id=' . $cid . '&status=1" class="btn btn-success">Approve</a>';
                            echo '<a href="change_status_3rd.php?id=' . $cid . '&status=2" class="btn btn-danger">Reject</a>';
                        }
                        ?>
                    </td>
                </tr>
                <?php
                $i++;
            }
            ?>
        </table>
    </div>
</body>
</html>
