<div class="card">

    <div class="card-header">
      Sign In Here !
    </div>

    <div class="card-body">

        <form wire:submit="register">
            
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" wire:model="name" name="name" placeholder="Please entrer an username" autofocus="off" aria-describedby="name">
                @error('name')
                    <p class="text text-danger">{{ $message}}</p>
                @enderror
            </div>

            <div class="mb-3">
              <label for="email" class="form-label">Email address</label>
              <input type="email" class="form-control" id="email" wire:model="email" name="email" placeholder="Please enter your Email address" autofocus="off" aria-describedby="email">
              <div id="email" class="form-text">We'll never share your email with anyone else.</div>
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
           
            <button type="submit" class="btn btn-primary">Register</button>

          </form>
          <div class="mb-3">
                <b>Already have an account ? </b><button wire:navigate href="/login" class="btn btn-secondary">Login</button>
          </div>
    </div>

    <div class="card-footer text-body-secondary">
        Register Page
    </div>

</div>