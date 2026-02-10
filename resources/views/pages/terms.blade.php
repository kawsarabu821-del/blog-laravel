  @extends('layout.partials.app')
  @section('title','Terms')
  @section('content')
 
    <!-- ======================= breadcrumb Start  ============================ -->
   <div class="breadcrumb_sec py-3">
        <div class="container">
            <nav>
                <ol class="breadcrumb m-0">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item active">Terms & Conditions</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- ======================= breadcrumb End  ============================ -->
 <div class="custom_section pb-5">
        <div class="container">
            <div class="bg-white rounded p-4 border">
                <div class="page_content">
                    <h1 class="page_title">{{ $terms->title }}</h1>
                    <div class="desc">
                        <p>{{ $terms->content ?? 'No Content' }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

 @endsection