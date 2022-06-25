-- Apaga o banco de dados caso exista.
DROP DATABASE IF EXISTS mindexplorer;

-- Cria o banco de dados
CREATE DATABASE mindsetting CHARACTER SET utf8 COLLATE utf8_general_ci;

-- Seleciona banco de dados.
USE mindsetting; 

-- Cria tabela de usuários/autores.
CREATE TABLE users (
    user_id INT PRIMARY KEY AUTO_INCREMENT,
    user_name VARCHAR(255),
    user_email VARCHAR(255),
    user_birth DATE,
    user_photo VARCHAR(255),
    user_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    user_profile TEXT,
    user_password VARCHAR(255),
    user_type ENUM('user', 'author', 'admin') DEFAULT 'user',
    user_status ENUM('on', 'off', 'deleted') DEFAULT 'on'
);


CREATE TABLE about(
    about_id INT PRIMARY KEY AUTO_INCREMENT,
    about_name VARCHAR(255),
    about_thumb varchar (255),
    about_email VARCHAR(255),
    about_birthday date,
    about_cell varchar(15),
    about_specialties varchar(255)

);
-- criar tabela sobre
INSERT INTO about(
    about_name,
    about_thumb,
    about_email,
    about_birthday,
    about_cell,
    about_specialties
)VALUES
(
    'Natan dos Santos Coelho',
    '/usuário_img/natan2.jpg',
    'Natancoelho@gmail.com',
    '23/07/2001',
    '(21) 99768-0067',
    'Programador, estudante de Pscicologia'
),
(
    'Laura Tchaly Manes dos Santos',
    '/usuário_img/1.jpeg',
    'lauratchaly@gmail.com',
    '20/10/2003',
    '(21) 99213-5211',
    'programadora, estudante de psicologia'
),
(
    'Sandro Cesar Dantas Pereira',
    '/usuário_img/sandro2.jpg',
    'sandropereira@gmail,com',
    '30/09/1991',
    '(21) 99903-5770',
    'Programador, produtor musical, estudante de psicologia'
);

-- Insere dados em 'users'
INSERT INTO users (
    user_name,
    user_email,
    user_birth,
    user_photo,
    user_profile,
    user_password,
    user_type
) VALUES 
(
    'Natan dos Santos coelho',
    'natancoelho@gmail.com',
    '2001-07-23',
    '/usuários_img/6.jpeg',
    'Progamador, estudante, amante do conhecimento da mente humana.',
    SHA1('Qw3rtyui0P'),
    'admin'
),
(
    'Laura Tchaly Manes dos Santos',
    'lauratchaly@gmail.com',
    '2003-10-20',
    '/usuários_img/1.jpeg',
    'Progamadora, estudade de psicologia e do conhecimento humano.',
    SHA1('Qw3rtyui0P'),
    'author'
),
(
    'Sandro Cesar Dantas Pereira',
    'sandropereira@gmail.com',
    '1991-09-30',
    '/usuários_img/2.jpeg',
    'Progamador, estudante, produtor musical, e entusiasta do desenvolvimento humano.',
    SHA1('Qw3rtyui0P'),
    'admin'
),
(
    'Laura Tchaly Manes dos Santos',
    'lauratchaly@gmail.com',
    '2003-10-20',
    '/usuários_img/1.jpeg',
    'Progamadora, estudade de psicologia e do conhecimento humano.',
    SHA1('Qw3rtyui0P'),
    'user'
),
(
    'Sandro Cesar Dantas Pereira',
    'sandropereira@gmail.com',
    '1991-09-30',
    '/usuários_img/2.jpeg',
    'Progamador, estudante, produtor musical, e entusiasta do desenvolvimento humano.',
    SHA1('Qw3rtyui0P'),
    'admin'
);

