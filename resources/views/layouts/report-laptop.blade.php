<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Barang</title>

    <style>
        body {
            box-sizing: border-box;
            font-size: 16px;
        }

        h1 {
            text-align: center;
        }

        table {
            box-sizing: border-box;
            border: 2px solid black;
            border-collapse: collapse;
            width: 100%;
        }

        thead {
            background-color: #1cc88a;
            color: white;
        }

        table,
        th,
        td {
            border: 1px solid black;
        }

        th,
        td {
            text-align: left;
            padding: 10px;
        }

        .center {
            text-align: center;
        }

    </style>
</head>

<body>
    <h1>Data Laptop</h1>
    <table align="center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Merk</th>
                <th>Model</th>
                <th>Spesifikasi</th>
                <th>Stok</th>
                <th>Harga Beli</th>
                <th>Harga Jual</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($laptop as $data)
            <tr>
                <td>{{ $data->id }}</td>
                <td>{{ $data->merk }}</td>
                <td>{{ $data->model }}</td>
                <td>{{ $data->spesifikasi }}</td>
                <td>{{ $data->stok }}</td>
                <td>{{ $data->harga_beli }}</td>
                <td>{{ $data->harga_jual }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="7" align="center">Tidak Ada Data</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>
