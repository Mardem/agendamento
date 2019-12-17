<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        .alert-danger {
            color: #ffffff;
            background-color: #c10012;
            border-color: #f5c6cb;
        }
    </style>
</head>
<body>

<div class="container mt-3">

    @if(Session::has('error'))
        <div class="alert alert-danger" role="alert">
            <strong>Oops!</strong> {{ Session::get('error') }}
        </div>
    @endif

    <form action="{{ route('bookmark.store') }}" method="post">
        @csrf
        <input type="text" name="doctor" class="form-control">
        <br>
        <input type="text" name="hour" class="form-control">
        <br>
        <button class="btn btn-success">Salvar</button>
    </form>


    <br><br>

    <table class="table">
        <thead>
        <tr>
            <th>#</th>
            <th>Doutor</th>
            <th></th>
        </tr>
        </thead>
        <tbody>
            @foreach($hours as $hour)
                <tr>
                    <td scope="row">{{ $hour->id }}</td>
                    <td>{{ $hour->doctor }}</td>
                    <td>

                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $hours->links() }}
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
