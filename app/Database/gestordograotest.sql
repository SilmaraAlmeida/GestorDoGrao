CREATE DATABASE IF NOT EXISTS gestordograotest;
USE gestordograotest;

CREATE TABLE IF NOT EXISTS usuario (
	id INT AUTO_INCREMENT NOT NULL,
	nome VARCHAR(100) NOT NULL,
	email VARCHAR(100) NOT NULL,
	senha VARCHAR(255) NOT NULL,
	PRIMARY KEY (id),
	UNIQUE KEY email (email)
)ENGINE=InnoDB DEFAULT CHARSET = UTF8;

CREATE TABLE IF NOT EXISTS historico (
	id INT NOT NULL AUTO_INCREMENT,
	id_usuario INT NOT NULL,
	nome_producao_antigo VARCHAR(150) NOT NULL,
	nome_producao_novo VARCHAR(150) NOT NULL,
	estado_antigo VARCHAR(40) NOT NULL,
	estado_novo VARCHAR(40) NOT NULL,
	cidade_antigo VARCHAR(40) NOT NULL,
	cidade_novo VARCHAR(40) NOT NULL,
	telefone_antigo VARCHAR(20) NOT NULL,
	telefone_novo VARCHAR(20) NOT NULL,
	area_platada_antigo DECIMAL(10, 2) NOT NULL,
	area_plantada_novo DECIMAL(10, 2) NOT NULL,
	variedade_cafe_antigo VARCHAR(50) NOT NULL,
	variedade_cafe_novo VARCHAR(50) NOT NULL,
	metodo_cultivo_antigo VARCHAR(70) NOT NULL,
	metodo_cultivo_novo VARCHAR(70) NOT NULL,
	quantidade_safra_antigo DECIMAL(10, 2) NOT NULL,
	quantidade_safra_novo DECIMAL(10, 2) NOT NULL,
	acao ENUM('INSERT', 'UPDATE', 'DELETE') NOT NULL,
	alterado_em TIMESTAMP NOT NULL,
	PRIMARY KEY (id),
	KEY historico_usuario_id_foreign (id_usuario),
	CONSTRAINT historico_usuario_id_foreign FOREIGN KEY (id_usuario) REFERENCES usuario (id)
)ENGINE=InnoDB DEFAULT CHARSET = UTF8;

CREATE TABLE IF NOT EXISTS vendas (
	id INT NOT NULL AUTO_INCREMENT,
	id_usuario INT NOT NULL,
	data_venda DATE NOT NULL,
	cliente VARCHAR(100) NOT NULL,
	produto VARCHAR(100) NOT NULL,
	quantidade INT NOT NULL,
	preco_unitario DECIMAL(10, 2) NOT NULL,
	PRIMARY KEY (id),
	KEY vendas_usuario_id_foreign (id_usuario),
	CONSTRAINT vendas_usuario_id_foreign FOREIGN KEY (id_usuario) REFERENCES usuario (id)
)ENGINE=InnoDB DEFAULT CHARSET = UTF8;

CREATE TABLE IF NOT EXISTS controle_estoque (
	id INT NOT NULL,
	id_usuario INT NOT NULL,
	nome_produto VARCHAR(100) NOT NULL,
	tipo_cafe VARCHAR(100) NOT NULL,
	categoria VARCHAR(100) NOT NULL,
	quantidade_estoque INT NOT NULL,
	preco_compra DECIMAL(10, 2) NOT NULL,
	preco_venda DECIMAL(10, 2) NOT NULL,
	fornecedor DECIMAL(10, 2) NOT NULL,
	data_compra DATE NOT NULL,
	notas_adicionais TEXT,
	PRIMARY KEY (id),
	KEY controle_estoque_usuario_id_foreign (id_usuario),
	CONSTRAINT controle_estoque_usuario_id_foreign FOREIGN KEY (id_usuario) REFERENCES usuario(id)
)ENGINE=InnoDB DEFAULT CHARSET = UTF8;

CREATE TABLE IF NOT EXISTS custos_lavoura (
	id INT NOT NULL,
	id_usuario INT NOT NULL,
	data_registro TIMESTAMP NOT NULL,
	custo_insumo DECIMAL(10, 2) NOT NULL,
	mao_de_obra DECIMAL(10, 2) NOT NULL,
	maquina_equipamentos DECIMAL(10, 2) NOT NULL,
	irrigacao DECIMAL(10, 2) NOT NULL,
	servicos_terceirizados DECIMAL(10, 2) NOT NULL,
	receitas DECIMAL(10, 2) NOT NULL,
	PRIMARY KEY (id),
	KEY custos_lavoura_usuario_id_foreign (id_usuario),
	CONSTRAINT custos_lavoura_usuario_id_foreign FOREIGN KEY (id_usuario) REFERENCES usuario(id)
)ENGINE=InnoDB DEFAULT CHARSET = UTF8;

CREATE TABLE IF NOT EXISTS variedade_cafe (
	id INT NOT NULL AUTO_INCREMENT,
	nome_variedade VARCHAR(50) NOT NULL,
	PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET = UTF8;

CREATE TABLE IF NOT EXISTS metodos_cultivo (
	id INT NOT NULL AUTO_INCREMENT,
	nome_metodo VARCHAR(50) NOT NULL,
	PRIMARY KEY (id)
)ENGINE=InnoDB DEFAULT CHARSET = UTF8;

CREATE TABLE IF NOT EXISTS producao_cafe (
    id INT NOT NULL AUTO_INCREMENT,
    id_usuario INT NOT NULL,
    nome_producao VARCHAR(100) NOT NULL,
    estado VARCHAR(100) NOT NULL,
    cidade VARCHAR(100) NOT NULL,
    telefone VARCHAR(15) NOT NULL,
    area_plantada DECIMAL(10, 2) NOT NULL,
    id_variedade_cafe INT NOT NULL,
    id_metodos_cultivo INT NOT NULL,
    producao_safra INT NOT NULL,
    PRIMARY KEY (id),
    CONSTRAINT producao_usuario_id_foreign FOREIGN KEY (id_usuario) REFERENCES usuario (id),
    CONSTRAINT variedade_cafe_id_foreign FOREIGN KEY (id_variedade_cafe) REFERENCES variedade_cafe (id),
    CONSTRAINT metodos_cultivo_id_foreign FOREIGN KEY (id_metodos_cultivo) REFERENCES metodos_cultivo (id)
)ENGINE=InnoDB DEFAULT CHARSET = UTF8;


INSERT INTO metodos_cultivo (nome_metodo) VALUES
	('Cultivo Tradicional'),
	('Agro Floresta'),
	('Sistema de Sombras'),
	('Cultivo Orgânico')
;

INSERT INTO variedade_cafe (nome_variedade) VALUES
	('Arábica'),
	('Conilon'),
	('Libérica'),
	('Excelsa'),
	('Catucaí'),
	('Mundo Novo')
;
