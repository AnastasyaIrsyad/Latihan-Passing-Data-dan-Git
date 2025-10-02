<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #f0f4f9, #dfe9f3);
            font-family: 'Poppins', sans-serif;
        }
        .profile-img {
            width: 150px;
            height: 150px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid #fff;
            box-shadow: 0 8px 20px rgba(0,0,0,0.15);
        }
        .card {
            border-radius: 20px;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.15);
        }
        .card-header {
            background: linear-gradient(135deg, #3187e9, #5ca9f7);
            color: white;
            font-weight: bold;
            text-align: center;
            font-size: 1.3rem;
            letter-spacing: 1px;
            border-radius: 20px 20px 0 0 !important;
            padding: 1rem;
        }
        .table td {
            padding: 12px 8px;
            vertical-align: middle;
            font-size: 0.95rem;
        }
        .table td:first-child {
            font-weight: 600;
            color: #444;
        }
        .footer {
            margin-top: 40px;
            text-align: center;
            color: #6c757d;
            font-size: 0.9rem;
            border-top: 1px solid #ddd;
            padding-top: 15px;
        }
        .icon {
            color: #3187e9;
            margin-right: 8px;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10 col-md-12"> <!-- perbesar lebar card -->
            <div class="card" style="min-width: 800px;"> <!-- kasih ukuran minimum -->
                <div class="card-header">
                    Biodata Pegawai
                </div>
                <div class="card-body text-center">
                    <!-- Foto Kartun Avatar -->
                    <img src="https://cdn-icons-png.flaticon.com/512/201/201634.png"
     alt="Profile" class="profile-img mb-3">

                    <!-- Tabel Biodata -->
                    <table class="table table-borderless text-start w-100">
                        <tr>
                            <td style="white-space: nowrap; width: 250px;">
                                <i class="icon bi bi-person"></i> Nama Pegawai
                            </td>
                            <td>: {{ $employee_name }}</td>
                        </tr>
                        <tr>
    <td><i class="icon bi bi-person-badge"></i> Usia</td>
    <td>: {{ $age }} tahun</td>
</tr>
                        <tr>
                            <td><i class="icon bi bi-briefcase"></i> Jabatan</td>
                            <td>: {{ $position }}</td>
                        </tr>
                        <tr>
                            <td><i class="icon bi bi-award"></i> Keahlian</td>
                            <td>: {{ implode(', ', $skills) }}</td>
                        </tr>
                        <tr>
                            <td><i class="icon bi bi-calendar-event"></i> Tanggal Mulai Bekerja</td>
                            <td>: {{ $join_date }}</td>
                        </tr>
                        <tr>
                            <td><i class="icon bi bi-hourglass-split"></i> Lama Bekerja</td>
                            <td>: {{ $working_duration }} hari</td>
                        </tr>
                        <tr>
                            <td><i class="icon bi bi-circle-fill"></i> Status</td>
                            <td>: <span class="badge bg-info text-dark">{{ $status }}</span></td>
                        </tr>
                        <tr>
                            <td><i class="icon bi bi-cash-stack"></i> Gaji Bulanan</td>
                            <td>: Rp {{ number_format($salary, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td><i class="icon bi bi-lightbulb"></i> Cita-cita Karir</td>
                            <td>: {{ $career_goal }}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Bootstrap Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</body>
</html>
