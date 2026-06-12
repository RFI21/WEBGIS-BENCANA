<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bencana;


class usercontroller extends Controller
{
    //home
    public function index()
    {
            $bencanas = bencana::latest()->paginate(6);
            $count = bencana::all();


    return view('user.index', compact('bencanas','count'));

    }

public function semuaBencana()
{
    // pagination
    $bencanas = bencana::latest()->paginate(6);

    return view('user.index', compact('bencanas'));
}



    //lokasi
    public function lokasi()
    {

        $bencanas=bencana::all();
        // dd($bencanas);


        return view('user.lokasi', compact('bencanas'));
    }
    
    //peta
    public function statistik()
    {


    // Bar Chart
    $banjir = bencana::where('jenis_bencana', 'Banjir')->count();
    $kebakaran = bencana::where('jenis_bencana', 'Kebakaran')->count();
    $longsor = bencana::where('jenis_bencana', 'Tanah Longsor')->count();
    $puting = bencana::where('jenis_bencana', 'Angin Puting Beliung')->count();

    // Line Chart per tahun
    $tahun = [];
    $jumlah = [];

$dataTahunan = bencana::selectRaw('YEAR(tanggal) as tahun, COUNT(*) as total')
    ->whereYear('tanggal', '>=', now()->year - 5)
    ->groupBy('tahun')
    ->orderBy('tahun')
    ->get();
    

 

    foreach ($dataTahunan as $item) {
        $tahun[] = $item->tahun;
        $jumlah[] = $item->total;
    }


    $kecamatanLabels = [
    'Wara',
    'Wara Selatan',
    'Wara Barat',
    'Wara Timur',
    'Wara Utara',
    'Sendana',
    'Telluwanua',
    'Mungkajang',
    'Bara'
];

$kecamatanTotal = [

  bencana::where('lokasi', 'Wara')->count(),

bencana::where('lokasi', 'Wara Selatan')->count(),

bencana::where('lokasi', 'Wara Barat')->count(),

bencana::where('lokasi', 'Wara Timur')->count(),

 bencana::where('lokasi', 'Wara Utara')->count(),

 bencana::where('lokasi', 'Sendana')->count(),

 bencana::where('lokasi', 'Telluwanua')->count(),

 bencana::where('lokasi', 'Mungkajang')->count(),

 bencana::where('lokasi', 'Bara')->count(),
    //    bencana::where('lokasi', 'LIKE', 'Wara%')
    //     ->where('lokasi', 'NOT LIKE', '%Wara Barat%')
    //     ->where('lokasi', 'NOT LIKE', '%Wara Timur%')
    //     ->where('lokasi', 'NOT LIKE', '%Wara Selatan%')
    //     ->where('lokasi', 'NOT LIKE', '%Wara Utara%')
    //     ->count(),
    // bencana::where('lokasi', 'LIKE', '%Wara Selatan%')->count(),
    // bencana::where('lokasi', 'LIKE', '%Wara Barat%')->count(),
    // bencana::where('lokasi', 'LIKE', '%Wara Timur%')->count(),
    // bencana::where('lokasi', 'LIKE', '%Wara Utara%')->count(),
    // bencana::where('lokasi', 'LIKE', '%Sendana%')->count(),
    // bencana::where('lokasi', 'LIKE', '%Telluwanua%')->count(),
    // bencana::where('lokasi', 'LIKE', '%Mungkajang%')->count(),
    // bencana::where('lokasi', 'LIKE', '%Bara%')->count(),
];

$warnaKecamatan = [
    "#ff0000",
    "#00ff00",
    "#fffb04",
    "#ff0088",
    "#0000ff",
    "#ff9900",
    "#2f2f2f",
    "#02ffff",
    "#ff66ff"
];


$tahunDipilih = request('tahun', 2025);
$daftarTahun = Bencana::selectRaw('YEAR(tanggal) as tahun')
    ->distinct()
    ->orderBy('tahun', 'desc')
    ->pluck('tahun');

$dataBulanan = [];

for ($i = 1; $i <= 12; $i++) {
    $dataBulanan[] = Bencana::whereYear('tanggal', $tahunDipilih)
        ->whereMonth('tanggal', $i)
        ->count();
}


$tahunTabel = request('tahun_tabel');
$queryBencana = Bencana::orderBy('tanggal', 'desc');

if ($tahunTabel) {
    $queryBencana->whereYear('tanggal', $tahunTabel);
}

$bencanas = $queryBencana
    ->paginate(10)
    ->withQueryString();


    return view('user.statistik', compact(
        'banjir',
        'kebakaran',
        'kecamatanTotal',
        'warnaKecamatan',
        'longsor',
        'puting',
        'tahun',
        'jumlah',
        'dataBulanan',
        'dataTahunan',
        'daftarTahun',
         'tahunDipilih',
         'tahunTabel',
         'bencanas'
    ));
    }
    
    public function login()
    {
    return view('user.login');
    }
    //daftar layanan
    public function peta()
    {

        return view('user.peta');
    }
        //detail layanan
public function detail($id)
{
    // Ambil layanan berdasarkan ID, jika tidak ada akan 404
    $layanan = Layanan::findOrFail($id);

    // Ambil galeri terkait layanan
    $galeri = GaleriLayanan::where('layanan_id', $layanan->id)->get();

    // Kirim ke view user.detail
    return view('user.detail', compact('layanan', 'galeri'));
}





        }
