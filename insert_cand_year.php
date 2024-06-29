<!DOCTYPE html>
<html>
<head>
    <title>Online voting</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        * {
            text-align: center;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .header {
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
            text-decoration: none;
            margin: 0 10px;
        }
        .container {
            margin-top: 50px;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        .col-md-6 {
            flex: 0 0 calc(50% - 20px);
            max-width: calc(50% - 20px);
            margin: 10px;
            display: flex;
            align-items: center;
        }
        .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            transition: transform 0.3s ease-in-out;
            display: flex;
        }
        .card:hover {
            transform: translateY(-5px);
        }
        .card h2 {
            margin-bottom: 10px;
        }
        .card-image {
            flex: 0 0 40%;
            padding: 0 20px;
        }
        .card-details {
            flex: 1;
            text-align: left;
        }
        .card img {
            max-width: 100%;
            border-radius: 8px;
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
        @media screen and (max-width: 768px) {
            .col-md-6 {
                flex: 0 0 calc(100% - 20px);
                max-width: calc(100% - 20px);
            }
            .card {
                flex-direction: column;
                align-items: center;
                text-align: center;
            }
            .card-image {
                padding: 20px 0;
                flex: 0 0 80%;
            }
            .card-details {
                text-align: center;
                padding: 20px;
            }
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
        <div class="col-md-6">
            <div class="card">
                <div class="card-image">
                    <img src="candidates.svg" alt="Candidates Image">
                </div>
                <div class="card-details">
                    <h2>1<sup>st</sup> Year</h2>
                    <a href="insert_Candidates.php" class="btn-special-2">View Candidates</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-image">
                    <img src="candidates.svg" alt="Candidates Image">
                </div>
                <div class="card-details">
                    <h2>2<sup>nd</sup> Year</h2>
                    <a href="insert_Candidate_2nd.php" class="btn-special-2">View Candidates</a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-image">
                    <img src="candidates.svg" alt="Candidates Image">
                </div>
                <div class="card-details">
                    <h2>3<sup>rd</sup> Year</h2>
                    <a href="insert_Candidate_3rd.php" class="btn-special-2">View Candidates</a>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
