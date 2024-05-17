<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Lihat Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="row mb-3">
        <div class="col-md-6">
            <a href="{{ URL('/admin/user') }}" class="btn btn-primary">Add User</a>
            <a class=" btn btn-primary" href="/admin/laporan">Open Worksheet</a>
        </div>
        <div class="col-md-6 text-end">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
