@extends('master')

@section('content')

<div class="row">
        <div class="col-sm-12 col-md-10 col-md-offset-1">
            <table class="table table-hover">
                <thead>
                <tr>
                    <th>商品</th>
                    <th></th>
                    <th class="text-center">数量</th>
                    <th class="text-center">小计</th>
                    <th> </th>
                </tr>
                </thead>
                <tbody>
                @foreach($items as $item)
                    <tr>
                        <td class="col-sm-8 col-md-6">
                            <div class="media">
                                {{-- <a class="thumbnail pull-left" href="#"> <img class="media-object" src="{{$item->product->imageurl}}" style="width: 100px; height: 72px;"> </a> --}}
                                {{Html::image($item->product->image, $item->product->title,['class' => 'img-responsive thumbnail-img'])}}
                                <div class="media-body">
                                    <h4 class="media-heading"><a href="#">{{$item->product->name}}</a></h4>
                                </div>
                            </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                        </td>
                        <td class="col-sm-1 col-md-1 text-center">


                        <strong>{{$item->num}}</strong>
                       {{--  <div class="input-group spinner">
                            <input type="text" class="form-control" value="{{$item->num}}" min="0" max="500" name={{}}>
                            <div class="input-group-btn-vertical">
                              <button class="btn btn-default" type="button"><i class="fa fa-caret-up"></i></button>
                              <button class="btn btn-default" type="button"><i class="fa fa-caret-down"></i></button>
                            </div>
                          </div>
 --}}


                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>¥{{$item->product->price*$item->num}}</strong></td>
                        <td class="col-sm-1 col-md-1">
                            <a href="/removeItem/{{$item->id}}"> <button type="button" class="btn btn-danger">
                                    <span class="fa fa-remove"></span> 移除3
                                </button>
                            </a>
                        </td> 
                    </tr>
                @endforeach

                <tr>
                    <td>   </td>
                    <td>   </td>
                    <td>   </td>
                    <td><h3>总价</h3></td>
                    <td class="text-right"><h3><strong>¥{{$total}}</strong></h3></td>
                </tr>
                <tr>
                    <td>   </td>
                    <td>   </td>
                    <td>   </td>
                    <td>
                        <a href="/"> <button type="button" class="btn btn-default">
                                <span class="fa fa-shopping-cart"></span> 继续购物
                            </button>
                        </a></td>
                    <td>
                        <a href="{{route('checkout')}}"><button type="button" class="btn btn-success">
                            结算 <span class="fa fa-play"></span>
                        </button></a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

<table id="cartTable">
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
        <tr>
            <td class="checkbox"><input class="check-one check" type="checkbox"/></td>
            <td class="goods"><img src="images/1.jpg" alt=""/><span>Casio/卡西欧 EX-TR350</span></td>
            <td class="price">5999.88</td>
            <td class="count">
                <span class="reduce"></span>
                <input class="count-input" type="text" value="1"/>
                <span class="add">+</span></td>
            <td class="subtotal">5999.88</td>
            <td class="operation"><span class="delete">删除</span></td>
        </tr>
        <tr>
            <td class="checkbox"><input class="check-one check" type="checkbox"/></td>
            <td class="goods"><img src="images/2.jpg" alt=""/><span>Canon/佳能 PowerShot SX50 HS</span></td>
            <td class="price">3888.50</td>
            <td class="count"><span class="reduce"></span><input class="count-input" type="text" value="1"/><span class="add">+</span></td>
            <td class="subtotal">3888.50</td>
            <td class="operation"><span class="delete">删除</span></td>
        </tr>
        <tr>
            <td class="checkbox"><input class="check-one check" type="checkbox"/></td>
            <td class="goods"><img src="images/3.jpg" alt=""/><span>Sony/索尼 DSC-WX300</span></td>
            <td class="price">1428.50</td>
            <td class="count"><span class="reduce"></span><input class="count-input" type="text" value="1"/><span class="add">+</span></td>
            <td class="subtotal">1428.50</td>
            <td class="operation"><span class="delete">删除</span></td>
        </tr>
        <tr>
            <td class="checkbox"><input class="check-one check" type="checkbox"/></td>
            <td class="goods"><img src="images/4.jpg" alt=""/><span>Fujifilm/富士 instax mini 25</span></td>
            <td class="price">640.60</td>
            <td class="count"><span class="reduce"></span><input class="count-input" type="text" value="1"/><span class="add">+</span></td>
            <td class="subtotal">640.60</td>
            <td class="operation"><span class="delete">删除</span></td>
        </tr>
    </tbody>
</table>

<div class="foot" id="foot">
    <label class="fl select-all"><input type="checkbox" class="check-all check"/>&nbsp;全选</label>
    <a class="fl delete" id="deleteAll" href="javascript:;">删除</a>
    <div class="fr closing">结 算</div>
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



@endsection


@section('footer')




@endsection