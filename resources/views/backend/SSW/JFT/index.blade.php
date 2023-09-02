@extends('backend.layout.masters')
@section('title', 'JFT')
@section('content')
    @if(session()->get('success'))
        <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
            <span><b> Success - </b> {{session()->get('success')}}</span>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="pagetitle">
        <h1>SSW</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">SSW</li>
                <li class="breadcrumb-item active">JFT</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h2 class="card-title"> JFT</h2>
                        </div>
                           <!-- Default Tabs -->
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">JFT</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">JFT Video</button>
                </li>

              </ul>
              <div class="tab-content pt-2" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <br>
                    <div class="dt-action-buttons text-right">
                        <a class="btn btn-primary" href="{{route('add-jft')}}"> <i class="bi bi-plus"></i>&nbsp </i>Add JFT</a>
                    </div>
                    <br>
                   <!-- Table with stripped rows -->
                   <div class="table-responsive">
                    <table class="table datatable table-responsive">

                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">JFT Lesson Image</th>
                            <th scope="col">JFT Title</th>
                            <th scope="col">PDF File</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Updated At</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($jfts as $key=>$jft)
                        <tr>
                            <th scope="row">{{$key +1}}</th>
                            <td>
                                <img src="{{asset('storage/jft-lessons-image/'.$jft->jft_lesson_image)}}" class="rounded" style="height: 80px; width: 100px;">
                            </td>
                            <td>{{$jft->pdf_name}}</td>
                            <td>{{$jft->pdf_file}}</td>
                            <td>{{$jft->created_at}}</td>
                            <td>{{$jft->updated_at}}</td>
                            <td>
                                <a href="{{url('/edit-jft', $jft->id)}}" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                <button class="btn btn-danger delete-jft" value="{{$jft->id}}"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
                    <!-- End Table with stripped rows -->
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                    <br>
                    <div class="dt-action-buttons text-right">
                        <a class="btn btn-primary" href="{{route('add-jft-video')}}"> <i class="bi bi-plus"></i>&nbsp </i>Add JFT Video</a>
                    </div>
                    <br>

                   <!-- Table with stripped rows -->
                   <div class="table-responsive">
                    <table class="table datatable table-responsive">

                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">JFT Video Link</th>
                            <th scope="col">JFT Video Name</th>
                            <th scope="col">Created At</th>
                            <th scope="col">Updated At</th>
                            <th scope="col">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($jft_videos as $key=>$jft_video)
                        <tr>
                            <th scope="row">{{$key +1}}</th>
                            {{-- <td>
                                <img src="{{asset('storage/lessons-image/'.$lesson->lesson_image)}}" class="rounded" style="height: 80px; width: 100px;">
                            </td> --}}
                            <td>{{$jft_video->jft_video_link}}</td>
                            <td>{{$jft_video->jft_video_name}}</td>
                            <td>{{$jft_video->created_at}}</td>
                            <td>{{$jft_video->updated_at}}</td>
                            <td>
                                <a href="{{url('/update-jft-video', $jft_video->id)}}" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                <button class="btn btn-danger delete-jft-video" value="{{$jft_video->id}}"><i class="bi bi-trash"></i></button>
                            </td>
                        </tr>
                        </tbody>
                        @endforeach
                    </table>
                </div>
                    <!-- End Table with stripped rows -->
                </div>
              </div><!-- End Default Tabs -->
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>--}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
{{--    <script src="https://code.jquery.com/jquery-3.6.2.slim.js" integrity="sha256-OflJKW8Z8amEUuCaflBZJ4GOg4+JnNh9JdVfoV+6biw=" crossorigin="anonymous"></script>--}}
{{--    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>--}}
    <script>
        $(document).ready(function() {

        });

        $('body').on('click', '.delete-jft-video', function() {
            var JftVideoID = $(this).val();
            Swal.fire({
                title: 'Are you sure?',
                text: "You can change this later.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, Delete it',
                customClass: {
                    confirmButton: 'btn btn-danger',
                    cancelButton: 'btn btn-outline-danger ml-1'
                },
                buttonsStyling: false
            }).then(function(result) {
                console.log(result);
                if (result.value) {
                    window.location.href = "{{ url('delete-jft-video') }}/" + JftVideoID;
                }
            });
        });

        $('body').on('click', '.delete-jft', function() {
            var JftID = $(this).val();
            Swal.fire({
                title: 'Are you sure?',
                text: "You can change this later.",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, Delete it',
                customClass: {
                    confirmButton: 'btn btn-danger',
                    cancelButton: 'btn btn-outline-danger ml-1'
                },
                buttonsStyling: false
            }).then(function(result) {
                console.log(result);
                if (result.value) {
                    window.location.href = "{{ url('delete-jft') }}/" + JftID;
                }
            });
        });


        // $('body').on('click', '.delete-lesson', function() {
        //     var LessonID = $(this).val();
        //     swal({
        //         title: "Are you sure?",
        //         text: "Once deleted, you will not be able to recover this imaginary file!",
        //         icon: "warning",
        //         buttons: true,
        //         dangerMode: true,
        //     })
        //         .then((willDelete) => {
        //             if (willDelete) {
        //                 window.location = "/delete-lesson/" + LessonID;
        //                 swal("Poof! Your imaginary file has been deleted!", {
        //                     icon: "success",
        //
        //                 });
        //             } else {
        //                 swal("Your imaginary file is safe!");
        //             }
        //
        //         });
        // });

        $(".alert").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert").slideUp(500);
        });
    </script>
@endsection


