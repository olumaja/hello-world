<div style="width: 100%; background-color: #333333;">
    <!-- Default navbar -->
    <nav class="navbar navbar-inverse">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Segun's Blog</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="{{Request::is('posts') ? "active" : ""}}"><a href="/">Home <span class="sr-only">(current)</span></a></li>
                    <li class="{{Request::is('about') ? "active" : ""}}"><a href="/about">About</a></li>
                    <li class="{{Request::is('contact') ? "active" : ""}}"><a href="/contact">Contact</a></li>


                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">My Account <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="#">Login</a></li>
                            <li><a href="#">Register</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Sign Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</div>