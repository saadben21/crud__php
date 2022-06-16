<?php
require_once 'model.php';
$pdo = pdo_connect();
$sql = $pdo->prepare("SELECT * FROM users");
$sql->execute();
$users = $sql->fetchAll(PDO::FETCH_ASSOC);
?>
<?php foreach ($users as $user): ?>
   <?=$user['username'];?>
   <?=$user['role'];?>
   <?php endforeach; ?>
  
