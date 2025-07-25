<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DocumentController extends Controller
{
    // Menampilkan daftar dokumen
    public function index()
    {
        $documents = Document::all();

        // Jika pakai Supabase/S3, buat URL publik
        $documents->map(function ($doc) {
            $doc->public_url = Storage::disk('s3')->url($doc->file_path);
            return $doc;
        });

        return view('admin.documents.index', compact('documents'));
    }

    // Upload dokumen baru
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|in:educational_background,project,achievement',
            'file' => 'required|mimes:pdf|max:20480' // max 20MB
        ]);

        // Simpan file ke Supabase (S3)
        $filePath = 'documents/' . time() . '_' . $request->file('file')->getClientOriginalName();
        Storage::disk('s3')->put($filePath, file_get_contents($request->file('file')), 'public');

        // Simpan metadata ke database
        Document::create([
            'title' => $request->title,
            'file_path' => $filePath,
            'category' => $request->category,
        ]);

        return redirect()->route('admin.documents.index')->with('success', '✅ Document uploaded successfully to Supabase.');
    }

    // Hapus dokumen
    public function destroy(Document $document)
    {
        // Hapus file dari Supabase
        if (Storage::disk('s3')->exists($document->file_path)) {
            Storage::disk('s3')->delete($document->file_path);
        }

        // Hapus metadata dari database
        $document->delete();

        return redirect()->route('admin.documents.index')
            ->with('success', '✅ Document deleted from Supabase successfully.');
    }
}
