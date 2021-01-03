<style>
        header .main-menu .menu_cart > span:before {
            content: "{{$cart_count}}";
        }
</style>
<ul class="menu-search-cart">
    <li class="menu_cart dropdown"><span><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
        <ul class="dropdown-menu first_dropdown shop_feature" >
        <div style="max-height:300px;overflow-y:auto">
        @forelse($product as $data)
            <li class="feature_item">
                <div class="featured_image">
                    <img src="{{$data->attributes->foto}}" alt="{{$data->name}} Image" class="img-responsive" width="80" />
                </div>
                <!--featured image-->
                <div class="featured_content">
                    <h3><a href="#">{{$data->name}}</a> </h3>
                    <span class="remove" onclick="cart_action('{{route('ajax.cart.action',[
                        'type' => 'delete',
                        'row_id' => $data->id
                    ])}}')"><i class="fa fa-times" aria-hidden="true"></i></span>
                    <span>IDR {{number_format(Cart::get($data->id)->getPriceSum(),0,',','.')}}</span>
                </div>
                <!--featured content-->
            </li>
        @empty 
        <b>Tidak Ada Data Keranjang</b>
        @endforelse
        </div>
            @if(Cart::getContent()->count() > 0)
                <li class="cart_total">Total Order: <span>IDR {{number_format(Cart::getTotal(),0,',','.')}}</span></li>
                <li><a href="{{route('transaksi.checkout')}}" class="button-default check_out">Check Out</a></li>
            @endif
        </ul>
    </li>
</ul>
