<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DateTime;

class PegawaiController extends Controller {
    public function index(){
    /* Cara 1 */
    $data['employee_name']   = 'Anastasya Irsyad';
    $data['birth_date']      = '2005-12-23'; // tanggal lahir
    $data['position']        = 'Software Engineer';
    $data['skills']          = ['PHP', 'Laravel', 'JavaScript', 'MySQL', 'Problem Solving'];
    $data['join_date']       = '2022-12-23';
    $data['salary']          = 10000000;
    $data['career_goal']     = 'CEO PT.Makmur';

    // Hitung umur
    $today = new DateTime();
    $birth = new DateTime($data['birth_date']);
    $data['age'] = $birth->diff($today)->y;

    // Hitung lama kerja (hari)
    $join = new DateTime($data['join_date']);
    $data['working_duration'] = $join->diff($today)->days;

    // Status pegawai berdasarkan lama kerja
    if ($data['working_duration'] < 730) {
        $data['status'] = "Masih pegawai baru, tingkatkan pengalaman kerja!";
    } else {
        $data['status'] = "Sudah senior, jadilah teladan bagi rekan kerja!";
    }

    return view('pegawai', $data);
}
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
