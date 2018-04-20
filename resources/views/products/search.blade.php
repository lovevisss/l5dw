@include('layouts.header')
<div class="fullDiv MainContent">
	<h2>搜索 {{$keyword}}</h2>
	<hr>
	
	<div id="listings">
		@foreach($products as $product)
			<div class="product-list-single">
				<a href="/product/{{$product->id}}">
					{{Html::image($product->image, $product->title, ['class' => 'feature', 'width' => '240', 'height' => '127'])}}
				</a>

				<h3>{{$product->title}}</h3>
				<p>{{substr($product->description,0,40)."..."}}</p>
			
				<p>
                        <p><i class="gou"></i></p>
                     <a href="/product/{{$product->id}}" target="_blank" class="btn btn-primary">了解更多</a> <a href="/addtocart/{{$product->id}}" target="_blank" class="btn btn-primary">加入购物车</a> 
				</p>
			</div>
		@endforeach
	</div>
	<div class="clear">
					 	 	 	 			 			 		
 	</div> 
	<div class="paginate">
		{{$products->links()}}
	</div>
</div>
@include('layouts.footer')