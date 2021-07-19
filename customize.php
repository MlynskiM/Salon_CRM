<?php
    if(isset($_POST['submit'])){
        $lashes = $_POST['lashes'];
        $nails = $_POST['nails'];
        $eyebrew = $_POST['eyebrew'];
        $wax = $_POST['wax'];
     }

?>

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

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
   <div class="container">
  <a class="navbar-brand" href="../Brighten/index.php">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </div>
  </div>
</nav>



<div class="container" id="Custom_services">
    <div class="container-fluid text-center">
        <form action="date.php" method="post">
            <h1 class="title"> Wybierz usługi </h1>
            <div class="row">
                <div class="col-md-6">
                    <?php

                        if($lashes == 1){

                            echo " 
                            <div class='row'>
                                <div class='col-12'>
                                    <h4 class='text-start' for='lashes'>Rzęsy</h4>
                                    <div class='separator'></div>
                                    <div class='nopadding'>
                                        <input type='checkbox'  name='2D'>
                                        <label class='nopadding' for='2D'>Rzęsy 2D</label>
                                    </div>
                                    <div class='nopadding'>
                                        <input type='checkbox'  name='3D'>
                                        <label  class='nopadding' for='3D'>Rzęsy 3D</label>
                                    </div>
                                    <div class='nopadding'>
                                        <input type='checkbox'  name='4D'>
                                        <label  class='nopadding' for='4D'>Rzęsy 4D</label>
                                    </div>
                                    <div class='nopadding'>
                                        <input type='checkbox'  name='fill'>
                                        <label  class='nopadding' for='fill'>Uzupełnienie</label>
                                    </div>
                                </div>
                            </div>";
                        }
                
                    ?>
                
                    <?php

                        if($nails == 1){

                            echo "
                            <div class='row'>
                                <div class='col-12'>
                                    <h4 class='text-start' for='nails'>Paznokcie</h4>
                                    <div class='separator'></div>
                                    <div class='nopadding'>
                                        <input type='checkbox'  name='gel'>
                                        <label class='nopadding' for='gel'>Żele</label>
                                    </div>
                                    <div class='nopadding'>
                                        <input type='checkbox'  name='hybrid'>
                                        <label  class='nopadding' for='hybrid'>Hybrydy</label>
                                    </div>
                                    <div class='nopadding'>
                                        <input type='checkbox'  name='repair'>
                                        <label  class='nopadding' for='repair'>Naprawa</label>
                                    </div>
                                </div>
                            </div>";
                        }
                    
                    
                    ?>
                    
                    <?php
                    

                        if($eyebrew == 1){

                            echo"
                            <div class='row'>
                                <div class='col-12'>
                                    <h4 class='text-start' for='eyebrew'>Brwi</h4>
                                    <div class='separator'></div>
                                    <div class='nopadding'>
                                        <input type='checkbox'  name='lamination'>
                                        <label class='nopadding' for='lamination'>Laminacja</label>
                                    </div>
                                    <div class='nopadding'>
                                        <input type='checkbox'  name='henna'>
                                        <label  class='nopadding' for='henna'>Henna pudrowa</label>
                                    </div>
                                    <div class='nopadding'>
                                        <input type='checkbox'  name='regulation'>
                                        <label  class='nopadding' for='regulation'>Regulacja</label>
                                    </div>
                                </div>
                            </div>";
                        }
                    ?>
                    
                    <?php 
                    

                        if($wax == 1) {

                            echo"
                            <div class='row'>
                                <div class='col-12'>
                                    <h4 class='text-start' for='eyebrew'>Depilacja</h4>
                                    <div class='separator'></div>
                                    <div class='nopadding'>
                                        <input type='checkbox'  name='legs'>
                                        <label class='nopadding' for='legs'>Nogi</label>
                                    </div>
                                    <div class='nopadding'>
                                        <input type='checkbox'  name='arms'>
                                        <label  class='nopadding' for='arms'>Ręce</label>
                                    </div>
                                    <div class='nopadding'>
                                        <input type='checkbox'  name='chest'>
                                        <label  class='nopadding' for='chest'>Klatka</label>
                                    </div>
                                    <div class='nopadding'>
                                        <input type='checkbox'  name='back'>
                                        <label  class='nopadding' for='back'>Plecy</label>
                                    </div>
                                </div>
                            </div>";
                        }
                    ?>
                </div>
                <div class="col-md-1" ></div>
                <div class="col-md-5 text-start" id="info_col">
                    <label class="form-label" for='name'>Imię*</label>
                    <input class="form-control" type="text" name="name">

                    <label class="form-label" for='surname'>Nazwisko*</label>
                    <input class="form-control" type='text' name='surname'>

                    <label class="form-label" for='mobile'>Numer telefonu*</label>
                    <input class="form-control" type='number' name='mobile'>

                    <label class="form-label" for='email'>Adres E-mail</label>
                    <input class="form-control" type='email' name='email'>

                </div>

                <div class="row section">
                    <button class="btn btn-spec" type="submit">Sprawdź dostępne terminy!</button>
                </div>
            </div>
        </form>
    </div>
</div>
<script src="../Brighten/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>