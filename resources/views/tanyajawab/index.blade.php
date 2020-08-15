<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>About</title>
  </head>
  <body>

                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/tanyajawab">Tanya Jawab</a>
                <li class="nav-item">
                    <a class="nav-link" href="/pertanyaan">Pertanyaan</a>
                </li>
                    </div>
                </li>
                </ul>
            </div>
            </nav>
            <div class="container">
            <div class="row">
            <div class="col-10">
                  <h1 class="mt-3">Daftar Pertanyaan & Jawaban</h1>

                  <table class="table">
                  <thead class="thead-dark">
                  <tr>
                     <th scope="col">#</th>
                     <th scope="col">Nama</th>
                     <th scope="col">Pertanyaan</th>
                     <th scope="col">tanggal buat</th>
                     <th scope="col">tanggal update</th>
                     <th scope="col">Jawaban</th>
                     <th scope="col">Email</th>
                     <th scope="col">Aksi</th>
                     </tr>
                </thead>
                <tbody>
                @foreach ($tanyajawab as $tj)
                <tr>
                <th scope="row">{{ $loop-> iteration}}</th>
                <td>{{ $tj->nama }}</td>
                <td>{{ $tj->pertanyaan }}</td>
                <td>{{ $tj->jawaban }}</td>
                <td>{{ $tj->email }}</td>
                <td>
                    <a href="" class="badge badge-success">edit</a>
                    <a href="" class="badge badge-danger">delete</a>
                </td>
                </tr>
                @endforeach
                </tbody>
                </table>
            </div>
            </div>
            </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>