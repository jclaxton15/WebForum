<?php include 'index.php;' ?>
<html
<head>
<title>PHP File Upload & Download Application</title>
<link rel="stylesheet" href="style.css">
<body>
    <div class="container">
        <div class="row">
            <form action="index.php" method="post" enctype="multipart/form-data">
            <h3>Upload Files</h3>    
            <input type="file" name="file"><br>
            <button type="submit" name="submit">Upload</button>
</html>