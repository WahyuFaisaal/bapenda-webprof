@extends('back.layouts.main')

@push('child-css')
    {{-- Quill Editor --}}
    <link href="//cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <link href="//cdn.quilljs.com/1.3.6/quill.bubble.css" rel="stylesheet">
@endpush

@section('content')

<div class="card">
    <div class="card-body">

        <div class="col-lg-8">
        <h5 class="card-title">Buat Pajak</h5>
        <form method="post" action="{{ route('dashboard.taxes.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="col-12">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" autofocus value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            {{-- Upload Gambar --}}
            <div class="col-12 mt-2">
                <label for="image" class="col-sm-2 col-form-label">Upload Gambar</label>
                <div class="col-sm-10">
                    <input class="form-control" type="file" id="image" name="image" @error('image') is-invalid @enderror>
                    @error('image ')
                        <p class="text-danger">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            
            <label for="body" class="form-label mt-4">Isi Berita</label>
            @error('body')
                <p class="text-danger">{{ $message }}</p>
            @enderror
            <div>
                <input type="hidden" name="body" class="body" id="body">
                <div id="editor">
            </div>
            </div>
            <!-- Button -->
            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary">Buat</button>
            </div>
        </form><!-- Vertical Form -->
        

    </div>
    </div>
</div>

@endsection

@push('child-scripts')
    <script src="//cdn.quilljs.com/1.3.6/quill.min.js"></script>

    <script>
        var quill = new Quill('#editor', {
        theme: 'snow'
        });
        quill.on('text-change', function(delta, oldDelta, source) {
            document.querySelector("input[name='body']").value = quill.root.innerHTML;
        });
        quill.root.innerHTML = {!! json_encode(old('body')) !!};
    </script>
@endpush