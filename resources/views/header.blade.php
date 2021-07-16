<?php

use \App\Http\Controllers\ProductController;

$total = 0;
if (Session::has('user')) {
    $total = ProductController::cartItem();
}

?>
<nav class="navbar">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <a class="navbar-brand" style="color: black" href="/">DOWNEY Shopping</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="/">Home</a></li>
                <li><a href="/myorders">Orders</a></li>
            </ul>
            
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/cartlist"><i class="fas fa-shopping-cart" style="font-size:20px;"></i>({{$total}})</a></li>
                @if(Session::has('user'))
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{Session::get('user')['name']}}
                        <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/logout">Sign Out</a></li>
                    </ul>
                </li>
                @else
                <li><a href="/login">Sign In</a></li>
                <li><a href="/register">Sign Up</a></li>
                @endif
            </ul>

        </div>
    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>