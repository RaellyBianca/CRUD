<?php
include('../>app/config/config.php');
include('../app/config/conexion.php');

session_start();
if(isset($_SESSION['sessao_email'])){
    session_destroy();
    header(header:'Location: '.$URl.' /login/ ');

}else{
}
?>