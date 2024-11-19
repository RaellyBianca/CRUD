  <?php
//Estar no index.php
 //include ('config.php');

 $servidor = "mysql:dbname=" .BD_SISTEMA.";host=".BD_SERVIDOR;

 try{
    //base de dados
    $pdo = new PDO($servidor, username:BD_USUARIO, password:BD_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"));
    echo "<script>alert('Conexão bem-sucedida ao banco de dados.');</script>";
 }catch (PDOException $e){
    echo "<script>alert('Erro ao conectar ao banco de dados');</script>";

 }