<html>
<head>
</head>
<body>
	//@if(count($errors)>0)
	<li>upload image error</li>
	//@foreach($error->all() as $error)
	//print_r($error);
	//@endforeach
	//@endif
{{ Form::open(array('action' => 'CurdController@Add', 'enctype' => 'multipart/form-data')) }}
    
    <?php echo Form::token();?>
    {{Form::label('name', 'name')}}
    {{Form::text('name')}}
    {{Form::label('image', 'image')}}
    {{Form::file('image')}}
    {{Form::submit('Add!') }}

{{ Form::close() }}

</body>
</html>