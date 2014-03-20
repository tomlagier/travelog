<!-- Begin header content -->
<!-- Fixed navbar -->
	<div class="navbar navbar-custom navbar-inverse navbar-static-top" id="nav">
	    <div class="container">
	      <div class="navbar-header">
	        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	          <span class="icon-bar"></span>
	        </button>
	      </div>
	      <div class="collapse navbar-collapse">
	      {{-- $__env->make is a call to @include as default value --}}
	      @yield('page-nav', $__env->make('core.nav'))
	      </div><!--/.nav-collapse -->
	    </div><!--/.container -->
	</div><!--/.navbar -->

@yield('page-header', '')
<!-- End header content -->