<!DOCTYPE html>
<html lang="en">
<head>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
</head>
<body>
    <?php 
        include_once("../Configure/connection.php");
        $iduser = $_POST['id_user'];
        $edituser = mysqli_query($db, "SELECT * FROM users WHERE id_user=$iduser");
        $view = mysqli_fetch_array($edituser);

        if(isset($_POST['edituser'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $query = mysqli_query($db, "UPDATE users SET id_user='$iduser',username='$username',password='$password' WHERE id_user = '$iduser'");
            echo "   <script>  Swal.fire({
                title: 'Success!',
                text: 'Successfully Edit User',
                icon: 'success',
                confirmButtonTex :'Oke!'
            });  
                setTimeout(function(){window.location='../add/adduser.php'} , 2000);
        
                </script>";
        }
            ?>
    
</body>
</html>