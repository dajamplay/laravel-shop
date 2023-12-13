<div class="col-6 col-sm-6 px-2 mb-3">
    <div class="card br-10 shadow-card">
        <div class="card-body p-3">
            <h5 class="card-title text-center"><a href="{{$post->slug}}">{{$post->title}}</a></h5>
        </div>
        <a href="{{route('blog.posts.show', $post->slug)}}" class="card-img-top img-hover-effect">
            <img src="{{storage($post->image)}}" alt="{{$post->title}}" class="br-10">
        </a>
        <div class="card-body p-3">
            <p>{!! Str::limit($post->content, 200, ' ... ') !!}<a class="post-link-more" href="{{route('blog.posts.show', $post->slug )}}">(читать полностью)</a></p>
        </div>
    </div>
</div>
