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
    <h1>Data Penjualan</h1>
    <table align="center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Merk Laptop</th>
                <th>Tanggal Penjualan</th>
                <th>Jumlah Jual</th>
                <th>Harga Jual</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($penjualan as $data)
            <tr>
                <td>{{ $data->id }}</td>
                @foreach ($laptop as $item)
                <td>{{ $item->merk }}</td>
                @endforeach
                <td>{{ $data->tanggal_penjualan }}</td>
                <td>{{ $data->jumlah_jual }}</td>
                <td>{{ $data->harga_jual }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5" align="center">Tidak Ada Data</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>

</html>
