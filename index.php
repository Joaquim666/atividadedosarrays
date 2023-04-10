 <?php

$elementos = array();
$nome = "Alberto Von Venetti";
$idade = "45";
$sexo = "Masculino";
$estado = "Lobo Alfa";
$profissao = "Centurião Romano";

$elementos [0][0] = "Nome:";
$elementos [0][1] = "Eu me chamo " . $nome;

$elementos [1][0] = "Idade:";
$elementos [1][1] = "Eu tenho " . $idade . " anos ";

$elementos [2][0] = "Sexo:";
$elementos [2][1] = "Meu gênero é " . $sexo;

$elementos [3][0] = "Estado Civil:";
$elementos [3][1] = "Yo soy un " . $estado;

$elementos [4][0] = "Profissão:";
$elementos [4][1] = "Meu cargo é " . $profissao;

foreach ($elementos as $indice => $valor) {
    foreach ($valor as $indice_1 => $valor_1){
        echo "[$indice] [$indice_1] $valor_1 <br/>";
    }
}
 ?>