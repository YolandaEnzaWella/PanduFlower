@extends('layouts.app')

@section('content')
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-8">
            <div class="mb-4">
                <h4 class="font-weight-semi-bold mb-4">Profil</h4>
                <form action="{{route('user.update', $user)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>Nama Depan</label>
                            <input class="form-control" type="text" placeholder="John" value="{{$user->first_name}}" readonly>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Nama Belakang</label>
                            <input class="form-control" type="text" placeholder="Doe" value="{{$user->last_name}}" readonly>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" placeholder="example@email.com" value="{{$user->email}}" readonly>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>No. Handphone</label>
                            <input class="form-control" name="mobile_no" type="text" placeholder="+62-813-1234-0987" value="{{$user->mobile_no}}" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" name="address" type="text" placeholder="Alamat" required>{{$user->address}}</textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary float-right mt-2">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
