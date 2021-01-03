@extends('layouts.auth')
@section('content')
        <div class="rapikancard" style="padding-left: 250px; padding-top: 50px;">
            <form action="{{route('register')}}" method="POST">
            @csrf
                <div class="container">
                    <div class="card w-75 shadow">
                        <img class="card-img-top shadow" src="/template/img/gambar1.jpg" alt="gambar 1" style="width:100%">
                        <center>
                            <h3 style="color: goldenrod;">Registrasi</h3>
                            <h6 style>FOR-KIDS</h6>
                        </center>
                        <div class="card-body">
                            <hr>
                            <h3>Data Orang Tua</h3>
                            <div class="form-group">
                                <label for="nama">Nama :</label>
                                <input type="text" class="form-control"  placeholder="masukan nama " id="nama"
                                    name="nama_ortu" required>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir :</label>
                                <input type="date" class="form-control" placeholder="masukan tanggal lahir " id="email"
                                    name="tanggal_lahir_ortu" required>
                            </div>
                            <div class="form-group">
                                <label for="no_hp">No.HP :</label>
                                <input type="number" class="form-control" placeholder="masukan no HP " id="no_hp"
                                    name="hp_ortu" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat :</label>
                                <textarea name="alamat_ortu" rows="2" class="form-control" required></textarea>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Email :</label>
                                <input type="email" class="form-control" placeholder="masukan email " id="email"
                                    name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="pwd">Kata Sandi :</label>
                                <input type="password" class="form-control" placeholder="ssst.. masukan password " id="pwd"
                                    name="password" required>
                            </div>
                            <hr>

                            <h3>Data Anak Anak</h3>
                            <a href="javascript:;" class="btn btn-sm btn-success" id="btn-tambah">Tambah Form Anak</a>
                            
                            <div class="mt-2"></div>
                            
                            <div id="area-slider"></div>



                            <center><button type="submit" class="btn btn-primary" >Daftar</button>
                            </center>
                            <br>
                            <center>
                                <p>Sudah punya akun? <a href="{{route('login')}}">Login?</a></p>
                            </center>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <script>
        
        </script>
  @endsection

  @section('js')
    <script>
        let no = 0;
        $("#btn-tambah").on('click', function () {  
            var anjay = '<div id="tutup"><div class="form-group"> <label for="nama">Nama :</label> <input type="text" class="form-control" required placeholder="masukan nama " id="nama" name="nama_anak[]"> </div> <div class="form-group"> <label>Tanggal Lahir :</label> <input type="date" required class="form-control" required placeholder="masukan tanggal lahir " name="tanggal_lahir_anak[]"> </div> <div class="form-group"> <label for="no_hp">No.HP :</label> <input required type="number" class="form-control" placeholder="masukan no HP " id="no_hp" name="hp_anak[]"> </div> <div class="form-group"> <label for="email">Email :</label> <input type="email" required class="form-control" placeholder="masukan email" id="email" name="email_anak[]"> </div> <div class="form-group"> <label for="pwd">Kata Sandi :</label> <input type="password" required class="form-control" name="password_anak[] placeholder="ssst.. masukan password " id="pwd"> <div class="form-group"> <label>Alamat :</label> <textarea required name="alamat_anak" cols="20" rows="2" class="form-control"></textarea> </div> <a href="#" class="img remove btn-danger btn "/>Hapus</div></div>';
            $("#area-slider").append(anjay);
            no++;
        });
        $(document).on('click', '.remove', function () {
            $(this).closest("#tutup").remove();
        });
    </script>
  @endsection