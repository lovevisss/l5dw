@include('layouts.header')
<div class="fullDiv MainContent">
	<table class="table table-hover">
		<thead>
			<th>#</th>
			<th>用户</th>
			<th>用户编号</th>
			<th>电话</th>
			<th>状态</th>
			<th>时间</th>
			<th>明细</th>
			{{-- <th>操作</th> --}}
		</thead>
		@foreach($orders as $order)
			<tr>
	  			<td>{{sprintf("%05d", $order->id)}}</td>
	  			<td>{{$order->user->name}}</td>
	  			<td>{{sprintf("%03d", $order->user->id)}}</td>
	  			<td>{{$order->user->tel}}</td>
	  			<td>{{$order->status_text}}</td>
	  			<td>{{$order->created_at}}</td>
	  			<td><a href="{{action('OrderController@getOne', [$order->id])}}">详细信息</a></td>
	  			{{-- <td><button>退货</button> <button>确认收货</button></td> --}}
  			</tr>

		@endforeach
		<tbody>
  		
  		</tbody>
	</table>
</div>
@include('layouts.footer')