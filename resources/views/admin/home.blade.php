@extends('layouts.app')
@section('active','active')
@section('content')

    <div class="container-fluid">
        <div class="row ">
            <div class="col-sm-2 hidden-xs " >
                <div class="panel panel-default">
                    <div class="panel-heading">Admin Dashboard</div>
                    <div class="panel-body">You are logged in ad Admin!</div>
                </div>

            </div>
            <div class="col-xs-12 col-sm-10 text-center " >

                <div class="panel panel-danger">
                    <div class="panel-heading">Admin Dashboard</div>
                    <div class="panel-body">You are logged in ad Admin!</div>
                </div>



            </div>  <!-- end div col-sm-10 -->
        </div>
    </div>
@endsection
