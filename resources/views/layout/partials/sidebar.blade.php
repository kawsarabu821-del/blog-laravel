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
            </ul>
        </div>
    </div>
    <div class="p-3 p-xl-4 border rounded mt-2">
        <div class="card_header mb-4">
            <h3>Latest Posts</h3>
        </div>
        <div class="latestpost_list">
            <ul>
                @foreach($latest_posts as $lpost )
                <li><a href="{{route('blog.single',$lpost->slug)}}"> {{$lpost->title}}</a></li>
                @endforeach
            </ul>
        </div>
    </div>
</div>