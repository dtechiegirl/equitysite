@include('layouts')
<body class="">
 @include('nav')

 <div class="breadcrumb-section">
    <div class="container">
    <div class="row d-flex justify-content-center align-items-center text-center">
    <div class="col-lg-6">
    <h2 class="breadcrumb-title wow fadeInLeft" data-wow-duration="1.5s" data-wow-delay=".2s">Blog Posts</h2>
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb d-flex justify-content-center">
    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Blog Posts</li>
    </ol>
    </nav>
    </div>
    </div>
    </div>
    </div>

    
    <div class="casestudy-gallery pt-120 pb-120" id="portfolio">
        <div class="container">
        <div class="row justify-content-center">
        <div class="section-title2 text-center">
        <h2>Completed Cases</h2>
        </div>
        </div>
        <div class="row justify-content-center">
        <div class="col-xl-6 col-lg-8 col-md-10">
        <div class="button-group filter-button-group d-flex flex-wrap flex-row justify-content-md-between justify-content-center gap-3 mb-60">
        {{-- <button data-filter="*">all</button> --}}
        <a href="" style="font-size: bold">All</a>
        <a href="">Testimonials</a>
        <a href="">Alumni</a>
        <a href="">Client Experience</a>
        {{-- <button data-filter=".training">Testimonials</button>
        <button data-filter=".maintenance">Alumni</button>
        <button data-filter=".pilot, .alkaline-earth">Client Experience</button> --}}
        {{-- <button data-filter=":not(.transition)">Realstate</button> --}}
        {{-- <button data-filter=":not(.transition)">Violence</button> --}}
        </div>
        </div>
        
        <div class="col-12">
        <div class="grid row d-flex justify-content-center g-4">
            @foreach($posts as $post)
        <div class="col-lg-4 col-md-6 col-sm-6 training transition">
        <div class="casestudy-single wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
        <img src="{{asset('images/' . $post->picture)}}" class="casestudy1" alt="image">
        <a href="/blog/{{$post->slug}}" class="read-more"><span class="btn-text">Read more</span><span class="btn-arrow"><i class="bi bi-arrow-right"></i></span></a>
        <div class="text">
        <span>{{$post->title}}</span>
        <h3><a href="/blog/{{$post->slug}}">{{$post->description}}</a></h3>
        @auth
        {{-- <li>Hello, {{auth()->user()->full_name}}</li> --}}
       @if(auth()->user()->is_admin == 1)
       {{-- <a href="{{route('create-post')}}" class="">Create Post</a> --}}
       <a href="/blog/{{$post->id}}/edit">Edit Post</a>
       <a href="/blog/{{$post->slug}}/delete">Delete Post</a>
         @endif 
         @endauth
        </div>
        </div>
        </div>
        @endforeach
        {{-- <div class="col-lg-4 col-md-6 col-sm-6 training maintenance alkaline-earth">
        <div class="casestudy-single wow fadeInDown" data-wow-duration="1.5s" data-wow-delay="0.4s">
        <img src="assets/images/bg/casestudy2.png" class="casestudy1" alt="image">
        <a href="case-datails.html" class="read-more"><span class="btn-text">Read more</span><span class="btn-arrow"><i class="bi bi-arrow-right"></i></span></a>
        <div class="text">
        <span>skirmish</span>
        <h3><a href="casestudy-details.html">Drug Offense</a></h3>
        </div>
        </div>
        </div> --}}
        </div>
        </div>
        </div>
        </div>
    </div>
    
        @include('footer')
</body>

<!-- Mirrored from demo.egenslab.com/html/Equity Law Firm/preview/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Oct 2023 16:59:14 GMT -->
</html>