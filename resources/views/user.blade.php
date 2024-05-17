<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Lihat Data</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body>

    <div class="container mt-4">
        <div class="row mb-3">
            <div class="col-md-6">
                <a href="{{ URL('admin/user/add_user') }}" class="btn btn-primary">Tambah Data</a>
                <a class=" btn btn-primary" href="/laporan">Laporan</a>
            </div>
            <div class="col-md-6 text-end">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <button type="submit" class="btn btn-danger">Logout</button>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header bg-primary text-white">
                <h4 class="card-title text-center">DAFTAR USER</h4>
            </div>
            <div class="card-body">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Devisi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($user as $usr)
                            <tr>
                                <td>{{ $no++ }}</td>
                                <td>{{ $usr->nama }}</td>
                                <td>{{ $usr->username }}</td>
                                <td>{{ $usr->devisi }}</td>
                                <td>
                                    {{-- <div class="btn-group">
                                      <a href="/user/edit/{{ $usr->id }}" class="btn btn-warning btn-sm me-2">Edit</a>
                                        <form action="{{ route('user.destroy', $usr->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm"
                                                onclick="return confirm('Admin Yakin ingin menghapusnya?');">Hapus</button>
                                        </form>
                                    </div> --}}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
