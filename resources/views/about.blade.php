@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <div id="banner" class="panel-content" style="margin: 10px">

                    @if (file_exists(public_path('upload/storefront.jpg')))
                        <img src="{{ asset('upload/storefront.jpg') }}"
                             style="max-width:100%; width:auto; max-height: 250px; height: auto; !important;"><br>
                    @else
                        <img src="{{ asset('example/storefront.jpg') }}"
                             style="max-width:100%; width:auto; max-height: 250px; height: auto; !important;"><br>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="container product-page">
        <section id="pictures">
            <div class="row">
                <div class="col-md-5">
                    <div style="margin-top:20px; width:100%;" class="panel">
                        <div class="panel-body listing_images" style="padding: 5px;">
                            <div align="center">
                                <div style="width: auto;">
                                    <strong>{{ $about->shop_name }} </strong><br/>
                                    <p>{{ $about->owner_name }}</p><br/>
                                    <p>{!! nl2br(e($about->address)) !!}</p><br/>
                                    <strong>Hours: </strong>
                                    <p>{!! nl2br(e($about->hours)) !!}</p><br/>
                                    <strong>Phone: </strong><a
                                            href="tel:+1{{ $about->phone }}">{{ $about->phone }}</a><br/>
                                    @if (isset($about->fax))
                                        <strong>Fax: </strong><a
                                                href="tel:+1{{ $about->fax }}">{{ $about->fax }}</a>
                                        <br/>
                                    @endif
                                    <strong>Email: </strong>{{ Html::mailto($about->email)}}<br/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div style="margin-top:20px; display: inline-block" class="panel">
                            @if (file_exists(public_path('upload/shop.jpg')))
                                <img src="{{ asset('upload/shop.jpg') }}" width="400px"><br>
                            @else
                                <img src="{{ asset('example/shop.jpg') }}" width="400px"><br>
                            @endif
                    </div>
                </div>
            </div>
                <div class="col-md-12">
                    <div style="margin-top:20px; width:100%;" class="panel">
                        <div style="margin:20px">
                            <p>{{$about->description}}</p>
                        </div>
                    </div>
            </div>
            <div class="row text-center">
                <div class="col-md-12">
                    <div style="display: inline-block;" class="panel">
                        <div style="">
                            <iframe style="border: 0;" src="{{$about->gmap}}" width="600" height="450"
                                    frameborder="0" allowfullscreen="allowfullscreen"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <script>
        document.getElementById("banner").style.display = 'none';
    </script>
@endsection
