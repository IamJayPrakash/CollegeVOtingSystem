<html>
    <head><title>Online voting</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <style>
      .td-1{
          text-align: center;
          padding-top: 20px;
          
      }
     
    </style>
    </head>
<body>
    <div class="header">
     <h1 class="logo">Vote</h1>   
        <div class="main">
            <p><a href="index.html"><b>Home</b></a></p>
            <p> <a href="admin.php"><b>Admin </b></a></p>
            <p> <a href="year.html"><b>Candidate </b></a></p>
            <p><a href="result.html"> <b>Result </b></a></p>
            <p><a href="about.html"> <b>About </b></a></p>
  
          </div>    </div>

   
          <section id="center">
    <div class="container">
        <div class="row">
            <div class="col-md-6" >
                <h1 style="padding-top: 20px;">Confirmation</h1>
                <form action="savedData_3.php" method="post">
                <table>
                    <tr>
                        <td class="td-1">Name :</td>
                        <td class="td-1"><input   required type="text" style="text-align: left;" name="txtName"></td>
                    </tr>
                    <tr>
                        <td class="td-1">Email :</td>
                        <td class="td-1"><input  required type="email" style="text-align: left;" name="txtEmail"></td>
                    </tr>
                    <tr>
                        <td class="td-1">Your Branch :</td>
                        <td class="td-1"><input   required type="text" style="text-align: left;" name="txtBranch"></td>
                    </tr>
                    <tr>
                        <td class="td-1">Mobile Number :</td>
                        <td class="td-1"><input  required  type="number" style="text-align: left;" name="txtNumber"></td>
                    </tr>
                    <tr>
                        <td class="td-1">Candidate :</td>
					<td class="td-1"><select required name="txtCand">
            <option>--------Select--------</option>
            <?php 
   


        $sql = "select name from candidate_3rd where approve_status=1";
        include("dbConnect.php");
      
            $stmt=$pdo->prepare($sql);
            $stmt->execute();
            $results=$stmt->fetchAll();
        
   
        foreach ($results as $output) {?>
        <option><?php echo $output["name"];?></option>
<?php }?>
			
					</select></td>
                    </tr>
                    <tr>
                        <td class="td-1">Roll No. :</td>
                        <td class="td-1"><input   required type="number" style="text-align: left;" name="txtRollNo"></td>
                    </tr>
                    <tr>
                        <td class="td-1">Reason :</td>
                        <td class="td-1"><textarea  style="text-align: left;" name="txtReason" id="" cols="23" rows="4" placeholder="Why You Vote This Candidate any Reason ?"></textarea></td>
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
</section>

    

</body>
</html>