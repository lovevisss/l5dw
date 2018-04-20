@include('layouts.header')
<div class="fullDiv MainContent">
	<h2>{{$category->name}}</h2>
	<hr>
	<div id="categories-menu" class="col-md-2">	
		<h3 style="font-weight: bold;">类目</h3>
		<ul>
			@foreach($categories as $cat)
				<li class="category-list">{{Html::link('/categories/'.$cat->id, $cat->name)}}</li>
			@endforeach
		</ul>
	</div>
	<div class="col-md-10">
		@foreach($products as $product)
			<div class="product-list-single">
				<a href="/product/{{$product->id}}">
					{{Html::image($product->image, $product->title, ['class' => 'feature', 'width' => '240', 'height' => '127'])}}
				</a>

				<h3>{{$product->title}}</h3>
				<p>{{substr($product->description,0,40)."..."}}</p>
			
				<p>
                        <p><i class="gou"></i></p>
                     <a href="/product/{{$product->id}}" target="_blank" class="btn btn-primary">了解更多</a> <a href="{{ route('add_cart',['id' => $product->id, 'num' => 1]) }}" target="_blank" class="btn btn-primary">加入购物车</a> 
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