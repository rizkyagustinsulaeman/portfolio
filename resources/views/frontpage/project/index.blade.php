@extends('frontpage.layouts.main')

@section('content')
    <!-- Breadcrumb Begin -->
    <div class="breadcrumb-option spad set-bg-color" data-setbgcolor="{{ $settings['general_breadcrumb_color'] ?? '#1e2a45' }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Portfolio</h2>
                        <div class="breadcrumb__links">
                            <a href="{{route('web.index')}}">Home</a>
                            <span>Project</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- Portfolio Section Begin -->
    <section class="portfolio spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <ul class="portfolio__filter">
                        <li class="active" data-filter="*">All</li>
                        @foreach ($kategori as $col)
                            <li data-filter=".{{$col->slug}}">{{$col->nama}}</li>
                        @endforeach
                        
                    </ul>
                </div>
            </div>

            <div class="row portfolio__gallery">
            @foreach ($project as $row)
                @php
                    $img_url = json_decode($row->img_url);
                @endphp
                <div class="col-lg-4 col-md-6 col-sm-6 mix {{$row->kategori_project->slug}}">
                    <div class="portfolio__item">
                        <div class="portfolio__item__video set-bg" data-setbg="{{img_src($img_url[0],'project')}}">
                            <a href="{{route('web.project.slug', $row->slug)}}" class="play-btn "><i class="fa fa-arrow-right"></i></a>
                        </div>
                        <div class="portfolio__item__text">
                            <h4>{{$row->nama}}</h4>
                            <ul>
                                <li>{{$row->kategori_project->nama}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <div class="pagination__option">
                        <a href="#" class="arrow__pagination left__arrow"><span class="arrow_left"></span> Prev</a>
                        <a href="#" class="number__pagination">1</a>
                        <a href="#" class="number__pagination">2</a>
                        <a href="#" class="arrow__pagination right__arrow">Next <span
                                class="arrow_right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Portfolio Section End -->
@endsection
