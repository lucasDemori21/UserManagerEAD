<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UserMenager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
</head>

<style>
    body {
        background-color: black;
        color: white;
    }

    .container-auth {
        width: 100%;
        height: 80vh;
        color: white;
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: start;
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        font-style: italic;
    }
</style>

<body>
    <nav class="navbar navbar-expand navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">UserMenager</a>
            <div class="d-flex">
                <a class="btn btn-secondary mx-2" href="{{ route('login') }}">Login</a>
                <a class="btn btn-secondary mx-2" href="{{ route('register') }}">Register</a>
            </div>
        </div>
    </nav>
