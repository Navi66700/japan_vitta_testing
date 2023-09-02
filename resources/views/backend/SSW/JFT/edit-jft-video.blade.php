@extends('backend.layout.masters')
@section('title', 'Edit JFT Video')
@section('content')
    @if(session()->get('success'))
        <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
            <span><b> Success - </b> {{session()->get('success')}}</span>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <p style="font-size: 30px; font-weight: bold;">JFT - Edit JFT Video</p>
    <form class="row g-3" method="post" action="{{route('edit-jft-video')}}"  enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="jft_video_id" name="jft_video_id" value="{{ $jft_videos->id }}">
        <div class="col-md-6">
            <label for="inputName5" class="form-label">JFT Video Link</label>
            <input type="text" class="form-control" id="inputName5" name="jft_video_link" placeholder="JFT Video Link" value="{{$jft_videos->jft_video_link}}" required>
        </div>
        <div class="col-md-6">
            <label for="inputName5" class="form-label">JFT Video Name</label>
            <input type="text" class="form-control" id="inputName5" name="jft_video_name" placeholder="JFT Video Name" value="{{$jft_videos->jft_video_name}}" required>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-success">Update</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
    </form><!-- End Multi Columns Form -->
    </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(".alert").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert").slideUp(500);
        });
    </script>
@endsection

