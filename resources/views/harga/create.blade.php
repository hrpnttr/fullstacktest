@extends('layout.mainn')

@section('title', 'Form Tambah Data Harga Bahan')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <?php $table = 'Form Tambah Data Harga Bahan'; ?>
                <h1 class="mt-3">{{ $table }}</h1>

                <form method="post" action="/harga">
                    @csrf
                    <div class="form-group">
                        <label for="bahan">Bahan</label>
                        <input type="text" class="form-control @error('bahan') is-invalid @enderror" id="bahan" placeholder="Masukkan Bahan" name="bahan" value="{{old('bahan')}}">
                        @error('bahan')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="int" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" placeholder="Masukkan jumlah" name="jumlah" value="{{old('jumlah')}}">
                        @error('jumlah')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Harga</label>
                        <input type="text" class="form-control @error('jumlah') is-invalid @enderror" id="harga" placeholder="Masukkan Harga" name="harga" value="{{old('harga')}}">
                        @error('jumlah')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>

            </div>
        </div>
    </div>
@endsection