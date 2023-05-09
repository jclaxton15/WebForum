<?php 
$conn mysqli_connect("localhost","root","","file_upload")
if(isset($_POST['save']))
{
    $filename = $_FILES['myfile']['name'];

    destination = 'uploads/' . $filename;

    $extension = pathinfo($filename,PATHINFO_EXTENSION);

    $file = $_FILES['myfile']['tmp_name'];

    $size = $_FILES['myfile']['size'];

    if(!in_array($extension,['zip','pdf','png']))
{
    echo "test:";
}
    elseif($_FILES['myfile']['size'] > 100000)
 
    {
        echo "test2";
}   
else{
    if(move_uploaded_file($file,$destination))
    {
        $sql = "INSERT INTO files (name,size,downloads)
        VALUES('$filename','$size',0)
        ";

        if(mysqli_query($conn,$sql))
        {
            echo "test3";
        }

        else{
            echo "testFail"
        }
    }
}
}





?>