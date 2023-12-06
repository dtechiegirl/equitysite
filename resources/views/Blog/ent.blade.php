




@include('layouts')
<body class="">




<!-- HEADER -->
@include('nav')


<div class="col-lg-4 col-md-12 order-lg-3 order-1">
    <div class="row">
    <div class="col-lg-12 col-md-6">
        @foreach($posts as $post)
<div class="blog-single1 style-2">
    <div class="image">
    <span class="blog-badge">Violence</span>
    <a href="blog-details.html"><img src="{{asset('images/' . $post->picture)}}" class="img-fluid" alt="image"></a>
    </div>
    <div class="text">
    <div class="post-meta">
    <div class="date">{{date('jS M Y', strtotime($post->updated_at))}}</div>
    {{-- <a href="blog-details.html" class="comment">Comments (20)</a> --}}
    </div>
    <h4><a href="/blog/{{$post->id}}">{{$post->title}}.</a></h4>
    <h4><a href="/blog/{{$post->id}}">{{$post->description}}.</a></h4>
    {{-- <h4><a href="blog-details.html">In a augue sit amet erat Suspe eleifend suscipit issen.</a></h4> --}}
    </div>
    </div>
    @endforeach
    </div>
    </div>
</div>


    @include('footer')

</body>

<!-- Mirrored from demo.egenslab.com/html/Equity Law Firm/preview/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Oct 2023 16:59:14 GMT -->
</html>