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
        }
        .btn-special-2 {
            padding: 12px 24px;
            background-color: white;
            color: hsl(243, 80%, 62%);
            border-radius: 6px;
            border: 2px hsl(243, 80%, 62%) solid;
            transition: transform 250ms ease-in-out;
            cursor: pointer;
            font-family: 'Poppins', sans-serif;
            margin-top: 20px;
            display: inline-block;
            text-decoration: none;
        }

        .btn-special-2:hover {
            transform: scale(1.05);
        }

        .btn-special-2:active {
            transform: scale(0.95);
        }

        #footersection {
            margin-top: 80px;
        }

        .container {
            margin-top: 50px;
        }

        .col-md-12 {
            margin-bottom: 20px;
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
                <a href="insert_Candidates.php" class="btn-special-2">1<sup>st</sup> Year</a>
            </div>
            <div class="col-md-12">
                <a href="insert_Candidate_2nd.php" class="btn-special-2">2<sup>nd</sup> Year</a>
            </div>
            <div class="col-md-12">
                <a href="insert_Candidate_3rd.php" class="btn-special-2">3<sup>rd</sup> Year</a>
            </div>
        </div>
    </div>
</body>
</html>
