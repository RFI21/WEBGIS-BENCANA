<?php



namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\bencana;
use Illuminate\Support\Facades\Storage;


class admincontroller extends Controller
{
    //dashboard
    public function index()
    {
        $bencanas = bencana::all();
        $admins = User::all(); 
        return view('admin.index', compact('bencanas', 'admins'));
    }



    //adminaccount
    public function admin()
    {
        $admins = User::all(); // Ambil semua data dari tabel admins
        return view('admin.admin', compact('admins'));
    }
    // hapus admin
    public function hapusadmin($id)
{
    $admin = User::findOrFail($id);
    $admin->delete();

    return redirect()->route('admin.admin')->with('success', 'Admin berhasil dihapus');
}

 

}