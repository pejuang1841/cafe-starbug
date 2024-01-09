<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
@include('sweetalert::alert')
<div class="container">]
        <div class=" text-center mt-5 ">

            <h1 >Form Pesanan</h1>
                
            
        </div>

    
    <div class="row ">
      <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
       
            <div class = "container">
                             <form id="contact-form" role="form">

            

            <div class="controls">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">ID Pegawai *</label>
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="Masukkan ID Pegawai *" required="required" data-error="ID Pegawai di perlukan.">
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_lastname">ID Pelanggan *</label>
                            <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Masukkan ID Pelanggan *" required="required" data-error="ID Pelanggan di perlukan.">
                                                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">ID Menu *</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Masukkan ID Menu *" required="required" data-error="ID Menu di perlukan.">
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">Jumlah Pesanan *</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Masukkan Jumlah Pesanan *" required="required" data-error="Jumlah Pesanan di perlukan.">
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">Total Pembayaran *</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Masukkan Total Pembayaran *" required="required" data-error="Total Pembayaran di perlukan.">
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_email">No Telepon *</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="Masukkan No Telepon *" required="required" data-error="No Telepon di perlukan.">
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_need">Metode Pembayaran *</label>
                            <select id="form_need" name="need" class="form-control" required="required" data-error="Pilih metode pembayaran.">
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
                     


                    <div class="col-md-12 mt-2">
                        
                        <input type="submit" class="btn btn-success btn-send  pt-2 btn-block
                            " value="Send Message" >
                    
                </div>
          
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