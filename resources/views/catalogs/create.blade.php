@extends('layouts.app')

@section('style')
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
<style>
.form-label.required:after{
    content:" *";
    color:red;
}
</style>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex mb-3">
                        <div class="p-2">
                            <h5 class="card-title"><i class="fa fa-music"></i> Catalog</h5>
                            <h6 class="card-subtitle mb-2 text-muted">Create</h6>
                        </div>
                    </div>
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row">
                        <div class="col-md-3">
                            <img src="https://via.placeholder.com/240" id="preview_image" class="img-thumbnail" alt="...">
                        </div>
                        <div class="col-md-5">
                            <div class="mb-3">
                                <label for="cover_artwork" class="form-label required">Cover Artwork</label>
                                <input type="file" class="form-control" id="cover_artwork">
                            </div>
                            <div class="mb-3">
                                <label for="title" class="form-label required">Title</label>
                                <input type="text" class="form-control" id="title">
                            </div>
                            <div class="mb-3">
                                <label for="gendre" class="form-label required">Gendre</label>
                                <input type="text" class="form-control" id="gendre">
                            </div>
                            <div class="mb-3">
                                <label for="sub_gendre" class="form-label required">Sub Gendre</label>
                                <input type="text" class="form-control" id="sub_gendre">
                            </div>
                            <div class="mb-3">
                                <label for="record_label" class="form-label required">Record Label</label>
                                <input type="text" class="form-control" id="record_label">
                            </div>
                            <div class="mb-3">
                                <label for="produced_by" class="form-label">Produced By</label>
                                <input type="text" class="form-control" id="produced_by">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="mb-3">
                                <label for="produced_by" class="form-label required">Production Year</label>
                                <input type="number" class="form-control" id="production_year">
                            </div>
                            <div class="mb-3">
                                <label for="first_release_date" class="form-label required">First Release Date</label>
                                <input type="date" class="form-control" id="first_release_date">
                            </div>
                            <div class="mb-3">
                                <label for="release_date" class="form-label required">Release Date</label>
                                <input type="date" class="form-control" id="release_date">
                            </div>
                            <div class="mb-3">
                                <label for="lyric_language" class="form-label required">Lyric Language</label>
                                <input type="text" class="form-control" id="lyric_language">
                            </div>
                            <div class="mb-3">
                                <label for="lyric_url" class="form-label">Lyric Url</label>
                                <input type="file" class="form-control" id="lyric_url">
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description</label>
                                <textarea name="" id="description" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-primary" id="add_audio"><i class="fa fa-plus"></i> New audio</button>
                            <table class="table table-bordered mt-3">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        <th>Artist Name</th>
                                        <th>Composer</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody id="trackTableBody">

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>
<script>
cover_artwork.onchange = evt => {
  const [file] = cover_artwork.files
  if (file) {
    preview_image.src = URL.createObjectURL(file)
  }
}

$('#add_audio').on('click', function(){
    $('#trackTableBody').append(`<tr>
                                        <td><input type="file" class="audio-file"></td>
                                        <td><input type="text" class="form-control" placeholder="Artist Name"></td>
                                        <td><input type="text" class="form-control" placeholder="Composer"></td>
                                        <td><button class="btn btn-danger delete-track-row"><i class="fa fa-trash"></i></button></td>
                                    </tr>`)
})

$("body").on('click','.delete-track-row',function(e){
    let parent = $(this).parents('tr').eq(0);
    parent.remove()
    // console.log(parent);
})

</script>
@endsection
