<html>
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
          <?php session_start();


	include('dbConnect.php');
	$sql = "select * from candidate_3rd order by id desc";

	$stmt = $pdo->prepare($sql);
	$stmt->execute();

	$rs =  $stmt->fetchAll();

	echo "<br><br>
		<table border='2' class='t1'>
			<tr>
				<th>Sno.</th>
				<th>Name</th>
				<th>Email</th>
				<th>Number</th>
				<th>Branch</th>
				<th>Roll No.</th>
				<th>Enroll ID</th>
				<th>status</th>
				<th>Action</th>
			</tr>
	";
	$i = 1;
	foreach($rs as $row){
		$cid = $row['id'];
		echo "
		<tr>
			<td>".$i."</td>
			<td>".$row['name']."</td>
			<td>".$row['email']."</td>
			<td>".$row['mobile']."</td>
			<td>".$row['branch']."</td>
			<td>".$row['rollno']."</td>
			<td>".$row['enrollid']."</td>
			<td>";
			if($row['approve_status']==0){
				echo "Pending";
			}else if($row['approve_status']==1){
				echo "Approved";
			}else{
				echo "Rejected";
			}
			
			echo "</td>
			<td>";
			if($row['approve_status']==2){
				echo '<a href="change_status_3rd.php?id='.$cid.'&status=1" class="btn btn-success">Approve</a>';
			}else if($row['approve_status']==1){
				echo '<a href="change_status_3rd.php?id='.$cid.'&status=2" class="btn btn-danger">Reject</a>';
			}else if($row['approve_status']==0){
				echo '<a href="change_status_3rd.php?id='.$cid.'&status=1" class="btn btn-success">Approve</a>';
				echo '<a href="change_status_3rd.php?id='.$cid.'&status=2" class="btn btn-danger">Reject</a>';
			}

			echo "</td>
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
