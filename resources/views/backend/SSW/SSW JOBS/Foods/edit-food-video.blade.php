@extends('backend.layout.masters')
@section('title', 'Edit Food Video')
@section('content')
    @if(session()->get('success'))
        <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
            <span><b> Success - </b> {{session()->get('success')}}</span>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <p style="font-size: 30px; font-weight: bold;">JFT - Edit Food Video</p>
    <form class="row g-3" method="post" action="{{route('edit-food-video')}}"  enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="food_video_id" name="food_video_id" value="{{ $food_videos->id }}">
        <div class="col-md-6">
            <label for="inputName5" class="form-label">Food Video Link</label>
            <input type="text" class="form-control" id="inputName5" name="food_video" placeholder="Food Video Link" value="{{$food_videos->food_video}}" required>
        </div>
        <div class="col-md-6">
            <label for="inputName5" class="form-label">Food Video Name</label>
            <input type="text" class="form-control" id="inputName5" name="food_video_name" placeholder="Food Video Name" value="{{$food_videos->food_video_name}}" required>
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

