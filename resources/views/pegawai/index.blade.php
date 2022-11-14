<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>DATA PEGAWAI</h2>
        <table class="table table-striped table-hover">
            <a href="/create" type="submit" class="btn btn-success mb-2">tambah +</a>
            <tr>
                <th>no</th>
                <th>Nama</th>
                <th>alamat</th>
                <th>no hp</th>
                <th>AKSI</th>
            </tr>
            <br>
            @php
            $no=1;
            @endphp
            @foreach ($pegawai as $p)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $p->name }}</td>
                <td> {{ $p->alamat }}</td>
                <td> {{ $p->phone }}</td>
                <td class="d-flex align-center">
                    <a class="btn btn-warning " href="/data/{{ $p->id }}/edit">edit</a>
                    <form action="/data/{{ $p->id }}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger" type="submit">hapus</button>

                    </form>
                </td>
            </tr>
            @endforeach
        </table>


    </div>

</body>
</html>
