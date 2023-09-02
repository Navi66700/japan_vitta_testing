@extends('layout.masters')
@section('title', 'Home')
@section('content')
<div class="container-fluid">
<!-- ***** Main Banner Area Start ***** -->
    <div class="row row-cols-1 row-cols-md main-banner">
{{--    <video autoplay muted loop id="bg-video">--}}
{{--        <source src="assets/images/course-video.mp4" type="video/mp4" />--}}
{{--    </video>--}}
        <div
            class="bg-image"
            style="
    background-image: url('{{asset('homepage/assets/images/japan-b-i.jpeg')}}');
    height: 100vh;
  "></div>
    <div class="video-overlay header-text">
        <div class="caption">
            <h6>Japan is not a Dream Anymore </h6>
            <h2><em>Japan</em> Vitta</h2>

        </div>
    </div>
    </div>

<!-- ***** Main Banner Area End ***** -->
    <div class="row row-cols-1 row-cols-md features">
        <div class="row">
            <div class="col-lg-4 col-12">
                <div class="features-post">
                    <div class="features-content">
                        <div class="content-show">
                            <h4><i class="fa fa-pencil"></i>Lessons</h4>
                        </div>
                        <div class="content-hide">
                            <p>JLPT / NAT / JLCT / N5 | N4 | N3 | N2 | N1 'PDF' and videos of lessons required for exam levels</p>
{{--                            <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>--}}
{{--                            <div class="scroll-to-section"><a href="#section2">More Info.</a></div>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="features-post second-features">
                    <div class="features-content">
                        <div class="content-show">
                            <h4><i class="fa fa-graduation-cap"></i>Past Papers</h4>
                        </div>
                        <div class="content-hide">
                            <p>JLPT / NAT / JLCT / N5 | N4 | N3 | N2 | N1 'PDF' and Videos of
                                previous and guessed question papers required for exam levels</p>
{{--                            <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>--}}
{{--                            <div class="scroll-to-section"><a href="#section3">Details</a></div>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="features-post third-features">
                    <div class="features-content">
                        <div class="content-show">
                            <h4><i class="fa fa-book"></i>SSW</h4>
                        </div>
                        <div class="content-hide">
                            <p>PDF and Videos of Lessons related to Employment Exams and JFT Exams available under SSW Visa</p>
{{--                            <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet.</p>--}}
{{--                            <div class="scroll-to-section"><a href="#section4">Read More</a></div>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



{{--    <div class="row row-cols-1 row-cols-md why-us" data-section="section2">--}}
{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="section-heading">--}}
{{--                    <h2>Why choose Grad School?</h2>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-12">--}}
{{--                <div id='tabs'>--}}
{{--                    <ul>--}}
{{--                        <li><a href='#tabs-1'>Best Education</a></li>--}}
{{--                        <li><a href='#tabs-2'>Top Management</a></li>--}}
{{--                        <li><a href='#tabs-3'>Quality Meeting</a></li>--}}
{{--                    </ul>--}}
{{--                    <section class='tabs-content'>--}}
{{--                        <article id='tabs-1'>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <img src="{{asset('homepage/assets/images/choose-us-image-01.png')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <h4>Best Education</h4>--}}
{{--                                    <p>Grad School is free educational HTML template with Bootstrap 4.5.2 CSS layout. Feel free to use it for educational or commercial purposes. You may want to make <a href="https://paypal.me/templatemo" target="_parent" rel="sponsored">a little donation</a> to TemplateMo. Please tell your friends about us. Thank you.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </article>--}}
{{--                        <article id='tabs-2'>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <img src="{{asset('homepage/assets/images/choose-us-image-02.png')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <h4>Top Level</h4>--}}
{{--                                    <p>You can modify this HTML layout by editing contents and adding more pages as you needed. Since this template has options to add dropdown menus, you can put many HTML pages.</p>--}}
{{--                                    <p>Suspendisse tincidunt, magna ut finibus rutrum, libero dolor euismod odio, nec interdum quam felis non ante.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </article>--}}
{{--                        <article id='tabs-3'>--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <img src="{{asset('homepage/assets/images/choose-us-image-03.png')}}" alt="">--}}
{{--                                </div>--}}
{{--                                <div class="col-md-6">--}}
{{--                                    <h4>Quality Meeting</h4>--}}
{{--                                    <p>You are NOT allowed to redistribute this template ZIP file on any template collection website. However, you can use this template to convert into a specific theme for any kind of CMS platform such as WordPress. For more information, you shall <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact TemplateMo</a> now.</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </article>--}}
{{--                    </section>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}



    <div class="row row-cols-1 row-cols-md-5 g-4 courses" data-section="section4" id="levels">
        <div class="col-md-12">
            <div class="section-heading">
                <h2>All JLPT / JLCT / NAT Levels</h2>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="{{ asset('homepage/assets/images/n5.jpeg') }}" class="card-img-top"
                     alt="Skyscrapers" />
                <div class="card-body">

                    <center>
                        <h5 class="card-title">N5</h5>
                        <a href="{{route('view-level-5')}}" type="button" class="btn btn-warning">View Syllabus</a>
                    </center>
                </div>
                <div class="card-footer">
                    {{-- <small class="text-muted">Last updated 3 mins ago</small> --}}
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card h-100">
                <img src="{{asset('homepage/assets/images/n4.jpeg')}}" class="card-img-top"
                     alt="Skyscrapers" />
                <div class="card-body">

                    <center>
                        <h5 class="card-title">N4</h5>
                        <a href="{{route('view-level-4')}}" type="button" class="btn btn-warning">View Syllabus</a>
                    </center>
                </div>
                <div class="card-footer">
                    {{-- <small class="text-muted">Past Papers Also Included</small> --}}
                </div>
            </div>
        </div>      <div class="col">
            <div class="card h-100">
                <img src="{{ asset('homepage/assets/images/n3.jpeg') }}" class="card-img-top"
                     alt="Skyscrapers" />
                <div class="card-body">

                    <center>
                        <h5 class="card-title">N3</h5>
                        <a href="{{route('view-level-3')}}" type="button" class="btn btn-warning">View Syllabus</a>
                    </center>
                </div>
                <div class="card-footer">
                    {{-- <small class="text-muted">Last updated 3 mins ago</small> --}}
                </div>
            </div>
        </div>      <div class="col">
            <div class="card h-100">
                <img src="{{ asset('homepage/assets/images/n2.jpeg') }}" class="card-img-top"
                     alt="Skyscrapers" />
                <div class="card-body">

                    <center>
                        <h5 class="card-title">N2</h5>
                        <a href="{{route('view-level-2')}}" type="button" class="btn btn-warning">View Syllabus</a>
                    </center>
                </div>
                <div class="card-footer">
                    {{-- <small class="text-muted">Last updated 3 mins ago</small> --}}
                </div>
            </div>
        </div>      <div class="col">
            <div class="card h-100">
                <img src="{{ asset('homepage/assets/images/n1.jpeg') }}" class="card-img-top"
                     alt="Skyscrapers" />
                <div class="card-body">

                    <center>
                        <h5 class="card-title">N1</h5>
                        <a href="{{route('view-level-1')}}" class="btn btn-warning">View Syllabus</a>
                    </center>
                </div>
                <div class="card-footer">
                    {{-- <small class="text-muted">Last updated 3 mins ago</small> --}}
                </div>
            </div>
        </div>
    </div>

{{--    <div class="row row-cols-1 row-cols-md courses" data-section="section4">--}}
{{--        <div class="container-fluid">--}}
{{--            <div class="row">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="section-heading">--}}
{{--                        <h2>Letest News</h2>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="owl-carousel owl-theme">--}}
{{--                    <div class="item">--}}
{{--                        <img src="{{asset('homepage/assets/images/courses-01.jpg')}}" alt="Course #1">--}}
{{--                        <div class="down-content">--}}
{{--                            <h4>Digital Marketing</h4>--}}
{{--                            <p>You can get free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>--}}
{{--                            <div class="author-image">--}}
{{--                                <img src="{{asset('homepage/assets/images/author-01.png')}}" alt="Author 1">--}}
{{--                            </div>--}}
{{--                            <div class="text-button-pay">--}}
{{--                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img src="{{asset('homepage/assets/images/courses-02.jpg')}}" alt="Course #2">--}}
{{--                        <div class="down-content">--}}
{{--                            <h4>Business World</h4>--}}
{{--                            <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>--}}
{{--                            <div class="author-image">--}}
{{--                                <img src="{{asset('homepage/assets/images/author-02.png')}}" alt="Author 2">--}}
{{--                            </div>--}}
{{--                            <div class="text-button-free">--}}
{{--                                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img src="{{asset('homepage/assets/images/courses-03.jpg')}}" alt="Course #3">--}}
{{--                        <div class="down-content">--}}
{{--                            <h4>Media Technology</h4>--}}
{{--                            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>--}}
{{--                            <div class="author-image">--}}
{{--                                <img src="{{asset('homepage/assets/images/author-03.png')}}" alt="Author 3">--}}
{{--                            </div>--}}
{{--                            <div class="text-button-pay">--}}
{{--                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img src="{{asset('homepage/assets/images/courses-04.jpg')}}" alt="Course #4">--}}
{{--                        <div class="down-content">--}}
{{--                            <h4>Communications</h4>--}}
{{--                            <p>Download free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>--}}
{{--                            <div class="author-image">--}}
{{--                                <img src="{{asset('homepage/assets/images/author-04.png')}}" alt="Author 4">--}}
{{--                            </div>--}}
{{--                            <div class="text-button-free">--}}
{{--                                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img src="{{asset('homepage/assets/images/courses-05.jpg')}}" alt="">--}}
{{--                        <div class="down-content">--}}
{{--                            <h4>Business Ethics</h4>--}}
{{--                            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>--}}
{{--                            <div class="author-image">--}}
{{--                                <img src="{{asset('homepage/assets/images/author-05.png')}}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="text-button-pay">--}}
{{--                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img src="{{asset('homepage/assets/images/courses-01.jpg')}}" alt="">--}}
{{--                        <div class="down-content">--}}
{{--                            <h4>Photography</h4>--}}
{{--                            <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>--}}
{{--                            <div class="author-image">--}}
{{--                                <img src="{{asset('homepage/assets/images/author-01.png')}}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="text-button-free">--}}
{{--                                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img src="{{asset('homepage/assets/images/courses-02.jpg')}}" alt="">--}}
{{--                        <div class="down-content">--}}
{{--                            <h4>Web Development</h4>--}}
{{--                            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>--}}
{{--                            <div class="author-image">--}}
{{--                                <img src="{{asset('homepage/assets/images/author-02.png')}}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="text-button-free">--}}
{{--                                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img src="{{asset('homepage/assets/images/courses-03.jpg')}}" alt="">--}}
{{--                        <div class="down-content">--}}
{{--                            <h4>Learn HTML CSS</h4>--}}
{{--                            <p>You can get free images and videos for your websites by visiting Unsplash, Pixabay, and Pexels.</p>--}}
{{--                            <div class="author-image">--}}
{{--                                <img src="{{asset('homepage/assets/images/author-03.png')}}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="text-button-pay">--}}
{{--                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img src="{{asset('homepage/assets/images/courses-04.jpg')}}" alt="">--}}
{{--                        <div class="down-content">--}}
{{--                            <h4>Social Media</h4>--}}
{{--                            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>--}}
{{--                            <div class="author-image">--}}
{{--                                <img src="{{asset('homepage/assets/images/author-04.png')}}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="text-button-pay">--}}
{{--                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img src="{{asset('homepage/assets/images/courses-05.jpg')}}" alt="">--}}
{{--                        <div class="down-content">--}}
{{--                            <h4>Digital Arts</h4>--}}
{{--                            <p>Quisque cursus augue ut velit dictum, quis volutpat enim blandit. Maecenas a lectus ac ipsum porta.</p>--}}
{{--                            <div class="author-image">--}}
{{--                                <img src="{{asset('homepage/assets/images/author-05.png')}}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="text-button-free">--}}
{{--                                <a href="#">Free <i class="fa fa-angle-double-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="item">--}}
{{--                        <img src="{{asset('homepage/assets/images/courses-01.jpg')}}" alt="">--}}
{{--                        <div class="down-content">--}}
{{--                            <h4>Media Streaming</h4>--}}
{{--                            <p>Pellentesque ultricies diam magna, auctor cursus lectus pretium nec. Maecenas finibus lobortis enim.</p>--}}
{{--                            <div class="author-image">--}}
{{--                                <img src="{{asset('homepage/assets/images/author-01.png')}}" alt="">--}}
{{--                            </div>--}}
{{--                            <div class="text-button-pay">--}}
{{--                                <a href="#">Pay <i class="fa fa-angle-double-right"></i></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="row row-cols-1 row-cols-md video " data-section="section5" style="background-image: url('{{asset('homepage/assets/images/video-bg.jpg')}}')">
        <div class="row">
            <div class="col-md-6 text-center">
                <div class="left-content">
{{--                    <span>our presentation is for you</span>--}}
                    <h4>Learn Everything About <em>Japan</em></h4>
                    <p> Japan is an island nation located in East Asia, with Tokyo as its capital city. It is known for its rich cultural heritage, advanced technology, delicious cuisine, and beautiful landmarks. With a population of over 125 million people, Japan is one of the most populous countries in the world. The Japanese society is also renowned for its emphasis on discipline, politeness, and respect for others.
                        <br><br>Despite being a modern and developed country, Japan has managed to preserve its traditional culture and practices, making it a unique and fascinating destination for visitors from around the world.</p>
                    <div class="main-button"><a rel="nofollow" href="https://www.facebook.com/JAPANVITTA?mibextid=ZbWKwL" target="blank">Learn More</a></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="video-caption">
                    <!-- <h4>Learn About Japan</h4> -->
                </div>
                <article class="video-item">
                    <figure>
                        <div class="video-container">
                            <iframe
                                src="https://www.youtube.com/embed/Xa0xTDskIdc"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope;"
                                allowfullscreen></iframe>
                        </div>
                    </figure>
                </article>
            </div>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-md why-us" data-section="section2">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Register For Exams</h2>
                </div>
            </div>
            <div class="col-md-12">
                <div id='tabs'>
                    <ul>
                        <li><a href='#tabs-1'>JLPT</a></li>
                        <li><a href='#tabs-2'>JLCT</a></li>
                        <li><a href='#tabs-3'>NAT-TEST</a></li>
                    </ul>
                    <section class='tabs-content'>
                        <article id='tabs-1'>
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{asset('homepage/assets/images/JLPT.jpeg')}}" alt="">
                                </div>
                                <div class="col-md-6">
                                    <h4>JLPT Registration</h4>
                                    <p style="text-align: justify">The JLPT is an internationally recognized test for non-native speakers of Japanese,
                                        with five levels that measure reading, writing, listening, and speaking abilities. The test is used for employment and education purposes, and has grown in popularity since its inception
                                        in 1984, with over 1.3 million people taking the test worldwide as of 2021.</p>
                                    <div class="main-button"><a rel="nofollow" href=" https://www.jlpt.jp/e/" target="blank">Register For Sri Lankans</a></div>
                                    <br>
                                    <div class="main-button"><a rel="nofollow" href="https://www.jlpt.jp/e/application/domestic_index.html" target="blank">Register For Others</a></div>
                                </div>

                            </div>
                        </article>
                        <article id='tabs-2'>
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{asset('homepage/assets/images/JLCT.jpeg')}}" alt="">
                                </div>
                                <div class="col-md-6">
                                    <h4>JLCT Registration</h4>
                                    <p style="text-align: justify">Principally this test is conducted to measure the Japanese language communication skill of a non-native
                                        Japanese people. It has 5 levels and those are JCT1, JCT2, JCT3, JCT4, JCT5. F
                                        urther JLCT checks Japanese-language communication skill by dividing the test to
                                        Japanese Language knowledge (Character, vocabulary, grammar), Comprehension reading and Listening.</p>
{{--                                    <p>Suspendisse tincidunt, magna ut finibus rutrum, libero dolor euismod odio, nec interdum quam felis non ante.</p>--}}
{{--                                    <p style="text-align: justify">Register For Sri Lankans</p>--}}
                                    <div class="main-button"><a rel="nofollow" href="http://jlctsrilanka.lk/application/submit.php" target="blank">Register For Sri Lankans</a></div>
                                    <br>
{{--                                    <p style="text-align: justify"> Register For Others </p>--}}
                                    <div class="main-button"><a rel="nofollow" href=" https://jlct.jp/e/index.html" target="blank">Register For Others</a></div>
                                </div>
                            </div>
                        </article>
                        <article id='tabs-3'>
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="{{asset('homepage/assets/images/NAT.jpeg')}}" alt="">
                                </div>
                                <div class="col-md-6">
                                    <h4>NAT-Test Registration</h4>
                                    <p style="text-align: justify">About the test	The Japanese Language NAT-TEST is an examination that measures the Japanese language ability of students who are not native Japanese speakers.
                                        The tests are separated by difficulty (five levels) and general ability is measured in three categories:
                                        Grammar/Vocabulary, Listening and Reading Comprehension. The format of the exam and the types of
                                        questions are equivalent to those that appear on the Japanese Language Ability Test (JLPT).</p>

{{--                                    <p style="text-align: justify">Register For Sri Lankans</p>--}}
                                    <div class="main-button"><a rel="nofollow" href="https://colombo.nat-test.jp" target="blank">Register For Sri Lankans</a></div>
                                    <br>
{{--                                    <p style="text-align: justify; "> Register For Others </p>--}}
                                    <div class="main-button" ><a rel="nofollow" href="http://www.nat-test.com/en/about.html" target="blank">Register for Others</a></div>
                                </div>
                            </div>
                        </article>
                    </section>
                </div>
            </div>
        </div>
    </div>

<div class="row row-cols-1 row-cols-md video" data-section="section5">
    <center>
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="video-caption">
                        <!-- <h4>Learn About Japan</h4> -->
                    </div>
                    <article class="video-item">

                    </article>
                </div>
            </div>
        </div>
    </center>
    <center>
        <div class="col-md-6 align-self-center">

            <div class="left-content text-center">

                <h1 style="text-align: center">Follow us on <em style="color: #f5a425">Social Media</em></h1>

            </div>
        </div>
        <br>
        <!-- Facebook -->
        <a class="btn btn-primary" style="background-color: #3b5998;" target="_blank" href=" https://www.facebook.com/JAPANVITTA?mibextid=ZbWKwL" role="button"
        ><i class="fab fa-facebook-f"></i
            ></a>

        <!-- Twitter -->
        <a class="btn btn-primary" style="background-color: #55acee;" href="https://twitter.com/japan_vitta?t=YZ-BV3NMGmT3E8f1_QHQVA&s=09" role="button" target="_blank"
        ><i class="fab fa-twitter"></i
            ></a>



        <!-- Instagram -->
        <a class="btn btn-primary" style="background-color: #8a3ab9;" href="https://instagram.com/japan_vitta?igshid=ZDdkNTZiNTM=" target="_blank" role="button"
        ><i class="fab fa-instagram"></i
            ></a>

        <!-- Linkedin -->
{{--        <a class="btn btn-primary" style="background-color: #0082ca;" target="_blank"  href="" role="button"--}}
{{--        ><i class="fab fa-linkedin-in"></i--}}
{{--            ></a>--}}



        <!-- Youtube -->
        <a class="btn btn-primary" style="background-color: #ed302f;" href="https://youtube.com/@japan_vitta" target="_blank"  role="button"
        ><i class="fab fa-youtube"></i
            ></a>



        <!-- Whatsapp -->
        <a class="btn btn-primary" style="background-color: #25d366;" href="https://wa.me/message/SVYLTH2337TNI1" target="_blank" role="button"
        ><i class="fab fa-whatsapp"></i
            ></a>

        <a class="btn btn-primary" style="background-color: #000000;" href="https://t.me/japanvitta" target="_blank"  role="button"
        ><i class="fab fa-tiktok"></i
            ></a>
        <a class="btn btn-primary" style="background-color: #0d6efd;" href="https://www.tiktok.com/@japan_vitta" target="_blank"  role="button"
        ><i class="fab fa-telegram"></i
            ></a>
    </center>
    </div>
    </div>
@endsection

