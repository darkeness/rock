<?php
$link = mysqli_connect('localhost','root','');
if (!$link) {
    die('Não foi possível conectar: ' . mysqli_error());
}
$produto_id = $_GET['p'];
mysqli_select_db($link, 'comentarioss');
$resultado = mysqli_query($link, "SELECT * FROM produtos WHERE id = $produto_id");

$comentarios = mysqli_query($link, "SELECT * FROM `comentarioss` WHERE `id produto` = $produto_id");


while ( $linha = mysqli_fetch_assoc($resultado) ) {
	echo "<h1>$linha[nome]</h1>";
	echo "<h2>R$ $linha[valor]</h2>";
	echo "<small>$linha[qnt] unidade disponíveis</small>";
	echo "<p>$linha[descricao]</p>";

    while ($coment = mysqli_fetch_assoc($comentarios))   {
        echo "<p>$coment[comentarios]</p>";
        echo "<p><b>nota: $coment[nota]</b></p>";
   
    }







}
?>