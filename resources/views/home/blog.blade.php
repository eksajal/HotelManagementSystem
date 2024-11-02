<div class="blog">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>Blog</h2>
                    <p>Lorem Ipsum available, but the majority have suffered </p>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach ($blog as $blog)
                
            <div class="col-md-4">
                <div class="blog_box">
                    <div class="blog_img">
                        <figure><img src="/blog/{{ $blog->image }}" alt="#" /></figure>
                    </div>
                    <div class="blog_room">
                        <h3>{{ $blog->title }}</h3>
                        <span>{{ Str::limit($blog->sub_title, 30) }}</span>
                        <p>{{ Str::limit($blog->description, 70) }}</p>
                        <a class="btn" href="{{ url('blog_details', $blog->id) }}">Details</a>
                    </div>
                </div>
            </div>

            @endforeach
            
        </div>
    </div>
</div>
