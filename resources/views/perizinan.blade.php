<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perizinan PDF</title>

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
    <h3>Data Perizinan Proyek</h3>

    <table style="border: 1px solid black;">
        <thead>
            <tr>
                <th>No SPK</th>
                <th>Nama Pekerjaan</th>
                <th>Tgl BA</th>
                <th>Progress BA</th>
                <th>Posisi BA</th>
                <th>Tgl Update</th>
                <th>Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($records as $record)
                <tr>
                    <td>{{ $record->no_spk }}</td>
                    <td>{{ $record->nama_pekerjaan }}</td>
                    <td>{{ $record->tgl_berita_acara }}</td>
                    <td>{{ $record->progress_berita_acara }}</td>
                    <td>{{ $record->posisi_berita_acara }}</td>
                    <td>{{ $record->tgl_update }}</td>
                    <td>{{ $record->keterangan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>