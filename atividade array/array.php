,<?php
$frutas= array( "banana", "pera", "goiaba", "morango", "acerola");

$frutas= array('BA' => "banana", 
                'PE' => "pera", 
                'GO' => "goiaba",
                'MO' => "morango",
                'AC' =>"acerola");

$frutasDesc= array( 'banana' => "banana". '<br>'.
                    "preço: R$ 7,98".'<br>'.
                    "Estoque: 40". '<br><br>',

                    'pera' =>    "pera". '<br>'.
                    "preço: R$ 6,89".'<br>'.
                    "Estoque: 55". '<br><br>',

                    'goiaba' =>  "goiaba". '<br>'.
                    "preço: R$ 7,99".'<br>'.
                    "Estoque: 70". '<br><br>',

                    'morango' => "morango". '<br>'.
                    "preço: R$ 14,88".'<br>'.
                    "Estoque: 80". '<br><br>',

                    'acerola' =>   "acerola". '<br>'.
                    "preço: R$ 5,99".'<br>'.
                    "Estoque: 150". '<br><br>');
$precos= array(7.98 , 6.89 , 7.99 , 14.88 , 5.99);

$frutaPreco =array_combine($frutas,$precos);

$cores = array("vermelho","azul","verde","amarelo","preto");
                
?>