<?php
    include_once('array.php');
   
    
    foreach($frutas as $frutaLinha){
        echo 'fruta :' .$frutaLinha.'<br>';
    }
    echo '<br><br>';

    array_push($frutas, "mangá");

    sort($frutas);

    foreach($frutas as $frutaLinha){
        echo 'fruta :' .$frutaLinha.'<br>';
    }
    echo '<br><br>';
    
    foreach($frutasDesc as $descricao){
        echo('Nome :'.$descricao.'<br>');
    }
    array_push($frutasDesc, "manga". '<br>'.
                            "preço: R$ 15,99" .'<br>'.
                            "Estoque:40".'<br><br>');

    sort($frutasDesc);
    
    foreach($frutasDesc as $descicao){
        echo ('Nome :'. $descricao.'<br>');
    }
    $valorfinal = 7.98 * 5;
    
    echo  "<h3>O valor de 5 bananas é: R$ $valorfinal</h3>";

    foreach($frutaPreco as $frutas => $precos){
        echo$frutas.' : R$'. $precos.' <br>';
    }

    if(array_search("verde", $cores)){
        echo"Cor verde disponível";
    }else{
        echo"Cor indisponível";
    }
    echo"<br><br>";

    $numeros = [5, 10, 15, 20, 25];

$soma = array_sum($numeros);


$media = $soma / count($numeros);


echo "Soma: $soma\n";
echo "Média: $media\n";




 
    
   ?>
