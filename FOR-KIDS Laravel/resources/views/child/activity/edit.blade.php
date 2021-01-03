@extends('layouts.app')
@section('content')
<header style="z-index:9999;position:relative">
    @include('layouts.include.header-top')
</header>

<section class="page-header section-notch" style="margin-top:-20px">
    <div class="overlay">
        <div class="container">
            <h3>Perubahan Data Aktivitas Anak</h3>
            <ul>
                <li><a href="{{url('/')}}">Home</a></li>
                <li><a href="{{url('/child-panel')}}"> - Halaman Anak -</a></li>
                <li>Perubahan Data Aktivitas Anak</li>
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
                        <h4><i class="fa fa-fw fa-bullhorn"></i>Perubahan Data Activity</h4>
                    </div>
                    <div class="col-md-2 col-xs-12"><a href="{{route('activity.index')}}"
                            class="btn btn-block btn-sm btn-success">Lihat Data</a>
                    </div>
                </div>

                <hr>
                <form action="{{route('activity.update',$data->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="card">
                        <div class="card-body">
                            <!-- form  input name -->
                            <div class="form-group ">
                                <label><b>Name</b></label>
                                <input type="text" class="form-control" name="name"
                                    placeholder="Masukan nama kegiatan / acara" value="{{$data->name}}">
                            </div>
                            <!-- akhir form input name -->

                            <!-- form input deskripsi -->
                            <div class="form-group ">
                                <label><b>Deskripsi</b></label>
                                <textarea class="form-control" name="description" id="deskripsi" rows="4"
                                    placeholder="Masukan deskripsi">{{$data->description}}</textarea>
                            </div>
                            <!-- akhir form input deskripsi -->

                            <div class="form-group ">
                                <label><b>Lokasi</b></label>
                                <input type="text" class="form-control" name="lokasi" placeholder="Masukan lokasi"
                                    value="{{$data->lokasi}}">
                            </div>

                            <div class="form-group text-center">
                                <img src="{{$data->getFoto()}}" width="200" alt="">
                            </div>
                            <!-- form input gambar -->
                            <div class="form-group ">
                                <label><b>Upload Gambar</b></label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="gambar" name="foto"
                                        accept="image/*">
                                    <label class="custom-file-label" for="customFile">Pilih gambar</label>
                                </div>
                            </div>

                            <!-- form inputan tanggal -->
                            <div class="form-group ">
                                <label><b>Tanggal & Jam</b></label>
                                <input type="datetime-local" class="form-control" name="tanggal"
                                    value="{{$data->tanggal}}">
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
