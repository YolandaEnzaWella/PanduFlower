@extends('layouts.app')

@section('content')
<!-- Checkout Start -->
<div class="container-fluid pt-5">
    <form action="{{route('transaction.store')}}" method="post">
        @csrf
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <div class="mb-4">
                    <h4 class="font-weight-semi-bold mb-4">Alamat Pengiriman</h4>
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
                            <input class="form-control" name="user[mobile_no]" type="text" placeholder="+62-813-1234-0987" value="{{$user->mobile_no}}" required>
                        </div>
                        <div class="col-md-12 form-group">
                            <label>Alamat</label>
                            <textarea class="form-control" name="user[address]" type="text" placeholder="Alamat" required>{{$user->address}}</textarea>
                        </div>
                    </div>
                </div>
                {{-- <div class="collapse mb-4" id="shipping-address">
                    <h4 class="font-weight-semi-bold mb-4">Shipping Address</h4>
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>First Name</label>
                            <input class="form-control" type="text" placeholder="John">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Last Name</label>
                            <input class="form-control" type="text" placeholder="Doe">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" type="text" placeholder="example@email.com">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input class="form-control" type="text" placeholder="+123 456 789">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address Line 1</label>
                            <input class="form-control" type="text" placeholder="123 Street">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Address Line 2</label>
                            <input class="form-control" type="text" placeholder="123 Street">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Country</label>
                            <select class="custom-select">
                                <option selected>United States</option>
                                <option>Afghanistan</option>
                                <option>Albania</option>
                                <option>Algeria</option>
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>City</label>
                            <input class="form-control" type="text" placeholder="New York">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>State</label>
                            <input class="form-control" type="text" placeholder="New York">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>ZIP Code</label>
                            <input class="form-control" type="text" placeholder="123">
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="col-lg-4">
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
                            <input type="hidden" name="total" value="{{number_format($cart->sum('price') + 25000, 0, ',', '.')}}">
                        </div>
                        {{-- <a href="{{route('transaction.create')}}" class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</a> --}}
                    </div>
                </div>
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Payment</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment_type" id="cod" value="Cash On Delivery" required>
                                <label class="custom-control-label" for="cod">Cash On Delivery</label>
                            </div>
                        </div>
                        <div class="">
                            <div class="custom-control custom-radio">
                                <input type="radio" class="custom-control-input" name="payment_type" id="transfer" value="Transfer" required>
                                <label class="custom-control-label" for="transfer">Bank Transfer</label>
                            </div>
                        </div>
                    </div>
                    @foreach ($cart as $row)
                        <input type="hidden" name="transaction_detail[{{$loop->index}}][flower_id]" value="{{$row->flower->id}}">
                        <input type="hidden" name="transaction_detail[{{$loop->index}}][qty]" value="{{$row->qty}}">
                    @endforeach
                    <div class="card-footer border-secondary bg-transparent">
                        <button type="submit" class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3">Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- Checkout End -->
@endsection
