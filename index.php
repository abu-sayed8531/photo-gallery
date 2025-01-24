<?php
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.min.css" integrity="sha512-xiunq9hpKsIcz42zt0o2vCo34xV0j6Ny8hgEylN3XBglZDtTZ2nwnqF/Z/TTCc18sGdvCjbFInNd++6q3J0N6g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css" integrity="sha512-CQw8fBrTrIafAzH3rPnvche6JJfBur5Y//Ea1iBJW9IJNbdgfIFgH11jSmIy1offAIB+Z1s9bgNocphhgDJSrQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>photo gallery</title>
</head>

<body>
    <div class='container'>
        <h3>Photo Gallery</h3>
        <form action='upload.php' method='post' enctype='multipart/form-data'>
            <input type='text' name='title' placeholder='Photo title' required>
            <input type='file' name='image' accept='image/*' required>
            <button type='submit'>Upload</button>
        </form>
    </div>
</body>

</html>