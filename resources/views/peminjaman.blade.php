@extends('layout.master')

@section('content')
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content" style="padding: 15px">
            <form action="/pinjam_dvd" method="post">
                {{ csrf_field() }}
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary">Peminjaman DVD</h6>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th scope="col">Select DVD</th>
                                        <th scope="col">Judul Film</th>
                                        <th scope="col">Genre</th>
                                        <th scope="col">Stok</th>
                                        <th scope="col">Harga</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dvds as $dvd)
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" class="custom-control-input"
                                                        id="customCheck{{ $dvd->id }}" name="dvds[]"
                                                        value="{{ $dvd->id }}">
                                                    <label class="custom-control-label"
                                                        for="customCheck{{ $dvd->id }}"></label>
                                                </div>
                                            </td>
                                            <td>{{ $dvd->judul_film }}</td>
                                            <td>{{ $dvd->genre }}</td>
                                            <td>{{ $dvd->stok }}</td>
                                            <td>Rp.{{number_format ($dvd->harga_sewa) }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <table border="0" style="margin-top:15px; width: 100%">
                            {{ csrf_field() }}
                            <tr>
                                <td>Nama Peminjam</td>
                                <td><input type="text" class="form-control" placeholder="Nama Peminjam"
                                        aria-describedby="addon-wrapping" name="peminjam">
                                </td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><input type="text" class="form-control" placeholder="Alamat"
                                        aria-describedby="addon-wrapping" name="alamat">
                                </td>
                            </tr>
                            <tr>
                                <td>Kontak</td>
                                <td><input type="text" class="form-control" placeholder="Kontak"
                                        aria-describedby="addon-wrapping" name="kontak">
                                </td>
                            </tr>
                            <tr>
                                <td>Lama Pinjam</td>
                                <td><input type="text" class="form-control" placeholder="Lama Pinjam"
                                        aria-describedby="addon-wrapping" name="lama_pinjam">
                                </td>
                            </tr>
                            <tr>
                                <td>Pembayaran</td>
                                <td><input type="text" class="form-control" placeholder="Metode Pembayaran"
                                        aria-describedby="addon-wrapping" name="metode_pembayaran">
                                </td>
                            </tr>
                            <tr>
                                <td><input type="submit" class="btn btn-primary" value="Simpan Data"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
