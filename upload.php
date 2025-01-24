<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $image = $_FILES['image'];

    // echo '<pre>';
    // var_dump($image);
    // echo '</pre>';


    if ($image['tmp_name'] !== '') {
        $dir = 'upload/';
        $filePath = $dir . basename($image['name']);

        if (move_uploaded_file($image['tmp_name'], $filePath)) {
            try {

                $insert =  $conn->query("INSERT INTO photos(title,image_path) VALUES('$title', '$filePath')");

                if (!$insert) {
                    throw new Exception('There is an error while inserting data');
                }
            } catch (Exception $e) {
                echo $e->getMessage();
            }
            header('location: index.php');
            exit();
        }
    }
}
