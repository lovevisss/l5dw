@include('layouts.header')
<div class="fullDiv MainContent">
	<div class="col-md-6 ">
		
		{{Html::image($product->image, $product->title,['class' => 'img-responsive center-block big_img'])}}
	</div>
	<div class="col-md-6">
		<h1>{{$product->title}} </h1>
		<hr>
		<div class="col-md-12">
				颜色:
			<ul class="selector">
			<li>
				{!!Form::radio('color', '土豪金', true) !!}
				{!!Form::label('土豪金')!!}
			</li>
			<li>
				{!!Form::radio('color', '磨砂黑', false) !!}
				{!!Form::label('磨砂黑')!!}
			</li>
			<li>
				{!!Form::radio('color', '科技蓝', false) !!}
				{!!Form::label('科技蓝')!!}
			</li>
		</ul>
		</div>
		<div class="col-md-12">
					存储:
				<ul class="selector">
					<li>
						
						{!!Form::radio('size', '64G', true) !!}
						{!!Form::label('64G')!!}
					</li>
					<li>
						
						{!!Form::radio('size', '32G', false) !!}
						{!!Form::label('32G')!!}
					</li>
				</ul>
		</div>
	
		
		<hr>
		<div class="col-md-12">
			
		{!! Form::open(['route' => ['add_cart',$product->id,1], 'method' => 'GET'])!!}
			<label for="qty">数量:</label>
			{{-- <input type="text" id="qty" name="qty" value="1" maxlength="2"> --}}
			{!! Form::text('qty', 1) !!}

			（库存：<span>{{$product->num}}</span>）
			<hr>

			<span class="price">¥
				@if($product->availability ==1)
					1【特价】
				@else
				{{$product->price}}
				@endif

			</span>
			{{-- <button type="submit" class="btn btn-primary">加入购物车</button> --}}
			{!! Form::submit('加入购物车', ['class' => 'btn btn-primary']) !!}
		{!! Form::close() !!}

		</div>
	</div>
	
	<div class="col-md-12">
		<h2>商品详情:</h2>
		<p>{{$product->description}}</p>
	</div>
	<div class="clear">
	</div>
</div>
@include('layouts.footer')