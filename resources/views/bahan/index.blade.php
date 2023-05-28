@extends('layout.main')

@section('title', 'Bahan-Bahan')

@section('container')
<section class="projects-section bg-light">
    <div class="container px-4 px-lg-5">

        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <?php $table = 'Bahan'; ?>
                    <h1 class="text-center">{{ $table }}</h1>

                    <a href="/bahan/create" class="btn btn-primary my-3">Tambah Data Bahan</a>
                    
                    <!-- <a href="/bahan/create" class="btn btn-primary my-3" data-bs-toggle="modal" data-bs-target="#exampleModal">Tambah Data Bahan</a>
                    
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Launch demo modal</button> -->


                    <table class="table table-bordered">
                        <thead class="table-dark">
                            <tr class="text-center">
                                <th scope="col">No</th>
                                <th scope="col">Bahan</th>
                                <th scope="col">Jumlah (gram)</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody class=table-secondary>
                            @foreach ($bahan as $val)
                            <tr class="text-center">
                                <th scope="row">{{$loop -> iteration}}</th>
                                <td>{{$val -> bahan}}</td>
                                <td>{{$val -> jumlah}}</td>
                                <td>
                                    <a href="/bahan/{{$val -> id}}/edit" class="badge bg-primary">Edit</a>
                                    <form action="/bahan/{{$val -> id}}" method="post" class="d-inline">
                                        @method('delete')
                                        @csrf
                                        <button type="submit" class="badge bg-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <img class="img-fluid" src="assets/img/ipad.png" alt="..." />

    </div>
</section>

@endsection