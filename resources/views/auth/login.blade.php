@include('components.header')

<div class="container-auth">
    <form method="POST" action="{{route('ac.login')}}">
        @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">E-mail</label>
          <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">Senha</label>
          <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="mb-3 text-center">
          <a href="{{ route('register') }}" class='text-primary'>Crie sua conta</a>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Logar</button>
        </div>
      </form>
</div>


@include('components.footer')