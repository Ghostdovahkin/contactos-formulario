<?php
$conn = new mysqli('localhost', 'root'   , 'password' ,'contactos' );
 
if($conn->connect_error){
    echo $error = $conn->connect_error;
}

?>