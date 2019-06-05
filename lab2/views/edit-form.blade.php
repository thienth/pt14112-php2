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
		<input type="hidden" name="id" value="{{$model->id}}">
		<div>
			Tieu de
			<input type="text" name="title" value="{{$model->title}}" placeholder="">
		</div>
		<div>
			Slug
			<input type="text" name="slug" value="{{$model->slug}}" placeholder="">
		</div>
		<div>
			Tu khoa
			<input type="text" name="keywords" value="{{$model->keywords}}" placeholder="">
		</div>
		<div>
			Mo ta
			<textarea name="description">{{$model->description}}</textarea>
		</div>
		<div>
			Noi dung
			<textarea name="content">{{$model->content}}</textarea>
		</div>
		<div>
			Anh
			<input type="file" name="feature_image" value="" placeholder="">
		</div>
		<div>
			view
			<input type="number" name="views" value="{{$model->views}}" placeholder="">
		</div>
		<div>
			Danh muc
			<select name="cate_id" >
				@foreach ($_SESSION['GLOBAL_CATES'] as $el)
					<option 
					@if($model->cate_id == $el['id'])
					selected
					@endif
					value="{{$el['id']}}">{{$el['name']}}</option>
				@endforeach
				
			</select>
		</div>
		<button type="submit">Luu</button>
	</form>
	
</body>
</html>