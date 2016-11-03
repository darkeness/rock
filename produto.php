<?php
$link = mysqli_connect('localhost','root','');
if (!$link) {
    die('Não foi possível conectar: ' . mysql_error());
}
$produto_id = $_GET [p]

mysqli_select_db($link, 'chavaoeruim');

    $resultado = mysqli_query($link,"SELECT * FROM produtos");


while ( $linha = mysqli_fetch_assoc($resultado) ) {
   echo "<h1>$linha [nome]</h1>";
   echo "<h2>R$ $linha[valor]</h2>";
   echo "<h3>$linha[qnt]</h3>";
   echo "<small>$linha[qnt] unidades disponiveis</small>";
   echo "<p>$linha[descricao]</p>";
   echo
}


?>