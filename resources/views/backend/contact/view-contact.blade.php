@extends('backend.layout.masters')
@section('title', 'Dashboard')
@section('content')
    <!-- Multi Columns Form -->
    <p style="font-size: 30px; font-weight: bold;">Contacts - View Contacts</p>
    <form class="row g-3" method="post" action="#">
        <div class="col-md-6">
            <label for="inputName5" class="form-label">Name</label>
            <input type="text" class="form-control" id="inputName5" placeholder="Paper Title">
        </div>
        <div class="col-md-6">
            <label for="inputName5" class="form-label">Email</label>
            <input type="text" class="form-control" id="inputName5" placeholder="Level">
        </div>
        <div class="col-md-6">
            <label for="inputName5" class="form-label">Telephone</label>
            <input type="text" class="form-control" id="inputName5" placeholder="Level">
        </div>
        <div class="col-md-12">
            <label for="inputName5" class="form-label">Description</label>
            <textarea class="form-control" placeholder="Description" id="description" name="description" style="height: 100px;">{{$lessons->description}}</textarea>
        </div>
        <div class="col-md-6">
            <label for="inputName5" class="form-label">Phone</label>
            <input type="text" class="form-control" id="inputName5" placeholder="Level">
        </div>
        <div class="col-md-12">
            <label for="inputPassword" class="col-sm-2 col-form-label">Message</label>
            <div class="col-sm-10">
                <textarea class="form-control" style="height: 100px"></textarea>
            </div>
        </div>
    </form><!-- End Multi Columns Form -->
    </div>
    </div>
@endsection



