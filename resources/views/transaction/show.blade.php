@extends('layouts.app')

@section('content')
<!-- Page Header Start -->
<div class="container-fluid bg-secondary mb-5">
    <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
        <h1 class="font-weight-semi-bold text-uppercase mb-3">Status Pesanan</h1>
        <div class="d-inline-flex">
            <p class="m-0"><a href="">Home</a></p>
            <p class="m-0 px-2">-</p>
            <p class="m-0">Status Pesanan</p>
        </div>
    </div>
</div>

<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        {{-- <div class="col-lg-6 mb-5">
        </div> --}}
        <div class="col-lg-6 mb-5 mx-auto">
            <h5 class="font-weight-semi-bold mb-3">Terimakasih telah berbelanjan di <span class="text-primary font-weight-semibold px-1">Pandu</span>Flowers.</h5>
            @if ($transaction->payment_type == 'Transfer')
                <p>Silahkan lakukan pembayaran dalam 1x24 jam. Apabila mempunyai pertanyaan terkait pesanan silahkan menghubungi kontak dibawah ini.</p>
                <p>BCA A.N Pandu Flowers 10129356</p>
            @else
                <p>Pesanan anda akan segera diproses dalam 1x24 jam. Apabila mempunyai pertanyaan terkait pesanan silahkan menghubungi kontak dibawah ini.</p>
            @endif
            <div class="d-flex flex-column mb-3">
                <h5 class="font-weight-semi-bold mb-3">Contact </h5>
                 <p class="mb-2"><i class="fa fa-map-marker-alt text-primary mr-3"></i>Jalan Raya Pekanbaru-Bangkinang Km. 17</p>
            <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>info@panduflowers.com</p>
            <p class="mb-0"><i class="fa fa-phone-alt text-primary mr-3"></i>+012 345 67890</p>
        </div>
    </div>
</div>
<!-- Page Header End -->
@endsection
