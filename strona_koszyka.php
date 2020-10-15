<?php
session_start();
  $i = 0;

  /* Kalkulator transakcji */
  $_SESSION["kwota1"] = $_SESSION["ilosc1"]*999;
  $_SESSION["kwota2"] = $_SESSION["ilosc2"]*599;
  $_SESSION["kwota3"] = $_SESSION["ilosc3"]*1699;
  $_SESSION["sumaCalkowita"] = $_SESSION["kwota1"] + $_SESSION["kwota2"] + $_SESSION["kwota3"];
  /* Kalkulator transakcji */
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
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <h3>Podsumowanie zamówienia</h3>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">Nazwa artytułu</th>
              <th scope="col">Cena</th>
              <th scope="col">Ilość sztuk</th>
              <th scope="col">Suma za artykuł</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Samsung Galaxy M21</th>
              <td>999 zł</td>
              <td><?php echo $_SESSION["ilosc1"];?></td>
              <td><?php echo $_SESSION["kwota1"];?></td>
            </tr>
            <tr>
              <th scope="row">Huawei Y6p</th>
              <td>599 zł</td>
              <td><?php echo $_SESSION["ilosc2"];?></td>
              <td><?php echo $_SESSION["kwota2"];?></td>
            </tr>
            <tr>
              <th scope="row">Xiaomi Mi Note 10 Lite</th>
              <td>1699 zł</td>
              <td><?php echo $_SESSION["ilosc3"];?></td>
              <td><?php echo $_SESSION["kwota3"];?></td>
            </tr>
          </tbody>
        </table>
        <hr>
        <h3>Łączna kwota: <?php echo " ".$_SESSION["sumaCalkowita"]." zł"; ?></h3><br><br>
        <a href="index.php" type="button" class="btn btn-danger btn-lg">Wróć do zamówienia</a>
        <a href="zamowione.php" type="button" class="btn btn-success btn-lg">Zatwierdź</a>
      </div>
    </div>
  </div>
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