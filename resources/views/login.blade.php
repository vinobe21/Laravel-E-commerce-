@extends('master')
@section("content")
<div class="login-form">
    <form action="login" method="POST">
        @csrf
		<div class="avatar">
			<img src="https://www.pinclipart.com/picdir/big/565-5657886_avatar-images-for-login-form-clipart.png" >
		</div>
        <h2 class="text-center">Member Sign In</h2>   
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Enter email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>        
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
        </div>
		<div class="bottom-action clearfix">
            <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
            
        </div>
    </form>
    <br>
    <p class="text-center small">Don't have an account? <a href="register">Sign up here!</a></p>
</div>
@endsection