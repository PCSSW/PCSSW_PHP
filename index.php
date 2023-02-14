<?php
    const aniversario = 3;
    $contador = 0;
    do{
        $numero = rand(1 , 100);
        $contador++;
    }while($numero != aniversario);
       
    
        echo "O dia do seu nascimento é: " . aniversario . " e foram gastas $contador tentativas para gerar esse número";

?>