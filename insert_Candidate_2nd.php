<html>
    <head><title>Online voting</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
    </head>
    <style>
      .td-1{
          text-align: center;
          padding-top: 20px;
        
      }
      table{
        margin:auto;
      }
     
    </style>
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
                <h1 style="padding-top: 20px;">Candidate Enroll</h1>
                <p style="padding-top: 20px;">2<sup>nd</sup> Year Enroll</p>
                <form action="process_cand_2.php" method="post">
                <table>
                    <tr>
                        <td class="td-1">Name :</td>
                        <td class="td-1"><input   required type="text" style="text-align: left;" name="txtName" autofocus></td>
                    </tr>
                    <tr>
                        <td class="td-1">Email :</td>
                        <td class="td-1"><input   required type="email" style="text-align: left;" name="txtEmail"></td>
                    </tr>
                    <tr>
                        <td class="td-1">Mobile Number :</td>
                        <td class="td-1"><input   required type="number" style="text-align: left;" name="txtNumber"></td>
                    </tr>
                    <tr>
                        <td class="td-1">Branch :</td>
                        <td><select name="txtbranch"  required >
                          
                          <option>Information Technology</option>
                          <option>Computer Science </option>
                          <option>Civil</option>
                          <option>Mechanical</option>
                          <option>Electrical</option>
                          <option>Metallurgy</option>
                          <option>Electronics and Telecom.</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td class="td-1">Roll No. :</td>
                        <td class="td-1"><input   required type="number" style="text-align: left;" name="txtRollNo"></td>
                    </tr>
                    <tr>
                        <td class="td-1">Enrollment ID :</td>
                        <td class="td-1"><input   required type="text" style="text-align: left;" name="txtEnrollID"></td>
                    </tr>
                    
                    <tr>
                        <td class="td-2" id style="padding-top: 20px; padding-bottom: 40px;" ><button class="magnifyBtn" name="Submit">Submit</button></td>
                    </tr>
                </table>
                <div  style="padding-top: 50px;margin-left:450px">
                <img src="can4.png" >
            </div>
              </form>
            </div>
           
        </div>
    </div>
</section>



  
 
</body>
</html>