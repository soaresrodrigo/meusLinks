<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $titulo; ?></title>
</head>
<body>
    <!--Cabeçalho-->
    <header>
        Cabeçalho
    </header>

    <!--Corpo-->
    <?php $this->load->view($model); ?>

    <!--Rodapé-->
    <footer>Rodapé</footer>
    
</body>
</html>