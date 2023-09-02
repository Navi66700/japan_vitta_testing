@extends('layout.masters')
@section('title', 'Caregivers')
@section('content')
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet"/>
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet"/>
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.0.1/mdb.min.css" rel="stylesheet"/>

    <div class="container-fluid contact" data-section="section6">
        <br><br><br><br><br><br>
        <center>
            <h1 style="color: aliceblue;">Caregivers</h1>
        </center>
        <div class="text-center container py-5">
            <div class="row">
                @foreach($caregivers as $caregiver)
                    <div class="col-lg-4 col-md-4 mb-4">
                        <div class="card">
                            <div class="bg-image hover-zoom ripple" data-mdb-ripple-color="light">
                                <img src="{{asset('storage/caregiver-image/'.$caregiver->care_image)}}" class="w-100" />
                                <a href="#!">
                                    <div class="mask">
                                    </div>
                                    <div class="hover-overlay">
                                        <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="card-body">
                                <a href="" class="text-reset">
                                    <h5 class="card-title mb-3">{{$caregiver->caregiver_title}}</h5>
                                </a>
                                <a rel="nofollow" class="btn btn-warning" href="{{url('/care-pdf-download', $caregiver->id)}}">Download Lesson</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
            <div class="text-center container py-5">
                <div class="row">
                    @foreach($caregiver_videos as $caregiver_video)
                        <div class="col-lg-4 col-md-4 mb-4">
                            <div class="card">
                                <div class="card-body">
                                    <article class="video-item">
                                        <figure>
                                            <div class="video-container">
                                                <iframe
                                                    src="{{$caregiver_video->caregiver_video_link}}"
                                                    frameborder="0"
                                                    allow="accelerometer; autoplay; encrypted-media; gyroscope;"
                                                    allowfullscreen></iframe>
                                            </div>
                                        </figure>
                                    </article>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

