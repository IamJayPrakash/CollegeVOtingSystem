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
        }

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

        .container {
            margin-top: 50px;
            text-align: center;
        }

        .col-md-12 {
            margin-top: 20px;
        }

        .btn-special-2 {
            padding: 12px 24px;
            background-color: white;
            color: hsl(243, 80%, 62%);
            border-radius: 6px;
            border: 2px hsl(243, 80%, 62%) solid;
            transition: transform 250ms ease-in-out;
            text-decoration: none;
            font-size: 16px;
        }

        .btn-special-2:hover {
            transform: scale(1.10);
        }

        .btn-special-2:active {
            transform: scale(0.9);
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
        <div class="row">
            <div class="col-md-12">
                <a href="user_cand.php" class="btn-special-2">1<sup>st</sup> Year</a>
            </div>
            <div class="col-md-12">
                <a href="user_cand_2.php" class="btn-special-2">2<sup>nd</sup> Year</a>
            </div>
            <div class="col-md-12">
                <a href="user_cand_3.php" class="btn-special-2">3<sup>rd</sup> Year</a>
            </div>
        </div>
    </div>
</body>
</html>
