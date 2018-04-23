@include('layouts.header')
<div class="fullDiv MainContent">
	<h1>商品管理</h1><hr>
	<p>这里你可以添加删除商品，更新商品状态</p>
	<hr>
	<h2>商品</h2>
	<hr>
	<ul>
		@foreach($products as $product)
			<li>
				{{Html::image($product->image, $product->title, ['width' => '50']) }}
				<span class="category">【{{$product->category->id*1000 + $product->id}}】 - {{$product->title}}</span> - 
				
				{{ Form::open(['url' => 'admin/products/toggle-availability', 'class' => 'form-inline'])}}
				{{ Form::hidden('id', $product->id)}}
				{{ Form::select('availability', ['1' => '特价', '0' => '普通'], $product->availability)}}
				{{ Form::submit('更新', ['class' => 'btn'])}}
				{{ Form::close()}}
				{{ link_to_route('product.edit', '编辑', [$product->id], ['class' => 'btn btn-primary'])}}
				{{-- {{ Form::model($product, ['route' => ['product.update', $product->id], 'class' => 'form-inline'])}}
				{{ Form::hidden('id', $product->id)}}
				{{ Form::submit('编辑', ['class' => 'btn btn-primary'])}}
				{{ Form::close()}} --}}
				{{ Form::open(['url' => 'admin/products/destroy', 'class' => 'form-inline'])}}
				{{ Form::hidden('id', $product->id)}}
				{{ Form::submit('删除', ['class' => 'btn btn-danger'])}}
				{{ Form::close()}}
			</li>
			<div class="clearfix"></div>
		@endforeach
	</ul>
	<div class="paginate">
		{{$products->links()}}
	</div>
	<hr>
	<h2>新加商品</h2>
	<hr>
	
	
	{{Form::open(['url' => 'admin/products/create', 'files' =>true])}}
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