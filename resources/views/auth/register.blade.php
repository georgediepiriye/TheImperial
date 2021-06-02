
<x-guest-layout>
    <div class="container-fluid">
        <div class="row no-gutter">
          <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
          <div class="col-md-8 col-lg-6">
            <div class="login">
              <div class="container">
                <div class="row">
                  <div class="col-md-9 col-lg-8 mx-auto">
                    <h3 class="login-heading mb-4">Create an account</h3>
                    <x-jet-validation-errors class="validation-errors" />
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-label-group">
                            <input type="text" id="inputName" name="name" class="form-control" value="{{ old('name') }}" placeholder="Your name" required autofocus autocomplete="name">
                            <label for="inputName">Name</label>
                        </div>


                      <div class="form-label-group">
                        <input type="email" id="inputEmail" name="email" class="form-control" value="{{ old('email') }}" placeholder="Email address" required autofocus>
                        <label for="inputEmail">Email address</label>
                      </div>
      
                      <div class="form-label-group">
                        <input type="password" id="inputPassword" name="password" class="form-control" placeholder="*********" required autocomplete="new-password">
                        <label for="inputPassword">Password</label>
                      </div>

                      <div class="form-label-group">
                        <input type="password" id="inputPassword" name="password_confirmation" class="form-control" placeholder="*********" required autocomplete="new-password">
                        <label for="inputPassword">Confirm Password</label>
                      </div> 
                      <button class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2" type="submit">Register</button>
                      
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      

</x-guest-layout>