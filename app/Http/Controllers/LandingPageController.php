<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Broadband;
use App\Models\Client;
use App\Models\Faq;
use App\Models\KritikSaran;
use App\Models\Portofolio; 
use App\Models\Produk; // Import Model Produk
use Carbon\Carbon;

class LandingPageController extends Controller
{
    public function index()
    {
        // Mengambil data dari database
        $broadbands = Broadband::all();
        $clients = Client::all();
        $faqs = Faq::all();
        
        // Mengambil 6 data portofolio dari tabel tb_loker_studio secara acak
        $portfolios = Portofolio::inRandomOrder()->limit(6)->get();

        // Mengambil semua produk beserta relasi detailnya menggunakan with()
        // pastikan model Produk sudah memiliki relasi 'details()'
        $produks = Produk::with('details')->get(); 

        // Memasukkan variabel 'portfolios' dan 'produks' ke dalam view
        return view('index', compact('broadbands', 'clients', 'faqs', 'portfolios', 'produks'));
    }

    public function storeKritikSaran(Request $request)
    {
        // Validasi data form yang disesuaikan dengan struktur tb_kritik_saran
        $validated = $request->validate([
            'nama_depan'    => 'required|string|max:50',
            'nama_belakang' => 'required|string|max:100',
            'email'         => 'required|email|max:100',
            'judul'         => 'required|string|max:100',
            'pesan'         => 'required|string|max:255',
        ]);

        // Menambahkan properti manual sesuai struktur database
        $validated['date_create'] = Carbon::now();
        $validated['ip'] = $request->ip() ?? '';

        // Simpan ke tb_kritik_saran
        KritikSaran::create($validated);

        return redirect()->back()->with('success', 'Terima kasih! Pesan dan saran Anda telah berhasil dikirim.');
    }
}