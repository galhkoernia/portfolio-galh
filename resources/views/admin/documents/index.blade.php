@extends('layouts.app')

@section('title', 'Admin - Upload Documents')

@section('content')
    <div class="min-h-screen bg-gray-100 py-10">
        <div class="container mx-auto px-6">

            {{-- Flash Messages --}}
            @if(session('success'))
                <div class="mb-6 p-4 rounded-lg bg-green-100 text-green-800 border border-green-300">
                    ✅ {{ session('success') }}
                </div>
            @endif

            {{-- Title --}}
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold text-gray-800">📂 Manage Documents</h1>
            </div>

            {{-- Upload Form --}}
            <div class="bg-white shadow-md rounded-xl p-6 mb-8">
                <h2 class="text-lg font-semibold mb-4">➕ Upload New Document</h2>

                <form action="{{ route('admin.documents.store') }}" method="POST" enctype="multipart/form-data"
                    class="space-y-4">
                    @csrf

                    <div>
                        <label class="block font-medium text-gray-700">Title</label>
                        <input type="text" name="title"
                            class="w-full rounded-lg border-gray-300 focus:ring focus:ring-blue-200"
                            placeholder="Document title..." required>
                    </div>

                    <div>
                        <label class="block font-medium text-gray-700">Category</label>
                        <select name="category" class="w-full rounded-lg border-gray-300 focus:ring focus:ring-blue-200"
                            required>
                            <option value="educational_background">🎓 Educational Background</option>
                            <option value="project">💻 Project</option>
                            <option value="achievement">🏆 Achievement</option>
                        </select>
                    </div>

                    <div>
                        <label class="block font-medium text-gray-700">Upload PDF</label>
                        <input type="file" name="file" accept="application/pdf"
                            class="w-full rounded-lg border-gray-300 focus:ring focus:ring-blue-200" required>
                    </div>

                    <div class="text-right">
                        <button type="submit"
                            class="px-4 py-2 rounded-lg bg-blue-600 hover:bg-blue-700 text-white font-medium">
                            Upload
                        </button>
                    </div>
                </form>
            </div>

            {{-- Documents Table --}}
            <div class="bg-white shadow-md rounded-xl p-6">
                <h2 class="text-lg font-semibold mb-4">📑 Uploaded Documents</h2>

                @if($documents->count() > 0)
                    <div class="overflow-x-auto">
                        <table class="w-full border-collapse">
                            <thead>
                                <tr class="bg-gray-100 text-left">
                                    <th class="p-3">#</th>
                                    <th class="p-3">Title</th>
                                    <th class="p-3">Category</th>
                                    <th class="p-3">Uploaded At</th>
                                    <th class="p-3 text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($documents as $doc)
                                    <tr class="border-b hover:bg-gray-50">
                                        <td class="p-3">{{ $loop->iteration }}</td>
                                        <td class="p-3 font-medium">{{ $doc->title }}</td>
                                        <td class="p-3">
                                            @if($doc->category == 'educational_background')
                                                🎓 Educational
                                            @elseif($doc->category == 'project')
                                                💻 Project
                                            @else
                                                🏆 Achievement
                                            @endif
                                        </td>
                                        <td class="p-3 text-sm text-gray-500">{{ $doc->created_at->format('d M Y') }}</td>
                                        <td class="p-3 flex gap-2 justify-center">
                                            <a href="{{ asset('storage/' . $doc->file_path) }}" target="_blank"
                                                class="px-3 py-1 bg-green-100 text-green-700 rounded-md text-sm hover:bg-green-200">
                                                View
                                            </a>

                                            {{-- Tombol Delete --}}
                                            <button onclick="confirmDelete('{{ $doc->id }}')"
                                                class="px-3 py-1 bg-red-100 text-red-700 rounded-md text-sm hover:bg-red-200">
                                                Delete
                                            </button>

                                            {{-- Form Delete (hidden) --}}
                                            <form id="delete-form-{{ $doc->id }}"
                                                action="{{ route('admin.documents.destroy', $doc->id) }}" method="POST"
                                                class="hidden">
                                                @csrf
                                                @method('DELETE')
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @else
                    <p class="text-gray-500">❌ No documents uploaded yet.</p>
                @endif
            </div>
        </div>
    </div>

    {{-- Modal Konfirmasi --}}
    <div id="deleteModal" class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center hidden">
        <div class="bg-white rounded-xl shadow-lg p-6 w-80 text-center">
            <h3 class="text-lg font-semibold text-gray-800 mb-4">⚠ Delete Document?</h3>
            <p class="text-gray-600 mb-6">This action cannot be undone!</p>
            <div class="flex justify-between">
                <button onclick="closeModal()" class="px-4 py-2 rounded-lg bg-gray-200 hover:bg-gray-300">Cancel</button>
                <button id="confirmDeleteBtn" class="px-4 py-2 rounded-lg bg-red-600 hover:bg-red-700 text-white">Yes,
                    Delete</button>
            </div>
        </div>
    </div>

    <script>
        let docIdToDelete = null;

        function confirmDelete(id) {
            docIdToDelete = id;
            document.getElementById('deleteModal').classList.remove('hidden');
        }

        function closeModal() {
            docIdToDelete = null;
            document.getElementById('deleteModal').classList.add('hidden');
        }

        document.getElementById('confirmDeleteBtn').addEventListener('click', function () {
            if (docIdToDelete) {
                document.getElementById('delete-form-' + docIdToDelete).submit();
            }
        });
    </script>
@endsection