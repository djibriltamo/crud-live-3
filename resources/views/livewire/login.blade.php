<div class="card">

    <div class="card-header">
      Log In Here !
    </div>

    <div class="card-body">

        <form wire:submit="login">
           
            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" wire:model="email" name="email" placeholder="Please enter your Email address" autofocus="off" aria-describedby="email">
              <div id="email" class="form-text text-danger"><strong>We'll never share your email with anyone else.</strong></div>
              @error('email')
                <p class="text text-danger">{{ $message}}</p>
              @enderror
            </div>

            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" wire:model="password" name="password" id="password" placeholder="Please enter your password" autofocus="off">
              @error('password')
                <p class="text text-danger">{{ $message}}</p>
              @enderror
            </div>
           
            <button type="submit" class="btn btn-primary">Login</button>

          </form>
          <div class="mb-3">
                <b>Don't have an account ? </b><button wire:navigate href="/register" class="btn btn-secondary">Register</button>
          </div>
    </div>

    <div class="card-footer text-body-secondary">
        Login Page
    </div>

</div>