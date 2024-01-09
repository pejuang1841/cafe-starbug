<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Menu</title>
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
            <h1 class="text-white">Form Menu</h1>          
        </div>    
    <div class="row ">
      <div class="col-lg-7 mx-auto">
        <div class="card mt-2 mx-auto p-4 bg-light">
            <div class="card-body bg-light">
                <div class = "container">
                    <form id="contact-form" role="form" method="POST" action="{{ url('store-menu')}}">
                        @csrf
                        <div class="controls">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Nama Menu *</label>
                                        <input id="form_name" type="text" name="nama_menu" class="form-control" placeholder="Masukkan Nama Menu *" required="required" data-error="Nama menu di perlukan.">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Harga *</label>
                                        <input id="form_lastname" type="number" name="harga" class="form-control" placeholder="Masukkan Harga *" required="required" data-error="Harga di perlukan.">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <input type="submit" class="btn mt-3 btn-success btn-send  pt-2 btn-block" value="Submit" >    
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