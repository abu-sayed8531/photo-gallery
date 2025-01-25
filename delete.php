<?php
include 'db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = intval($_POST['id']);
    $sql = "SELECT * FROM photos WHERE id = $id";
    $find = $conn->query($sql);

    if ($find->num_rows == 0) {

        echo "There is no such image";
        exit();
    }


    $find = $find->fetch_assoc();
    $path = $find['image_path'];

    $result = $conn->query("DELETE  FROM photos WHERE id = $id");
    if ($result) {
        unlink($path);
        header('location: index.php');
    } else {
        echo "can not delete is photo";
    }
}
