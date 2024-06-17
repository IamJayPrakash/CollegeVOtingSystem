<html lang="en">
<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <style>
            *
            {
                text-align: center;
            }
            .t1
            {
                margin-left: auto; 
                 margin-right: auto;
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
	$sql = "select * from users order by id desc";

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