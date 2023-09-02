@extends('backend.layout.masters')
@section('title', 'Edit Food')
@section('content')
    @if(session()->get('success'))
        <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
            <span><b> Success - </b> {{session()->get('success')}}</span>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <p style="font-size: 30px; font-weight: bold;">Food - Edit Food</p>
    <form class="row g-3" method="post" action="{{route('edit-food')}}"  enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="food_id" name="food_id" value="{{ $foods->id }}">
        <div class="col-md-6">
            <label for="inputName5" class="form-label">Food Title</label>
            <input type="text" class="form-control" id="inputName5" value="{{$foods->food_title}}" name="food_title" placeholder="Food Title" required>
        </div>
        <div class="col-md-6">
            <label for="inputNumber" class="form-label">Select PDF</label>
            <input type="file" class="form-control" id="pdf_file" name="pdf_file" onchange="uploadFile_2()" @if ($foods->pdf_file) @else required @endif />

            <div class="mb-3">
                <div id="new_image_container">
                    @if ($foods->pdf_file)
                        <iframe id="pdf_file_preview" name="pdf_file" class="img-fluid rounded" height="100" width="100" src="{{asset('storage/food-pdf/'.$foods->pdf_file)}}"></iframe>

                    @else
                        <iframe id="pdf_file_preview" name="pdf_file" class="img-fluid rounded" height="100" width="100" src="#"></iframe>

                    @endif
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <label for="inputNumber" class="form-label">Select Food Image</label>
            <input type="file" class="form-control" id="food_image" name="food_image" onchange="uploadFile()" @if ($foods->food_image) @else required @endif />

            <div class="mb-3">
                <div id="new_image_container">
                    @if ($foods->food_image)
                        <img id="food_preview" name="food_image" class="img-fluid rounded" height="100" width="100" src="{{asset('storage/food-image/'.$foods->food_image)}}"></img>

                    @else
                        <img id="food_preview" name="food_image" class="img-fluid rounded" height="100" width="100" src="#"></img>

                    @endif
                </div>
            </div>
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

        function uploadFile() {
            var food_preview = document.getElementById("food_preview");
            var file = document.querySelector("input[type=file]").files[0];

            var reader = new FileReader();
            reader.onloadend = function () {
                food_preview.src = reader.result;
                document.getElementById("base64").value = reader.result;
            };

            if (file) {
                reader.readAsDataURL(file);

            } else {
                food_preview.src = "";

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
            $('#pdf_file').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#pdf_file_preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });


        $(document).ready(function(e) {
            $('#food_image').change(function() {
                let reader = new FileReader();
                reader.onload = (e) => {
                    $('#food_preview').attr('src', e.target.result);
                }
                reader.readAsDataURL(this.files[0]);
            });
        });


    </script>
@endsection

