@include('layouts.header')
<div class="fullDiv MainContent">
	{{-- <h2>{{$category->name}}</h2> --}}
	<hr>
	<aside id="categories-menu" class="col-md-2">	
		<h3 style="font-weight: bold;">个人信息</h3>
		<ul>
		{{-- 	@foreach($categories as $cat)
				<li class="category-list">{{Html::link('/categories/'.$cat->id, $cat->name)}}</li>
			@endforeach --}}
			<li>{{Html::link('/info', '基本信息')}}</li>
			<li>{{Html::link('/changepassword', '修改密码')}}</li>
		</ul>
	</aside>
	<div id="listings" class="col-md-10">
		@include('flash::message')
		{!! Form::model($user, ['route' => ['update_pwd', $user->id], 'class' => 'form-horizontal', 'method' => 'PATCH'] )!!}
			@include('partial.password-form', ['name' => 'password_old', 'labeltext' => '旧密码:'])
			@include('partial.password-form', ['name' => 'password', 'labeltext' => '新密码:'])
			@include('partial.password-form', ['name' => 'password_confirmation', 'labeltext' => '确认新密码:'])

			{!! Form::submit('修改',['class' => 'btn btn-primary form-control']) !!}
			{{-- <div class="form-group">
					{!! Form::label(null,null, ['class' => 'col-md-3 control-label']) !!}
					<div class="col-md-9">
					</div>
					
				</div> --}}
		{!! Form::close()!!}
	@include('hints.hints')
	</div>

</div>

@include('layouts.footer')