@extends('layouts.app')
@section('active','active')
@section('content')

    <div class="container-fluid">
        <div class="row ">
            <div class="col-sm-2 col-xs-12 " >
                <div class="panel panel-default" style="width: 120%;">
                        <img src="/avatar/{{$user->avatar}}" class="img-circle" height="120px" width="120px"><br><br>
                        <strong> {{$user->name}} </strong>
                        <br><br>
                        <div class="list-group">
                            <a href="#" class="list-group-item ">تعديل الحساب</a>
                            <a href="#" class="list-group-item">احصائيات</a>
                            <a href="#" class="list-group-item">قوائم العمال</a>
                            <a href="#" class="list-group-item">قوائم الوظائف</a>

                        </div>
                </div>

                        </div>

                        <div class="col-xs-12 col-sm-9 text-center " style="margin-right: 25px">
                            <div class="panel panel-default">

                                    <h3 class="pull-right" style="margin-right: 50px">{{$user->name}}</h3>

                                <div class="panel-body">
                                    <img src="/avatar/{{$user->avatar}}" style=" width: 200px; height: 200px; border-radius: 50%;float: left; margin-left: 90px; margin-top: 90px;">
                                </div>


                            </div>
                        </div>  <!-- end div col-sm-10 -->
        </div>
    </div>
@endsection
