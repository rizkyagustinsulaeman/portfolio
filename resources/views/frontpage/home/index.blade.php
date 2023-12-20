@extends('frontpage.layouts.main')

@section('content')
    <section class="hero">
        <div class="hero__slider owl-carousel">
            <div class="hero__item set-bg" data-setbg="{{ template_frontpage('img/hero/hero-1.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span>For website and video editing</span>
                                <h2>Videographer’s Portfolio</h2>
                                <a href="#" class="primary-btn">See more about us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" data-setbg="{{ template_frontpage('img/hero/hero-1.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span>For website and video editing</span>
                                <h2>Videographer’s Portfolio</h2>
                                <a href="#" class="primary-btn">See more about us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero__item set-bg" data-setbg="{{ template_frontpage('img/hero/hero-1.jpg') }}">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="hero__text">
                                <span>For website and video editing</span>
                                <h2>Videographer’s Portfolio</h2>
                                <a href="#" class="primary-btn">See more about us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Services Section Begin -->
    <section class="services spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="services__title">
                        <div class="section-title">
                            <span>Our services</span>
                            <h2>What We do?</h2>
                        </div>
                        <p>If you hire a videographer of our team you will get a video professional to make a custom
                            video for your business and, once the project is over.</p>
                        <a href="{{route('web.service')}}" class="primary-btn">View all services</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row" id="serviceSection">
                        {{-- fetch data service --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Work Section Begin -->
    <section class="work">
        <div class="work__gallery">
            <div class="grid-sizer"></div>
            <div id="projectSection">
                <div class="work__item wide__item set-bg" data-setbg="{{ template_frontpage('img/work/work-1.jpg') }}">
                    <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                            class="fa fa-play"></i></a>
                    <div class="work__item__hover">
                        <h4>VIP Auto Tires & Service</h4>
                        <ul>
                            <li>eCommerce</li>
                            <li>Magento</li>
                        </ul>
                    </div>
                </div>
                <div class="work__item small__item set-bg" data-setbg="{{ template_frontpage('img/work/work-2.jpg') }}">
                    <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                            class="fa fa-play"></i></a>
                </div>
                <div class="work__item small__item set-bg" data-setbg="{{ template_frontpage('img/work/work-3.jpg') }}">
                    <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                            class="fa fa-play"></i></a>
                </div>
                <div class="work__item large__item set-bg" data-setbg="{{ template_frontpage('img/work/work-4.jpg') }}">
                    <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                            class="fa fa-play"></i></a>
                    <div class="work__item__hover">
                        <h4>VIP Auto Tires & Service</h4>
                        <ul>
                            <li>eCommerce</li>
                            <li>Magento</li>
                        </ul>
                    </div>
                </div>
                <div class="work__item small__item set-bg" data-setbg="{{ template_frontpage('img/work/work-5.jpg') }}">
                    <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                            class="fa fa-play"></i></a>
                </div>
                <div class="work__item small__item set-bg" data-setbg="{{ template_frontpage('img/work/work-6.jpg') }}">
                    <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                            class="fa fa-play"></i></a>
                </div>
                <div class="work__item wide__item set-bg" data-setbg="{{ template_frontpage('img/work/work-7.jpg') }}">
                    <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="play-btn video-popup"><i
                            class="fa fa-play"></i></a>
                    <div class="work__item__hover">
                        <h4>VIP Auto Tires & Service</h4>
                        <ul>
                            <li>eCommerce</li>
                            <li>Magento</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Work Section End -->

    <!-- Counter Section Begin -->
    <section class="counter">
        <div class="container">
            <div class="counter__content">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item">
                            <div class="counter__item__text">
                                <img src="{{ template_frontpage('img/icons/ci-1.png') }}" alt="">
                                <h2 class="counter_num">230</h2>
                                <p>Compled Projects</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item second__item">
                            <div class="counter__item__text">
                                <img src="{{ template_frontpage('img/icons/ci-2.png') }}" alt="">
                                <h2 class="counter_num">1068</h2>
                                <p>Happy clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item third__item">
                            <div class="counter__item__text">
                                <img src="{{ template_frontpage('img/icons/ci-3.png') }}" alt="">
                                <h2 class="counter_num">230</h2>
                                <p>Perspective clients</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="counter__item four__item">
                            <div class="counter__item__text">
                                <img src="{{ template_frontpage('img/icons/ci-4.png') }}" alt="">
                                <h2 class="counter_num">230</h2>
                                <p>Compled Projects</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->

    <!-- Team Section Begin -->
    <section class="team spad set-bg" data-setbg="{{ template_frontpage('img/team-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title team__title">
                        <span>Nice to meet</span>
                        <h2>OUR Team</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item set-bg" data-setbg="{{ template_frontpage('img/team/team-1.jpg') }}">
                        <div class="team__item__text">
                            <h4>AMANDA STONE</h4>
                            <p>Videographer</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--second set-bg"
                        data-setbg="{{ template_frontpage('img/team/team-2.jpg') }}">
                        <div class="team__item__text">
                            <h4>AMANDA STONE</h4>
                            <p>Videographer</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--third set-bg"
                        data-setbg="{{ template_frontpage('img/team/team-3.jpg') }}">
                        <div class="team__item__text">
                            <h4>AMANDA STONE</h4>
                            <p>Videographer</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 p-0">
                    <div class="team__item team__item--four set-bg"
                        data-setbg="{{ template_frontpage('img/team/team-4.jpg') }}">
                        <div class="team__item__text">
                            <h4>AMANDA STONE</h4>
                            <p>Videographer</p>
                            <div class="team__item__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 p-0">
                    <div class="team__btn">
                        <a href="#" class="primary-btn">Meet Our Team</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Latest Blog Section Begin -->
    <section class="latest spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title center-title">
                        <span>Our Blog</span>
                        <h2>Blog Update</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="latest__slider owl-carousel" id="blogSection">
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>Bumper Ads: How to Tell a Story in 6 Seconds</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>Bumper Ads: How to Tell a Story in 6 Seconds</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="blog__item latest__item">
                            <h4>What Makes Users Want to Share a Video on Social Media?</h4>
                            <ul>
                                <li>Jan 03, 2020</li>
                                <li>05 Comment</li>
                            </ul>
                            <p>We recently launched a new website for a Vital client and wanted to share some of the
                                cool features we were able...</p>
                            <a href="#">Read more <span class="arrow_right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Blog Section End -->

    <!-- Call To Action Section Begin -->
    <section class="callto spad set-bg" data-setbg="{{ template_frontpage('img/callto-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="callto__text">
                        <h2>Fresh Ideas, Fresh Moments Giving Wings to your Stories.</h2>
                        <p>INC5000, Best places to work 2019</p>
                        <a href="#">Start your stories</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->
@endsection

@push('js')
    <script type="text/javascript">
        $(document).ready(function() {
            function formatDate(inputDate) {
                const months = [
                    "Jan", "Feb", "Mar", "Apr",
                    "May", "Jun", "Jul", "Aug",
                    "Sep", "Oct", "Nov", "Dec"
                ];

                const parts = inputDate.split("-");
                const year = parts[0];
                const month = months[parseInt(parts[1]) - 1];
                const day = parts[2];

                return `${month} ${day}, ${year}`;
            }

            //Service
            $.ajax({
                type: "GET",
                url: "{{ route('web.getService') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "_method": "GET",
                },
                success: function(respon) {
                    let serviceHtml = ''

                    for (let i = 0; i < respon.data.length; i++) {
                        const data = respon.data[i];

                        let serviceJsonDecode = JSON.parse(data.value);
                        serviceHtml += `<div class="col-lg-6 col-md-6 col-sm-6">` +
                            `<div class="services__item">` +
                            `<div class="services__item__icon">` +
                            `<img src="{{ asset('administrator/assets/media/service') }}/` +
                            serviceJsonDecode.img_url + `" alt="">` +
                            `</div>` +
                            `<h4>` + serviceJsonDecode.title + `</h4>` +
                            `<p>` + serviceJsonDecode.body + `</p>` +
                            `</div>` +
                            `</div>`;
                    }
                    $('#serviceSection').html(
                        serviceHtml
                    )
                }
            });

            //Project
            $.ajax({
                type: "GET",
                url: "{{ route('web.getProject') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "_method": "GET",
                },
                success: function(respon) {
                    let projectHtml = ''

                    for (let i = 0; i < respon.data.length; i++) {
                        const data = respon.data[i];
                        let imgJsonDecode = JSON.parse(data.img_url);
                        console.log(data);

                        let className = '';
                        if (i == 0 || i == 5 || i == 3 || i == 6) {
                            className = 'wide__item';
                        } else {
                            className = 'small__item';
                        }

                        // for (let key = 0; key < array.length; key++) {
                        //     const element = array[key];

                        // }

                        projectHtml +=
                            `<div class="work__item ` + className +
                            ` set-bg" data-setbg="{{ asset('administrator/assets/media/project') }}/` +
                            imgJsonDecode[0] + `">` +
                            `<a href="" class="play-btn video-popup">` +
                            `<i class="fa fa-arrow-right"></i>` +
                            `</a>` +
                            `<div class="work__item__hover">` +
                            `<h4>` + data.nama + `</h4>` +
                            `<ul>` +
                            `<li>` + data.kategori_project.nama + `</li>` +
                            `</ul>` +
                            `</div>` +
                            `</div>`;


                    }
                    $('#projectSection').html(
                        projectHtml
                    )
                    $('.set-bg').each(function() {
                        var bg = $(this).data('setbg');
                        $(this).css('background-image', 'url(' + bg + ')');
                    });
                }
            });

            // Blog
            $.ajax({
                type: "GET",
                url: "{{ route('web.getBlog') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "_method": "GET",
                },
                success: function(respon) {
                    let blogHtml = '';

                    for (let i = 0; i < respon.data.length; i++) {
                        const data = respon.data[i];
                        let imgJsonDecode = JSON.parse(data.img_url);
                        console.log(data);

                        // Assuming data.isi contains the text you want to limit
                        let truncatedContent = data.isi;

                        // Limit the content to 200 characters
                        const maxLength = 1000;
                        if (truncatedContent.length > maxLength) {
                            truncatedContent = truncatedContent.substring(0, maxLength) + '...';
                        }

                        blogHtml +=
                            `<div class="col-lg-4">` +
                            `<div class="blog__item latest__item set-bg-blog" data-setbg="{{ asset('administrator/assets/media/blog') }}/` +
                            imgJsonDecode[0] + `">` +
                            `<h4>` + data.judul + `</h4>` +
                            `<ul>` +
                            `<li>` + formatDate(data.tanggal_posting) + `</li>` +
                            `<li>05 Comment</li>` +
                            `</ul>` +
                            `<p>` + truncatedContent + `</p>` +
                            `<a href="#">Read more <span class="arrow_right"></span></a>` +
                            `</div>` +
                            `</div>`;
                    }

                    // Move this line inside the success callback
                    $('#blogSection').html(blogHtml);

                    $('.set-bg-blog').each(
                        function() {
                            var bg = $(this).data('setbg');
                            $(this).css('background-image', 'url(' + bg + ')');
                        // },
                        // function() {
                        //     // Reset the background image on hover out if needed
                        //     $(this).css('background-image', '');
                        }
                    );

                    $(".latest__slider").owlCarousel({
                        loop: true,
                        margin: 0,
                        items: 3,
                        dots: true,
                        dotsEach: 2,
                        smartSpeed: 1200,
                        autoHeight: false,
                        autoplay: true,
                        responsive: {
                            992: {
                                items: 3
                            },
                            768: {
                                items: 2
                            },
                            320: {
                                items: 1
                            }
                        }
                    });
                }
            });
        });
    </script>
@endpush
