<!DOCTYPE html>
<html>
    <head>
        <title>BUKU</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=devide=width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>DATA BUKU</h4>
</div>
<div class="panel-body">
                <table border="1" cellpadding="5" cellspacing="0" class="table table-success table-striped">
                    <thead>
        <tr>
                            <th>Kode Buku</th>
                            <th>Judul</th>
                            <th>Author</th>
                            <th>Sinopsis</th>
                            <th>Penerbit</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($data as $key => $d)
                        <tr>
                            <td>{{ $d->kode_buku }}</td>
                            <td>{{ $d->judul }}</td>
                            <td>{{ $d->author }}</td>
                            <td>{{ $d->sinopsis }}</td>
                            <td>{{ $d->penerbit }}</td>
                            <td>
                                <a href="{{url('read',array($d->kode_buku))}}">Read</a>
                                <a href="{{url('delete',array($d->kode_buku))}}">Delete</a>
                                <a href="{{url('edit',array($d->kode_buku))}}">Edit</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <form action="{{url('create')}}" method="get">
                    <div class="form-group">
                        <input type="submit" name="new" id="new" value="Entry Baru" class="btn btn-success">
            </div>
        </div>
    </div>
</body>
</html>