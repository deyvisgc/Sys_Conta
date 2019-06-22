@extends('layaouts.prinsipal')

@section('content')
    <!-- row -->
    <div class="row">

        <!-- end col -->

        <!-- right side of the page with the sparkline graphs -->
        <!-- col -->

        <!-- end col -->

    </div>
    <!-- end row -->

    <!-- row -->

    <div class="row">

        <div class="col-sm-12">


            <div class="well well-sm">

                <div class="row">

                    <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="well well-light well-sm no-margin no-padding">

                            <div class="row">

                                <div class="col-sm-12">
                                    <div id="myCarousel" class="carousel fade profile-carousel">
                                        <div class="air air-bottom-right padding-10">
                                            <a href="javascript:void(0);" class="btn txt-color-white bg-color-teal btn-sm"><i class="fa fa-check"></i> Follow</a>&nbsp; <a href="javascript:void(0);" class="btn txt-color-white bg-color-pinkDark btn-sm"><i class="fa fa-link"></i> Connect</a>
                                        </div>
                                        <div class="air air-top-left padding-10">
                                            <h4 class="txt-color-white font-md">Jan 1, 2014</h4>
                                        </div>
                                        <ol class="carousel-indicators">
                                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                                            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <!-- Slide 1 -->
                                            <div class="item active">
                                                <img src="img/demo/s1.jpg" alt="demo user">
                                            </div>
                                            <!-- Slide 2 -->
                                            <div class="item">
                                                <img src="img/demo/s2.jpg" alt="demo user">
                                            </div>
                                            <!-- Slide 3 -->
                                            <div class="item">
                                                <img src="img/demo/m3.jpg" alt="demo user">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12">

                                    <div class="row">

                                        <div class="col-sm-3 profile-pic">
                                            <img src="img/avatars/sunny-big.png" alt="demo user">
                                            <div class="padding-10">
                                                <h4 class="font-md"><strong>1,543</strong>
                                                    <br>
                                                    <small>Followers</small></h4>
                                                <br>
                                                <h4 class="font-md"><strong>419</strong>
                                                    <br>
                                                    <small>Connections</small></h4>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <h1>John <span class="semi-bold">Doe</span>
                                                <br>
                                                <small> CEO, SmartAdmin</small></h1>

                                            <ul class="list-unstyled">
                                                <li>
                                                    <p class="text-muted">
                                                        <i class="fa fa-phone"></i>&nbsp;&nbsp;(<span class="txt-color-darken">313</span>) <span class="txt-color-darken">464</span> - <span class="txt-color-darken">6473</span>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p class="text-muted">
                                                        <i class="fa fa-envelope"></i>&nbsp;&nbsp;<a href="mailto:simmons@smartadmin">ceo@smartadmin.com</a>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p class="text-muted">
                                                        <i class="fa fa-skype"></i>&nbsp;&nbsp;<span class="txt-color-darken">john12</span>
                                                    </p>
                                                </li>
                                                <li>
                                                    <p class="text-muted">
                                                        <i class="fa fa-calendar"></i>&nbsp;&nbsp;<span class="txt-color-darken">Free after <a href="javascript:void(0);" rel="tooltip" title="" data-placement="top" data-original-title="Create an Appointment">4:30 PM</a></span>
                                                    </p>
                                                </li>
                                            </ul>
                                            <br>
                                            <p class="font-md">
                                                <i>A little about me...</i>
                                            </p>
                                            <p>

                                                Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio
                                                cumque nihil impedit quo minus id quod maxime placeat facere

                                            </p>
                                            <br>
                                            <a href="javascript:void(0);" class="btn btn-default btn-xs"><i class="fa fa-envelope-o"></i> Send Message</a>
                                            <br>
                                            <br>

                                        </div>
                                        <div class="col-sm-3">
                                            <h1><small>Connections</small></h1>
                                            <ul class="list-inline friends-list">
                                                <li><img src="img/avatars/1.png" alt="friend-1">
                                                </li>
                                                <li><img src="img/avatars/2.png" alt="friend-2">
                                                </li>
                                                <li><img src="img/avatars/3.png" alt="friend-3">
                                                </li>
                                                <li><img src="img/avatars/4.png" alt="friend-4">
                                                </li>
                                                <li><img src="img/avatars/5.png" alt="friend-5">
                                                </li>
                                                <li><img src="img/avatars/male.png" alt="friend-6">
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0);">413 more</a>
                                                </li>
                                            </ul>

                                            <h1><small>Recent visitors</small></h1>
                                            <ul class="list-inline friends-list">
                                                <li><img src="img/avatars/male.png" alt="friend-1">
                                                </li>
                                                <li><img src="img/avatars/female.png" alt="friend-2">
                                                </li>
                                                <li><img src="img/avatars/female.png" alt="friend-3">
                                                </li>
                                            </ul>

                                        </div>

                                    </div>

                                </div>

                            </div>

                            <!-- end row -->

                        </div>

                    </div>

                </div>

            </div>


        </div>

    </div>

    <!-- end row -->

    </div>
    <!-- END MAIN CONTENT -->

    </div>

    @endsection
