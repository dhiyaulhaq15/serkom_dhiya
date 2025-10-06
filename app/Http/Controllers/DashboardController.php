<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(){
        $kehadiranSiswa = DB::table('absensi')
            ->join('users', 'absensi.user_id', '=', 'users.id')
            ->select(DB::raw('DATE(tanggal) as tgl'), DB::raw('COUNT(*) as total'))
            ->where('status', 'hadir')
            ->where('users.role_id', 4)
            ->groupBy('tgl')
            ->pluck('total', 'tgl');

        $kehadiranGuru = DB::table('absensi')
            ->join('users', 'absensi.user_id', '=', 'users.id')
            ->select(DB::raw('DATE(tanggal) as tgl'), DB::raw('COUNT(*) as total'))
            ->where('status', 'hadir')
            ->where('users.role_id', 3)
            ->groupBy('tgl')
            ->pluck('total', 'tgl');

        $labels = collect($kehadiranSiswa->keys())
            ->merge($kehadiranGuru->keys())
            ->unique()
            ->sort()
            ->values();

        $dataSiswa = $labels->map(fn($tgl) => $kehadiranSiswa[$tgl] ?? 0);
        $dataGuru = $labels->map(fn($tgl) => $kehadiranGuru[$tgl] ?? 0);

        $jumlahOperator = User::whereIn('role_id', [1, 2])->count();
        $jumlahGuru = User::where('role_id', 3)->count();
        $jumlahSiswa = User::where('role_id', 4)->count();
        $jumlahKelas = Kelas::count();

        return view('admin.dashboard', compact('jumlahOperator', 'jumlahKelas', 'jumlahGuru', 'jumlahSiswa', 'labels', 'dataSiswa', 'dataGuru'));
    }
    //
}
