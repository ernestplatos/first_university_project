<?php 
session_start();
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
$to = "ernest.platos@gmail.com";
$subject = "Treść zamówienia";
$txt = "Samsung Galaxy M21:".$_SESSION["ilosc1"]." Huawei Y6p:".$_SESSION["ilosc2"]." Xiaomi Mi Note 10 Lite:".$_SESSION["ilosc3"];
$headers = "From: adresdlaprojektu.2@yahoo.com" . "\r\n" .
"CC: somebodyelse@example.com";
if(mail($to,$subject,$txt,$headers)){
  echo '<h4>Poczta z zamówieniem została przyjęta do dostarczenia.</h4>';
};
?>
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