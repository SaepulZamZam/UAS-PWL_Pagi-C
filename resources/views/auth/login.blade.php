@extends('layouts.layouts')

@section('content')
    <section style="margin-top: 100px">
        <div class="container py-5 col-xxl-6">
            <h3 class="fw-bold mb-3">Halaman Login Admin Kabupaten</h3>

            <form action="" method="POST">
                @csrf 
                <div class="form-group mb-3">
                    <label for="">masukkan email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                
                <div class="formgroup nb-3">
                    <label for="">Masukkan Password</label>
                    <input type="password" name="passsword" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary">Login</button> 
            </form>
        </div>
    </section>
@endsection