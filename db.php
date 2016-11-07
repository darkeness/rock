<?php
$link = mysqli_connect('localhost','root','');
if (!$link) {
    die('Não foi possível conectar: ' . mysqli_error());
}
mysqli_select_db($link, 'comentarioss');
$resultado = mysqli_query($link, "SELECT * FROM produtos");
while ( $linha = mysqli_fetch_assoc($resultado) ) {
	echo "<a href='produto.php?p=$linha[id]'>";
	echo "Nome: $linha[nome]<br>";
	echo "Valor: $linha[valor]<br>";
	echo "</a><br>";
}
?>