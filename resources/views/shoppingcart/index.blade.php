@include('layouts.header')
<div class="fullDiv MainContent">
	

@include('flash::message')

{!! Form::open(['route' => 'cart_calc',  'method' => 'POST'])!!}
	<table id="cartTable" class="gocenter">
    <thead>
        <tr>
            <th><label><input class="check-all check" type="checkbox"/>&nbsp;全选</label></th>
            <th>商品</th>
            <th>单价</th>
            <th>数量</th>
            <th>小计</th>
            <th>操作</th>
        </tr>
    </thead>
    <tbody>
    	@foreach($items as $item)
		<tr>
            <td class="checkbox">
            	{{-- <input class="check-one check" type="checkbox"/> --}}
				 {!! Form::checkbox('check'.$item->product->id, null, false, ['class' => 'check-one check']) !!}
            </td>
            <td class="goods">
            	 {{Html::image($item->product->image, $item->product->title)}}
                             <span>{{$item->product->title}}</span>
            </td>
            <td class="price">{{$item->product->price}}</td>
            <td class="count">
                <span class="reduce">-</span>
               {{--  <input class="count-input" type="text" value="{{$item->num}}" data-id="{{$item->product->id}} name="{{$item->product->id}}""/> --}}
               {!! Form::text($item->product->id, $item->num, ['class' => 'count-input']) !!}
                <span class="add">+</span></td>
            <td class="subtotal">{{$item->product->price*$item->num}}</td>
            <td class="operation">
            	{{-- <span class="delete">删除</span> --}}
				<a href="/remove_item/{{$item->id}}"> <button type="button" class="btn btn-danger">
                        <span class="fa fa-remove"></span> 移除
                    </button>
                </a>
            </td>
        </tr>
    	@endforeach
    </tbody>
</table>

<div class="foot gocenter" id="foot">
    <label class="fl select-all"><input type="checkbox" class="check-all check"/>&nbsp;全选</label>
    {{-- <a class="fl delete" id="deleteAll" href="javascript:;">删除</a> --}}
    <div class="fr closing">{!! Form::submit('结 算',['class' => 'btn btn-primary']) !!}</div>

    <div class="fr total">合计：￥<span id="priceTotal">0.00</span></div>
    <div class="fr selected" id="selected">已选商品
        <span id="selectedTotal">0</span>件
        <span class="arrow up">︽</span>
        <span class="arrow down">︾</span>
    </div>
    <div class="selected-view">
        <div id="selectedViewList" class="clearfix">
            <!--<div><img src="images/1.jpg"><span>取消选择</span></div>-->
        </div>
        <span class="arrow">◆<span>◆</span></span>
    </div>
</div>
{!! Form::close()!!}
</div>



@include('layouts.footer')

{{Html::script('js/script.js')}}