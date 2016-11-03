<?php
$link = mysqli_connect('localhost','root','');
if (!$link) {
    die('Não foi possível conectar: ' . mysql_error());
}
echo 'Conexão bem sucedida';

mysqli_select_db($link, 'chavaoeruim');

    $resultado = mysqli_query($link,"SELECT * FROM produtos");


while ( $linha = mysqli_fetch_assoc($resultado) ) {


    echo "produto >>>> <br>";
    echo "<a href='produto.php?P=$LINHA[id]'>";  
    echo "nome: $linha[nome]<br>";
    echo "valor: $linha[valor]<br>";
    echo "</a><br>";


}


?>