<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="" method="post" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?php echo e($model->id); ?>">
		<div>
			Tieu de
			<input type="text" name="title" value="<?php echo e($model->title); ?>" placeholder="">
		</div>
		<div>
			Slug
			<input type="text" name="slug" value="<?php echo e($model->slug); ?>" placeholder="">
		</div>
		<div>
			Tu khoa
			<input type="text" name="keywords" value="<?php echo e($model->keywords); ?>" placeholder="">
		</div>
		<div>
			Mo ta
			<textarea name="description"><?php echo e($model->description); ?></textarea>
		</div>
		<div>
			Noi dung
			<textarea name="content"><?php echo e($model->content); ?></textarea>
		</div>
		<div>
			Anh
			<input type="file" name="feature_image" value="" placeholder="">
		</div>
		<div>
			view
			<input type="number" name="views" value="<?php echo e($model->views); ?>" placeholder="">
		</div>
		<div>
			Danh muc
			<select name="cate_id" >
				<?php $__currentLoopData = $_SESSION['GLOBAL_CATES']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $el): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option 
					<?php if($model->cate_id == $el['id']): ?>
					selected
					<?php endif; ?>
					value="<?php echo e($el['id']); ?>"><?php echo e($el['name']); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				
			</select>
		</div>
		<button type="submit">Luu</button>
	</form>
	
</body>
</html><?php /**PATH /Library/WebServer/Documents/pt14112/lab2/views/edit-form.blade.php ENDPATH**/ ?>