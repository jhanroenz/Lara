
<!-- Payment Navigation -->
 <header class="navbar navbar-static-top navbar-inverse" id="top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="{{ URL::route('home') }}" class="navbar-brand">Saint Vincent College of Cabuyao</a>
    </div>
    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav pull-right">
		  @if(Auth::check())
      <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">{{ Auth::user()->firstname, ' ' , Auth::user()->lastname }} <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="{{ URL::route('account-change-password') }}">Change Password</a></li>

            <li class="divider"></li>
            <li><a href=" {{ URL::route('account-sign-out') }} ">Sign Out</a></li>            
          </ul>
        </li>
		  @else
			<li><a href="{{ URL::route('account-create') }}">Create an account</a></li>
      <li><a href="#" data-toggle="modal" data-target="#forgotModal">Forgot Password</a></li>
		  @endif
      </ul>
    </nav>
  </div>
</header>


