@extends('layout.mainn')

@section('title', 'Form Tambah Data Bahan')

@section('container')
    <div class="container">
        <div class="row">
            <div class="col-6">
                <?php $table = 'Form Tambah Data Bahan'; ?>
                <h1 class="mt-3">{{ $table }}</h1>

                <form method="post" action="/bahan">
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
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>

            </div>
        </div>
    </div>
@endsection
    
    <!-- Modal -->
    <!-- <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <form method="post" action="/bahan">
        <div class="modal-body">
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
                <button type="submit" class="btn btn-primary">Tambah Data</button>
            </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </form>
        </div>
    </div>
    </div> -->