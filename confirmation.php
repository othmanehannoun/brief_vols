<?php 
    $id_reserv = $_GET['id'];
    $db = mysqli_connect("localhost","root","","db_gestionVols");
    $query1 = mysqli_query($db, "SELECT * FROM reservation WHERE idreservation = $id_reserv");
    if(mysqli_num_rows($query1) == 1){
        $row = mysqli_fetch_array($query1);
        $id_client = $row['idClient'];
        $id_Vol = $row['idVol'];

        $query2 = mysqli_query($db, "SELECT * FROM client WHERE idClient = $id_client");
        if(mysqli_num_rows($query2) == 1){
            $fetch = mysqli_fetch_array($query2);
            $id_client = $fetch['idClient'];
            $nom = $fetch['Nom'];
            $prenom = $fetch['Prenom'];
            $email = $fetch['Email'];
            $tel = $fetch['tel'];
            $cin = $fetch['CIN'];
        }
    }
    $query3 = mysqli_query($db, "SELECT * FROM vols WHERE idvol = $id_Vol");
    
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="images/logo.png" alt="">
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
<p> <?php echo $nom ;?> </p>
<p> <?php echo $prenom; ?> </p>


</body>
</html>