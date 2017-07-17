@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="jumbotron">
                    <h1>维修通</h1>

                    <p class="lead">最简单的维修平台</p>
                    @if($isWorker)
                        <p>工人版</p>
                    @endif
                    <br/>
                    @if($isWorker)
                        <p><a class="btn btn-lg btn-info" href="/worker/orders-list">我的订单列表</a></p>
                    @else
                        <p><a class="btn btn-lg btn-success" href="/orders/choose-service">立即下单</a></p>
                        <br/>
                        <p><a class="btn btn-lg btn-primary" href="/orders/list">订单列表</a></p>
                        <br/>
                        <br/>
                        <p><a class="btn btn-lg btn-warning" href="{{route('apply')}}">申请成为维修员</a></p>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
