<!-- author: caudle
     2021       -->
 @extends('layouts.app')

 @section( 'content')


  <div class="container">
    
    <div id="login">
        <h3 class="text-center text-white pt-5">Login form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="{{ route('admin.check') }}" method="post">
                            @csrf
                            @if (Session::get('fail'))
                                <div class="alert alert-danger">
                                    {{ Session::get('fail') }}
                                </div>
                            @endif
                            <h3 class="text-center chan">Login</h3>
                            <div class="form-group">
                                <label for="username" class="chan">name:</label><br>
                                <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                                <span class="text-danger"> @error('name') {{ $message }}@enderror </span>                                   
                            </div>
                            <div class="form-group">
                                <label for="password" class="chan">Password:</label><br>
                                <input type="text" name="password" id="password" class="form-control">
                                <span class="text-danger"> @error('password') {{ $message }}@enderror </span> 
                            </div>
                            <div class="form-group">
                                <label for="remember-me" class="chan"><span>Remember me</span> <span><input id="remember-me"  name="remember-me" type="checkbox"></span></label><br>
                                <input type="submit" name="log in" class="btn btn-chan btn-md" value="submit">
                            </div>
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
@endsection