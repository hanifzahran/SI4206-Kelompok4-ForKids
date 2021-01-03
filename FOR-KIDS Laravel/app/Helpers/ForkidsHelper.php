<?php 

if(!function_exists("no_unik")) {
    function no_unik($length = 7) {
        $data = date('Ymd').str_shuffle(time().rand(0,5));
        return substr($data,0,$length);
    }
}

if(!function_exists("getTotalHarga")) {
    function getTotalHarga($str) {
        $data = \App\Models\Transaksi::where('no_unik',$str)->sum('harga');
        return $data;
    }
}