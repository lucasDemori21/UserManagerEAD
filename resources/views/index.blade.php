@include('components.header')

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
                    <a href="#" class="btn btn-danger"><i class="bi bi-trash"></i></a>
                    <a href="#" class="btn btn-secondary"><i class="bi bi-pen"></i></a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

@include('components.footer')
