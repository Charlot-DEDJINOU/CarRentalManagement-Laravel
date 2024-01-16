@include('_header')
<section class="login">
    <div class="container d-flex justify-content-center align-items-center login-container">
        <form class="w-50 my-5 px-5 py-3 form" method="POST" action="{{ route('register') }}">
          @csrf
            <div class="mb-3">
                <label for="exampleInputName" class="form-label">Nom d'utilisateur</label>
                <input type="text" class="form-control" id="exampleInputName" name="name">
            </div>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Email</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
              <input type="password" class="form-control" id="exampleInputPassword1" name="password">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword2" class="form-label">Confirmer Mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword2" name="password_confirmation">
            </div>
            @if($error)
                <div class="mb-3 alert alert-danger">
                    @if($nameError)
                        <span class="mb-2">{{ $nameError }}</span>
                    @endif
                    @if($emailError)
                        <span class="mb-2">{{ $emailError }}</span>
                    @endif
                    @if($passwordError)
                        <span class="mb-2">{{ $spanasswordError }}</span>
                    @endif
                </div>
            @endif
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Cochez moi</label>
            </div>
            <button type="submit" class="btn btn-success">S'inscrire</button>
            <p class="mt-3">Vous avez déjà un compte <i><a href="{{ route('login_page') }}" class="text-black">connectez-vous</a></i></p>
          </form>
    </div>
</section>
@include('_footer')