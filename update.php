<?php
require_once 'model.php';
$pdo = pdo_connect();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <!--modifier voiture -->
    <form action=""method="post">
        <input type="text" name="id" placeholder="id (de la voiture que vous voulais modifier)">
        <input type="text" name="marque" placeholder="marque">
        <input type="text" name="modele" placeholder="modele">
        <input type="text" name="prix" placeholder="prix">
        <button type="submit" name="valid">valider</button>
   </form>
</body>
</html>
<?php
if(isset($_POST['valid'])){
    $id = $_POST['id'];
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $prix = $_POST['prix'];
    die(update($id, $marque, $modele, $prix));
}
?>