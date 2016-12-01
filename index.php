<!-- QUANDO ABRIMOS UM ARQUIVO PHP E NÃO FECHAMOS, O SERVIDOR RECONHECE QUE TODO O ARQUIVO É PHP E NÃO TENTA INTERPRETÁ-LO COMO HTML -->
<?php
//SOMA
echo "6+2"; //Esse exemplo será visto como string, e não como operação, logo ele mostrará "6+4" e não "10".

echo "<br>"; //<br>, TAG de quebra de linha do HTML (facilita a visualização no navegador).

echo 6+2; //Esse exemplo printa o resultado da operação matemática.

echo "<br>";

//Soma, salvando o resultado em uma variável
$resultado = 6+2; //Realiza a operação matemática
echo $resultado; //Printa o resultado da operação

echo "<br>";


//SUBTRAÇÃO
echo 6-2; //Printa o resultado da operação matemática

echo "<br>";

//Subtração, salvando o resultado em uma variável
$resultado_subtracao = 6-2; //Realiza a operação
echo $resultado_subtracao; //Printa o resultado da operação.

echo "<br>";


//MULTIPLICAÇÃO
echo 6*2; //Printa o resultado da operação matemática

echo "<br>";

//Multiplicação, salvando o resultado em uma variável
$resultado_multiplicacao = 6*2; //Realiza a operação
echo $resultado_multiplicacao;

echo "<br>";


//DIVISÃO
echo 6/2; //Printa o resultado da operação matemática

echo "<br>";

//Divisão, salvando o resultado em uma variável
$resultado_divisao = 6/2; //Realiza a operação
echo $resultado_divisao;

echo "<br>";

echo "Bom, você deve ter percebido que aqui nós não nos importamos com o tamanho da variável. Nós acreditamos que a variável tem que ser autoexplicativa, ou seja, qualquer um que pegar o código deve entender de maneira fácil e rápida.";