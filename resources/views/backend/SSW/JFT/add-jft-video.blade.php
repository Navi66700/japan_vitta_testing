@extends('backend.layout.masters')
@section('title', 'Add JFT Video')
@section('content')
    @if(session()->get('success'))
        <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
            <span><b> Success - </b> {{session()->get('success')}}</span>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <p style="font-size: 30px; font-weight: bold;">JFT - Add JFT Video</p>
    <form class="row g-3" method="post" action="{{route('createJftVideo')}}"  enctype="multipart/form-data">
        @csrf
        <div class="col-md-6">
            <label for="inputName5" class="form-label">JFT Video Link</label>
            <input type="text" class="form-control" id="inputName5" name="jft_video_link" placeholder="JFT Video Link" required>
        </div>
        <div class="col-md-6">
            <label for="inputName5" class="form-label">JFT Video Name</label>
            <input type="text" class="form-control" id="inputName5" name="jft_video_name" placeholder="JFT Video Name" required>
        </div>

        <div class="text-center">
            <button type="submit" class="btn btn-success">Create</button>
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

