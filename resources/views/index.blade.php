@include('components.header')
<h2 class="text-center my-3">Dashboard</h2>
<div class="mx-auto mt-4 w-75">
    <table id="example" class="display text-center" style="lara">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>##</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="{{ route('update', ['id' => $user->id]) }}" class="btn btn-secondary"><i class="bi bi-pen"></i></a>
                    <a href="{{ route('destroy', ['id' => $user->id]) }}" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
    
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>

@include('components.footer')
