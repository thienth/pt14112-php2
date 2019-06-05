<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>id</th>
				<th>tieu de</th>
				<th>mo ta</th>
				<th>anh</th>
				<th>danh muc</th>
				<th>
					<a href="add" title="">Them moi</a>
				</th>
			</tr>
		</thead>
		<tbody>
			<?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($p->id); ?></td>
				<td><?php echo e($p->title); ?></td>
				<td><?php echo e($p->description); ?></td>
				<td>
					<img src="<?php echo e($p->feature_image); ?>" width="100">
				</td>
				<td><?php echo e($p->cate_id); ?></td>
				<td>
					<a href="remove/<?php echo e($p->id); ?>" title="">Xoa</a>
					<a href="edit/<?php echo e($p->id); ?>" title="">Sua</a>
				</td>
			</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
	
</body>
</html><?php /**PATH /Library/WebServer/Documents/pt14112/lab2/views/homepage.blade.php ENDPATH**/ ?>