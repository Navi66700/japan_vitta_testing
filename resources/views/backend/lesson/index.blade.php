@extends('backend.layout.masters')
@section('title', 'Lessons')
@section('content')
    @if(session()->get('success'))
        <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
            <span><b> Success - </b> {{session()->get('success')}}</span>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <div class="pagetitle">
        <h1>Data Tables</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Lessons</li>
                <li class="breadcrumb-item active">Lessons</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
{{--    @include('sweetalert::alert')--}}
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h2 class="card-title"> Lessons</h2>

                        </div>

                           <!-- Default Tabs -->
              <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">N5/N4</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">N3/N2/N1</button>
                </li>
              </ul>
              <div class="tab-content pt-2" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <br>
                          <div class="dt-action-buttons text-right">
                                <a class="btn btn-primary" href="{{route('add-lesson')}}"> <i class="bi bi-plus"></i>&nbsp </i>Add Lesson</a>
                            </div>
                            <br>

                        <!-- Table with stripped rows -->

                        <table class="table datatable">

                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">image</th>
                                <th scope="col">Level</th>
                                <th scope="col">Lesson Title</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Updated At</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($lessons as $key=>$lesson)
                            <tr>
                                <th scope="row">{{$key +1}}</th>
                                <td>
                                    <img src="{{asset('storage/lessons-image/'.$lesson->lesson_image)}}" class="rounded" style="height: 80px; width: 100px;">
                                </td>
                                <td>{{$lesson->level}}</td>
                                <td>{{$lesson->lesson_title}}</td>
                                <td>{{$lesson->created_at}}</td>
                                <td>{{$lesson->updated_at}}</td>
                                <td>
                                    <a href="{{url('/edit-lesson', $lesson->id)}}" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                    <button class="btn btn-danger delete-lesson" value="{{$lesson->id}}"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            </tbody>
                            @endforeach
                        </table>
                        <!-- End Table with stripped rows -->
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                      <!-- Pills Tabs -->
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">N3/N2/N1 Lessons</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">N3/N2/N1 Lessons Videos</button>
                </li>

              </ul>
              <div class="tab-content pt-2" id="myTabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="home-tab">

                              <br>
                          <div class="dt-action-buttons text-right">
                                <a class="btn btn-primary" href="{{route('add-lessons-N3-N2-N1')}}"> <i class="bi bi-plus"></i>&nbsp </i>Add Lesson N3/N2/N1</a>
                            </div>
                            <br>

                        <!-- Table with stripped rows -->

                        <table class="table datatable">

                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">image</th>
                                <th scope="col">Level</th>
                                <th scope="col">Lesson Title</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Updated At</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($lessons_n3_n2_n1 as $key=>$lesson_n3_n2_n1)
                            <tr>
                                <th scope="row">{{$key +1}}</th>
                                <td>
                                    <img src="{{asset('storage/lessons-image/'.$lesson_n3_n2_n1->lesson_image)}}" class="rounded" style="height: 80px; width: 100px;">
                                </td>
                                <td>{{$lesson_n3_n2_n1->level}}</td>
                                <td>{{$lesson_n3_n2_n1->lesson_title}}</td>
                                <td>{{$lesson_n3_n2_n1->created_at}}</td>
                                <td>{{$lesson_n3_n2_n1->updated_at}}</td>
                                <td>
                                    <a href="{{url('/edit-lesson-N3-N2-N1', $lesson_n3_n2_n1->id)}}" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                    <button class="btn btn-danger delete-lesson-n3-n2-n1" value="{{$lesson_n3_n2_n1->id}}"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            </tbody>
                            @endforeach
                        </table>
                        <!-- End Table with stripped rows -->
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="profile-tab">

                              <br>
                          <div class="dt-action-buttons text-right">
                                <a class="btn btn-primary" href="{{route('add-lessons-video-N3-N2-N1')}}"> <i class="bi bi-plus"></i>&nbsp </i>Add Lesson Videos N3/N2/N1</a>
                            </div>
                            <br>

                        <!-- Table with stripped rows -->

                        <table class="table datatable">

                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Video Title</th>
                                <th scope="col">Video Link</th>
                                <th scope="col">Level</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Updated At</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($lessons_video_n1_n2_n3 as $key=>$lesson_video_n1_n2_n3)
                            <tr>
                                <th scope="row">{{$key +1}}</th>
                                <td>{{$lesson_video_n1_n2_n3->video_title}}</td>
                                <td>{{$lesson_video_n1_n2_n3->video_link}}</td>
                                <td>{{$lesson_video_n1_n2_n3->level}}</td>
                                <td>{{$lesson_video_n1_n2_n3->created_at}}</td>
                                <td>{{$lesson_video_n1_n2_n3->updated_at}}</td>
                                <td>
                                    <a href="{{url('/edit-lesson-video-n1-n2-n3', $lesson_video_n1_n2_n3->id)}}" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                    <button class="btn btn-danger delete-lesson-video-n1-n2-n3" value="{{$lesson_video_n1_n2_n3->id}}"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            </tbody>
                            @endforeach
                        </table>
                        <!-- End Table with stripped rows -->
                </div>

              </div><!-- End Pills Tabs -->

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

        $('body').on('click', '.delete-lesson', function() {
            var LessonID = $(this).val();
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
                    window.location.href = "{{ url('delete-lesson') }}/" + LessonID;
                }
            });
        });


        $('body').on('click', '.delete-lesson-n3-n2-n1', function() {
            var LessonID = $(this).val();
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
                    window.location.href = "{{ url('delete-lesson-n1-n2-n3') }}/" + LessonID;
                }
            });
        });

        $('body').on('click', '.delete-lesson-video-n1-n2-n3', function() {
            var LessonVideoID = $(this).val();
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
                    window.location.href = "{{ url('delete-lesson-video-n1-n2-n3') }}/" + LessonVideoID;
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


