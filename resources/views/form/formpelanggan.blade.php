<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
@include('sweetalert::alert')
<div class="container">
        <div class=" text-center mt-5 ">

            <h1 >Form Pelanggan</h1>
                
            
        </div>

    
    <div class="row ">
      <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
       
            <div class = "container">
                             <form id="contact-form" role="form" method="POST" action="{{ url('store-pelanggan')}}">
            @csrf
            

            <div class="controls">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_name">Nama Pelanggan*</label>
                            <input id="form_name" type="text" name="nama_pelanggan" class="form-control" placeholder="Masukkan Nama Pelanggan *" required="required" data-error="Nama Pelanggan di perlukan.">
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="form_lastname">Nomer Telepon *</label>
                            <input id="form_lastname" type="text" name="nomor_telpon" class="form-control" placeholder="Masukkan Nomer Telepon *" required="required" data-error="Nomor telepon di perlukan.">
                                                            </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group mt-2">
                            <label for="form_message">Alamat *</label>
                            <textarea id="form_message" name="alamat" class="form-control" placeholder="Masukkan Alamat Anda." rows="4" required="required" data-error="Alamat di perlukan."></textarea
                                >
                            </div>

                        </div>


                        <div class=" d-flex justify-content-between col-md-12 mt-2">             
                        <input type="submit" class="btn btn-success btn-send  pt-2 btn-block" value="Send Message" > 
                        <button class="btn btn-success"><a href="/" class="text-white">Back</a></button>                  
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