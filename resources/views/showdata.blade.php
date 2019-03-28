<html>
<head>
</head>
<body>
	<table border="1px solid black">
		<tr>
			<th>Name</th>
			<th>Update</th>
			<th>Delete</th>
			<th>Images</th>
		</tr>
		<?php foreach($allname as $name){ ?>
		<tr>
			<td>
			<?php print_r($name['name']);?>
			</td>
			<td> <img src="./public/images/<?php echo $name['image'];?>" width="40px" height="40px"></td>
			<td>
				<a href="Edit/{{$name['id']}}">Edit</a>
			</td>
			<td>
			</td>
		</tr>
		<?php }?>
	</table>
</body>
</html>