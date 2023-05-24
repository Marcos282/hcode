<!DOCTYPE html>

<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="css/reset.css">
    </head>
    <body>
        <?php
        
        require_once 'config.inc.php';
        
        trigger_error("Essa é uma notíciia", E_USER_NOTICE);
        trigger_error("Essa é um alerta", E_USER_WARNING);
//        trigger_error("Essa é um erro", E_USER_ERROR);
        
        WSErro("Esse é um sucesso", WS_ACCEPT);
        
        PHPErro(WS_ERROR, "Falha ao processar arquivo", __FILE__, __LINE__);  
        
        try {
            throw new Exception("Essa é uma excessão",E_USER_WARNING);
        } catch (Exception $e) {
            PHPErro($e->getCode(), $e->getMessage(), $e->getFile(), $e->getLine());
            WSErro($e->getMessage() ,$e->getCode());
        }
        
        ?>
    </body>
</html>