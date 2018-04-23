@include('layouts.header')
<div class="fullDiv MainContent">
	<h1>类目管理</h1><hr>
	<p>这里你可以添加删除类目</p>
	<h2>类目</h2><hr>
	<ul>
		@foreach($categories as $category)
			<li>
				<span>{{sprintf("%04d", $category->id)}}</span>-<span class="category">{{$category->name}}</span> - 
				{{ Form::open(['url' => 'admin/categories/destroy', 'class' => 'form-inline'])}}
				{{ Form::hidden('id', $category->id)}}
				{{ Form::submit('删除', ['class' => 'btn btn-danger'])}}
				{{ Form::close()}}
			</li>
		@endforeach
	</ul>
	<h2>新加类目</h2><hr>
	
	
	
	{{Form::open(['url' => 'admin/categories/index'])}}
	<p>
		{{Form::label('类目名称:')}}
		{{Form::text('name')}}
	</p>
	{{Form::submit('创建',['class' => 'btn btn-primary'])}}
	{{Form::close()}}

	@if(Session::has('message'))
		<p class="red_alert">{{Session::get('message')}}</p>
	@endif
	@if(count($errors) > 0)
	<div id="form-errors">
		<ul>
			@foreach($errors->all() as $error)
				<li class="red_alert">{{$error}}</li>
			@endforeach
		</ul>
	</div>
	@endif
</div>
@include('layouts.footer')