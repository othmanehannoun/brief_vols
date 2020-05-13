<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="css/style.css">


</head>
<body>


  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <img class="logoimg" src="images/logo.png" alt="">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="#">About</a>
        <a class="nav-item nav-link" href="#">Pricing</a>
        <a class="nav-item nav-link" href="#">Contat us</a>
      </div>
    </div>
  </nav>


  <div class="header">
    <form action="index.php" method="post">
    <h1>Find your <span>Next tour!</span> </h1>
      <p>Where would you like to go?</p>
      <div class="font-box">

      <!-- <input type="text" name="depart" palceholder="depart">

      <input type="text" name="destination" palceholder="destination"> -->

      <select name="depart" class="search-field skills" id="inputGroupSelect01">
          <option selected>From...</option>
          <option value="Casablanca">Casablanca</option>
          <option value="tanger">Tanger</option>
          <option value="safi">Safi</option>
          <option value="Rabat">Rabat</option>
          <option value="Salé">Salé</option>
      </select>

      <select name="destination" class="search-field skills" id="inputGroupSelect01">
          <option selected>To...</option>
          <option value="Casablanca">Casablanca</option>
          <option value="tanger">Tanger</option>
          <option value="safi">safi</option>
          <option value="Rabat">Rabat</option>
          <option value="Salé">Salé</option>
      </select>

      <button class="search-btn" type="submit" name="submit">Search</button>

      </div>
    </form>
  </div>

  <center>
  <h2>Available flights</h2>
  <h5>Bootstrap heading Bootstrap heading</h5>
  </center> 
  <?php 
      $db = mysqli_connect("localhost","root","","ram");
      if (isset($_POST['submit'])){
          $depart = $_POST['depart'];
          $destination = $_POST['destination'];
          $query = mysqli_query($db, "SELECT * FROM vols WHERE départ = '$depart' AND destination = '$destination' "); 
          
          if (mysqli_num_rows($query) > 0 ) {
            $texta = ' <div class="text-center"> ';
            echo $texta;
            while ($row = mysqli_fetch_array($query)){
              // $id = $row['idVol'];
              // $depart = $row['départ'];
              // $destination = $row['destination'];
              // $date = $row['Date_depart'];
              // $time = $row['Time_depart'];
              // $prix = $row['Prix'];
              // $nbrPlace = $row['nomberPlace'];
              $text = ' <div class="col-lg-3 col-md-6 mb-4"> ';
              $text .= ' <div class="card h-100"> ';
              $text .= ' <img class="card-img-top" src="http://placehold.it/500x325"> ';
              $text .= ' <div class="card-body"> ';
              $text .= ' <h4 class="card-title"> ' . $row['départ'] .'</h4>';
              $text .= ' <h4 class="card-title"> '. $row['destination'] .'</h4>';
              $text .= ' <h6 class="card-title"> '. $row['Date_depart'] .'</h6>';
              $text .= ' <h6 class="card-title"> '. $row['nombrePlace'] .' place disponible </h6>';
              $text .= ' </div>';
              $text .= ' <div class="card-footer">';
              $text .= ' <a href="#" class="btn btn-primary">Reserver!</a>';
              $text .= ' </div>';
              $text .= ' </div>';
              $text .= ' </div>';
              echo $text;

              // echo "<div class=\"row text-center\">";

              // echo "<div class=\"col-lg-3 col-md-6 mb-4\">";
              // echo " <div class=\"card h-100\">";
              // echo "<img class=\"card-img-top\" src=\"http://placehold.it/500x325\">";
              // echo "<div class=\"card-body\">";
              // echo "<h4 class=\"card-title\">" . $row['Depart'] ."</h4>";
              // echo "<h4 class=\"card-title\">". $row['Destination'] ."</h4>";
              // echo "</div>";
              // echo "<div class=\"card-footer\">";
              // echo "<a href=\"#\" class=\"btn btn-primary\">Find Out More!</a>";
              // echo "</div>";
              // echo "</div>";
              // echo "</div>";
            }
            
          }
          else{
            echo "nothing" . "</br>";
          }
      }      
        
      
    ?>
  <div class="row text-center">

      <!-- <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus
              neque.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente,
              tempore debitis beatae culpa natus architecto.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus
              neque.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="http://placehold.it/500x325" alt="">
          <div class="card-body">
            <h4 class="card-title">Card title</h4>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Explicabo magni sapiente,
              tempore debitis beatae culpa natus architecto.</p>
          </div>
          <div class="card-footer">
            <a href="#" class="btn btn-primary">Find Out More!</a>
          </div>
        </div>
      </div> -->

    </div>
   
<!-- 
  <table class="table">
    <thead class="thead-dark">
      <tr>
        
        <th scope="col">Depart</th>
        <th scope="col">Destianation</th>
        <th scope="col">date de depart</th>
        <th scope="col">Time</th>
        <th scope="col">Price</th>
        <th scope="col">nombre de Place</th>
        <th scope="col">Reservation</th>
      </tr>
    </thead>
                  
   

    <tbody>
      <tr class="table-active">
        
        <td><?php echo $depart; ?></td>
        <td><?php echo $destination;?></td>
        <td><?php echo $date; ?></td>
        <td><?php echo $time; ?></td>
        <td><?php echo $prix;?>DH</td>
        <td><?php echo $nbrPlace; ?></td>
        <td><button type="button" class="btn btn-warning">
        <a href="reservation.php?id=<?php echo $id; ?>">Reserver</a></button></td>
        
      </tr>
      
    </tbody>
                   -->
   
    
  </table>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>