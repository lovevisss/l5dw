@include('layouts.header')
<div class="fullDiv MainContent">
	<h1>用户管理</h1><hr>
	<p>这里你可以查看用户</p>
	<h2>用户列表</h2><hr>
	<table>
		<thead>
			<td>用户名</td>
			<td>地址</td>
			<td>email</td>
			<td>注册时间</td>
			<td>操作</td>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr>
				<td>
					{{$user->name}}
				</td>
				<td>
					{{$user->address}}
				</td>
				<td>
					{{$user->email}}
				</td>
				<td>
					{{$user->created_at->diffForHumans()}}
				</td>
				<td>
					@if(!$user->member)
					<a href="#">提升为会员</a>
					@endif
				</td>
			</tr>
		@endforeach
		</tbody>
		
	</table>
	
	
	
	
</div>
@include('layouts.footer')