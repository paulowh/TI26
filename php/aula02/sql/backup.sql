CREATE TABLE tb_cadastro (
    id int NOT NULL PRIMARY KEY AUTO_INCREMENT COMMENT 'Primary Key',
    nome VARCHAR(100),
    telefone VARCHAR(15),
    usuario VARCHAR(100),
    senha VARCHAR(100)
) COMMENT '';

INSERT INTO
    tb_cadastro (
        nome,
        telefone,
        usuario,
        senha
    )
VALUES (
        'harry potter',
        '(19) 98765-4321',
        'harry_potter',
        'senha123'
    ),
    (
        'luke skywalker',
        '(19) 98765-4321',
        'luke_skywalker',
        'forca123'
    ),
    (
        'frodo baggins',
        '(19) 98765-4321',
        'frodo_baggins',
        'anello123'
    ),
    (
        'indiana jones',
        '(19) 98765-4321',
        'indy_jones',
        'arqueologia123'
    ),
    (
        'trinity ',
        '(19) 98765-4321',
        'trinity_matrix',
        'neo123'
    ),
    (
        'paulo',
        '(19) 98765-4321',
        'admin',
        'admin'
    );