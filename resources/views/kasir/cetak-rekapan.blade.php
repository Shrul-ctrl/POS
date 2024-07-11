<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pos</title>
</head>
<body>
    <h3 class="mb-0 text-uppercase pb-3">Rekapan Pembayaran</h3>

    <div class="product-table">
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Menu</th>
                        <th scope="col">Nama Kasir</th>
                        <th scope="col">Total</th>
                        <th scope="col">Bayar</th>
                        <th scope="col">Kembali</th>
                        <th scope="col">Tanggal Transakasi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($cetakrekapan as $data)
                    <tr>
                        <th scope="row">{{ $loop->index+1 }}</th>
                        <td>{{ $data->menu }}</td>
                        <td>{{ $data->id_user }}</td>
                        <td>{{ $data->total }}</td>
                        <td>{{ $data->bayar }}</td>
                        <td>{{ $data->kembali }}</td>
                        <td>{{ $data->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
