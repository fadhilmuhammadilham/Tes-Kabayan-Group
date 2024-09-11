@extends('layout.master')

@section('content')
    <center>
        <div class="card shadow mb-4" style="width: 900px">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold">Tambah DVD</h6>
            </div>
            <table border="0" style="width:90%; margin-left: 35px; margin-top:15px">
                <form action="/tambah_dvd" method="post">
                    {{ csrf_field() }}
                    <tr>
                        <td>Kode DVD</td>
                        <td><input type="text" class="form-control" placeholder="Kode Dvd"
                                aria-describedby="addon-wrapping" name="kode_dvd">
                        </td>
                    </tr>
                    <tr>
                        <td>Judul Film</td>
                        <td><input type="text" class="form-control" placeholder="Judul Film"
                                aria-describedby="addon-wrapping" name="judul_film">
                        </td>
                    </tr>
                    <tr>
                        <td>Genre</td>
                        <td><input type="text" class="form-control" placeholder="Genre"
                                aria-describedby="addon-wrapping" name="genre">
                        </td>
                    </tr>
                    <tr>
                        <td>Stok</td>
                        <td><input type="number" class="form-control" placeholder="Stok"
                                aria-describedby="addon-wrapping" name="stok">
                        </td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td><input type="number" class="form-control" placeholder="Harga"
                                aria-describedby="addon-wrapping" name="harga_sewa">
                        </td>
                    </tr>
                    <tr>
                        <td>Bahasa</td>
                        <td><input type="text" class="form-control" placeholder="Bahasa"
                                aria-describedby="addon-wrapping" name="bahasa">
                        </td>
                    </tr>
            </table>
            <br>
            <input type="submit" class="btn btn-primary" value="Simpan Data"
                style="width: 120px;margin-left: 390px;margin-bottom: 16px">
            </form>
        </div>

    </center>
@endsection
