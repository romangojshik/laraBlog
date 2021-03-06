@extends('layouts.auth')

@section('content')
    <form class="form-signin" method="post">
        <div class="row">

            {!! csrf_field() !!}

            <h2 class="form-signin-heading">Please register</h2>
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
            <label for="inputPassword" class="sr-only">Repeat password</label>
            <input type="password" id="inputPassword" name="password_confirmation" class="form-control" placeholder="Repeat password" required>
            <div class="checkbox">
                <label>
                    <input type="checkbox" name="remember "value="1"> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        </div>
    </form>
@endsection

