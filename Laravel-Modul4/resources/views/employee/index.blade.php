<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$pageTitle}}</title>
    @vite('resources/sass/app.scss')
</head>
<body>
    {{-- untuk bagian navbar pada halaman yang memuat menu yang ditampilkan pada halaman --}}
    <nav class="navbar navbar-expand-md navbar-dark bg-primary">
        <div class="container">
            {{-- alamat link dari route 'home' sesuai dengan apa yang ada pada HomeController yang mengarahkan pada halaman home --}}
            <a href="{{ route('home') }}" class="navbar-brand mb-0 h1"><i class="bi-hexagon-fill me-2"></i>Data Master</a>

            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <hr class="d-lg-none text-white-50">

                <ul class="navbar-nav flex-row flex-wrap">
                    {{-- membuat menu menuju halaman Home, dengan link route 'home' --}}
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
                    {{-- membuat menu menuju halaman Employe List, dengan link route 'employee.index'--}}
                    <li class="nav-item col-2 col-md-auto"><a href="{{ route('employees.index') }}" class="nav-link active">Employee List</a></li>
                </ul>

                <hr class="d-lg-none text-white-50">

                {{-- membuat menu menuju halaman My Profile, dengan link route 'employee.index' --}}
                <a href="{{ route('profile') }}" class="btn btn-outline-light my-2 ms-md-auto"><i class="bi-person-circle me-1"></i>My Profile</a>
            </div>
        </div>
    </nav>

     {{-- untuk isi dari conten --}}
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3">{{ $pageTitle}}</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grip gap-2">
                    {{-- membuat menu menuju halaman untuk menambahkan employee baru, dengan link route 'employee.create' --}}
                    <a href="{{ route('employees.create') }}" class="btn btn-primary">Create Employee</a>
                </div>
            </div>
        </div>
        <hr>
        {{-- menampilkan isi tabel dari employe list --}}
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped mb-0 bg-white">
                <thead>
                    {{-- tabel berisi empat kolom: Firs Name, Last Name, Email, Age --}}
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Age</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        {{-- isi dari kolom pertama employee --}}
                        <td>Novia</td>
                        <td>Kartika</td>
                        <td>noviakartikaawalia@gmail.com</td>
                        <td>20</td>
                        <td>
                            <div class="d-flex">
                                {{-- Ini menunjukkan data employee 1 --}}
                                <a href="{{ route('employees.show', ['employee' => 1]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
                                {{-- Ini mengedit data employee 1 --}}
                                <a href="{{ route('employees.edit', ['employee' => 1]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>

                                <div>
                                    {{-- untuk menghapus data employee 1 --}}
                                    <form action="{{ route('employees.destroy', ['employee' => 1]) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        {{-- Ini menunjukkan data employee 2 --}}
                        <td>Sasaki</td>
                        <td>Sakaki</td>
                        <td>sasaki.sakaki@gmail.com</td>
                        <td>25</td>
                        <td>
                            <div class="d-flex">
                                {{-- Ini menunjukkan data employee 2 --}}
                                <a href="{{ route('employees.show', ['employee' => 2]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
                                {{-- Ini mengedit data employee 2 --}}
                                <a href="{{ route('employees.edit', ['employee' => 2]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>

                                <div>
                                    {{-- untuk menghapus data employee 2 --}}
                                    <form action="{{ route('employees.destroy', ['employee' => 2]) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        {{-- Ini menunjukkan data employee 3 --}}
                        <td>Leviene</td>
                        <td>Neveera</td>
                        <td>leviene.neveera@gmail.com</td>
                        <td>23</td>
                        <td>
                            <div class="d-flex">
                                {{-- Ini menunjukkan data employee 3 --}}
                                <a href="{{ route('employees.show', ['employee' => 3]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-person-lines-fill"></i></a>
                                 {{-- Ini mengedit data employee 3 --}}
                                <a href="{{ route('employees.edit', ['employee' => 3]) }}" class="btn btn-outline-dark btn-sm me-2"><i class="bi-pencil-square"></i></a>

                                <div>
                                    {{-- untuk menghapus data employee 3 --}}
                                    <form action="{{ route('employees.destroy', ['employee' => 3]) }}" method="POST">
                                        {{-- menerapkan CSRF Protection --}}
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-outline-dark btn-sm me-2"><i class="bi-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    @vite('resources/sass/app.scss')
</body>
</html>
