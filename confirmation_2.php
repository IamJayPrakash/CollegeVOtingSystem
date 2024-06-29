<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            width: 80%;
            margin: 50px auto;
            padding: 30px;
            background-color: white;
            border: 4px solid #67bcd8;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .card h1 {
            text-align: center;
            margin-bottom: 20px;
            font-size: 28px;
            color: #333;
        }
        .td-1 {
            text-align: left;
            padding: 10px;
        }
        .td-2 {
            text-align: center;
        }
        table {
            width: 100%;
        }
        input[type="text"], input[type="email"], input[type="number"], select, textarea {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }
        button {
            padding: 10px 20px;
            background-color: #67bcd8;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #5ca3be;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
        }
        .col-md-6 {
            flex: 1;
            min-width: 300px;
            margin: 10px;
        }
        img {
            max-width: 100%;
            border-radius: 10px;
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
            <div class="col-md-6">
                <h1 style="padding-top: 20px;">Confirmation</h1>
                <form action="savedData_2.php" method="post">
                    <table>
                        <tr>
                            <td class="td-1">Name :</td>
                            <td class="td-1"><input type="text" required style="text-align: left;" name="txtName"></td>
                        </tr>
                        <tr>
                            <td class="td-1">Email :</td>
                            <td class="td-1"><input type="email" required style="text-align: left;" name="txtEmail"></td>
                        </tr>
                        <tr>
                            <td class="td-1">Your Branch :</td>
                            <td class="td-1"><input type="text" required style="text-align: left;" name="txtBranch"></td>
                        </tr>
                        <tr>
                            <td class="td-1">Mobile Number :</td>
                            <td class="td-1"><input type="number" required style="text-align: left;" name="txtNumber"></td>
                        </tr>
                        <tr>
                            <td class="td-1">Candidate :</td>
                            <td class="td-1">
                                <select required name="txtCand">
                                    <option>--------Select--------</option>
                                    <?php 
                                                                              $sql = "select name from candidate_2nd where approve_status=1";
                                                                              include("dbConnect.php");
                                                                            
                                                                              $stmt=$pdo->prepare($sql);
                                                                              $stmt->execute();
                                                                              $results=$stmt->fetchAll();
                                                                          
                                                                              foreach ($results as $output) {?>
                                                                              <option><?php echo $output["name"];?></option>
                                                                          <?php }?>
                                                                      </select>
                                                                  </td>
                                                              </tr>
                                                              <tr>
                                                                  <td class="td-1">Roll No. :</td>
                                                                  <td class="td-1"><input type="number" required style="text-align: left;" name="txtRollNo"></td>
                                                              </tr>
                                                              <tr>
                                                                  <td class="td-1">Reason :</td>
                                                                  <td class="td-1"><textarea style="text-align: left;" name="txtReason" id="" cols="23" rows="4" placeholder="Why You Vote This Candidate any Reason ?"></textarea></td>
                                                              </tr>
                                                              <tr>
                                                                  <td class="td-2" id style="padding-top: 20px; padding-bottom: 40px;" ><button class="magnifyBtn" name="Submit">Submit</button></td>
                                                              </tr>
                                                          </table>
                                                      </form>
                                                  </div>
                                                  <div class="col-md-6" style="padding-top: 50px;">
                                                      <img src="can1.png">
                                                  </div>
                                              </div>
                                          </div>
                                      
                                      </body>
                                      </html>
                                      