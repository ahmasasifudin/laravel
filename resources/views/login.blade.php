@extends('layout.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-6">
        <main class="form-signin w-100 m-auto">
            <form action="/" method="POST">
                @csrf
                    <h1 class="h4 mb-2 fw-bold text-center">Thoward First International</h1>
                    <h2 class="h6 mb-5 fw-normal text-center">Login to Start Session</h2>
            
                    <div class="form-floating">
                    <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com" autofocus required>
                    <label for="email">Email address</label>
                    </div>

                    <div class="form-floating">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                    <label for="password">Password</label>
                    </div>
            
                    <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            </form>
        </main>
    </div>
</div>

    
@endsection   

