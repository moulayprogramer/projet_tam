@extends('layouts.app')
@section('active','active')
@section('content')

    <div class="container-fluid">
        <div class="row ">
            <div class="col-sm-2 col-xs-12 " >
                <div class="panel panel-default" style="width: 120%;">
                        <img src="/avatar/{{$user->avatar}}" style=" align-content: center; height: 100px;width: 100px; border-radius: 50%;"><br><br>
                        <strong> {{$user->name}} </strong>
                        <br><br>
                        <div class="list-group">
                            <a href="#" class="list-group-item active">تعديل الحساب</a>
                            <a href="#" class="list-group-item">احصائيات</a>
                            <a href="#" class="list-group-item">قوائم العمال</a>
                            <a href="#" class="list-group-item">قوائم الوظائف</a>

                        </div>
                </div>

                        </div>
                        <div class="col-xs-12 col-sm-9 text-center " style="margin-right: 25px">
                            <div class="panel panel-default">


                            </div>
                        </div>  <!-- end div col-sm-10 -->
        </div>
    </div>
@endsection
