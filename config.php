<?php
    define('HOST', '127.0.0.1');
    define('USUARIO', 'root');
    define('SENHA', '');
    define('db', 'form');

    $conexao = mysqli_connect(HOST, USUARIO, SENHA, db) or die('Não foi possível conectar.')


?>
