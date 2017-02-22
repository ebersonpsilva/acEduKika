DROP TABLE ceps;
CREATE TABLE ceps(
	idCep		int				auto_increment,
	cep			int(8)			not null,
	endereco	varchar(200)	not null,
	bairro		varchar(100)	not null,
	cidade		varchar(100)	not null,
	uf			char(2)			not null,
	primary key (idCep)
);
CREATE TABLE `usuarios` (
  `idUsuario` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) NOT NULL,
  `email` varchar(150) NOT NULL,
  `senha` varchar(128) NOT NULL,
  `cep` char(9) DEFAULT NULL,
  `telefone` char(14) DEFAULT NULL,
  `celular` char(15) NOT NULL,
  `endereco` varchar(150) DEFAULT NULL,
  `bairro` varchar(75) DEFAULT NULL,
  `cidade` varchar(75) DEFAULT NULL,
  `numero` decimal(5,0) DEFAULT '0',
  `complemento` varchar(10) DEFAULT NULL,
  `dtCadastro` datetime DEFAULT CURRENT_TIMESTAMP,
  `dtExclusao` datetime DEFAULT NULL,
  `idUsuarioExclusao` int(11) DEFAULT NULL,
  `status` tinyint(4) DEFAULT '1',
  PRIMARY KEY (`idUsuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
CREATE TABLE logErros(
	idLogErro		bigint		auto_increment,
	dtCadastro		datetime	default NOW(),
	descricao		text		not null,
	CONSTRAINT pkIdLogErro	PRIMARY KEY(idLogErro)
);
CREATE TABLE empresas(
	idEmpresa		int auto_increment,
	cnpj			varchar(18)		not null,
	nome			varchar(200)	not null,
	responsavel		varchar(100)	not null,
	contato			varchar(50)		not null,
	email			varchar(150)	not null,
	telefone		char(14)		not null,
	celular			char(15)		not null,
	ukey			char(128)		not null,/*SHA256 CNPJ S/ CARACTERS 1º NOME (RAZAO SOCIAL) + 1º NOME (CONTATO)*/
	primary key(idEmpresa),
	unique key(ukey)
);
drop table filiais;
CREATE TABLE filiais(
	idFilial		int	auto_increment,
	cnpj			varchar(18)		not null,
	razaoSocial		varchar(200)	not null,
	nomeFilial		varchar(100)	not null,
	responsavel		varchar(100)	not null,
	idCep				int(8)			not null,
	numero			decimal(5,0)	null,
	complemento		varchar(30)		null,
	contato			varchar(50)		not null,
	email			varchar(150)	not null,
	telefone		char(14)		not null,
	celular			char(15)		not null,
	matriz			bool			default 1,
	status			bool			default 1,
	ukey			char(128)		not null,
	primary key(idFilial)
);
alter table filiais
add CONSTRAINT foreign key(idCep) references ceps(idCep),
add constraint foreign key(ukey) references empresas(ukey);
SELECT * FROM ceps
SELECT * FROM FILIAIS
SELECT * FROM LOGERROS
ALTER TABLE filiais
ADD COLUMN status bool null
INSERT INTO empresas (idEmpresa,cnpj,nome,responsavel,contato,email,telefone,celular,ukey)
VALUES (0,'19.999.668/0001-12','K&DU STUDIO DE TREINAMENTO FUNCIONAL LTDA','EDUARDO','KIKA (QUITERIA)','kika@cdccorporate.com.br','','','27bbe372132b8cf5c69598b89d14b3103a91102c936a01d614404398f36d37a5')
UPDATE filiais SET status = 1