<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php  
	function form($label, $type, $name){
	?>
	<label for=""><?= $label; ?></label>
	<input type="<?= $type ?>" name="<?= $name; ?>">
	<br>
	<?php	
		return $name;
	}
	form('Nama Lengkap', 'text','nama_lengkap');
	form('No. Telepon', 'number','nama_lengkap');
	form('E-Mail', 'email','email')
	?>
	
	
</body>
</html>