<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>crud</title>
    <style>
        table {
            margin-top: 1rem;
            border-collapse: collapse;
        }
        tr, td, th {
            border: solid 1px;
            border-color: black;
        }
    </style>
</head>

<body>
    <h3> {{$judul}} </h3>

    <a href="/anggota/create" title="Tambah Data">
        <button type="button">Tambah</button>
    </a>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Aksi</th>
        </tr>
        <tr>
            @foreach ($index->sortBy('id') as $row)
        <tr>
            <td> {{ $loop->iteration }} </td>
            <td> {{ $row->nama }} </td>
            <td>{{ $row->email }} </td>
            <td>
                <a href="/anggota/{{ $row->id }}/edit" title="Ubah Data">
                    <button type="button">Ubah</button></a>
                <a href="#" title="Hapus Data" onclick="event.preventDefault(); document.getElementById('delete-form-{{ $row->id }}').submit();">
                    <button type="button">Hapus</button>
                </a>
                <form id="delete-form-{{ $row->id }}" action="/anggota/{{ $row->id }}" method="POST">
                    @method('delete')
                    @csrf
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>

</html>
