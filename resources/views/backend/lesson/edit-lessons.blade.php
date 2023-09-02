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
    <form class="row g-3" method="post" action="{{route('update-lesson')}}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="lesson_id" name="lesson_id" value="{{ $lessons->id }}">
        <div class="col-md-6">
            <label for="inputName5" class="form-label">Lesson Title</label>
            <input type="text" class="form-control" id="lesson_title" name="lesson_title" placeholder="Lesson Title" value="{{$lessons->lesson_title}}">
        </div>
        <div class="col-md-6">
            <label for="inputName5" class="form-label">Level</label>
            <input type="text" class="form-control" id="level" name="level" placeholder="Level" value="{{$lessons->level}}" readonly>
        </div>
        <div class="col-md-12">
            <label for="inputName5" class="form-label">Description</label>
            <textarea class="form-control" placeholder="Description" id="description" name="description" style="height: 100px;">{{$lessons->description}}</textarea>
        </div>

        <div class="col-md-6">
            <label for="inputNumber" class="form-label">Select Image</label>
            <input type="file" class="form-control" id="lesson_image" name="lesson_image" onchange="uploadFile()" @if ($lessons->lesson_image) @else required @endif />

            <div class="mb-3">
                <div id="new_image_container">
                    @if ($lessons->lesson_image)
                        <img id="img_file_preview" name="lesson_image" class="img-fluid rounded" height="100" width="100" src="{{asset('storage/lessons-image/'.$lessons->lesson_image)}}"></img>

                    @else
                        <img id="img_file_preview" name="lesson_image" class="img-fluid rounded" height="100" width="100" src="#"></img>

                    @endif
                </div>
            </div>
        </div>

{{--
        <div class="col-md-6">
            <label for="inputNumber" class="col-sm-2 col-form-label">Select Image File</label>
            <div class="col-sm-10">
                <input class="form-control" id="lesson_image" name="lesson_image" type="file" id="formFile" value="{{$lessons->lesson_image}}">
                <img id="preview_image" name="lesson_image" class="img-fluid rounded" height="100" width="100" src="{{asset('storage/lessons-image/'.$lessons->lesson_image)}}">
            </div>
        </div> --}}

        <div class="col-md-6">
            <label for="inputNumber" class="form-label">Select PDF</label>
            <input type="file" class="form-control" id="pdf_file" name="pdf_file" onchange="uploadFile_2()" @if ($lessons->pdf_file) @else required @endif />

            <div class="mb-3">
                <div id="new_image_container">
                    @if ($lessons->pdf_file)
                        <iframe id="pdf_file_preview" name="pdf_file" class="img-fluid rounded" height="100" width="100" src="{{asset('storage/lessons-pdf/'.$lessons->pdf_file)}}"></iframe>

                    @else
                        <iframe id="pdf_file_preview" name="pdf_file" class="img-fluid rounded" height="100" width="100" src="#"></iframe>

                    @endif
                </div>
            </div>
        </div>


        {{-- <div class="col-md-6">
            <label for="inputNumber" class="col-sm-2 col-form-label">Select PDF File</label>
            <div class="col-sm-10">
                <input class="form-control" id="lessons_pdf" name="pdf_file" type="file" value="{{$lessons->pdf_file}}">
                <iframe id="preview_pdf" name="pdf_file" class="img-fluid rounded" height="100" width="100" src="{{asset('storage/lessons-pdf/'.$lessons->pdf_file)}}"></iframe>
            </div>
        </div> --}}

        <div class="col-12">
            <label for="inputAddress2" class="form-label">Youtube Link</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Youtube Link" name="youtube_video_link" value="{{$lessons->youtube_video_link}}">
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
                function uploadFile() {
            var img_preview = document.getElementById("img_file_preview");
            var file = document.querySelector("input[type=file]").files[0];

            var reader = new FileReader();
            reader.onloadend = function () {
                img_preview.src = reader.result;
                document.getElementById("base64").value = reader.result;
            };

            if (file) {
                reader.readAsDataURL(file);

            } else {
                img_preview.src = "";

            }
        }

        function uploadFile_2() {
            var pdf_file_preview = document.getElementById("pdf_file_preview");
            var file = document.querySelector("input[type=file]").files[0];

            var reader = new FileReader();
            reader.onloadend = function () {
                pdf_file_preview.src = reader.result;
                document.getElementById("base64").value = reader.result;
            };

            if (file) {
                reader.readAsDataURL(file);

            } else {
                pdf_file_preview.src = "";

            }
        }

        $(document).ready(function(e) {
            $('#lesson_image').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#preview_image').attr('src', e.target.result);
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
    </script>
@endsection

