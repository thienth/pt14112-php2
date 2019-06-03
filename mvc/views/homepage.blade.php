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
				<th>Id</th>
				<th>Name</th>
				<th>Image</th>
				<th>Price</th>
				<th>Add new</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($products as $el)
			<tr>
				<td>{{$el->id}}</td>
				<td>{{$el->name}}</td>
				<td>
					<img src="{{$el->image}}" width="80">
				</td>
				<td>{{$el->price}}</td>
				<td>
					<a href="" title="">Sửa</a>
					<a href="{{getUrl('product/remove/' . $el->id )}}" title="">Xóa</a>
				</td>

			</tr>
			@endforeach
		</tbody>
	</table>
	
</body>
</html>