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
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f4f9;
            color: #333;
        }
        a {
            text-decoration: none;
            color: #333;
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
        .container {
            padding: 50px 15px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .card {
            width: 100%;
            max-width: 800px;
            margin: 20px 0;
            padding: 20px;
            background-color: white;
            border: 2px solid #67bcd8;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            margin: auto;
            border-collapse: collapse;
        }
        .td-1 {
            text-align: left;
            padding: 10px 0;
        }
        .td-1 input, .td-1 select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        .btn-submit {
            background-color: #28a745;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
            text-align: center;
            margin: 20px 0;
            width: 100%;
        }
        .btn-submit:hover {
            background-color: #218838;
        }
        .img-container {
            text-align: center;
            margin-top: 20px;
        }
        .img-container img {
            max-width: 100%;
            height: auto;
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
                                <td colspan="2" class="td-1"><button class="btn-submit" name="Submit">Submit</button></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
            <div class="col-md-6">
                <div class="img-container">
                <img src="can4.png" >

                </div>

            </div>
        </div>
    </section>
</body>
</html>
