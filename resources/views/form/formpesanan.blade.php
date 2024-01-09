<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body{
            background-color:gray;
        }
    </style>
</head>
<body>
@include('sweetalert::alert')
<div class="container">
        <div class=" text-center mt-5 ">

            <h1 class="text-white">Form Pesanan</h1>
                
            
        </div>

    
    <div class="row ">
      <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
       
            <div class = "container">
                             <form id="contact-form" role="form" method="POST" action=" {{  url('store-pesanan')}}">
            @csrf
            

            <div class="controls">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">ID Pegawai *</label>
                            <select id="form_need" name="id_pegawai" class="form-control" required="required" data-error="Pilih metode pembayaran.">
                                <option value="" selected disabled>--Pilih Pegawai--</option>
                                @foreach ($pegawai as $pg)
                                <option value="{{$pg->id_pegawai}}">{{$pg->id_pegawai}} | {{$pg->nama_pegawai}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_lastname">ID Pelanggan *</label>
                            <select id="form_need" name="id_pelanggan" class="form-control" required="required" data-error="Pilih metode pembayaran.">
                                <option value="" selected disabled>--Pilih Pelanggan--</option>
                                @foreach ($pelanggan as $pg)
                                <option value="{{$pg->id_pelanggan}}">{{$pg->id_pelanggan}} | {{$pg->nama_pelanggan}}</option>
                                @endforeach
                            </select>
                                                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">ID Menu *</label>
                            <select id="form_need" name="id_menu" class="form-control" required="required" data-error="Pilih metode pembayaran.">
                                <option value="" selected disabled>--Pilih Menu--</option>
                                @foreach ($menu as $pg)
                                <option value="{{ $pg->id_menu }}">{{$pg->nama_menu}} | {{ $pg->harga}}</option>
                                @endforeach
                            </select>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">Jumlah Pesanan *</label>
                            <input id="form_email" type="text" name="jumlah_pesanan" class="form-control" placeholder="Masukkan Jumlah Pesanan *" required="required" data-error="Jumlah Pesanan di perlukan.">
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">Total Pembayaran *</label>
                            <input id="form_email" type="text" name="total_pembayaran" class="form-control" placeholder="Masukkan Total Pembayaran *" required="required" data-error="Total Pembayaran di perlukan.">
                            
                        </div>
                    </div>
                    <div class="col-md-6">  
                        <div class="form-group">
                            <label for="form_email">No Telepon *</label>
                            <select id="form_need" name="no_telepon" class="form-control" required="required" data-error="Pilih metode pembayaran.">
                                <option value="" selected disabled>--Pilih Nomer Telepon--</option>
                                @foreach ($pelanggan as $pg)
                                <option value="{{ $pg->nomor_telpon}}">{{$pg->id_pelanggan}} | {{$pg->nomor_telpon}}</option>
                                @endforeach 
                            </select>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_need">Metode Pembayaran *</label>
                            <select id="form_need" name="metode_pembayaran" class="form-control" required="required" data-error="Pilih metode pembayaran.">
                                <option value="" selected disabled>--Pilih metode pembayaran--</option>
                                <option >Cash</option>
                                <option >Qris</option>
                                <option >Debit</option>
                            </select>
                            
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
<<<<<<< HEAD
                     


                    <div class="col-md-12 mt-2">
                        
                        <input type="submit" class="btn btn-success btn-send  pt-2 btn-block
                            " value="Submit" >
                    
                </div>
=======
                    <div class=" d-flex justify-content-between col-md-12 mt-2">             
                        <input type="submit" class="btn btn-success btn-send  pt-2 btn-block" value="Send Message" > 
                        <button class="btn btn-success"><a href="/" class="text-white">Back</a></button>                  
                    </div>
>>>>>>> 46c0a3a4a2f4c7c6bf93465569b35e8d158c9df9
          
                </div>


        </div>
         </form>

        </div>
            </div>


    </div>
        <!-- /.8 -->

    </div>
    <!-- /.row-->

</div>
</div>

</body>
</html>