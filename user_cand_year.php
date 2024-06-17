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
.btn-special-2 {
    padding: 12px 24px;
    background-color: white;
    color: hsl(243, 80%, 62%);
    border-radius: 6px;
    border: 2px hsl(243, 80%, 62%) solid;
    transition: transform 250ms ease-in-out;
}

.btn-special-2:hover {
    transform: scale(1.10);
}

.btn-special-2:active {
    transform: scale(.9);
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
          <div class="container">
        <div class="row">
            <div class="col-md-12">
            <a href="user_cand.php"><button style="margin-top:80px;" class="btn-special-2">1<sup>st</sup> Year </button></a>
            </div>
            <div class="col-md-12">
            <a href="user_cand_2.php"><button style="margin-top:80px;" class="btn-special-2">2<sup>nd</sup> Year </button></a>
            </div>
            <div class="col-md-12">
            <a href="user_cand_3.php"><button style="margin-top:80px; " class="btn-special-2">3<sup>rd</sup> Year </button></a>
            </div>
        </div>
    </div>

    
</body>
</html>