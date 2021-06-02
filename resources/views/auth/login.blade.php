
<x-guest-layout>
    <div class="container-fluid">
        <div class="row no-gutter">
          <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
          <div class="col-md-8 col-lg-6">
            <div class="login">
              <div class="container">
                <div class="row">
                  <div class="col-md-9 col-lg-8 mx-auto">
                    <h3 class="login-heading mb-4">Login!</h3>
                    <x-jet-validation-errors class="validation-errors" />
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                      <div class="form-label-group">
                        <input type="email" id="inputEmail" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email address" required autofocus>
                        <label for="inputEmail">Email address</label>
                      </div>
      
                      <div class="form-label-group">
                        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="*********" required autocomplete="current-password">
                        <label for="inputPassword">Password</label>
                      </div>
      
                      <div class="custom-control custom-checkbox mb-3">
                        <input type="checkbox" name="remember" class="custom-control-input" id="customCheck1">
                        <label class="custom-control-label" for="customCheck1">Remember password</label>
                      </div>
                      <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Sign in</button>
                      <div class="text-center">
                        <a class="small" href="{{ route('password.request') }}">Forgot password?</a></div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      

</x-guest-layout>