<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<h2>Danh sach san pham</h2>
	<table>
		<thead>
			
		</thead>
		<tbody>
			<?php foreach ($products as $key => $item): ?>
			<tr>
				<td><?= $item->name?></td>
				<td><?= $item->getCateInfo()->cate_name?></td>
			</tr>
			<?php endforeach ?>
			
		</tbody>
	</table>
</body>
</html>