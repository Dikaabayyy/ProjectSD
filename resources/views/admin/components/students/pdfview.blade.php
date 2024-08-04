<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa Kelas {{ $studentData->class }} {{ $studentData->category }} SD YPKP 2 Sentani</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            font-size: 12px
        }

        table, th, td {
            border: 1px solid black;
        }

        th{
            background-color: rgb(212, 212, 212);
            text-align: center
        }

        td{
            text-align: left
        }

        th, td {
            padding: 5px;
        }
    </style>
</head>
<body>
    <h3>Data Siswa Kelas {{ $studentData->class }} {{ $studentData->category }} SD YPKP 2 Sentani</h3>
    <table class="table table-striped-columns">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIS</th>
                <th>NISN</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Kelas</th>
                <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td style="text-align: center">{{ $item->nis }}</td>
                    <td style="text-align: center">{{ $item->nisn }}</td>
                    <td style="text-align: center">{{ $item->gender }}</td>
                    <td style="text-align: center">{{ $item->formatted_date_birth }}</td>
                    <td style="text-align: center">{{ $item->class }} {{ $item->category }}</td>
                    <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
