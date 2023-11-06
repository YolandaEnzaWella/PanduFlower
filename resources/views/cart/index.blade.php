@extends('layouts.app')

@section('content')
<!-- Cart Start -->
<div class="container-fluid pt-5">
    <div class="row px-xl-5">
        <div class="col-lg-8 table-responsive mb-5">
            <table class="table table-bordered text-center mb-0">
                <thead class="bg-secondary text-dark">
                    <tr>
                        <th>Products</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Remove</th>
                    </tr>
                </thead>
                <tbody class="align-middle">
                    @foreach ($cart as $row)
                        <tr>
                            <td class="align-middle"><img src="{{asset('img/'.$row->flower->image)}}" alt="" style="width: 50px;"> {{$row->flower->name}}</td>
                            <td class="align-middle">Rp{{number_format($row->flower->price, 0, ',', '.')}}</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary btn-minus" onclick="decreaseQty({{$row->id}})">
                                            <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" id="qty-{{$row->id}}" class="form-control form-control-sm bg-secondary text-center" value="{{$row->qty}}">
                                    <div class="input-group-btn">
                                        <button type="button" class="btn btn-sm btn-primary btn-plus"  onclick="increaseQty({{$row->id}})">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                                <form id="update-form-{{$row->id}}" action="{{route('cart.update', $row)}}" method="POST" style="display: none">
                                    @csrf
                                    @method('PUT')
                                    <input type="hidden" name="qty">
                                </form>
                                <form id="delete-form-{{$row->id}}" action="{{route('cart.delete', $row)}}" method="POST" style="display: none">
                                    @csrf
                                    @method('delete')
                                </form>
                            </td>
                            <td class="align-middle">Rp{{number_format($row->flower->price*$row->qty, 0, ',', '.')}}</td>
                            <td class="align-middle"><button type="button" class="btn btn-sm btn-primary" onclick="deleteRow({{$row->id}})"><i class="fa fa-times"></i></button></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="col-lg-4">
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
        </div>
    </div>
</div>
<!-- Cart End -->
@endsection

@push('scripts')
    <script>
        function decreaseQty(id){
            const qty = $(`#qty-${id}`).val();
            console.log(qty);
            $(`#update-form-${id} input[name=qty]`).val(Number(qty)-1);
            $(`#update-form-${id}`).submit();
        }

        function increaseQty(id){
            const qty = $(`#qty-${id}`).val();
            console.log(qty);
            $(`#update-form-${id} input[name=qty]`).val(Number(qty)+1);
            $(`#update-form-${id}`).submit();
        }

        function deleteRow(id){
            $(`#delete-form-${id}`).submit();
        }
    </script>
@endpush
