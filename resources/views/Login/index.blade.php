@extends('base')

    @section('content')
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-8 col-lg-6 my-4">
                        
                <div class="card mt-2 shadow">
                    <div class="card-header text-center">
                        <h3>Login</h3>
                    </div>
                    <div class="card-body">
                        <form action="#" method="post" id="loginForm">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" name="email" class="form-control form-control-sm" value="" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control form-control-sm" name="password" value="" id="password" required>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="remember_me" >
                                <label for="remember_me">Remember me</label>
                            </div>
                            <input type="submit" name="submit" class="btn btn-success" value="Submit">
                            <a class="float-right" href="#">Forgot password ?</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    @endsection   