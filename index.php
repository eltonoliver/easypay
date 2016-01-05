<?php
	$var=$_GET["var"];
	$v2=$_GET["v2"];

	if ($var=='principal') { $vPage='modulos/page.php'; }
	elseif ($var=='conta') { $vPage='modulos/conta.php'; }
	elseif ($var=='abrir-conta') { $vPage='modulos/abrir-conta.php'; }
	elseif ($var=='pagamento') { $vPage='modulos/pagamento.php'; }
	elseif ($var=='transferencia') { $vPage='modulos/transferencia.php'; }
	else $vPage='modulos/page.php';

?>

<?php include 'include_header.php'; ?>


<? include $vPage; ?>

	
<?php include 'include_footer.php'; ?>


