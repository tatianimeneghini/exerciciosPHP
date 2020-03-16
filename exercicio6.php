<?php

$dados = ["nome" => "Tatiani", "idade" => 28, "desenvolvedora" => true, "cores" => ["laranja", "vermelho", "amarelo"]];
#Os arrays associativos eles fazem a associação aos itens, eliminando a utilização de números para referenciar as posições.

$dados["programacao"] = ["JavaScript", "Python", "PHP"];
#Para adicionar uma nova associação.

var_dump($dados);

echo $dados["nome"];

?>