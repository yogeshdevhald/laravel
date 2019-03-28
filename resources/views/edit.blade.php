<html>
<head>
</head>
<body>
{{ Form::open(array('action' => 'CurdController@Update')) }}
    
    <?php echo Form::token();?>

    {{Form::label('name', 'name')}}
    {{Form::text('name',$allname['name'])}}
    {{ Form::hidden('id', $allname['id']) }}
     {{Form::submit('Add!') }}

{{ Form::close() }}
</body>
</html>