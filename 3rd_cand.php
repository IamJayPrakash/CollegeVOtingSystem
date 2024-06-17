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
    <!------------------  Internal Css ------------------>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            scroll-behavior: smooth;
            font-family: 'Poppins', sans-serif;
        }
        body {
            background-color: #f4f4f9;
            color: #333;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 25px;
            background-color: #a1d7ec;
            position: sticky;
            top: 0;
            z-index: 1000;
        }
        .logo {
            font-size: 24px;
            font-weight: 500;
            color: #000;
        }
        .main {
            display: flex;
            gap: 15px;
        }
        .main p {
            margin: 0;
        }
        .main p a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            padding: 8px 15px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }
        .main p a:hover {
            background-color: #67bcd8;
            color: white;
        }
        .container {
            padding: 50px 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
        .col-md-3 {
            margin: 25px;
            padding-top: 30px;
        }
        .card {
            width: 18rem;
            background-color: white;
            border: 2px solid #67bcd8;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            overflow: hidden;
        }
        .card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        .card-body {
            padding: 20px;
        }
        .card-title {
            font-size: 20px;
            margin-bottom: 10px;
        }
        .card-text {
            font-size: 16px;
            margin-bottom: 20px;
        }
        .btn-primary {
            background-color: #67bcd8;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
            text-decoration: none;
        }
        .btn-primary:hover {
            background-color: #333;
            color: white;
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
                <h1>Candidates and Voting System</h1>
                <p style="margin-bottom: 50px;">3<sup>rd</sup> Year Candidates</p>
            </div>
            <?php 
                $sql = "select * from candidate_3rd where approve_status=1";
                include("dbConnect.php");
                $result = $pdo->query($sql);
                $rs = $result->fetchAll();
                foreach ($rs as $row) {
            ?>
            <div class="col-md-3">
                <div class="card">
                    <img class="card-img-top" src="can.png" alt="Candidate Image">
                    <div class="card-body">
                        <h2 class="card-title"><?php echo $row['name']; ?></h2>
                        <p class="card-text"><?php echo $row['branch']; ?></p>
                        <a href="confirmation_3.php" class="btn btn-primary">Vote Now</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</body>
</html>
