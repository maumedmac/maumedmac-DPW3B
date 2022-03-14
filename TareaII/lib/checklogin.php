<?php
if(isset($_POST['submit']))
{
    $user = $_POST['user'];
    $pass = $_POST['pass'];
    if(empty($user) || empty($pass)){ // verifica si mis campos estan vacios 
        header('Location:../index.php?msg='.urlencode('Debe llenar los campos'));
    }
    else 
    {
        if ($user == 'maumedmac@gmail.com' && $pass=='123456') 
        {
            echo $user." ".$pass;
            header("Location: ../public/presentacion.php");
            
        }
        else
        {
            header("Location: ../index.php?error=si");//echo "mala sesion"; }
        }
    }
}
else
{ 
    header("Location: ../index.php?error=si");/*echo "mala sesion";*/
}
?>