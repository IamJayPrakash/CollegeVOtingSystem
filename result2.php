<?php

include("dbConnect.php");


$sql = "SELECT candidate,count(*) as result from  `users_2nd` group by candidate";

$stmt = $pdo->prepare($sql);
$stmt->execute();
$rs =  $stmt->fetchAll();



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Online voting - Result</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
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

        .card-5 {
            border: 2px solid black;
            padding: 30px;
            margin-top: 5%;
            width: 70%;
            margin-left: auto;
            margin-right: auto;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .card-5 h2 {
            margin-bottom: 20px;
            text-align: center;
        }

        .result-item {
            font-size: 18px;
            margin-bottom: 10px;
        }

        hr {
            margin-top: 20px;
            margin-bottom: 20px;
            border: 0;
            border-top: 2px solid #333;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1 class="logo">Vote</h1>   
        <div class="main">
            <p><a href="index.html"><b>Home</b></a></p>
            <p><a href="admin.php"><b>Admin</b></a></p>
            <p><a href="year.html"><b>Candidate</b></a></p>
            <p><a href="result.html"><b>Result</b></a></p>
            <p><a href="about.html"><b>About</b></a></p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-5">
                    <h2>Result</h2>
                    <hr>
                    <?php 
                    foreach($rs as $row) {
                        echo '<div class="result-item"><strong>' . $row['candidate'] . ' = ' . $row['result'] . '</strong></div>';
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
