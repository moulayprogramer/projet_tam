@extends('layouts.user_layouts')
@section('act_us_1','active')
@section('user_dash')
    <div class="card-header" style=background-image:url(../images/07.jpg);"">
        <div class="row">
            <div class="col-xs-7">
                <h1 class="hidden-xs" style="font-family:monospace;">{{ Auth::user()->name }}</h1>
                <h1 class="visible-xs-block" style="font-family: monospace;font-size: 11px; color: black;">{{ Auth::user()->name }}</h1>
            </div></div></div>
    <!--<div class="col-sm-12">




			
			
			
			<div class="row">

					
				<div class="col-sm-6" >
					<div class="well">
      <h1>إعلاناتك </h1>
					</div>
					
					<div class="well">
					الاعلان الاول 
     <!-- <br><br><br><h3 style="color:red;">لم تقم بإنشاء اعلانات</h3><br><br><br>
					</div>
				
				</div>
			

			
			
			
			
         
        </div>
      </div>-->

@endsection