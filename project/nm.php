<?php
session_start();
include_once 'dbh.php';
$id = $_SESSION['id'];

if(isset($_POST['upload_submit'])){
    $file= $_FILES['file'];
    $fileName = $_FILES['file']['name'];
    $fileTmp = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $filesError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    
    $fileExt = explode('.',$_FILES['file']['name']);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg','jpeg','png','pdf');
    if(in_array($fileActualExt,$allowed)){
        if($_FILES['file']['error'] ===  0){
            if($_FILES['file']['size'] < 1000000){            
                $fileNameNew = "profile".$id.".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($_FILES['file']['tmp_name'],$fileDestination);
                $sql = "UPDATE profileimg SET status = 0 WHERE userid ='$id';";
                $result = mysqli_query($conn, $sql);
                header("Location: index.php?uploadsucess");
            }else{
                echo "Your file is too big!";
            }
        }else{
            echo "You have an error uploading your file!";
        }
    }else{
        echo "You cannot upload files of this type!";
    }

}

here is the code for index.php,
<?php
    session_start();
    include_once 'dbh.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .container{
            margin:20px;
            padding:10px;
            background:#ccc;
           
        }
        .container img{
            width:50px;
            height:50px
        }
        .container p{
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            font-size:20px;
            position:inherit;
            float:right;
            
        }
    </style>
</head>
<body>
    <?php
        $sql = "SELECT * from user";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)> 0){
            while ($row = mysqli_fetch_assoc($result)){
                $id= $row['id'];
                $sqlimg = "SELECT * FROM profileimg WHERE userid='$id'";
                $resultimg=mysqli_query($conn,$sqlimg);
                while($rowimg = mysqli_fetch_assoc($resultimg)){
                    echo "<div class=container>";
                        if($rowimg['status'] == 0){
                            echo "<img src= 'uploads/profile".$id.".jpg'>";
                        }else{

                            echo "<img src='uploads/pd.jpg'>";
                        }
                        echo "<p>".$row['username']."</p>";
                    echo "</div>";
                }
            }
        }else{
            echo "There are no users yet!";
        }

        if(isset($_SESSION['id'])){
            if ($_SESSION['id'] == 1){
                echo "You are logged in as user #1";
            }
            echo "<form action='upload.php' method='POST'enctype='mutlipart/form-data'>
            <input type='file' name='file'>
            <button type='submit' name='upload_submit'>Upload</button></form>";
        }else {
            echo "You are not logged in!";
        }
    ?>
    <p>Login as user!</p>
    <form action="login.php" method="POST">
      <button type="submit" name="submitlogin">Login</button>
    </form>
    <p>Logout as user!</p>
    <form action="logout.php" method="POST">
      <button type="submit" name="submitlogout">Logout</button>
    </form>
</body>
</html>