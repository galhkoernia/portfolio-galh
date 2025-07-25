@extends('layouts.app')
@section('title', 'Upload Document')

@section('content')
    <div class="container">
        <h2>Upload Document</h2>
        <form method="POST" action="{{ route('documents.store') }}" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Title</label>
                <input type="text" name="title" required>
            </div>
            <div>
                <label>Category</label>
                <select name="category" required>
                    <option value="education">Educational Background</option>
                    <option value="project">Project</option>
                    <option value="achievement">Achievement</option>
                </select>
            </div>
            <div>
                <label>Upload File</label>
                <input type="file" name="file" required>
            </div>
            <button type="submit">Upload</button>
        </form>
    </div>
@endsection