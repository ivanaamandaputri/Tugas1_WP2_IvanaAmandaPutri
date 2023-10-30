<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
</head>

<body>
    <h3> {{$judul}} </h3>
    <form action="/anggota" method="post" class="form-horizontal">
        @csrf

        <label>Nama</label> <br>
        <input type="text" name="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror" placeholder="Masukkan Nama Anggota">
        @error('nama')
        <span class="invalid-feedback alert-danger" role="alert">
            {{$message}}
        </span>
        @enderror
        <p></p>

        <label>Email</label> <br>
        <input type="text" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" placeholder="Masukkan email Anggota">
        @error('email')
        <span class="invalid-feedback alert-danger" role="alert">
            {{$message}}
        </span>
        @enderror

        <p></p>

        <button type="submit" class="">
            Simpan
        </button>
        <a href="{{ route('anggota.index') }}">
            <button type="button">
                Kembali
            </button>
        </a>

</body>

</html>

