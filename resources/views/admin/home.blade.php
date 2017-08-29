@extends('layouts.admin_layouts')
@section('act_ad_1','active')
@section('admin_dash')

    <div class="col-lg-4 col-xs-12 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-12 text-right">
                        <div class="huge">{{ $Registered_today_count }} </div>
                        <div>المسجلين في الموقع اليوم</div>
                    </div>
                </div>
            </div>
            <a href="/register_today_list">
                <div class="panel-footer">
                    <span class="pull-left">القوائم</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-xs-12 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-support fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{{ $wadifa_today_count }}</div>
                        <div>الوظائف المطلوبة اليوم</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">القوائم</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-xs-12 col-md-6">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-support fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{{ $aamel_today_count }}</div>
                        <div>العمال المسجلين اليوم</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">القوائم</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-4 col-xs-12 col-md-6">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-12 text-right">
                        <div class="huge">{{ $Registered_count }} </div>
                        <div>المسجلين في الموقع</div>
                    </div>
                </div>
            </div>
            <a href="/register_list">
                <div class="panel-footer">
                    <span class="pull-left">القوائم</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-xs-12 col-md-6">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-support fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{{ $wadifa_count }}</div>
                        <div>الوظائف المطلوبة</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">القوائم</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-4 col-xs-12 col-md-6">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-support fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{{ $aamel_count }}</div>
                        <div>العمال المسجلين</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">القوائم</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-12 col-xs-12">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <span class="text-center">رسائل البريد</span>
            <div class="pull-left btn-default btn-sm"><i class="glyphicon glyphicon-refresh"></i></div>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th> البريد</th>
                            <th> التفاصيل</th>
                        </tr>
                        </thead>
                       <tbody>

                            <tr>
                                <td>n</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-link"><strong><u>>>>>>></u></strong></a>
                                </td>
                            </tr>

                        </tbody>
                    </table>

                </div>
            </div>
        </div>
        </div>

@endsection