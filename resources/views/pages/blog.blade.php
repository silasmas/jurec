@extends("layouts.template")


@section("content")
@include("parties.banner")


<!--=================================
  page-title -->


<!--=================================
  timeline -->

<section class="white-bg blog timeline-sidebar page-section-ptb">
    <div class="container">
        <div class="row">
                        @include('parties.leftbarmenu')
            <!-- ================================= -->
            <div class="col-lg-9">
                <ul class="timeline">
                    <li class="entry-date"> <span> October 2017 </span></li>
                    <li class="timeline-inverted">
                        <div class="timeline-badge primary"><a href="#">13 <span>Oct</span></a></div>
                        <div class="timeline-panel">
                            <div class="blog-entry">
                                <div class="entry-image clearfix">
                                    <img class="img-fluid" src="assets/images/blog/01.jpg" alt="">
                                </div>
                                <div class="blog-detail">
                                    <div class="entry-title mb-10">
                                        <a href="#">Blogpost With Image</a>
                                    </div>
                                    <div class="entry-meta mb-10">
                                        <ul>
                                            <li> <i class="fa fa-folder-open-o"></i> <a href="#"> Design,</a> <a
                                                    href="#"> HTML5 </a> </li>
                                            <li><a href="#"><i class="fa fa-comment-o"></i> 5</a></li>
                                            <li><a href="#"><i class="fa fa-calendar-o"></i> 12 Aug 2021</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <p>Quae laboriosam sunt hic perspiciatis, asperiores mollitia excepturi
                                            voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores corporis.
                                            this exercise dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. consectetur, assumenda
                                            provident this exercise dolor sit amet, consectetur adipisicing elit. </p>
                                    </div>
                                    <div class="entry-share clearfix">
                                        @include('parties.partageRs')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- =========================================== -->
                    <li class="timeline-inverted">
                        <div class="timeline-badge primary"><a href="#">22 <span>Sep</span></a></div>
                        <div class="timeline-panel">
                            <div class="blog-entry">
                                <div class="entry-image clearfix">
                                    <div class="owl-carousel bottom-center-dots" data-nav-dots="ture" data-items="1"
                                        data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1">
                                        <div class="item">
                                            <img class="img-fluid" src="assets/images/blog/02.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img class="img-fluid" src="assets/images/blog/03.jpg" alt="">
                                        </div>
                                        <div class="item">
                                            <img class="img-fluid" src="assets/images/blog/04.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-detail">
                                    <div class="entry-title mb-10">
                                        <a href="#">Blogpost With slider</a>
                                    </div>
                                    <div class="entry-meta mb-10">
                                        <ul>
                                            <li> <i class="fab fa-folder-open-o"></i> <a href="#"> Design,</a> <a
                                                    href="#"> HTML5 </a> </li>
                                            <li><a href="#"><i class="fab fa-comment-o"></i> 5</a></li>
                                            <li><a href="#"><i class="fab fa-calendar-o"></i> 12 Aug 2021</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <p>Ipsum dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic
                                            perspiciatis, asperiores mollitia excepturi voluptatibus sequi nostrum ipsam
                                            veniam omnis nihil! A ea maiores corporis. this exercise dolor sit amet,
                                            consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                                            dolore magna aliqua. consectetur, assumenda provident lorem.</p>
                                    </div>
                                    <div class="entry-share clearfix">
                                        @include('parties.partageRs')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- =========================================== -->
                    <li class="timeline-inverted">
                        <div class="timeline-badge primary"><a href="#">29 <span>Aug</span></a></div>
                        <div class="timeline-panel">
                            <div class="blog-entry">
                                <div class="blog-entry-html-video clearfix">
                                    <video style="width:100%;height:100%;" id="player1" poster="video/video.jpg"
                                        controls preload="none">
                                        <source type="video/mp4" src="video/video.mp4" />
                                        <source type="video/webm" src="video/video.webm" />
                                        <source type="video/ogg" src="video/video.ogv" />
                                    </video>
                                </div>
                                <div class="blog-detail">
                                    <div class="entry-title mb-10">
                                        <a href="#">Blogpost with Self Hosted Video (HTML5 Video)</a>
                                    </div>
                                    <div class="entry-meta mb-10">
                                        <ul>
                                            <li> <i class="fab fa-folder-open-o"></i> <a href="#"> Design,</a> <a
                                                    href="#"> HTML5 </a> </li>
                                            <li><a href="#"><i class="fab fa-comment-o"></i> 5</a></li>
                                            <li><a href="#"><i class="fab fa-calendar-o"></i> 12 Aug 2021</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <p>Consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis,
                                            asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis
                                            nihil! A ea maiores corporis. this exercise dolor sit amet, consectetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                            aliqua consectetur, assumenda provident this exercise dolor sit amet.</p>
                                    </div>
                                    <div class="entry-share clearfix">
                                        @include('parties.partageRs')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- =========================================== -->
                    <li class="timeline-inverted">
                        <div class="timeline-badge primary"><a href="#">17 <span>Jul</span></a></div>
                        <div class="timeline-panel">
                            <div class="blog-entry">
                                <div class="blog-entry-audio audio-video">
                                    <audio id="player2" src="video/audio.mp3"> </audio>
                                </div>
                                <div class="blog-detail">
                                    <div class="entry-title mb-10">
                                        <a href="#">Blogpost with Audio</a>
                                    </div>
                                    <div class="entry-meta mb-10">
                                        <ul>
                                            <li> <i class="fab fa-folder-open-o"></i> <a href="#"> Design,</a> <a
                                                    href="#"> HTML5 </a> </li>
                                            <li><a href="#"><i class="fab fa-comment-o"></i> 5</a></li>
                                            <li><a href="#"><i class="fab fa-calendar-o"></i> 12 Aug 2021</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
                                            consectetur, assumenda provident this exercise dolor sit amet, consectetur
                                            adipisicing elit. Quae laboriosam sunt hic perspiciatis, asperiores mollitia
                                            excepturi voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores
                                            corporis. this exercise dolor sit amet, consectetur adipisicing elit.</p>
                                    </div>
                                    <div class="entry-share clearfix">
                                        @include('parties.partageRs')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="timeline-inverted">
                        <div class="timeline-badge primary"><a href="#">15 <span>Jun</span></a></div>
                        <div class="timeline-panel">
                            <div class="blog-entry">
                                <div class="entry-soundcloud">
                                    <iframe style="height: 300px; width: 100%;"
                                        src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/118951274&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
                                </div>
                                <div class="blog-detail">
                                    <div class="entry-title mb-10">
                                        <a href="#">Blogpost Audio Soundcloud</a>
                                    </div>
                                    <div class="entry-meta mb-10">
                                        <ul>
                                            <li> <i class="fab fa-folder-open-o"></i> <a href="#"> Design,</a> <a
                                                    href="#"> HTML5 </a> </li>
                                            <li><a href="#"><i class="fab fa-comment-o"></i> 5</a></li>
                                            <li><a href="#"><i class="fab fa-calendar-o"></i> 12 Aug 2021</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <p>Provident this exercise dolor sit amet, consectetur adipisicing elit. Quae
                                            laboriosam sunt hic perspiciatis, asperiores mollitia excepturi voluptatibus
                                            sequi nostrum ipsam veniam omnis nihil! Consectetur, assumenda A ea maiores
                                            corporis. this exercise dolor sit amet, consectetur adipisicing elit, sed do
                                            eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class="entry-share clearfix">
                                        @include('parties.partageRs')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- =========================================== -->
                    <li class="timeline-inverted">
                        <div class="timeline-badge primary"><a href="#">23 <span>May</span></a></div>
                        <div class="timeline-panel">
                            <div class="blog-entry">
                                <div class="clearfix">
                                    <ul class="grid-post">
                                        <li>
                                            <div class="portfolio-item">
                                                <img class="img-fluid" src="assets/images/blog/05.jpg" alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="portfolio-item">
                                                <img class="img-fluid" src="assets/images/blog/06.jpg" alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="portfolio-item">
                                                <img class="img-fluid" src="assets/images/blog/07.jpg" alt="">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="portfolio-item">
                                                <img class="img-fluid" src="assets/images/blog/08.jpg" alt="">
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="blog-detail">
                                    <div class="entry-title mb-10">
                                        <a href="#">Blogpost With Image Grid Gallery Format </a>
                                    </div>
                                    <div class="entry-meta mb-10">
                                        <ul>
                                            <li> <i class="fab fa-folder-open-o"></i> <a href="#"> Design,</a> <a
                                                    href="#"> HTML5 </a> </li>
                                            <li><a href="#"><i class="fab fa-comment-o"></i> 5</a></li>
                                            <li><a href="#"><i class="fab fa-calendar-o"></i> 12 Aug 2021</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <p>Asperiores mollitia excepturi voluptatibus sequi nostrum ipsam veniam omnis
                                            nihil! A ea maiores corporis. this exercise dolor sit amet, consectetur
                                            adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                                            aliqua consectetur, assumenda provident this exercise dolor sit amet,
                                            consectetur adipisicing elit. Quae laboriosam sunt hic perspiciatis.</p>
                                    </div>
                                    <div class="entry-share clearfix">
                                        @include('parties.partageRs')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- =========================================== -->
                    <li class="timeline-inverted">
                        <div class="timeline-badge primary"><a href="#">09 <span>Apr</span></a></div>
                        <div class="timeline-panel">
                            <div class="blog-entry">
                                <div class="blog-entry-you-tube">
                                    <div class="js-video [youtube, widescreen]">
                                        <iframe src="https://www.youtube.com/embed/D2EvaSgi3UQ"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                                <div class="blog-detail">
                                    <div class="entry-title mb-10">
                                        <a href="#">Blogpost with Youtube Video </a>
                                    </div>
                                    <div class="entry-meta mb-10">
                                        <ul>
                                            <li> <i class="fab fa-folder-open-o"></i> <a href="#"> Design,</a> <a
                                                    href="#"> HTML5 </a> </li>
                                            <li><a href="#"><i class="fab fa-comment-o"></i> 5</a></li>
                                            <li><a href="#"><i class="fab fa-calendar-o"></i> 12 Aug 2021</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <p>A ea maiores corporis consectetur, assumenda provident this exercise dolor
                                            sit amet, consectetur adipisicing elit. Quae laboriosam sunt hic
                                            perspiciatis, asperiores mollitia excepturi voluptatibus sequi nostrum ipsam
                                            veniam omnis nihil!. this exercise dolor sit amet, consectetur adipisicing
                                            elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                    <div class="entry-share clearfix">
                                        @include('parties.partageRs')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- =========================================== -->
                    <li class="timeline-inverted">
                        <div class="timeline-badge primary"><a href="#">06 <span>Mar</span></a></div>
                        <div class="timeline-panel">
                            <div class="blog-entry">
                                <div class="blog-entry-vimeo">
                                    <div class="js-video [vimeo, widescreen]">
                                        <iframe src="https://player.vimeo.com/video/176916362"></iframe>
                                    </div>
                                </div>
                                <div class="blog-detail">
                                    <div class="entry-title mb-10">
                                        <a href="#">Blogpost with vimeo Video </a>
                                    </div>
                                    <div class="entry-meta mb-10">
                                        <ul>
                                            <li> <i class="fab fa-folder-open-o"></i> <a href="#"> Design,</a> <a
                                                    href="#"> HTML5 </a> </li>
                                            <li><a href="#"><i class="fab fa-comment-o"></i> 5</a></li>
                                            <li><a href="#"><i class="fab fa-calendar-o"></i> 12 Aug 2021</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <p>Eiusmod tempor incididunt ut labore et dolore magna aliqua consectetur,
                                            assumenda provident this exercise dolor sit amet, consectetur adipisicing
                                            elit. Quae laboriosam sunt hic perspiciatis, asperiores mollitia excepturi
                                            voluptatibus sequi nostrum ipsam veniam omnis nihil! A ea maiores corporis.
                                            this exercise dolor sit amet, consectetur adipisicing elit, sed do.</p>
                                    </div>
                                    <div class="entry-share clearfix">
                                        @include('parties.partageRs')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- =========================================== -->
                    <li class="timeline-inverted">
                        <div class="timeline-badge primary"><a href="#">02 <span>Fed</span></a></div>
                        <div class="timeline-panel">
                            <div class="blog-entry blockquote">
                                <div class="entry-blockquote clearfix">
                                    <blockquote class="mt-60 blockquote">
                                        The trouble with programmers is that you can never tell what a programmer is
                                        doing until it's too late. The future belongs to a different kind of person with
                                        a different kind of mind: artists, inventors, storytellers-creative and holistic
                                        ‘right-brain’ thinkers whose abilities mark the fault line between who gets
                                        ahead and who doesn’t.
                                        <cite class="text-white"> – Daniel Pink</cite>
                                    </blockquote>
                                </div>
                                <div class="blog-detail mt-30">
                                    <div class="entry-title mb-10">
                                        <a href="#">Blogpost With blockquote </a>
                                    </div>
                                    <div class="entry-meta mb-10">
                                        <ul>
                                            <li> <i class="fab fa-folder-open-o"></i> <a href="#"> Design,</a> <a
                                                    href="#"> HTML5 </a> </li>
                                            <li><a href="#"><i class="fab fa-comment-o"></i> 5</a></li>
                                            <li><a href="#"><i class="fab fa-calendar-o"></i> 12 Aug 2021</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-share mt-20 clearfix">
                                        <div class="entry-button">
                                            <a class="button arrow white" href="#">Lire en detail<i class="fab fa-angle-right"
                                                    aria-hidden="true"></i></a>
                                        </div>
                                        <div class="social list-style-none float-end">
                                            <strong class="text-white">Share : </strong>
                                            <ul>
                                                <li>
                                                    <a href="#"> <i class="fab fa-facebook"></i> </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fab fa-twitter"></i> </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fab fa-pinterest-p"></i> </a>
                                                </li>
                                                <li>
                                                    <a href="#"> <i class="fab fa-dribbble"></i> </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- =========================================== -->
                    <li class="timeline-inverted">
                        <div class="timeline-badge primary"><a href="#">19 <span>jan</span></a></div>
                        <div class="timeline-panel">
                            <div class="blog-entry">
                                <div class="blog-detail">
                                    <div class="entry-title mb-10">
                                        <a href="#">Blogpost Without Image</a>
                                    </div>
                                    <div class="entry-meta mb-10">
                                        <ul>
                                            <li> <i class="fab fa-folder-open-o"></i> <a href="#"> Design,</a> <a
                                                    href="#"> HTML5 </a> </li>
                                            <li><a href="#"><i class="fab fa-comment-o"></i> 5</a></li>
                                            <li><a href="#"><i class="fab fa-calendar-o"></i> 12 Aug 2021</a></li>
                                        </ul>
                                    </div>
                                    <div class="entry-content">
                                        <p>Hic perspiciatis, asperiores mollitia excepturi voluptatibus sequi nostrum
                                            ipsam veniam omnis nihil! A ea maiores corporis. this exercise dolor sit
                                            amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                                            labore et dolore magna aliqua consectetur, assumenda provident this exercise
                                            dolor sit amet, consectetur adipisicing elit. Quae laboriosam sunt.</p>
                                    </div>
                                    <div class="entry-share clearfix">
                                        @include('parties.partageRs')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- =========================================== -->
                    <li class="entry-date-bottom"> <a href="#">Load more...</a></li>
                    <!-- =========================================== -->
                    <li class="clearfix timeline-inverted" style="float: none;"></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!--=================================
  timeline -->


<!--=================================
  action box- -->



@endsection
