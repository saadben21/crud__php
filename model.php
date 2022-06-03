<?php
function pdo_connect(){
    $DATABASE_HOST = 'localhost';
    $DATABASE_USER = 'root';
    $DATABASE_PASS = '';
    $DATABASE_NAME = 'crud_php';
    try{
        return new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
    } catch (PDOException $exception){
        exit('Failed to connect to database!');
    }
}
function create($marque, $modele, $prix){
    try{
        $pdo = pdo_connect();
        $sql = "INSERT INTO voiture(`id`,`marque`, `modele`, `prix`) VALUES (NULL,'$marque', '$modele', '$prix');";
        $pdo->exec($sql);
    } catch (PDOException $exception){
       echo $sql . $exception->getMessage();
    }
}
// modifier voiture
function update($id, $marque, $modele, $prix){
    try{
        $pdo = pdo_connect();
        $sql = "UPDATE voiture SET marque = '$marque', modele = '$modele', prix = '$prix' WHERE id = '$id'";
        $pdo->exec($sql);
    } catch (PDOException $exception){
        echo $sql . $exception->getMessage();
    }
}
// supprimer voiture
function delete($id){
    try{
        $pdo = pdo_connect();
        $sql = "DELETE FROM voiture WHERE id = '$id'";
        $pdo->exec($sql);
    } catch (PDOException $exception){
        echo $sql . $exception->getMessage();
    }
}
?>