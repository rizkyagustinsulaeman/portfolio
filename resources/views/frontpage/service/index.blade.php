@extends('frontpage.layouts.main')

@section('content')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg" data-setbg="{{ template_frontpage('img/breadcrumb-bg.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Our Sevices</h2>
                        <div class="breadcrumb__links">
                            <a href="#">Home</a>
                            <span>Services</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Services Section Begin -->
    <section class="services-page spad">
        <div class="container">
            <div class="row" id="serviceSection">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <img src="{{ template_frontpage('img/icons/si-2.png') }}" alt="">
                        </div>
                        <h4>Scriptwriting and editing</h4>
                        <p>Whether you’re halfway through the editing process, or you haven’t even started, our post
                            production services can put the finishing touches.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <img src="{{ template_frontpage('img/icons/si-1.png') }}" alt="">
                        </div>
                        <h4>Motion graphics</h4>
                        <p>Whether you’re halfway through the editing process, or you haven’t even started, our post
                            production services can put the finishing touches.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <img src="{{ template_frontpage('img/icons/si-2.png') }}" alt="">
                        </div>
                        <h4>Scriptwriting and editing</h4>
                        <p>Whether you’re halfway through the editing process, or you haven’t even started, our post
                            production services can put the finishing touches.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <img src="{{ template_frontpage('img/icons/si-3.png') }}" alt="">
                        </div>
                        <h4>Video distribution</h4>
                        <p>Whether you’re halfway through the editing process, or you haven’t even started, our post
                            production services can put the finishing touches.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <img src="{{ template_frontpage('img/icons/si-4.png') }}" alt="">
                        </div>
                        <h4>Video hosting</h4>
                        <p>Whether you’re halfway through the editing process, or you haven’t even started, our post
                            production services can put the finishing touches.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <img src="{{ template_frontpage('img/icons/si-4.png') }}" alt="">
                        </div>
                        <h4>Video hosting</h4>
                        <p>Whether you’re halfway through the editing process, or you haven’t even started, our post
                            production services can put the finishing touches.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Call To Action Section Begin -->
    <section class="callto sp__callto">
        <div class="container">
            <div class="callto__services spad set-bg" data-setbg="{{ template_frontpage('img/calltos-bg.jpg') }}">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-10 text-center">
                        <div class="callto__text">
                            <h2>CREATE AN AMAZING WEBSITE WITH OUR POWERFUL FEATURES</h2>
                            <p>We combine all the featurs you need to easly create professional websites and presentation</p>
                            <a href="#">Start your stories</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Call To Action Section End -->

    <!-- Logo Begin -->
    <div class="logo spad">
        <div class="container">
            <div class="logo__carousel owl-carousel">
                <a href="#" class="logo__item"><img src="{{ template_frontpage('img/logo/logo-1.png') }}"
                        alt=""></a>
                <a href="#" class="logo__item"><img src="{{ template_frontpage('img/logo/logo-2.png') }}"
                        alt=""></a>
                <a href="#" class="logo__item"><img src="{{ template_frontpage('img/logo/logo-3.png') }}"
                        alt=""></a>
                <a href="#" class="logo__item"><img src="{{ template_frontpage('img/logo/logo-4.png') }}"
                        alt=""></a>
                <a href="#" class="logo__item"><img src="{{ template_frontpage('img/logo/logo-5.png') }}"
                        alt=""></a>
                <a href="#" class="logo__item"><img src="{{ template_frontpage('img/logo/logo-6.png') }}"
                        alt=""></a>
            </div>
        </div>
    </div>
    <!-- Logo End -->
@endsection

@push('js')
    <script type="text/javascript">
        //Service
        $.ajax({
            type: "GET",
            url: "{{ route('web.service.getService') }}",
            data: {
                "_token": "{{ csrf_token() }}",
                "_method": "GET",
            },
            success: function(respon) {
                let serviceHtml = ''

                for (let i = 0; i < respon.data.length; i++) {
                    const data = respon.data[i];

                    let serviceJsonDecode = JSON.parse(data.value);
                    serviceHtml += `<div class="col-lg-4 col-md-6 col-sm-6">` +
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
    </script>
@endpush
