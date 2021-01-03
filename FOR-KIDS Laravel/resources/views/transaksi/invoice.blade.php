@extends('layouts.app')
@section('content')
<script>
    window.print();
</script>
<!-- Page Header Start here -->
<section class="page-header section-notch" style="margin-top:-20px">
    <div class="overlay">
        <div class="container">
            <h3>INVOICE #{{Request::segment(2)}}</h3>

        </div><!-- container -->
    </div><!-- overlay -->
</section><!-- page header -->
<!-- Page Header End here -->



<section class="shop-cart padding-120">
    <div class="container">
        <div class="shop-table table-responsive">
            <table>
                <thead>
                    <tr>
                        <th colspan="2" class="title">Products</th>
                        <th>Price</th>
                        <th class="total-cart">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @php $total = 0; @endphp
                    @forelse($transaksi as $data)
                    <tr>
                        <td colspan="2" class="product-thumbnail">
                            <div class="image">
                                <a href="#"><img src="{{$data->foto}}" width="150" alt="{{$data->produk}} image"
                                        class="img-responsive"></a>
                            </div>
                            <div class="content">
                                <h4><a href="#">{{$data->produk}}</a></h4>
                            </div>
                        </td>
                        <td><span>{{$data->getHarga()}}</span></td>

                        <td class="total-cart"><span>{{$data->getHarga()}}</span></td>

                    </tr>
                    @php $total+= $data->harga; @endphp
                    @empty
                    Tidak Ada Data
                    @endforelse

                </tbody>
            </table>
        </div>
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="cart-total">
                    <h4>Terms</h4>
                    <div class=" font-weight-bold">
                        Silahkan Transfer ke 012341414 BCA A / N FOR KIDS.<br>
                        Batas Pembayaran 1 x 24 jam<br>
                        dan konfirmasi pembayaran ke info@forkids.com
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="cart-total">
                    <h4>Cart Subtotal</h4>
                    <p>Cart Total:<span>IDR {{number_format($total,0,',','.')}}</span></p>
                </div><!-- cart-total -->
            </div>
        </div><!-- row -->
    </div><!-- container -->
</section><!-- shop-cart -->
@endsection
