<?php
namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('pages.user.index', compact('products'));
    }

    public function detail_product($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.user.detail', compact('product'));
    }

    public function purchase($productId)
    {
        // Pastikan pengguna login
        $user = Auth::user(); // Menggunakan Auth untuk mendapatkan user yang login

        // Menemukan produk berdasarkan ID
        $product = Product::findOrFail($productId);

        // Mengecek apakah pengguna memiliki cukup point untuk membeli produk
        if ($user->point >= $product->price) {
            // Tidak melakukan update pada poin, hanya memberi notifikasi sukses
            Alert::success('Berhasil!', 'Produk berhasil dibeli!');
            return redirect()->route('user.dashboard');
        } else {
            // Menampilkan notifikasi gagal jika point tidak cukup
            Alert::error('Gagal!', 'Point Anda tidak cukup!');
            return redirect()->route('user.dashboard');
        }

    }
    public function user_logout()
{
    Auth::logout();
    return redirect()->route('user.dashboard'); // Redirect to the user dashboard
}

}
