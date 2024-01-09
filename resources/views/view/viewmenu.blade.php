<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Menu</title>
</head>
<body>
    <div class="container mt-5">
        <div class="col">
            <div class="card-datatable table-responsive pt-0">
                <table class="datatables-basic table border-top">
                    <thead>
                        <tr>
                            <th></th>
                            <th></th>
                            <th>id_menu</th>
                            <th>Name</th>
                            <th>Price</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $datas)
                            <tr>
                                <th></th>
                                <th></th>
                                <th>{{$datas->id_menu}}</th>
                                <th>{{$datas->nama_menu}}</th>
                                <th>{{$datas->harga}}</th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="">
                <button class="btn btn-md bg-success"><a href="/" class="text-white underline-0">Back</a></button>
            </div>
        </div>
    </div>
</body>
</html>