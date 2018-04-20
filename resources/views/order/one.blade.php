@include('layouts.header')
<div class="fullDiv MainContent">
	<div class="well well-lg"><p>送货地址:   {{$user->address}}</p></div>
	
	<table class="table">
		<caption>订单详情</caption>
		<thead>
			<th>名称</th>
			<th>数量</th>
			<th>小计</th>
		</thead>
		<tbody>
		@foreach($items as $item)
			<tr>
	  			<td>{{Html::image($item->product->image, $item->product->title,['class' => 'order-image'])}}{{$item->product->title}}</td>
	  			<td>{{$item->num}}</td>
	  			<td>¥{{$item->num*$item->product->price}}</td>
  			</tr>

		@endforeach

  		</tbody>
	</table>
	<div class="well well-sm">
			@if($user->memeber)
				会员折扣:9折
			@endif
  			合计： ¥{{$total}}
  			@if($order->status == 0 && $user->id !=1)
  			<a href="{{route('pay',$order->id)}}"><button class="orderbtn">付款</button></a>
  			@elseif($order->status == 1)
  				@if($user->id == 1)
  					<a href="{{route('deliver', $order->id)}}"><button class="orderbtn">发货</button></a>
				@else
  					<a href="{{route('confirm_goods', $order->id)}}"><button class="orderbtn">确认收货</button></a>
  				@endif
  			@elseif($order->status == 2)
				@if($user->id == 1)
					<a href="{{route('admin-order')}}"><button class="orderbtn">返回</button></a>
				@else
  					<a href="{{route('refund', $order->id)}}"><button class="orderbtn">退货</button></a>
  					<a href="{{route('confirm_goods', $order->id)}}"><button class="orderbtn">确认收货</button></a>
				@endif
  			@elseif($order->status == 3)
  				@if($user->id == 1)
  					<a href="{{route('confirm_goods', $order->id)}}"><button class="orderbtn">同意退货</button></a>
  				@else
  					<a href="{{route('view_order')}}"><button class="orderbtn">返回</button></a>
				@endif
  			@else
  				@if($user->id == 1)  
  					<a href="{{route('admin-order')}}"><button class="orderbtn">返回</button></a>
  				@else
  					<a href="{{route('view_order')}}"><button class="orderbtn">返回</button></a>
  				@endif
  			@endif

  		</div>
</div>
@include('layouts.footer')