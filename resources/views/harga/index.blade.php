@extends('layout.main')

@section('title', 'Harga Bahan')

@section('container')
<!-- Projects-->
<section class="projects-section bg-light">
    <div class="container px-4 px-lg-5">

        <div class="container">
            <div class="row">
                <div class="col-1"></div>
                <div class="col-10">
                    <?php $table = 'Harga Bahan'; ?>
                    <h1 class="mt-3 text-center">{{ $table }}</h1>

                    <a href="/harga/create" class="btn btn-primary my-3">Tambah Data Harga Bahan</a>

                    <table class="table">
                        <thead class="table-dark">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Bahan</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="table-secondary">
                            @foreach ($harga as $val)
                            <tr>
                                <th scope="row">{{$loop -> iteration}}</th>
                                <td>{{$val -> bahan}}</td>
                                <td>{{$val -> jumlah}}</td>
                                <td>{{$val -> harga}}</td>
                                <td>
                                    <a href="/harga/{{$val -> id}}/edit" class="badge bg-primary">Edit</a>
                                    <form action="/harga/{{$val -> id}}" method="post" class="d-inline">
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

        <!-- Featured Project Row-->
        <div class="row gx-0 mb-4 mb-lg-5 align-items-center">
            <div class="col-xl-8 col-lg-7"><img class="img-fluid mb-3 mb-lg-0" src="assets/img/bg-masthead.jpg" alt="..." /></div>
            <div class="col-xl-4 col-lg-5">
                <div class="featured-text text-center text-lg-left">
                    <h4>Shoreline</h4>
                    <p class="text-black-50 mb-0">Grayscale is open source and MIT licensed. This means you can use it for any project - even commercial projects! Download it, customize it, and publish your website!</p>
                </div>
            </div>
        </div>
        


        <!-- Project One Row-->
        <div class="row gx-0 mb-5 mb-lg-0 justify-content-center">
            <div class="col-lg-6"><img class="img-fluid" src="assets/img/demo-image-01.jpg" alt="..." /></div>
            <div class="col-lg-6">
                <div class="bg-black text-center h-100 project">
                    <div class="d-flex h-100">
                        <div class="project-text w-100 my-auto text-center text-lg-left">
                            <h4 class="text-white">Misty</h4>
                            <p class="mb-0 text-white-50">An example of where you can put an image of a project, or anything else, along with a description.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</section>



@endsection