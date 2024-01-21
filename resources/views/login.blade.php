@include('_header')
<section class="login">
    <div class="container d-flex justify-content-center align-items-center login-container">
        <form class="w-50 my-5 px-5 py-3 form" method="POST" action="{{ route('user.login') }}">
            @csrf
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Cochez moi</label>
            </div>
            <button type="submit" class="btn btn-success">Se connecter</button>
            <p class="mt-3">Vous n'avez pas un compte <i><a href="{{ route('page.register') }}" class="text-black">inscrivez-vous</a></i></p>
          </form>
    </div>
</section>
@include('_footer')