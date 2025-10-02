<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Pegawai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #ffe6f0, #ffd6e0);
            font-family: 'Poppins', sans-serif;
            min-height: 100vh;
        }
        .card {
            border-radius: 22px;
            overflow: hidden;
            box-shadow: 0 12px 28px rgba(255, 105, 180, 0.25);
            border: none;
            background: #fff0f6;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .card:hover {
            transform: translateY(-6px);
            box-shadow: 0 20px 40px rgba(255, 105, 180, 0.35);
        }
        .card-header {
            background: linear-gradient(135deg, #ff80ab, #ffb6c1);
            color: #fff;
            font-weight: bold;
            text-align: center;
            font-size: 1.6rem;
            padding: 1.5rem;
            letter-spacing: 1px;
        }
        .profile-img {
            width: 140px;
            height: 140px;
            object-fit: cover;
            border-radius: 50%;
            border: 5px solid #fff;
            box-shadow: 0 6px 20px rgba(255, 105, 180, 0.3);
            margin-top: 15px; /* diturunkan agar header tetap kelihatan */
            background: #fff;
        }
        .table td {
            padding: 14px 10px;
            vertical-align: middle;
            font-size: 1rem;
        }
        .table td:first-child {
            font-weight: 600;
            color: #d81b60;
            width: 280px;
        }
        .table i {
            color: #ff4081; /* warna ikon pink biar serasi */
            margin-right: 8px;
        }
        .badge {
            font-size: 0.95rem;
            padding: 8px 14px;
            border-radius: 12px;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            color: #d81b60;
            font-size: 0.95rem;
        }
    </style>
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-9 col-md-11">
            <div class="card text-center">
                <div class="card-header">
                    🌸 Biodata Pegawai 🌸
                </div>
                <div class="card-body">
                    <img src="https://cdn-icons-png.flaticon.com/512/201/201634.png"
                         alt="Profile" class="profile-img mb-3">

                    <table class="table table-borderless text-start mt-3">
                        <tr>
                            <td><i class="bi bi-person"></i> Nama Pegawai</td>
                            <td>: {{ $employee_name }}</td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-calendar-heart"></i> Usia</td>
                            <td>: {{ $age }} tahun</td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-briefcase"></i> Jabatan</td>
                            <td>: {{ $position }}</td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-award"></i> Keahlian</td>
                            <td>: {{ implode(', ', $skills) }}</td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-calendar-event"></i> Tanggal Mulai Bekerja</td>
                            <td>: {{ $join_date }}</td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-hourglass-split"></i> Lama Bekerja</td>
                            <td>: {{ $working_duration }} hari</td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-circle-fill"></i> Status</td>
                            <td>: <span class="badge bg-pink text-dark" style="background-color:#ffc1e3;">{{ $status }}</span></td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-cash-stack"></i> Gaji Bulanan</td>
                            <td>: Rp {{ number_format($salary, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                            <td><i class="bi bi-lightbulb"></i> Cita-cita Karir</td>
                            <td>: {{ $career_goal }}</td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="footer">
                🌷 Semoga karirmu selalu bersinar 🌷
            </div>
        </div>
    </div>
</div>

</body>
</html>
