<!DOCTYPE html>
<html>
<head>
    <title>Online voting</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .td-1 {
            text-align: center;
            padding-top: 20px;
        }

        table {
            margin: auto;
        }

        .container {
            margin-top: 50px;
        }

        .col-md-6 {
            margin-bottom: 20px;
        }

        .form-container {
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .form-container h1 {
            margin-bottom: 20px;
        }

        .form-container p {
            font-size: 18px;
            margin-bottom: 20px;
        }

        .form-container table {
            margin: auto;
            width: 100%;
            max-width: 400px;
        }

        .form-container input[type="text"],
        .form-container input[type="email"],
        .form-container input[type="number"],
        .form-container select {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        .form-container .td-2 {
            padding-top: 20px;
            padding-bottom: 40px;
        }

        .form-container button {
            padding: 12px 24px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .form-container button:hover {
            background-color: #45a049;
        }

        .image-container {
            text-align: center;
            padding-top: 50px;
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

    <section id="center">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-container">
                        <h1>Candidate Enroll</h1>
                        <p>2<sup>nd</sup> Year Enroll</p>
                        <form action="process_cand_2.php" method="post">
                            <table>
                                <tr>
                                    <td class="td-1">Name :</td>
                                    <td class="td-1"><input required type="text" name="txtName" autofocus></td>
                                </tr>
                                <tr>
                                    <td class="td-1">Email :</td>
                                    <td class="td-1"><input required type="email" name="txtEmail"></td>
                                </tr>
                                <tr>
                                    <td class="td-1">Mobile Number :</td>
                                    <td class="td-1"><input required type="number" name="txtNumber"></td>
                                </tr>
                                <tr>
                                    <td class="td-1">Branch :</td>
                                    <td><select name="txtbranch" required>
                                        <option>Information Technology</option>
                                        <option>Computer Science</option>
                                        <option>Civil</option>
                                        <option>Mechanical</option>
                                        <option>Electrical</option>
                                        <option>Metallurgy</option>
                                        <option>Electronics and Telecom.</option>
                                    </select></td>
                                </tr>
                                <tr>
                                    <td class="td-1">Roll No. :</td>
                                    <td class="td-1"><input required type="number" name="txtRollNo"></td>
                                </tr>
                                <tr>
                                    <td class="td-1">Enrollment ID :</td>
                                    <td class="td-1"><input required type="text" name="txtEnrollID"></td>
                                </tr>
                                <tr>
                                    <td class="td-2"><button name="Submit">Submit</button></td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="image-container">
                        <img src="can4.png">
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
