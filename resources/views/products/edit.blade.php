@include('layouts.header')
<div class="fullDiv MainContent">
	<hr>
	<h2>修改商品</h2>
	<hr>
	
	{{ Form::model($product, ['route' => ['product.update', $product->id], 'files' => true, 'method' => 'PUT'])}}
	{{-- {{Form::open(['url' => 'admin/products/create', 'files' =>true])}} --}}
	{{ Form::hidden('id', $product->id)}}
	<p>
		{{Form::label('类目名称:')}}
		{{Form::select('category_id', $arr_categories)}}
	</p>
	<p>
		{{Form::label('名称')}}
		{{Form::text('title')}}
	</p>
	<p>
		{{Form::label('描述')}}
		{{Form::textarea('description')}}
	</p>
	<p>
		{{Form::label('库存')}}
		{{Form::textarea('num')}}
	</p>
	<p>
		{{Form::label('价格')}}
		<div class="form-group">
    		<label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
   				 <div class="input-group">
     				 <div class="input-group-addon">¥</div>
					{{Form::text('price', null, ['class' => 'form-price'])}}
    			</div>
 		</div>
	</p>
	<p>
		{{Form::label('图片')}}
		{{Form::file('image')}}
	</p>
	{{Form::submit('修改',['class' => 'btn btn-primary'])}}
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