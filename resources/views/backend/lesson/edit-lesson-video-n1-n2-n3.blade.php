@extends('backend.layout.masters')
@section('title', 'Edit Lesson Videos')
@section('content')
    @if(session()->get('success'))
        <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
            <span><b> Success - </b> {{session()->get('success')}}</span>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <!-- Multi Columns Form -->
    <p style="font-size: 30px; font-weight: bold;">Lessons - Add Lesson Videos</p>
    <form class="row g-3" method="post" action="{{route('update-lesson-video-n1-n2-n3')}}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="lesson_video_id" name="lesson_video_id" value="{{ $lessons_video_n3_n2_n1->id }}">
        <div class="col-md-6">
            <label for="inputName5" class="form-label">Lesson Video Title</label>
            <input type="text" class="form-control" id="video_title" name="video_title" value="{{$lessons_video_n3_n2_n1->video_title}}" placeholder="Lesson Video Title" required>
        </div>
        <div class="col-md-6">
            <label for="inputName5" class="form-label">Lesson Video Link</label>
            <input type="text" class="form-control" id="video_link" name="video_link" value="{{$lessons_video_n3_n2_n1->video_link}}" placeholder="Lesson Video Link" required>
        </div>
        <div class="col-md-6">
            <label for="inputName5" class="form-label">Level</label>
            <input type="text" class="form-control" id="level" name="level" value="{{$lessons_video_n3_n2_n1->level}}" placeholder="Level" readonly>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-success">Update</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </div>
    </form><!-- End Multi Columns Form -->
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
{{--    <script src="https://code.jquery.com/jquery-3.6.2.slim.js" integrity="sha256-OflJKW8Z8amEUuCaflBZJ4GOg4+JnNh9JdVfoV+6biw=" crossorigin="anonymous"></script>--}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(e) {
            $('#image').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#lesson_image').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });

        $(".alert").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert").slideUp(500);
        });
    </script>
@endsection

