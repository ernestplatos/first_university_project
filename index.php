<?php
session_start();
$i = 0;
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $_SESSION["ilosc1"]= $_POST["ilosc1"];
  $_SESSION["ilosc2"]=$_POST["ilosc2"];
  $_SESSION["ilosc3"]=$_POST["ilosc3"];
header('Location: strona_koszyka.php');
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
</head>

<body>
  <?php
    /* Połączenie z bazą danych */
    $polaczenieZBaza = mysqli_connect("localhost","root","","handlevogn");
    if (mysqli_connect_errno()) {
      echo "Nie udało się połączyć z MySQL: " . mysqli_connect_error();
      exit();
    }
    /* Połączenie z bazą danych: KONIEC*/
    $zapytanie1 = "SELECT * FROM handlevogn ORDER BY id ASC";
    $wynik = mysqli_query($polaczenieZBaza, $zapytanie1);
    ?>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 md-12">
        <h4 class="text-center">Wybierz produkt:</h4><br>
      </div>
    </div>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
      <div class="row">
        <?php
            if (mysqli_num_rows($wynik) > 0){
                while($produkt = mysqli_fetch_array($wynik)){ ?>
        <div class="col-sm-12 col-md-4">
          <div class="card" style="width: 18rem;">
            <img src="<?php echo $produkt["foto"] ?>" class="card-img-top" alt="foto">
            <div class="card-body">
              <h5 class="card-title"><?php echo $produkt["nazwa"]?></h5>
              <p class="card-text"><?php echo $produkt["cena"]." zł" ?></p>
              <div class="form-group">
                <label for="ilosc" class="col-form-label">Ilość:</label>
                <div>
                  <input class="form-control" type="number" min="0" value="<?php $i++; echo $_SESSION["ilosc".$i]; ?>" id="ilosc" name="<?php
                  echo "ilosc".$i;
                  ?>">
                </div>
              </div>
            </div>
          </div>
        </div>
        <?php 
        }
        }
        ?>
        </div>
        <div class="row">
            <div class="col-sm-12">
            <br> <button type="submit" class="btn btn-success btn-lg btn-block">Złóż zamówienie</button>
            </div>
        </div>
    </form>

  <!-- Bootstrap JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
  <!-- KONIEC: Bootstrap JavaScript -->
</body>

</html>