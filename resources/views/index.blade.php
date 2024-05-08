@include('components.header')

<table id="example" class="display text-center" style="">
    <thead>
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>##</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Tiger Nixon</td>
            <td>System Architect</td>
            <td>
                <button class="btn btn-danger"><i class="bi bi-trash"></i></button>
                <button class="btn btn-secondary"><i class="bi bi-pen"></i></button>
            </td>
        </tr>
    </tbody>
</table>

<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>

@include('components.footer')
