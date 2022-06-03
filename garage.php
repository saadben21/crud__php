<?php
require_once 'model.php';
$pdo = pdo_connect();
$sql = $pdo->prepare("SELECT * FROM voiture");
$sql->execute();
$voitures = $sql->fetchAll(PDO::FETCH_ASSOC);
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
<table>
    <thead>

        <tr>
            <th>marque</th>
            <th>modele</th>
            <th>prix</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($voitures as $voiture): ?>
        <tr>
            <td><?=$voiture['marque'];?></td>
            <td><?=$voiture['modele'];?></td>
            <td><?=$voiture['prix'];?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
    
</body>
</html>

   
   
   
  