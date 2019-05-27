<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Thêm mới sản phẩm</title>
	<link rel="stylesheet" href="">
</head>
<body>


	<form action="" method="post">
		
		<div>
			<label for="">Tên sản phẩm</label>
			<input type="text" name="name">
		</div>

		<div>
			<label for="">Danh mục</label>
			<select name="cate_id">
				<?php foreach ($cates as $key => $value): ?>
					<option value="<?= $value->id?>"><?= $value->cate_name?></option>
					
				<?php endforeach ?>
			</select>
		</div>
		<div>
			<label for="">Giá sản phẩm</label>
			<input type="text" name="price">
		</div>
		<div>
			<label for="">Ảnh sản phẩm</label>
			<input type="text" name="image">
		</div>
		<div>
			<button type="submit">Lưu</button>
		</div>
	</form>
	
</body>
</html>