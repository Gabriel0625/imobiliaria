Create database imobiliaria ;
use imobiliaria;

CREATE TABLE tb_cliente (
    id_cliente INT AUTO_INCREMENT PRIMARY KEY,
    nm_cliente VARCHAR(45),
    cpf_cliente VARCHAR(45),
    nr_telefone CHAR(11),
    nm_email VARCHAR(45),
    nm_endereco VARCHAR(45),
    nr_endereco CHAR(10)
);
 
CREATE TABLE tb_corretor (
    id_funcionario INT AUTO_INCREMENT PRIMARY KEY,
    nm_corretor VARCHAR(45),
    nr_cred CHAR(6),
    nr_telefone CHAR(11),
    nm_email VARCHAR(45)
);
 
CREATE TABLE tb_imovel (
    id_imovel INT AUTO_INCREMENT PRIMARY KEY,
    tp_imovel VARCHAR(45),
    nm_endereco VARCHAR(45),
    nr_endereco CHAR(11),
    nr_cep CHAR(8),
    ds_imovel VARCHAR(45),
    vl_imovel DECIMAL(10,2),
    ds_status VARCHAR(45)
);
 
CREATE TABLE tb_visita (
    id_visita INT AUTO_INCREMENT PRIMARY KEY,
    dt_visita CHAR(8),
    hr_visita VARCHAR(45),
    id_cliente INT,
    id_funcionario INT,
    id_imovel INT,
    FOREIGN KEY (id_cliente) REFERENCES tb_cliente(id_cliente),
    FOREIGN KEY (id_funcionario) REFERENCES tb_corretor(id_funcionario),
    FOREIGN KEY (id_imovel) REFERENCES tb_imovel(id_imovel)
);