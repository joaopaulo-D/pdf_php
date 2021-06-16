<?php
	if($_POST){
		require('fpdf/fpdf.php');
		$name = $_POST['name'];
		$email = $_POST['email'];
		//$apelido = $_POST['apelido'];
		$title = 'Dados do Usuario';

		$pdf = new FPDF();
		$pdf -> AddPage();
		$pdf -> SetTitle($title);
		$pdf -> SetFont('Arial', 'B', 15);
		$w = $pdf -> GetStringWidth($title)+6;
		$pdf -> SetX((210-$w)/2);
		$pdf -> SetDrawColor(221, 221, 221, 1);
		$pdf -> SetFillColor(10, 158, 0, 1);
		$pdf -> SetTextColor(255, 255, 255, 1);
		$pdf -> SetLineWidth(1);
		$pdf -> Cell($w, 9, $title, 1, 1, 'C', true);
		$pdf -> Ln(10);
		$pdf -> SetTextColor(0, 0, 0, 1);
		$w = $pdf -> GetStringWidth($email)+20;

		$pdf -> SetX((170-$w)/2);
		$pdf -> Cell(40, 10, 'Name:', 1, 0, 'C');
		$pdf -> Cell($w, 10, $name, 1, 1, 'C');

		$pdf -> SetX((170-$w)/2);
		$pdf -> Cell(40, 10, 'E-mail:', 1, 0, 'C');
		$pdf -> Cell($w, 10, $email, 1, 1, 'C');

		/*$pdf -> SetX((170-$w)/2);
		$pdf -> Cell(40, 10, 'Apelido:', 1, 0, 'C');
		$pdf -> Cell($w, 10, $apelido, 1, 1, 'C');*/
		$pdf -> Output();
	}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>PDF em php</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="main-block">
		<div class="header">
			Gerar PDF em PHP
		</div>
		<div class="body">
			<form action="" method="post">
				<input type="text" name="name" placeholder="Digite seu nome" required="">
				<input type="email" name="email" placeholder="Digite seu e-mail" required="">
				<input type="text" name="apelido" placeholder="Digite seu apilido" required="">
				<input type="submit" value="Gerar PDF">
			</form>
		</div>
		<?php
			include('footer.php');
		?>
	</div>
</body>
</html>