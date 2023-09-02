@extends('layout.masters')
@section('title', 'About Us')
@section('content')
<div class="container-fluid contact" data-section="section6">
    <br><br><br><br><br><br>
    <center>

        <h1 style="color: aliceblue;">About Us</h1>

    </center>

<style>

    .sig1 {
  font-family: Snell Roundhand, cursive;
  font-size: 1.8em;
}
</style>
    <div class="container">
        <div class="row">
            <!-- <div class="col-md-12">
                <div class="section-heading">
                    <h2>Let’s Keep In Touch</h2>
                </div>
            </div> -->
            <br><br><br><br><br><br><br><br><br>
            <div class="col-md-6">

                <p style="font-size:20px; color:white;line-height: 1.5;text-align: center;  font-family: 'Times New Roman'"; >
                To all of you who are interested in visiting Japan,

                <p style="font-size:20px; color:white;line-height: 1.5; text-align: center;font-family: 'Times New Roman'";>
                This website is designed for people coming to Japan for study, work or tourism.
                Japanese from scratch JLPT / NAT / JLCT / N5 | N4 | N3 | N2 | The Japan Vitta website was created to
                develop listening skills for the Japanese language through more than 1000 PDFs and videos of the
                knowledge required for the N1 level.
                </p>

                <p style="font-size:20px; color:white; line-height: 1.5; text-align: center;font-family: 'Times New Roman'">
                The Japan Vitta website aims to develop Japanese language skills. Vision We strive for equitable access
                to world-class digital learning while building a poverty-free nation with international support and a
                quality lifestyle. The mission is dedicated to transforming the learning and teaching experience through
                the development of free online Japanese education facilities.
                </p>




                <p class="sig1" style="font-size:20px; color:white;line-height: 1.5; text-align: center; font-family: ">
                    Vishwa Madushan Gamage <br>
                    (JAPAN VITTA)
                </p>
            </div>
            <div class="col-md-6">
                <div class="row w-100">
                    <div class="col-md-6">

                    </div>
                     <div class="col-lg-12 my-6">

                        <img src="{{asset('homepage/assets/images/Aboutus.jpg')}}" alt="" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade" class="w-100" height="450" allowfullscreen=""
                        loading="lazy">
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script>
$(".alert").fadeTo(2000, 500).slideUp(500, function() {
    $(".alert").slideUp(500);
});
</script>

@endsection
