@extends('backend.layout.masters')
@section('title', 'Edit Agriculture Video')
@section('content')
    @if(session()->get('success'))
        <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
            <span><b> Success - </b> {{session()->get('success')}}</span>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <p style="font-size: 30px; font-weight: bold;">SSW - Edit Agriculture Video</p>
    <form class="row g-3" method="post" action="{{(route('edit-agriculture-video'))}}"  enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="food_video_id" name="agriculture_video_id" value="{{ $agriculture_videos->id }}">
        <div class="col-md-6">
            <label for="inputName5" class="form-label">Food Video Link</label>
            <input type="text" class="form-control" id="inputName5" name="agri_video_link" placeholder="Agriculture Video Link" value="{{$agriculture_videos->agri_video_link}}" required>
        </div>
        <div class="col-md-6">
            <label for="inputName5" class="form-label">Food Video Name</label>
            <input type="text" class="form-control" id="inputName5" name="agri_video_name" placeholder="Agriculture Video Name" value="{{$agriculture_videos->agri_video_name}}" required>
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


