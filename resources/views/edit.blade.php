<!DOCTYPE html>
<html>
<head>
    <title>CRUD Laravel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">

</head>
<body>
    <div class="container">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4>Edit Buku</h4>
            </div>
            <div class="panel-body">
                <form action="{{url('update', $data->kode_buku)}}" method="post">
                    <!-- <input type="hidden" name="id" id="id" value="{{$data->id}}"> -->
                    <div class="form-group">
                        <label for="kode_buku">Kode Buku</label>
                        <input type="text" name="kode_buku" id="kode_buku" value="{{$data->kode_buku}}" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" name="judul" id="judul" value="{{$data->judul}}" class="form-control">
                    </div>       
                    <div class="form-group">
                        <label for="author">Author</label>
                        <input type="text" name="author" id="author" value="{{$data->author}}" class="form-control">
                    </div>       
                    <div class="form-group">
                        <label for="sinopsis">Sinopsis</label>
                        <input type="text" name="sinopsis" id="sinopsis" value="{{$data->sinopsis}}" class="form-control">
                    </div> 
                    <div class="form-group">
                        <label for="penerbit">Penerbit</label>
                        <input type="text" name="penerbit" id="penerbit" value="{{$data->penerbit}}" class="form-control">
                    </div> 
                    <div class="form-group">
                        <input type="submit" name="send" id="send" value="Simpan" class="btn btn-success">{!!csrf_field()!!}                       
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>