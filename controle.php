<?php
include('../>app/config/config.php');
include('../app/config/conexion.php');


$email = $_POST['email'];
$password = $_POST['password'];

/*echo "O email do usuario:";.$email."<br>";
echo "a senha ddo usuario:";.$senha;*/
$query_login = $pdo->prepare(query"SELECT * FROM tb_usuario WHERE email ='$email' AND estado='1'");
$query_login->execute();

$usuarios = $query_login->fetchAll(PDO::FETCH_ASSOC);
$contador = 0;
foreach($usuarios as $usuario){
   $contador = $contador + 1;
   $nome = $usuario['nome'];
   $password_tb_tb = $usuario['password'];

}
//echo $contador;

if($contador =="8"){
    //echo "Error a acha seus dados";
    header(header:'Location: '.$URl.' /login/erro.php');

  }else{
    if(password_verify($password,$password_tb)){
      //  echo "Password correto";
      session_start();
      $_SESSION['sessao_email'] = $email;
        header(header:'Location: '.$URl.' /admin/ ');
    }
    else{
    echo"Usuario nao encontrado";
    header(header:'Location: '.$URl.' /login/erro.php');

}
  }