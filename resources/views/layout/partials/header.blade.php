<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <i class="icon-reorder shaded"></i>
            </a>

              <a class="brand" href="index.html">
                  GI
              </a>

           <div class="nav-collapse collapse navbar-inverse-collapse">
            
                @if(Auth::check())
                    @include('Lameck\Lablayout::layout.partials.components-header')
                @endif
                <ul class="nav pull-right">
                    <li><a href="">
                            Logout
                        </a></li>
                
                    
                    <li><a href="#">
                        Forgot your password?
                    </a></li>
                </ul>

            </div>
            <!-- /.nav-collapse -->
        </div>
    </div><!-- /navbar-inner -->
</div><!-- /navbar -->