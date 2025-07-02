<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class kirimPaket_Controller extends Controller
{
    public function upOrderForm()
    {
        // Dummy data sementara (nanti bisa diambil dari database)
        $uploads = [
            [
                'tanggal' => '2025-07-02',
                'id_order' => 'RS1234567890',
                'marketplace' => 'Shopee',
                'file' => 'shopee_order.csv'
            ],
            [
                'tanggal' => '2025-07-01',
                'id_order' => 'RS9876543210',
                'marketplace' => 'Tokopedia',
                'file' => 'tokopedia_orders.xlsx'
            ]
        ];

        return view('page.kirim_paket.uporder', compact('uploads'));
    }

    public function uploadOrder(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:csv,xlsx,xls|max:2048',
        ]);

        $file = $request->file('file');
        $fileName = time() . '_' . $file->getClientOriginalName();
        $file->storeAs('public/uploads/orders', $fileName);

        // Nanti bisa disimpan ke database jika ada modelnya

        return redirect()->back()->with('success', 'File berhasil diupload.');
    }
}
