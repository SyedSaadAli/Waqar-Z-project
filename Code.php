<?php 
include('security.php');

if(isset($_POST['login_btn']))
{
  //echo "Working";


    $Username = $_POST['Username'];
    $Password = $_POST['Password'];
    

 $_SESSION['Admin_Username'] = '';
 $_SESSION['Admin_Password'] = '';

    $q = "SELECT * FROM login";
    $q_run = mysqli_query($connection, $q);
    if(mysqli_num_rows($q_run) > 0)        
    {
        while($row = mysqli_fetch_assoc($q_run))
        {
          if($row['Username'] === $Username && $row['Password'] === $Password)
          {
             
            $_SESSION['Admin_Username'] = $Username;
            $_SESSION['Admin_Password'] = $Password;

            header('Location: admin/index.php');
        }

    }
}

if( $_SESSION['Admin_Username'] === ''){
  header('Location: login.php');
}


}


?>

