<?php 
require_once './models/Product.php';
require_once './models/Category.php';

$keyword = isset($_GET['keyword']) == true ? $_GET['keyword'] : "";
$products = Product::where(['name', 'like', "%$keyword%"])
					->get();

 ?>
<form action="" method="get" >
	
	<input type="text" name="keyword">
	<button type="submit">Search</button>
</form>
 <table>
 	<thead>
 		<tr>
 			<th>Tên sản phẩm</th>
 			<th>Ảnh</th>
 			<th>Giá</th>
 			<th>Tên danh mục</th>
 		</tr>
 	</thead>
 	<tbody>
 		<?php foreach ($products as $key => $value): ?>
		<tr>
 			<td><?= $value->name?></td>
 			<td>
 				<img src="<?= $value->image?>" width="80">
 			</td>
 			<td><?= $value->price?></td>
 			<td><?= $value->getCateInfo()->cate_name?></td>
 		</tr>
 		<?php endforeach ?>
 		
 	</tbody>
 </table>