  @extends('layout.partials.app')
  @section('title','Single Category')
  @section('content')
   <!-- ======================= breadcrumb Start  ============================ -->
    <div class="breadcrumb_sec py-3">
      <div class="container">
        <nav>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active"> Category : <strong> {{ $single_cat->title }} </strong></li>
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
 
 <!-- banner advertisement end -->
  <div class="blog_section bg-white overflow-hidden pt-4 pb-4">
    <div class="container">
        <div class="row g-4">
                <div class="col-xl-3 order-xl-2">
                    @include ("layout.partials.sidebar");
                </div>
                <div class="col-xl-9 order-xl-1">
                    <div class="blog_wrapper">
                        <div class="row gy-4">

                <!-- blog post -->

                @foreach($allPosts as $post)

                <div class="col-md-6">
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
                                            <img src="assets/images/tag.svg" alt="Tag">
                                        </div>
                                        <div class="date"><span>
                                             {{ $post->category->title }} 
                                        </span></div>
                                    </div>
                                </div>
                                <div class="mb-2 mb-sm-0 me-3">
                                    <div class="d-flex align-items-center">
                                        <div class="icon me-1">
                                            <img src="assets/images/calendar.svg" alt="Date">
                                        </div>
                                        <div class="date"><span>{{ $post->created_at->format('jS M, Y') }}</span></div>
                                    </div>
                                </div>
                                <div class="">
                                    <div class="d-flex align-items-center">
                                        <div class="icon me-1">
                                            <img src="assets/images/eye.svg" alt="View">
                                        </div>
                                        <div class="date"><span>{{ $post->views }}</span></div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="mb-3">
                                <a href="{{$post->post_slug}}">{{ $post->title }}</a>
                            </h3>
                            <div class="blog_desc mb-2">
                                <p>{{ Str::limit(strip_tags($post->content), 100, '...') }}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="card-footer mt-2 bg-transparent border-0 blog_content p-0">
                            <a class="learn_more" href="{{route('blog.single',$post->slug)}}">Read More</a>
                        </div>
                    </div>
                </div>

                     @endforeach

                        </div>
                    </div>

                </div>
            </div>
           </div>
    </div>

 @endsection