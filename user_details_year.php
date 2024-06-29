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
        .main {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .main a {
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
            color: #2196F3; /* Blue color */
            border-radius: 6px;
            border: 2px solid #2196F3; /* Blue border */
            transition: transform 250ms ease-in-out;
            text-decoration: none;
            font-size: 16px;
            display: inline-block;
            margin-bottom: 10px;
        }

        .btn-special-2:hover {
            transform: scale(1.05);
        }

        .btn-special-2:active {
            transform: scale(0.95);
        }

        .flex-container {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            flex-wrap: wrap;
            margin-top: 40px;
        }

        .svg-container {
            flex: 1 1 60%;
            max-width: 600px;
            margin-top: 40px;
        }

        .buttons-container {
            flex: 1 1 35%;
            margin-top: 40px;
        }

        .card {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            text-align: center;
        }

        .card h2 {
            margin-bottom: 10px;
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
        <div class="flex-container">
            <div class="buttons-container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <h2>Select User Year</h2>
                            <a href="user_cand.php"><button class="btn-special-2">1<sup>st</sup> Year</button></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <a href="user_cand_2.php"><button class="btn-special-2">2<sup>nd</sup> Year</button></a>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="card">
                            <a href="user_cand_3.php"><button class="btn-special-2">3<sup>rd</sup> Year</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="svg-container">
                <!-- Display SVG image -->
                <img src="userlist.svg" alt="User List SVG" style="width: 100%;">
            </div>
        </div>
    </div>
</body>
</html>
