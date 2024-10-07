<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand text-white fw-bolder" href="#">
                MVC Agus
            </a>
        </div>
    </nav>

    <div class="container">
        <div class="row mt-5">
            <div class="col-12 text-center">
                <h1 class="fw-bolder">Halaman Data Siswa</h1>
            </div>

            <div class="col-12">
                <div class="tabel-reposive">
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th class="bg-dark-text-white">No</th>
                            <th class="bg-dark text-white">NIM</th>
                            <th class="bg-dark text-white">Nama</th>
                            <th class="bg-dark text-white">Jirusan</th>
                            <th class="bg-dark text-white">#</th>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>202011009</td>
                            <td>Agus Asso</td>
                            <td>Teknik Informatika</td>

                            <td>
                                <a href="">Detail</a>
                                <a href="">Ubah</a>
                                <a href="">Delete</a>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>

        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>