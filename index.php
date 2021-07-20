<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="../Brighten/css/style.css">
   <title>Dostępne usługi</title>
</head>
<body>


<?php include "../Brighten/nav.php"?>


<div class="container-fluid">
   
   <div class="container">
      <div class="container-fluid">
         <form action="customize.php" method="post">
         <div class="option-box">
            <div class="row">
               <div class="col-md-6  text-poz" id="lashes" onclick="Choosen_lashes()" >
               <h2>Rzęsy</h2>
               <input type="hidden" name="lashes" value="0" id="lashes_input">
                  <div class="icon-box"></div>
               </div>
               
               <div class="col-md-6 text-poz" id="nails" onclick="Choosen_nails()"  >
               <h2>Paznokcie</h2>
               <input type="hidden" name="nails" value="0" id="nails_input">
                  <div class="icon-box"></div>
               </div>
            </div>
            <div class="row">
               
               <div class="col-md-6  text-poz" id="eyebrew" onclick="Choosen_eyebrew()" >
               <h2>Brwi</h2>
               <input type="hidden" name="eyebrew" value="0" id="eyebrew_input">
                  <div class="icon-box"></div>
               </div>
               
               <div class="col-md-6  text-poz" id="wax" onclick="Choosen_wax()" >
                  <h2>Depilacja</h2>
               <input type="hidden" name="wax" value="0" id="wax_input">
                  <div class="icon-box"></div>
               </div>
            </div>
            <div class="row">
               <button type="submit" name="submit" class="btn btn-spec">Przejdź dalej</button>
            </div>
         </div>
         </form>
      </div>
   </div>

</div>
<script src="../Brighten/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>