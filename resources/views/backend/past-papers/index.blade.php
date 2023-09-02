@extends('backend.layout.masters')
@section('title', 'Dashboard')
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
                <li class="breadcrumb-item">Past Papers</li>
                <li class="breadcrumb-item active">Past Papers</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-header">
                            <h2 class="card-title"> Past Papers</h2>
                            <div class="dt-action-buttons text-right">
                                <a class="btn btn-primary" href="{{url('add-papers')}}"> <i class="bi bi-plus"></i>&nbsp </i>Add Past Paper</a>
                            </div>
                        </div>
                        <!-- Table with stripped rows -->
                        <table class="table datatable">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Level</th>
                                <th scope="col">Paper Title</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Updated At</th>
                                <th scope="col">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($pastPapers as $key=>$pastPaper)
                            <tr>
                                <th scope="row">{{$key +1}}</th>
                                <td>{{$pastPaper->level}}</td>
                                <td>{{$pastPaper->paper_title}}</td>
                                <td>{{$pastPaper->created_at}}</td>
                                <td>{{$pastPaper->updated_at}}</td>
                                <td>
                                    <a href="{{url('/edit-papers', $pastPaper->id)}}" type="button" class="btn btn-success"><i class="bi bi-pencil"></i></a>
                                    <button class="btn btn-danger delete-paper" value="{{$pastPaper->id}}"><i class="bi bi-trash"></i></button>
                                </td>
                            </tr>
                            </tbody>
                            @endforeach
                        </table>
                        <!-- End Table with stripped rows -->
                    </div>
                </div>
            </div>
        </div>
    </section>
{{--    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>--}}
{{--    <script src="https://code.jquery.com/jquery-3.6.2.slim.js" integrity="sha256-OflJKW8Z8amEUuCaflBZJ4GOg4+JnNh9JdVfoV+6biw=" crossorigin="anonymous"></script>--}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>


    <script>
        $(document).ready(function() {

        });

        $('body').on('click', '.delete-paper', function() {
            var PaperID = $(this).val();
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
                    window.location.href = "{{ url('delete-paper') }}/" + PaperID;
                }
            });
        });



        $(".alert").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert").slideUp(500);
        });
    </script>
@endsection



