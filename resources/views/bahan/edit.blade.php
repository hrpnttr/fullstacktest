@extends('layout.mainn')

@section('title', 'Form Edit Data Bahan')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <?php $table = 'Form Edit Data Bahan'; ?>
                <h1 class="mt-3">{{ $table }}</h1>

                <form method="post" action="/bahan/{{$bahan -> id}}">
                    @method('put')
                    @csrf
                    <div class="form-group">
                        <label for="bahan">Bahan</label>
                        <input type="text" class="form-control @error('bahan') is-invalid @enderror" id="bahan" placeholder="Masukkan Bahan" name="bahan" value="{{$bahan-> bahan}}">
                        @error('bahan')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jumlah">Jumlah</label>
                        <input type="int" class="form-control @error('jumlah') is-invalid @enderror" id="jumlah" placeholder="Masukkan Jumlah" name="jumlah" value="{{$bahan -> jumlah}}">
                        @error('jumlah')
                            <div class="invalid-feedback">{{$message}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

            </div>
        </div>
    </div>
@endsection