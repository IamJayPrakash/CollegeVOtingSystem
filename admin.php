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
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f9;
        }
        a {
            text-decoration: none;
            color: black;
            font-weight: 500;
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
            padding: 8px 15px;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }
        .main p a:hover {
            background-color: #67bcd8;
            color: white;
        }
        .card {
            width: 400px;
            margin: 100px auto;
            padding: 30px;
            text-align: center;
            background-color: white;
            border: 4px solid #67bcd8;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .card h3 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #333;
        }
        .card input[type="text"], .card input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        .card input[type="submit"] {
            padding: 10px 20px;
            background-color: #67bcd8;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .card input[type="submit"]:hover {
            background-color: #5ca3be;
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

    <section>
        <div class="card">
            <h3>Admin Login</h3>
            <form action="process.php" method="post">
                <input required type="text" name="username" placeholder="Username" />
                <input required type="password" name="password" placeholder="Password" />
                <input required type="submit" value="Login" />
            </form>
            <?php
                session_start();
                if (isset($_SESSION['error'])) {
                    echo '<p style="color: red;">' . $_SESSION['error'] . '</p>';
                    unset($_SESSION['error']);
                }
            ?>
        </div>
    </section>
</body>
</html>
