 
CREATE TABLE tb_usuarios(
    id_usuario          INT (11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nome            VARCHAR(255) NOT NULL,
    sobrenome       VARCHAR(255) NOT NULL,
    CPF             VARCHAR(255) NOT NULL,
    telefone        VARCHAR(255) NULL,
    email           VARCHAR(255) NOT NULL,
    senha           TEXT NOT NULL,  

   data_nascimento  DATETIME   NULL,
   atualizacao      DATETIME    NULL,
   eliminar         DATETIME    NULL,
   estado           VARCHAR(11) NOT NULL 
);