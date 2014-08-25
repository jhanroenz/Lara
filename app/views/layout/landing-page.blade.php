<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Online Payments System</title>
</head>

<div class="intro-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-message">
                        <h1>Online Payment System</h1>
                        <h3>Saint Vincent College of Cabuyao</h3>
                        <hr class="intro-divider">
                        <ul class="list-inline intro-social-buttons">
                            <li><a href="#" data-toggle="modal" data-target="#loginModal" class="btn btn-default btn-lg"><span class="mybutton"> Sign in</span></a>
                            </li>
                        </ul>
                        @if(Session::has('global'))
                                <div class="col-xs-4"></div>
                                <div class="col-xs-4">
                                    <div class="alert alert-info" role="alert">
                                        <p>{{Session::get('global')}}</p>
                                    </div>
                                </div>
                                <div class="col-xs-4"></div>
                        @endif
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container -->

    </div>
    <!-- /.intro-header -->


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="list-inline">
                        <li><a href="{{ URL::route('home') }}"><strong>Home</strong></a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li><a href="#about"><strong>About</strong></a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li><a href="#services"><strong>Services</strong></a>
                        </li>
                        <li class="footer-menu-divider">&sdot;</li>
                        <li><a href="#contact"><strong>Contact</strong></a>
                        </li>
                    </ul>
                    <p class="copyright text-muted small"><strong>Copyright &copy; Saint Vincent College of Cabuyao 2014. All Rights Reserved</strong> </p>
                </div>
            </div>
        </div>
    </footer>

    @include('account.login-modal')
