<?php

include '../Brighten/database/db.php';


if(isset($_POST['submit'])){

  if($_POST['Picked_date']) {$Picked_date = $_POST['Picked_date'];}
  if($_POST['Picked_hour']) {$Picked_hour = $_POST['Picked_hour'];}

  $sql = "INSERT INTO services_date(data, hour)
  VALUES ($Picked_date, $Picked_hour)";

  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

}

$conn->close();
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
   <link rel="stylesheet" href="../Brighten/css/calendar.css">
   <script src="../Brighten/js/calendar.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
   <script defer src=".//node_modules/@fortawesome/fontawesome-free/js/brands.js"></script>
  <script defer src="./node_modules/@fortawesome/fontawesome-free/js/solid.js"></script>
  <script defer src="./node_modules/@fortawesome/fontawesome-free/js/fontawesome.js"></script>
 
   <title>Termin</title>
</head>
<body onload="displayCalendar(new Date())">


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

<main >
<div class="container" id="Custom_services">
    <div class="container-fluid col text-center align" >
       <h1>Wybierz dogodny termin zabiegu</h1>
       <form action="test.php" method="post">
         
        <div class="row">

          <div class="col-lg-6">
            <div id="calendar"></div>
          </div>

          <div class="col-lg-6" id="HoursToPick">
            <h4 id='showDate'>Dostępne godziny:</h4>

            <?php 
            
              include '../Brighten/database/db.php';
              $sql = "SELECT id, data, hour FROM services_date";
              $result = $conn->query($sql);

              // $ReservedData -> Array with elements like [id, data, hour] example -> ["1", "20.07.2021", "8:30"]
              $ReservedData= [];
              // $BusinessHours -> Array with Business hours available to reserve
              $BusinessHours = ["6:00", "6:30", "7:00", "7:30", 
                                "8:00", "8:30", "9:00", "9:30", 
                                "10:00", "10:30", "11:00", "11:30", 
                                "12:00", "12:30", "13:00", "13:30",
                                "14:00", "14:30", "15:00", "15:30",
                                "16:00", "16:30", "17:00", "17:30",
                                "18:00", "18:30", "19:00", "19:30",
                                "20:00", "20:30", "21:00"];
              // $ReservedHours -> Array with Reserved hours in specific day 
              $ReservedHours = [];

              if ($result->num_rows > 0) 
              {
                // output data of each row
                $i = 0;
                //   loop through fetch_assoc()
                while($row = $result->fetch_assoc()) 
                {
                  array_push($ReservedData,[]);
                  array_push($ReservedData[$i], $row['id'], $row['data'], $row['hour']);
                  $i++;
                }
                for($index = 0; $index<count($BusinessHours); $index++) 
                {
                    foreach($ReservedData as $key2=>$val2)
                    {
                      if($ReservedData[$key2][2] == $BusinessHours[$index] && !in_array($BusinessHours[$index], $ReservedHours))
                      {
                        array_push($ReservedHours,$ReservedData[$key2][1],$ReservedData[$key2][2]);
                      }else{
                        continue;
                      }
                    }
                }
                
              } 
              // Draw html content
              foreach($BusinessHours as $k => $v)
              {
                if(!in_array($BusinessHours[$k], $ReservedHours))
                {
                  echo "<a class='availableHour' name='service_hour' value=$v >".$v . "</a> | " ;
                }
              }
              $conn->close();
            
            ?>
          <div class="separator"></div>
              <div>
              <input type="hidden" name="day" value="0" id="day_input">
              <input type="hidden" name="hour" value="0" id="hour_input">
                <h4>
                  Wizyta: 
                </h4>
              </div>
          </div>
          
        </div>
        
        <div class="row section">
                    <button class="btn btn-spec" type="submit">Zarezerwuj zabieg!</button>
        </div>
        </form>
    </div>
</div>
</main>




<script src="../Brighten/js/app.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>