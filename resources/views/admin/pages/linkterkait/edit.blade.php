<?php $page = 'add-user'; ?>
@extends('layout.mainlayout_admin')
@section('content')
    <div class="page-wrapper">
        <div class="content">
            <form action="{{ url('admin/linkterkait/'. $data->id) }}" method="post" enctype="multipart/form-data">
                @csrf @method('put')
                <div class="row">
                    <div class="col-lg-7 col-sm-12 m-auto">

                        @component('admin.components.addpageheader')
                            @slot('addtitle')
                                Edit Link Terkait
                            @endslot
                        @endcomponent

                        <div class="row">

                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>File*</label>
                                    <video  id="videoPreview"  controls  style=" width: 100%; border-radius: 10px; max-height: 500px; object-fit: cover;" controls>
                                        <source src="{{ $data->url_file }}" type="video/mp4" >
                                        Your browser does not support the video tag.
                                    </video>
                             
                                    <img id="imagePreview" class="my-3" src="{{ $data->url_file }}" alt="Image Preview"
                                        style="width: 100%; border-radius: 10px; max-height: 500px; object-fit: cover;">
                                    <input id="imageInput" type="file" name="file" placeholder="Change Image"
                                        class="d-flex py-2 form-control">
                                    @error('url_file')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Title*</label>
                                    <input value="{{ $data->title }}" type="text" class="form-control" name="title" placeholder="Enter Title ">
                                    @error('title')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Link URL*</label>
                                    <input value="{{ $data->detail }}" type="text" class="form-control" name="detail" placeholder="Enter Title ">
                                    @error('detail')
                                        <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        
                            <div class="col-lg-12">
                                <div class="btn-path">
                                    <a href="{{ url('admin/linkterkait') }}" class="btn btn-cancel me-3">Cancel</a>
                                    <button type="submit" class="btn btn-primary "> Save </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            let fileInput = document.getElementById('imageInput');
            let imagePreview = document.getElementById('imagePreview');
            let videoPreview = document.getElementById('videoPreview');
            if (imagePreview.src.toLowerCase().endsWith('.mp4?alt=media')) {
                videoPreview.style.display = 'block';
                videoPreview.style.marginBottom = '30px';
                imagePreview.style.display = 'none';
            } else {
                videoPreview.style.display = 'none';
                imagePreview.style.display = 'block';
            }
           
            fileInput.addEventListener('change', function() {
                if (this.files && this.files[0]) {
                    let reader = new FileReader();
    
                    reader.onload = function(e) {
                        if (fileInput.files[0].type.includes('video')) {
                            imagePreview.style.display = 'none';
                            videoPreview.src = e.target.result;
                            videoPreview.style.display = 'block';
                        } else if (fileInput.files[0].type.includes('image')) {
                            videoPreview.style.display = 'none';
                            imagePreview.src = e.target.result;
                            imagePreview.style.display = 'block';
                        }
                    };
    
                    reader.readAsDataURL(this.files[0]); // convert to base64 string
                }
            });
        });
    </script>
@endsection
