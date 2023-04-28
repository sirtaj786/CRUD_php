<?php
    include "connection.php";
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "DELETE from `register` where id=$id";
        $conn->query($sql);
    }
    header('location:/demo/index.php');
    exit;
?>