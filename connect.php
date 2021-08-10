<?php

define( 'DB_NAME', "local" );
/** MySQL database username */
define( 'DB_USER', "root" );
/** MySQL database password */
define( 'DB_PASSWORD', "root" );
/** MySQL hostname */
define( 'DB_HOST', "localhost" );
/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );
/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

//FUNÇÃO PARA CONECTAR AO BANCO DE DADOS
$con = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

mysqli_set_charset($con, DB_CHARSET);
//FIM DAFUNÇÃO PARA CONECTAR AO BANCO DE DADOS

if($con){echo 'conectado com sucesso';}else{echo 'Erro ao conectar com o banco de dados';}