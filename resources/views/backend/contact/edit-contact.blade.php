@extends('backend.layout.masters')
@section('title', 'Dashboard')
@section('content')
    @if(session()->get('success'))
        <div class="alert alert-success bg-success text-light border-0 alert-dismissible fade show" role="alert">
            <span><b> Success - </b> {{session()->get('success')}}</span>
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    @endif
    <!-- Multi Columns Form -->
    <p style="font-size: 30px; font-weight: bold;">Contacts - Edit Contacts</p>
    <form class="row g-3" method="post" action="#" enctype="multipart/form-data">
        @csrf
        <input type="hidden" id="contact_id" name="contact_id" value="{{$contacts->id }}">
        <div class="col-md-6">
            <label for="inputName5" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Lesson Title" value="{{$contacts->name}}" readonly>
        </div>
        <div class="col-md-6">
            <label for="inputName5" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Level" value="{{$contacts->email}}" readonly>
        </div>
        <div class="col-6">
            <label for="inputAddress2" class="form-label">Telephone</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="Youtube Link" name="telephone" value="{{$contacts->telephone}}" readonly>
        </div>
        <div class="col-6">
            <label for="inputAddress2" class="form-label">Created at</label>
            <input type="text" class="form-control" id="inputAddress2" placeholder="created_at" name="created_at" value="{{$contacts->created_at}}" readonly>
        </div>

        <div class="col-md-12">
            <label for="inputName5" class="form-label">Messsage</label>
            <textarea class="form-control" placeholder="Message" id="description" name="message" style="height: 100px;" readonly>{{$contacts->message}}</textarea>
        </div>
    </form><!-- End Multi Columns Form -->
    </div>
    </div>
    {{--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>--}}
    {{--    <script src="https://code.jquery.com/jquery-3.6.2.slim.js" integrity="sha256-OflJKW8Z8amEUuCaflBZJ4GOg4+JnNh9JdVfoV+6biw=" crossorigin="anonymous"></script>--}}
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>


        $(".alert").fadeTo(2000, 500).slideUp(500, function(){
            $(".alert").slideUp(500);
        });
    </script>




@endsection

