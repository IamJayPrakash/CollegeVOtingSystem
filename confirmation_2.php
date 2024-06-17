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
            text-align: center;
        }
        .header {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
        }
        .logo {
            margin: 0;
            font-size: 24px;
        }
        .main {
            padding: 10px 0;
        }
        .main a {
            color: #fff;
            text-decoration: none;
            padding: 0 10px;
        }
        .container {
            margin-top: 20px;
        }
        .card {
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        .card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .card-img-top {
            width: 100%;
            height: 200px;
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
            color: #555;
        }
        .btn-primary {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
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
                                      