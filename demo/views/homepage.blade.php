<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<fieldset>
		<legend>Bộ lọc</legend>
		<form action="" method="get" >
			<select name="cate_id">
				<option value="">--- Tất cả ---</option>
				@foreach ($cates as $ca)
					
				<option 
					value="{{$ca->id}}"
					@if($cate_id == $ca->id)
						selected
					@endif
				>{{$ca->name}}</option>
				@endforeach
			</select>
			<input type="text" name="keyword" placeholder="tên sách" value="{{$keyword}}">
			<button type="submit">Search</button>
		</form>
	</fieldset>
	<table>
		<thead>
			<tr>
				<th>Id</th>
				<th>Name</th>
				<th>Cate name</th>
				<th>Image</th>
				<th>Price</th>
				<th>
					<a href="{{getUrl('book/add')}}" title="">Tạo mới</a>
				</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($books as $el)
			<tr>
				<td>{{$el->id}}</td>
				<td>
					<a href="{{getUrl('detail/' . $el->id)}}" title="">{{$el->name}}</a>
				</td>
				<td>{{$el->category->name}}</td>
				<td>
					<img src="{{$el->feature_image}}" width="80">
				</td>
				<td>{{$el->price}}</td>
				<td>
					<a href="{{getUrl('book/edit/' . $el->id )}}" title="">Sửa</a>
					<a href="{{getUrl('book/remove/' . $el->id )}}" title="">Xóa</a>
				</td>

			</tr>
			@endforeach
		</tbody>
	</table>
	
</body>
</html>