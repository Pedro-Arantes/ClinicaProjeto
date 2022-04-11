<!doctype html>
<html language="pt-br">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta charset="utf-8">
	<thead>
		<title>CliniMax</title>
		<link rel="icon" href="<?php echo URL_BASE ?>/assets/img/favicon.ico" type="image/icon type">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>/assets/js/datatables/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>/assets/js/datatables/css/responsive.dataTables.min.css">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>/assets/js/datatables/css/style_dataTable.css">
		
		<link rel="stylesheet" href="<?php echo URL_BASE ?>/assets/css/grade.css">
		<link rel="stylesheet" href="<?php echo URL_BASE ?>/assets/css/style.css">
		<!--font icones-->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
		
		<script src="<?php echo URL_BASE ?>/assets/js/jquery.min.js"></script>
		
			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> 
		
	</thead>
	<body>
		
    
    <!-- aqui entra a view  cabecalho.php-->
    <?php include_once "cabecalhodc.php"; ?>

	<div class="conteudo">
         <?php $this->load($view,$viewData) ?>
	</div>
		
	<!---->
		<script src="<?php echo URL_BASE ?>/assets/js/jquery-ui.js"></script>
		<script src="<?php echo URL_BASE ?>/assets/js/datatables/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo URL_BASE ?>/assets/js/datatables/js/dataTables.responsive.min.js"></script>
		<script src="<?php echo URL_BASE ?>/assets/js/js.js"></script>
		<script src="<?php echo URL_BASE ?>/assets/js/componentes/js_modal.js"></script>
		<script src="<?php echo URL_BASE ?>/assets/js/componentes/js_data_table.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
		
			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
		
	</body>
</html>