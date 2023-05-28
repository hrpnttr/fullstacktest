@extends('layout.main')

@section('container')

<section class="projects-section bg-light">
<div class="container px-4 px-lg-5">


    <div class="container">
        <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <?php $table = 'Data Jumlah Produk'; ?>
            <h1 class="mt-3 text-center">{{ $table }}</h1>

            <form id="hitung">
            @csrf
                <button type="submit" class="btn btn-primary my-3">Hitung</button>
            </form> 

            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Biaya Produksi</th>
                    </tr>
                </thead>
                <tbody class="table-secondary">
                    <tr>
                        <th scope="row">1</th>
                        <td><div id="hasil"></div></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
</section>

<script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
<script>
$(document).ready(function () {
    $('#hitung').submit(function (event) {
        event.preventDefault();
        $.ajax({
            url: '/jumlah',
            type: 'POST',
            data: $(this).serialize(),
            success: function (response) {
                $('#hasil').html('Jumlah biaya untuk produksi setiap kemasan snaki adalah Rp.' + response.jumlah);
            }
        });
    });
});
</script>
@endsection