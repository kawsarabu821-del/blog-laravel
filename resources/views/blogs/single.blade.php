  @extends('layout.partials.app')
  @section('title','BlogSingle')
  @section('content')
   <!-- ======================= breadcrumb Start  ============================ -->
    <div class="breadcrumb_sec py-3">
        <div class="container">
            <nav>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="{{ url('/') }}">Home  </a> /
                        <a href="{{ route('blog.index') }}">Blog </a></li>
                    <li class="breadcrumb-item active"> {{ $blog_single->title }}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- ======================= breadcrumb End  ============================ -->
<!-- banner advertisement start -->
<div class="blog_section bg-white overflow-hidden pt-4">
    <div class="container">
    <div class="row g-4">
        <div class="col-12">
            <a href="#">
                <div class="ad-banner">
                    <img src="{{asset('assets/images/banner.png')}}" alt="Advertisement" class="ad-image">
                    </div>
                </a>
      </div>
    </div>
   </div>
 </div>
 <!-- banner advertisement end -->
  <div class="blog_section bg-white overflow-hidden pt-4 pb-4">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-3 order-xl-2">
                <div class="blog_sidebar">
                    <div class="p-3 p-xl-4 border rounded">
                        <div class="card_header mb-4">
                            <h3>Categories</h3>
                        </div>
                        <div class="categories_list">
                            <ul>
                                @foreach($categories as $category)
                                  <li>
                                    <a href="{{ route('category.single', $category->slug) }}">{{ $category->title }}</a>
                                </li>
                                @endforeach
                                <!-- <li><a href="#">Technology (1)</a></li> -->
                                <!-- <li><a href="#">Health & Wellness (1)</a></li>
                                <li><a href="#">Travel (1)</a></li>
                                <li><a href="#">Food & Recipes (1)</a></li>
                                <li><a href="#">Lifestyle (1)</a></li>
                                <li><a href="#">Finance (1)</a></li>
                                <li><a href="#">Education (1)</a></li>
                                <li><a href="#">Entertainment (1)</a></li>
                                <li><a href="#">Sports (1)</a></li>
                                <li><a href="#">Fashion (1)</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="p-3 p-xl-4 border rounded mt-2">
                        <div class="card_header mb-4">
                            <h3>Latest Posts</h3>
                        </div>
                        <div class="latestpost_list">
                            <ul>
                                @foreach( $latest_posts as $lpost )
                                <li><a href="{{ route( 'blog.single', $lpost->slug ) }}">{{ $lpost->title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="blog_wrapper">
                  <div class="blog_post p-3 p-lg-4 card h-100 bg-transparent shadow-sm border-opacity-10">
                        <div class="blog_img mb-4 position-relative">
                            <a href="details.html">
                                <img class="img-fluid rounded z-3" src="{{asset('assets/images/blog/car.jpg')}}"
                                    alt="Health & Wellness">
                            </a>
                        </div>
                        <div class="blog_content card-body p-0">
                            <div class="short_info d-sm-flex align-items-center mb-3">
                                <div class="mb-2 mb-sm-0 me-3">
                                    <div class="d-flex align-items-center">
                                        <div class="icon me-1">
                                            <img src="{{asset('assets/images/tag.svg')}}" alt="Tag">
                                        </div>
                                        <div class="date"><span>
                                             {{ $blog_single->category->title }} 
                                        </span></div>
                                    </div>
                                </div>
                                <div class="mb-2 mb-sm-0 me-3">
                                    <div class="d-flex align-items-center">
                                        <div class="icon me-1">
                                            <img src="{{asset('assets/images/calendar.svg')}}" alt="Date">
                                        </div>
                                        <div class="date"><span>{{ $blog_single->created_at->format('jS M, Y') }}</span></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex align-items-center">
                                        <div class="icon me-1">
                                            <img src="{{asset('assets/images/eye.svg')}}" alt="View">
                                        </div>
                                        <div class="date"><span>{{ $blog_single->views }}</span></div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="mb-3">
                                {{ $blog_single->title }}
                            </h3>
                            <div class="blog_desc mb-2">
                                <p>{{ Str::limit(strip_tags($blog_single->content)) }}</p>
                            </div>
                        </div>
                        <hr>
                  </div>
                </div>

            </div>
        </div>
    </div>
</div>
  <!-- ======================= Blog Details End  ============================ -->
    <!-- ======================= Related Post Start  ============================ -->
    <div class="related_section pt-5 pb-5 border-top">
        <div class="container">
            <div class="section_heading pb-4">
                <h1 class="section_title">You may also like</h1>
            </div>
            <div class="related_posts owl-theme owl-carousel">

                <!-- blog post -->
                @if($related_posts)
                @foreach($related_posts as $rpost)

                <div class="blog_post p-3 p-lg-4 card h-100 bg-transparent shadow-sm border-opacity-10">
                    <div class="blog_img mb-4 position-relative">
                        <a href="details.html">
                            <img class="img-fluid rounded z-3" src="{{asset('assets/images/blog/car.jpg')}}"
                                alt="">
                        </a>
                    </div>
                    <div class="short_info d-sm-flex align-items-center mb-3">
                        <div class="mb-2 mb-sm-0 me-3">
                            <div class="d-flex align-items-center">
                                <div class="icon me-1">
                                    <img src="{{asset('assets/images/tag.svg')}}" alt="Tag">
                                </div>
                                <div class="date"><span>{{ $rpost->category->title }}</span></div>
                            </div>
                        </div>
                        <div class="mb-2 mb-sm-0 me-3">
                            <div class="d-flex align-items-center">
                                <div class="icon me-1">
                                    <img src="{{asset('assets/images/calendar.svg')}}" alt="Date">
                                </div>
                                <div class="date"><span>{{ $rpost->created_at->format('jS M, Y') }}</span></div>
                            </div>
                        </div>
                        <div class="">
                            <div class="d-flex align-items-center">
                                <div class="icon me-1">
                                    <img src="{{asset('assets/images/eye.svg')}}" alt="View">
                                </div>
                                <div class="date"><span>{{$rpost->views}}</span></div>
                            </div>
                        </div>
                    </div>
                    <div class="blog_content card-body p-0">
                        <h3 class="mb-3">
                            <a href="{{route('blog.single', $rpost->slug)}}">
                                {{$rpost->title}}
                            </a>
                        </h3>
                        <div class="blog_desc mb-2">
                            <p>{{Str::limit(strip_tags($rpost->content),100, '...')}}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="card-footer mt-2 bg-transparent border-0 blog_content p-0">
                        <a class="learn_more" href="{{route('blog.single',$rpost->slug)}}">Read More</a>
                    </div>
                </div>
                
                @endforeach

                @else

                echo "No Related Posts"

                @endif

            </div>
        </div>
    </div>
    <!-- ======================= Related Post End  ============================ -->
 @endsection