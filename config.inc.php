<?php
   // Windows
    //define('PATH_INCLUDE', 'C:\\apache\\htdocs\\gco\\');
    //
    // Linux
    //define('PATH_INCLUDE', '/var/www/htdocs/gco/');
    define('PATH_INCLUDE', '');

    // Versão desta liberação
    $version = '6.1';

    // Variáveis do conexão com o BD
    $server = 'localhost';//br-cdbr-azure-south-a.cloudapp.net';
    $user = 'gco';
    $pass = 'gco42D';
    $bd = 'gcoorthosul';
  
    // Quantidade de páginas exibidas nas paginações
    define('PG_MAX', 15);
    // Quantidade de páginas exibidas nas paginações menores
    define('PG_MAX_MEN', 10);
    // Quantidade de zeros para completar a numeração dos boletos
    define('ZEROS', 11);
  
    // Define se está instalado ou não
    $install = true;
?>
