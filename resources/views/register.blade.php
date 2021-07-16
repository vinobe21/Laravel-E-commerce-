@extends('master')
@section("content")
<div class="login-form">
    <form action="register" method="POST">
        @csrf
		<div class="avatar">
			<img src="https://www.pinclipart.com/picdir/big/565-5657886_avatar-images-for-login-form-clipart.png" >
		</div>
        <h2 class="text-center">Member Sign Up</h2>   
        <div class="form-group">
                    <label for="exampleInputEmail1">User Name</label>
                    <input type="text" class="form-control" name="name" placeholder="user name">
                </div>
		<div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                </div>     
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1"
                        placeholder="Password">
                </div>  
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
        </div>
		
    </form>
    
</div>

@endsection