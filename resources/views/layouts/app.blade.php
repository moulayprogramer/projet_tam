<!DOCTYPE html>
<html lang="ar">
  <head>
   <meta http-equiv="Content-Type" content="text/html; charset=windows-1256" />
   <meta name="viewport" content="width=device-width, initial-scale=1">
	  
	    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
	  
	  
    <title>sonn3_tamantasset</title>

    <!-- Bootstrap -->

    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap-rtl.css') }}" rel="stylesheet">
  	<link href="{{ asset('css/style.css') }}" rel="stylesheet">
	  <script src="{{ asset('js/jquery.min.js') }}"></script>

  <script>
	  $(document).ready(function(){
	  $("#employes a:contains(' عرض العمال  ')").parent().addClass('active');
	  $("#travaille a:contains(' عرض الوظائف ')").parent().addClass('active');
	  $("#page_principale a:contains(' الصفحة الرئيسية')").parent().addClass('active');
	  $("#personel a:contains(' الصفحة الشخصية ')").parent().addClass('active');
	  $("#inscription a:contains(' التسجيل')").parent().addClass('active');
	  $("#login a:contains(' دخول ')").parent().addClass('active');
		  		  

	   });
	  
$(document).ready(function(){
    $("#s_info").click(function(){
        $("#info").slideDown("slow");
		 $("#khebra").hide(1000);
		$("#moahelat").hide(1000);
		$("#talim").hide(1000);
		$("#ihtimamat").hide(1000);
		
    });
});
	$(document).ready(function(){
    $("#s_khebra").click(function(){
        $("#khebra").slideDown("slow");
		 $("#info").hide(1000);
		$("#moahelat").hide(1000);
		$("#talim").hide(1000);
		$("#ihtimamat").hide(1000);
    });
});
	  $(document).ready(function(){
    $("#s_moahelat").click(function(){
        $("#moahelat").slideDown("slow");
		 $("#info").hide(1000);
		$("#khebra").hide(1000);
		$("#talim").hide(1000);
		$("#ihtimamat").hide(1000);
    });
});
	  $(document).ready(function(){
    $("#s_talim").click(function(){
        $("#talim").slideDown("slow");
		 $("#info").hide(1000);
		$("#khebra").hide(1000);
		$("#moahelat").hide(1000);
		$("#ihtimamat").hide(1000);
    });
});
	   $(document).ready(function(){
    $("#s_ihtimamat").click(function(){
        $("#ihtimamat").slideDown("slow");
		 $("#info").hide(1000);
		$("#khebra").hide(1000);
		$("#moahelat").hide(1000);
		$("#talim").hide(1000);
    });
});
</script>
	  
	  

  </head>
	
  <body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand hidden-xs hidden-sm" href="#" style="font-family:dthuluth2;"> صنّاع<span color='white' >  الأمــــل</span></a>
              <a class="navbar-brand visible-xs-block" href="#" style="font-family:dthuluth2; font-size: 23px;"> صنّاع<span color='white' >  الأمــــل</span></a>
              <a class="navbar-brand visible-sm-block" href="#" style="font-family:dthuluth2; font-size: 19px;"> صنّاع<span color='white' >  الأمــــل</span></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              -
              <ul class="nav navbar-nav">
                  <li><a class="hidden-sm" href="/page_principale" ><span class="glyphicon glyphicon-home" aria-hidden="true"></span> الصفحة الرئيسية</a>
                      <a style="font-size: 10px ;" class="visible-sm-block" href="/page_principale" ><span class="glyphicon glyphicon-home" aria-hidden="true"></span> الصفحة الرئيسية</a></li>
                  <li><a class="hidden-sm" href="/travaille"><span class="glyphicon glyphicon-bishop" aria-hidden="true"></span> عرض الوظائف </a>
                      <a style="font-size: 10px ;" class="visible-sm-block" href="/travaille"><span class="glyphicon glyphicon-bishop" aria-hidden="true"></span> عرض الوظائف </a></li>
                  <li><a class="hidden-sm" href="/employes"><span class="glyphicon glyphicon-bishop" aria-hidden="true"></span> عرض العمال  </a>
                      <a style="font-size: 10px ;" class="visible-sm-block" href="/employes"><span class="glyphicon glyphicon-bishop" aria-hidden="true"></span> عرض العمال  </a></li>
                  @if (!(Auth::guest()))
                      <li><a class="hidden-sm" href="/personel"><span class="glyphicon glyphicon-bishop" aria-hidden="true"></span> الصفحة الشخصية </a>
                          <a style="font-size: 10px ;" class="visible-sm-block" href="/personel"><span class="glyphicon glyphicon-bishop" aria-hidden="true"></span> الصفحة الشخصية </a></li>
                  @endif



              </ul>

              <ul class="nav navbar-nav navbar-right">
                  @if (Auth::guest())
                      <li><a class="hidden-sm" href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> التسجيل</a>
                          <a style="font-size: 10px ;" class="visible-sm-block" href="{{ route('register') }}"><span class="glyphicon glyphicon-user"></span> التسجيل</a></li>
                      <li><a class="hidden-sm" href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> دخول </a>
                          <a style="font-size: 10px ;" class="visible-sm-block" href="{{ route('login') }}"><span class="glyphicon glyphicon-log-in"></span> دخول </a></li>
                  @else
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <ul class="dropdown-menu" role="menu">
                              <li>
                                  <a href="{{ route('logout') }}"
                                     onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                      Logout
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                              </li>
                          </ul>
                      </li>
                  @endif




              </ul>
          </div><!-- /.navbar-collapse -->

      </div>
  </nav>














	<!---->
	  
	  <div class="container-fluid">
  <div class="row ">
    <div class="ilan col-sm-2 hidden-xs " ><img src='{{ asset('images/18.gif') }}' width="100%"></div>
    <div class="col-xs-12 col-sm-10 text-center " >
		
		

		 @yield('content')
		
		
		
		
	  </div>  <!-- end div col-sm-10 -->
  </div>
</div>
	  

	  <section class="footer">
	  <footer class="container-fluid bg-4 text-center">
  <p>نتمنى ان ينال الموقع اعجابكم </p> 
</footer>
	  </section>
	  
	  
	  
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>