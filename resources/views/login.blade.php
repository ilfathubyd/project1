<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>AI-PARK</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<style>
    /* ... (CSS Anda) ... */
</style>

<body>
    <div class="login-container rounded-10">
        <div class="card rounded-3 shadow p-4" style="width: 28rem;">
            <div class="card-body">
                <h3 class="card-title text-center mb-4">LOGIN</h3>
                @if ($errors->has('login'))
                    <div class="alert alert-danger">
                        {{ $errors->first('login') }}
                    </div>
                @endif
                <form action="{{ route('login') }}" method="POST" class="login-form">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" placeholder="Username..." class="form-control" id="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" placeholder="Password..." class="form-control" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Sign in</button>
                    <a href="/customer" class="btn btn-secondary w-100 mt-3">Guest</a>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
