@include('components.header')

<div class="container-auth">
    <form method="POST" action="{{ route('ac.register') }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nome</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <span class="text-center">{{ $error }}</span>
                @endforeach
            </div>
        @endif
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary">Registrar</button>
        </div>
    </form>
</div>


@include('components.footer')
