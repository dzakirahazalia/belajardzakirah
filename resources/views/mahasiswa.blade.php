<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Mahasiswa</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</head>
<body class="bg-light d-flex flex-column min-vh-100">
    <nav class="navbar navbar-dark bg-primary shadow-sm mb-4">
        <div class="container">
            <a class="navbar-brand" href="#">Profile Mahasiswa UNPAM</a>
        </div>
    </nav>
    
    <div class="container flex-grow-1">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-white text-center py-4">
                        <div class="d-flex justify-content-center mb-3">
                            <img src="{{ asset('img/foto.JPG') }}" alt="Foto Profil" style="width: 120px; height: 120px; object-fit: cover; border-radius: 50%;">
                        </div>
                        <h4 class="mb-0 fw-bold">{{ $mahasiswa['nama'] }}</h4>
                        <span class="badge bg-success mt-1">{{ $mahasiswa['status'] }}</span>
                    </div>
                    <div class="card-body px-4">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-muted">NIM:</span>
                                <span>{{ $mahasiswa['nim'] }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-muted">Email:</span>
                                <span>{{ $mahasiswa['email'] }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span class="fw-bold text-muted">Program Studi:</span>
                                <span>{{ $mahasiswa['prodi'] }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-white border-top py-3 mt-5">
        <div class="container text-center">
            <span class="text-muted">&copy; 2024 Profile Mahasiswa UNPAM. All rights reserved.</span>
        </div>
    </footer>
</body>
</html>