<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container mt-5">
        <div class="col">
            <div class="card-datatable table-responsive pt-0">
                <table class="datatables-basic table border-top">
                    <thead>
                    <tr>
                        <th>id pesanan</th>
                        <th>id pesanan</th>
                        <th>id pelanggan</th>
                        <th>no telepon</th>
                        <th>id menu</th>
                        <th>jumlah pesan</th>
                        <th>total</th>
                        <th>metode</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $datas)
                            <th>{{ $datas->id_pesanan }}</th>
                            <th>{{ $datas->id_pesanan }}</th>
                            <th>{{ $datas->id_pelanggan }}</th>
                            <th>{{ $datas->no_telepon }}</th>
                            <th>{{ $datas->id_menu }}</th>
                            <th>{{ $datas->jumlah_pesanan}}</th>
                            <th>{{ $datas->total_pembayaran}}</th>
                            <th>{{ $datas->metode_pembayaran}}</th>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>