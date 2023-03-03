<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            require_once 'Lutador.php';
            require_once 'Luta.php';
            $l=array();
            $l[0] = new Lutador("PREETY", "França", 30, 1.75, 68.9, 11, 2, 1);
            $l[1] = new Lutador("PUTSCRIPT", "Brasil", 29, 1.68, 57.8, 14, 2, 0);
                   
            $uec = new Luta();
            $uec->marcarLuta($l[0], $l[1]);
            $uec->lutar();
            
            $l[0]->status();
            $l[1]->status();
        ?>
    </body>
</html>
