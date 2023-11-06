@extends('layouts.app')

@section('content')
<!-- Cart Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-10 table-responsive mb-5 mx-auto">
            <h4 class="font-weight-semi-bold mb-4">Pesanan Saya</h4>
            <table class="table table-bordered text-center mb-0">
                <thead class="bg-secondary text-dark">
                    <tr>
                        <th>Products</th>
                        <th>Total</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    @foreach ($transaction as $row)
                        <tr>
                            <td class="align-middle"><img src="{{asset('img/'.$row->detail[0]->flower->image)}}" alt="" style="width: 50px;"> {{$row->detail[0]->flower->name}} & {{$row->detail->count()}} lainnya</td>
                            <td class="align-middle">Rp{{number_format($row->total, 3, '.')}}</td>
                            <td class="align-middle">
                                <a href="{{route('transaction.show', $row)}}" class="btn btn-sm btn-primary"><i class="fa fa-eye"></i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{-- <div class="col-lg-4">
            <form class="mb-5" action="">
                <div class="input-group">
                    <input type="text" class="form-control p-4" placeholder="Coupon Code">
                    <div class="input-group-append">
                        <button class="btn btn-primary">Apply Coupon</button>
                    </div>
                </div>
            </form>
            <div class="card border-secondary mb-5">
                <div class="card-header bg-secondary border-0">
                    <h4 class="font-weight-semi-bold m-0">Order Total</h4>
                </div>
                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3 pt-1">
                        <h6 class="font-weight-medium">Subtotal</h6>
                        <h6 class="font-weight-medium">Rp{{number_format($cart->sum('price'), 0, ',', '.')}}</h6>
                    </div>
                    <div class="d-flex justify-content-between">
                        <h6 class="font-weight-medium">Ongkos Kirim</h6>
                        <h6 class="font-weight-medium">Rp25.000</h6>
                    </div>
                </div>
                <div class="card-footer border-secondary bg-transparent">
                    <div class="d-flex justify-content-between mt-2">
                        <h5 class="font-weight-bold">Total</h5>
                        <h5 class="font-weight-bold">Rp{{number_format($cart->sum('price') + 25000, 0, ',', '.')}}</h5>
                    </div>
                    <a href="{{route('transaction.create')}}" class="btn btn-block btn-primary my-3 py-3 {{$cart->count() ? '' : 'disabled'}}">Proceed To Checkout</a>
                </div>
            </div>
        </div> --}}
    </div>
</div>
<!-- Cart End -->
@endsection
