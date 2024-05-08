@include('components.header')


<div class="container-auth">
    <form method="POST" action="{{ route('ac.update') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" value="{{ $user->name }}" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" value="{{ $user->email }}" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Digite nova senha</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        <div class="text-center">
            <a href="{{route('index')}}" class="btn btn-danger">Voltar</a>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </div>
    </form>
</div>



@include('components.footer')
