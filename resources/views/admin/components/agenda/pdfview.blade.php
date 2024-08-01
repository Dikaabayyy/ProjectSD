<!DOCTYPE html>
<html>
<head>
    <title>Data Agenda SD YPKP 2 Sentani</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Data Agenda SD YPKP 2 Sentani</h1>
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Deskripsi</th>
                <th>Lokasi</th>
                <th>Tanggal Mulai</th>
                <th>Jam</th>
                <th>Tanggal Selesai</th>
                <th>Jam</th>
                <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->desc }}</td>
                    <td>{{ $item->location }}</td>
                    <td>{{ $item->formatted_date_start }}</td>
                    <td>{{ $item->formatted_time_start }}</td>
                    <td>{{ $item->formatted_date_end }}</td>
                    <td>{{ $item->formatted_time_end }}</td>
                    <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
