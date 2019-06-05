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
			@foreach($posts as $p)
			<tr>
				<td>{{$p->id}}</td>
				<td>{{$p->title}}</td>
				<td>{{$p->description}}</td>
				<td>
					<img src="{{$p->feature_image}}" width="100">
				</td>
				<td>{{$p->cate_id}}</td>
				<td>
					<a href="remove/{{$p->id}}" title="">Xoa</a>
					<a href="edit/{{$p->id}}" title="">Sua</a>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	
</body>
</html>