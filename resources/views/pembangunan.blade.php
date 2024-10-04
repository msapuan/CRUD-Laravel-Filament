<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembangunan PDF</title>

    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        thead > tr > th {
            font-weight : bold;
        }
    </style>
</head>
<body>
    <h3>Data Pembangunan Proyek</h3>

    <table style="border: 1px solid black;">
        <thead>
            <tr>
                <th>No SPK</th>
                <th>Nama Pekerjaan</th>
                <th>Nilai Pekerjaan</th>
                <th>Tgl Mulai</th>
                <th>Tgl Selesai</th>
                <th>Hari Tersisa</th>
                <th>Progress Pekerjaan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($records as $record)
                <tr>
                    <td>{{ $record->no_spk }}</td>
                    <td>{{ $record->nama_pekerjaan }}</td>
                    <td>{{ $record->nilai_pekerjaan }}</td>
                    <td>{{ $record->tgl_mulai }}</td>
                    <td>{{ $record->tgl_selesai }}</td>
                    <td>{{ $record->hari_tersisa }}</td>
                    <td>{{ $record->progress_pekerjaan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>