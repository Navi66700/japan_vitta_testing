@extends('backend.layout.masters')
@section('title', 'Dashboard')
@section('content')
    <!-- Multi Columns Form -->
    @if(session()->get('success'))
        <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
            <span><b> Success - </b> {{session()->get('success')}}</span>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <p style="font-size: 30px; font-weight: bold;">Past Papers - Add Past Paper</p>
    <form class="row g-3" method="post" action="{{route('create-papers')}}"  enctype="multipart/form-data">
        @csrf
        <div class="col-md-6">
            <label for="inputName5" class="form-label">Paper Title</label>
            <input type="text" class="form-control" id="inputName5" name="paper_title" placeholder="Paper Title" required>
        </div>
        <div class="col-md-6">
            <label for="inputState" class="form-label">Select Level</label>
            <select id="inputState" class="form-select" name="level" required>
                <option selected disabled>---Please Select---</option>
                <option>N5</option>
                <option>N4</option>
                <option>N3</option>
                <option>N2</option>
                <option>N1</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputNumber" class="col-sm-2 col-form-label">Select PDF</label>
            <div class="col-sm-10">
                <input class="form-control" type="file"  id="pdfFile" name="pdf_file" required>
            </div>
        </div>
        <div class="col-md-6">
            <label for="inputName5" class="form-label">Youtube Link</label>
            <input type="text" class="form-control" id="youtube_link" name="youtube_link" placeholder="Paper Title" required>
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

