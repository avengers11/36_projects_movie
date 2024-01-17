<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WELCOME</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('style/style.css') }}?v=3.0.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <div class="container">
        <div class="home_header">
            {{-- <p class="title">Username: {{$userData['username']}} <br> @if(intval(($userData['expired']-time())/86400) < 1) Expired Today @else Validity:  {{intval(($userData['expired']-time())/86400)+1}} days @endif</p> --}}

            <span></span>

            <h2 style="color: red;font-weight: bold;font-family: math; margin-bottom:0">NETFLIX</h2>

            <a href="{{route('users_profile_web')}}" class="content_wrapper18">
                <img style="width: 2.3rem; cursor:pointer" src="{{asset('images\icons\profile.png')}}" alt="">
            </a>
        </div>
    </div>

    <div class="container">

        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                @foreach ($slider as $item)
                    <a href="{{ $item['links'] }}" class="swiper-slide">
                        <img style="height:30vh" src="{{ asset('images/slider/'.$item['img']) }}" alt="">
                    </a>
                @endforeach
            </div>
        </div>

        <div class="card_row">
            @php
                if(Route::is("users_home_web")){
                    $active = "SERVER 1";
                }else if(Route::is("users_server2tv_web")){
                    $active = "SERVER 2";
                }else{
                    $active = "SERVER 3";
                }
            @endphp

            @if (Route::is("users_home_web"))
                <div class="row"  style="padding: 12px;">
                    <input type="hidden" id="hidden_value" value="@if(session() -> has('content18')){{$management['link_18']}}@else{{$management['normal_link']}}@endif" />
                    <div style="background: red;padding: 12px;border-radius: 25px;" class="input-group">
                        <button style="height: 30px; padding: 3px 12px; font-size: 15px; border-radius: 25px 0 0 25px;" class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">{{$active}}</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('users_home_web')}}">SERVER 1</a></li>
                            <li><a class="dropdown-item" href="{{route('users_server2tv_web')}}">SERVER 2</a></li>
                            <li><a class="dropdown-item" href="{{route('users_livetv_web')}}">SERVER 3</a></li>
                        </ul>
                        <input style="height: 30px;" type="text" class="form-control" style="text-align: center" id="search_input" placeholder="Search" />
                        <a style="height: 30px; padding: 3px 12px; font-size: 15px; border-radius: 0 25px 25px 0;" href="" id="search_data" class="btn btn-secondary"><i class="fa-solid fa-magnifying-glass"></i></a>
                    </div>
                </div>
            @elseif(Route::is("users_server2tv_web"))
                <div class="row"  style="padding: 12px;">
                    <input type="hidden" id="hidden_value" value="@if(session() -> has('content18')){{$management['server2_18']}}@else{{$management['server2_normal']}}@endif" />
                    <div style="background: red;padding: 12px;border-radius: 25px;" class="input-group">
                        <button style="height: 30px; padding: 3px 12px; font-size: 15px; border-radius: 25px 0 0 25px;" class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">{{$active}}</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('users_home_web')}}">SERVER 1</a></li>
                            <li><a class="dropdown-item" href="{{route('users_server2tv_web')}}">SERVER 2</a></li>
                            <li><a class="dropdown-item" href="{{route('users_livetv_web')}}">SERVER 3</a></li>
                        </ul>
                        <input style="height: 30px;" type="text" class="form-control" style="text-align: center" id="search_input" placeholder="Search" />
                        <a style="height: 30px; padding: 3px 12px; font-size: 15px; border-radius: 0 25px 25px 0;" href="" id="search_data" class="btn btn-secondary"><i class="fa-solid fa-magnifying-glass"></i></a>
                    </div>
                </div>
            @else
                <div class="row"  style="padding: 12px;">
                    <input type="hidden" id="hidden_value" value="@if(session() -> has('content18')){{$management['server3_18']}}@else{{$management['server3_normal']}}@endif" />
                    <div style="background: red;padding: 12px;border-radius: 25px;" class="input-group">
                        <button style="height: 30px; padding: 3px 12px; font-size: 15px; border-radius: 25px 0 0 25px;" class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">{{$active}}</button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{route('users_home_web')}}">SERVER 1</a></li>
                            <li><a class="dropdown-item" href="{{route('users_server2tv_web')}}">SERVER 2</a></li>
                            <li><a class="dropdown-item" href="{{route('users_livetv_web')}}">SERVER 3</a></li>
                        </ul>
                        <input style="height: 30px;" type="text" class="form-control" style="text-align: center" id="search_input" placeholder="Search" />
                        <a style="height: 30px; padding: 3px 12px; font-size: 15px; border-radius: 0 25px 25px 0;" href="" id="search_data" class="btn btn-secondary"><i class="fa-solid fa-magnifying-glass"></i></a>
                    </div>
                </div>
            @endif

            <div id="all_products_wrapper" class="row ">
                <div class="col-8">
                    <div class="row">
                        @foreach ($products as $item)
                            @php
                                if(Route::is("users_livetv_web")){
                                    $links = $item['links1'];
                                }else{
                                    $links = $item['links'];
                                }
                            @endphp
                                <a href="{{ $links }}" class="col-6 mt-3 mb-1">
                                    <img class="images" src="{{ asset('images/products/'.$item['pic']) }}" alt="">
                                    <h2 class="title">{{ $item['name'] }}</h2>
                                </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>

    </div>


    <input type="hidden" id="where" value="{{$where}}" />

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/js/bootstrap.min.js" integrity="sha512-Pv/SmxhkTB6tWGQWDa6gHgJpfBdIpyUy59QkbshS1948GRmj6WgZz18PaDMOqaEyKLRAvgil7sx/WACNGE4Txw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const urls = {
            'content18' : '{{ route('users_home_content18_api') }}',
            'expired_time' : '{{ route('users_home_getexpired_time_api') }}',
            'search' : '{{ route('users_home_search_api') }}',
            'home_bg' : '{{ route('users_home_change_bg_color_api') }}',
            'url' : '{{ url("/") }}',
        }
    </script>
    <script src="{{ asset('script\users\home.js') }}"></script>
</body>
</html>
