<html lang="en">
<head>
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
            max-width: 1200px;
            margin: 20px 0;
            padding: 20px;
            background-color: white;
            border: 2px solid #67bcd8;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid #67bcd8;
        }
        th, td {
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #67bcd8;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .btn {
            padding: 5px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .btn-success {
            background-color: #28a745;
            color: white;
        }
        .btn-success:hover {
            background-color: #218838;
        }
        .btn-danger {
            background-color: #dc3545;
            color: white;
        }
        .btn-danger:hover {
            background-color: #c82333;
        }
            </style>


</head>
   <body>
   <div class="header">
<h1 class="logo">Vote</h1>   
        <div class="main">
            <p><a href="index.html"><b>Home</b></a></p>
            <p> <a href="user_details_year.php"><b>Users </b></a></p>
            <p> <a href="user_cand_year.php"><b>Candidates </b></a></p>
            <p><a href="logout.php"> <b>logout </b></a></p>

  
          </div>    </div>
          <section style="padding-top:50px; padding-botton:50px">
        <div class="container">
            <div class="row">
                <div class="col-md-12" >
                                
	<?php session_start();


include('dbConnect.php');
$sql = "select * from users_3rd order by id desc";

$stmt = $pdo->prepare($sql);
$stmt->execute();

$rs =  $stmt->fetchAll();

echo "
    <table border='2' class='t1'>
        <tr>
            <th>Sno.</th>
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Vote</th>
            <th>Roll No.</th>
            <th>Reason</th>
        </tr>
";
$i = 1;
foreach($rs as $row){
    $uid = $row['id'];
    echo "
    <tr>
        <td>".$i."</td>
        <td>".$row['name']."</td>
        <td>".$row['email']."</td>
        <td>".$row['number']."</td>
        <td>".$row['candidate']."</td>
        <td>".$row['rollno']."</td>
        <td>".$row['reason']."</td>
        
    </tr>
    ";
    $i++;
}
echo "</table>";
?>
    </div>
        </div>
    </div>
</section>
   </body>
</html>