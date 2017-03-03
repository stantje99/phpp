<!DOCTYPE html>
<html>
<head>
  <title>Mijn eerste Php site</title>
  <link rel="stylesheet" type="test/css" href="css/style.css">
</head>
<body>
<center>
  <form action="" method="post">
    <p>Voer je leeftijd in</p>
   <input type="text" value="" name="name" />
   <input type="submit" name="submit" />
  </form>

  <?php
//controlestructure
$kost;
echo 'De kosten zijn: ';

if (isset($_POST['submit']))
    if (($_POST['name'] > 65) OR ($_POST['name'] < 12)) {
        if ($_POST['name'] > 3) {
            $kost = 5;
            echo $kost;
        }
    } else {
        $kost = 10;
        echo $kost;
    } elseif ($_POST['name'] < 3) {
    $kost = 0;
    echo $kost;
}


echo "<br>";
echo "<br>";
echo "<hr>";
echo "Kerstboom";
echo "<br>";
/////////////////////////////////
/////////////////////////////////
/////////////////////////////////
//KERSTBOOM //

$regel = 10;

for($i = 0; $i <= $regel; $i++) {
  for($j = 0; $j < $i ; $j++) {
  echo "*";
}
echo "<br>";
}

?>

 </body>
 </html>
