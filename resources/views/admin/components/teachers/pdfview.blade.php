<!DOCTYPE html>
<html>
<head>
    <title>Data Guru SD YPKP 2 Sentani</title>
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
    <h3>Data Guru SD YPKP 2 Sentani</h3>
    <table class="table table-striped-columns">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIP</th>
                <th>NUPTK</th>
                <th>Golongan</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Jabatan</th>
                <th>Status</th>
                <th>Ijazah/ Tahun Terakhir</th>
                <th>Mulai diangkat/ Mengajar</th>
                <th>Tanggal Mulai Bekerja</th>
                <th>Mapel Utama</th>
                <th>Sertifikasi (Status/Tahun)</th>
                <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
            </tr>
        </thead>
        <tbody>
            @foreach($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td style="text-align: center">{{ $item->teachers_data->nip }}</td>
                    <td style="text-align: center">{{ $item->teachers_data->nuptk }}</td>
                    <td style="text-align: center">{{ $item->teachers_data->gol }}</td>
                    <td style="text-align: center">{{ $item->gender }}</td>
                    <td style="text-align: center">{{ $item->formatted_date_birth }}</td>
                    <td>{{ $item->teachers_data->position }}</td>
                    <td style="text-align: center">{{ $item->status }}</td>
                    <td style="text-align: center">{{ $item->teachers_data->ijazah }}/{{ $item->teachers_data->ijazah_date }}</td>
                    <td style="text-align: center">{{ $item->formatted_date_teaching }}</td>
                    <td style="text-align: center">{{ $item->formatted_date_working }}</td>
                    <td style="text-align: center">{{ $item->teachers_data->subjects }}</td>
                    <td style="text-align: center">{{ $item->teachers_data->certificate_status }}, {{ $item->teachers_data->certificate_year}}</td>
                    <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
