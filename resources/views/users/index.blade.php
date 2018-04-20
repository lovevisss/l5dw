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
		{!! Form::model($user, ['route' => ['update_info', $user->id], 'class' => 'form-horizontal', 'method' => 'PATCH'] )!!}
			@include('partial.text-form', ['name' => 'name', 'labeltext' => '用户名:'])
			@include('partial.text-form', ['name' => 'email', 'labeltext' => '邮箱:'])
			@include('partial.text-form', ['name' => 'address', 'labeltext' => '地址:'])

			{!! Form::submit('修改',['class' => 'btn btn-primary form-control']) !!}
		
		{!! Form::close()!!}
		
		@include('hints.hints')
	</div>
	
</div>

@include('layouts.footer')