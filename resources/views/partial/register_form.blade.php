
	{{Form::open(['url' => route('admin.login.post'), 'class' => 'form-signup', 'role' => 'form'])}}
	
	<h1 class="font-controls">管理员登录</h1>
	<div class="black-form">
	@include('hints.hints')
	{{Form::text('name', null, ['placeholder' => '账号', 'class' => 'form-control fa fa-user-o'])}}
	{{Form::password('password', ['placeholder' => '密码', 'class' => 'form-control'])}}
	{{Form::submit('登录', ['class' => 'btn btn-lg btn-success btn-block'])}}

	</div>

{{Form::close()}}