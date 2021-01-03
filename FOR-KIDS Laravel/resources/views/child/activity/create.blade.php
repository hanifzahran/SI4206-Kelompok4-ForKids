@extends('layouts.app')
@section('content')
<header style="z-index:9999;position:relative">
    @include('layouts.include.header-top')
</header>

<section class="page-header section-notch" style="margin-top:-20px">
    <div class="overlay">
        <div class="container">
            <h3>Tambah Data Aktivitas Anak</h3>
            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/child-panel')}}"> - Halaman Anak -</a></li>
                <li>Tambah Data Aktivitas Anak</li>
            </ul>
        </div><!-- container -->
    </div><!-- overlay -->
</section><!-- page header -->
<section class="product padding-120">
    <div class="container">
        <div class="row">
            @include('layouts.include.child.menu')
            <div class="col-lg-9 col-xs-12">
            <div class="row text-left">
                    <div class="col-md">
                        <h4><i class="fa fa-fw fa-bullhorn"></i>Tambah Activity</h4>
                    </div>
                    <div class="col-md-2 col-xs-12"><a href="{{route('activity.index')}}" class="btn btn-block btn-sm btn-success">Lihat Data</a>
                    </div>
                </div>

                <hr>
                <form action="{{route('activity.store')}}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="card">
                        <div class="card-body">
                            <!-- form  input name -->
                            <div class="form-group ">
                                <label for="inputName"><b>Name</b></label>
                                <input type="text" class="form-control" name="name"
                                    placeholder="Masukan nama kegiatan / acara">
                            </div>
                            <!-- akhir form input name -->

                            <!-- form input deskripsi -->
                            <div class="form-group ">
                                <label for="inputDeskripsi"><b>Deskripsi</b></label>
                                <textarea class="form-control" name="description" id="deskripsi" rows="4"
                                    placeholder="Masukan deskripsi"></textarea>
                            </div>
                            <!-- akhir form input deskripsi -->

                            <div class="form-group ">
                                <label for="inputTempatl"><b>Lokasi</b></label>
                                <input type="text" class="form-control" name="lokasi" placeholder="Masukan lokasi">
                            </div>

                            <!-- form input gambar -->
                            <div class="form-group ">
                                <label for="inputGambar"><b>Upload Gambar</b></label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="gambar" name="foto" accept="image/*">
                                    <label class="custom-file-label" for="customFile">Pilih gambar</label>
                                </div>
                            </div>

                            <!-- form inputan tanggal -->
                            <div class="form-group ">
                                <label for="inputTanggal"><b>Tanggal & Jam</b></label>
                                <input type="datetime-local" class="form-control" name="tanggal">
                            </div>
                            <!-- akhir form inputan tanggal -->

                            <div class="form-group">
                                <div class="text-right">
                                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                    <button type="button" class="btn btn-danger" data-dismis="form">Cancel</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>


            </form>
        </div>
    </div><!-- row -->

    </div><!-- container -->
</section>
@endsection
