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

                <nav class="navbar navbar-expand-lg navbar-light bg-primary">
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
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/pertanyaan">Pertanyaan</a>
                </li>
                </ul>
            </div>
            </nav>
            <div class="container">
            <div class="row">
            <div class="col-8">
                  <h1 class="mt-3">Form Ubah Pertanyaan & Jawaban</h1>



                <form method="post" action="/pertanyaan/{{$pertanyaan->id}}">
                @method ('patch')

                @csrf
                <div class="form-group">
                <label for="pertanyaan">nama</label>
                <input type="text" class="form-control @error ('nama') is-invalid @enderror" id="nama" placeholder="masukan nama" name="nama" value="{{$pertanyaan->nama}}">
                @error('nama')
                 <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    </div>
                <div class="form-group">
                <label for="pertanyaan">pertanyaan</label>
                <input type="text" class="form-control @error ('pertanyaan') is-invalid @enderror" id="pertanyaan" placeholder="masukan pertanyaan" name="pertanyaan" value="{{$pertanyaan->pertanyaan}}">
                @error('pertanyaan')
                 <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                 <div class="form-group">
                <label for="jawaban">jawaban</label>
                <input type="text" class="form-control  @error ('pertanyaan') is-invalid @enderror" id="jawaban" placeholder="masukan jawaban" name="jawaban" value="{{$pertanyaan->jawaban}}">
                @error('jawaban')
                 <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                 <div class="form-group">
                <label for="email">email</label>
                <input type="text" class="form-control @error ('email') is-invalid @enderror" id="email" placeholder="masukan email" name="email" value="{{$pertanyaan->email}}">
                @error('email')
                 <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Ubah</button>
                </form>
                
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