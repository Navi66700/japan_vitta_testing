@extends('backend.layout.masters')
@section('title', 'Edit Lesson')
@section('content')
    @if(session()->get('success'))
        <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
            <span><b> Success - </b> {{session()->get('success')}}</span>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    @endif
    <!-- Multi Columns Form -->
    <p style="font-size: 30px; font-weight: bold;">Lessons - Edit Lesson</p>
    <form class="row g-3" method="post" action="{{route('update-lesson-n3-n2-n1')}}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="lesson_id" name="lesson_id" value="{{ $lessons_n3_n2_n1->id }}">
        <div class="col-md-6">
            <label for="inputName5" class="form-label">Lesson Title</label>
            <input type="text" class="form-control" id="lesson_title" name="lesson_title" placeholder="Lesson Title" value="{{$lessons_n3_n2_n1->lesson_title}}">
        </div>
        <div class="col-md-6">
            <label for="inputName5" class="form-label">Level</label>
            <input type="text" class="form-control" id="level" name="level" placeholder="Level" value="{{$lessons_n3_n2_n1->level}}" readonly>
        </div>
        <div class="col-md-6">
            <label for="inputNumber" class="col-sm-2 col-form-label">Select Image File</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="lesson_image" name="lesson_image" onchange="uploadFile()" @if ($lessons_n3_n2_n1->lesson_image) @else required @endif />
                <div class="mb-3">
                    <div id="new_image_container">
                        @if ($lessons_n3_n2_n1->lesson_image)
                        <img src="{{asset('storage/lessons-image/'.$lessons_n3_n2_n1->lesson_image)}}" id="lesson_image_preview" name="lesson_image" class="img-fluid rounded" height="100" width="100"></img>
                        @else
                        <img src="#" id="lesson_image_preview" name="lesson_image" class="img-fluid rounded" height="100" width="100"></img>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <label for="inputNumber" class="col-sm-2 col-form-label">Select PDF File</label>
            <div class="col-sm-10">
                <input type="file" class="form-control" id="pdf_file" name="pdf_file" onchange="uploadFile_2()" @if ($lessons_n3_n2_n1->pdf_file) @else required @endif />
                <div class="mb-3">
                    <div id="new_image_container">
                        @if ($lessons_n3_n2_n1->pdf_file)
                        <iframe id="pdf_file_preview" name="pdf_file" class="img-fluid rounded" height="100" width="100" src="{{asset('storage/lessons-pdf/'.$lessons_n3_n2_n1->pdf_file)}}"></iframe>
                        @else
                        <iframe id="pdf_file_preview" name="pdf_file" class="img-fluid rounded" height="100" width="100" src="#"></iframe>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form><!-- End Multi Columns Form -->
    </div>
    </div>
{{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
{{--    <script src="https://code.jquery.com/jquery-3.6.2.slim.js" integrity="sha256-OflJKW8Z8amEUuCaflBZJ4GOg4+JnNh9JdVfoV+6biw=" crossorigin="anonymous"></script>--}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(e) {
            $('#lesson_image').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#lesson_image_preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });

        $(document).ready(function(e) {
            $('#pdf_file').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#pdf_file_preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });

        $(".alert").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert").slideUp(500);
        });


        function uploadFile() {
        var image_preview = document.getElementById("lesson_image_preview");
        var file = document.querySelector("input[type=file]").files[0];

        var reader = new FileReader();
        reader.onloadend = function () {
            image_preview.src = reader.result;
            document.getElementById("base64").value = reader.result;
        };

        if (file) {
            reader.readAsDataURL(file);

        } else {
            image_preview.src = "";

        }
    }

    function uploadFile_2() {
        var pdf_preview = document.getElementById("pdf_file_preview");
        var file = document.querySelector("input[type=file]").files[0];

        var reader = new FileReader();
        reader.onloadend = function () {
            pdf_preview.src = reader.result;
            document.getElementById("base64").value = reader.result;
        };

        if (file) {
            reader.readAsDataURL(file);

        } else {
            pdf_preview.src = "";

        }
    }
    </script>
@endsection

