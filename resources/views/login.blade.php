@include('layouts')
<body>




<div class="topbar">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-md-3">
<div class="phone-call2 d-flex justify-content-start align-items-center flex-row gap-2">
<div class="icon">
<img src="assets/images/icons/call-icon2.svg" alt="image" class="img-fluid mt-1">
</div>
<div class="number">
<span>Call Us Now</span>
<h5><a href="tel:+234 705 843 5533">+234 705 843 5533</a> </h5>
{{-- <h5><a href="tel:+8801701111000">+880 170 1111 000</a></h5> --}}
</div>
</div>
</div>
<div class="col-md-6 text-center">
<div class="appontment">
{{-- <h6>We Are Work Hard Any Case <a href="contact.html">Appoinment</a> Now</h6> --}}
</div>
</div>
<div class="col-md-3 d-flex justify-content-end">
<div class="phone-call2 d-flex justify-content-start align-items-center flex-row gap-2">
<div class="icon">
<img src="assets/images/icons/envelope2.svg" alt="image" class="img-fluid mt-1">
</div>
<div class="number">
<span>Email Now</span>
<h5><a href="https://demo.egenslab.com/cdn-cgi/l/email-protection#6b02050d042b0e130a061b070e45080406"><span class="__cf_email__" data-cfemail="462f28202906233e272b362a236825292b">[email&#160;protected]</span></a></h5>
</div>
</div>
</div>
</div>
</div>
</div>


@include('nav')





<div class="contact-section pt-120">
<div class="container">
<div class="row gy-5">
<div class="col-lg-6 col-md-6">
<div class="address-area">
<div class="section-title2 mb-50">
<h2>Login Now.</h2>
</div>
<ul class="address-list sibling3">
<li>
<div class="icon">
<svg width="44" height="44" viewBox="0 0 44 44" xmlns="http://www.w3.org/2000/svg">
<g clip-path="url(#clip0_153_65)">
<path d="M22 0.125C13.519 0.125 6.61914 7.02485 6.61914 15.5059C6.61914 18.3713 7.41288 21.1677 8.91508 23.5938L21.1245 43.2691C21.3584 43.646 21.7704 43.875 22.2135 43.875C22.217 43.875 22.2203 43.875 22.2237 43.875C22.6707 43.8715 23.0836 43.6354 23.3132 43.2519L35.2114 23.386C36.6307 21.0112 37.3809 18.2863 37.3809 15.5059C37.3809 7.02485 30.481 0.125 22 0.125ZM33.0115 22.0699L22.1941 40.1311L11.0939 22.2432C9.84348 20.2239 9.16553 17.8942 9.16553 15.5059C9.16553 8.43835 14.9325 2.67139 22 2.67139C29.0675 2.67139 34.8259 8.43835 34.8259 15.5059C34.8259 17.8233 34.1927 20.0935 33.0115 22.0699Z" />
<path d="M22 7.81543C17.7595 7.81543 14.3096 11.2654 14.3096 15.5059C14.3096 19.7193 17.7034 23.1963 22 23.1963C26.3496 23.1963 29.6904 19.673 29.6904 15.5059C29.6904 11.2654 26.2405 7.81543 22 7.81543ZM22 20.6499C19.1582 20.6499 16.856 18.34 16.856 15.5059C16.856 12.6789 19.173 10.3618 22 10.3618C24.827 10.3618 27.1355 12.6789 27.1355 15.5059C27.1355 18.2986 24.8868 20.6499 22 20.6499Z" />
</g>
<defs>
<clipPath id="clip0_153_65">
<rect width="43.75" height="43.75" fill="white" transform="translate(0.125 0.125)" />
</clipPath>
</defs>
</svg>
</div>
<div class="text">
<h4>Location</h4>
<p>Adekunle Ajasin University Campus</p>
</div>
</li>
<li>

<div class="text">
<h4>Phone</h4>
<a href="tel:+234 705 843 5533">+234 705 843 5533</a> <br>
<a href="tel:+234 906 055 7789">+234 906 055 7789</a>
</div>
</li>
<li>


</li>
</ul>
</div>
</div>
<div class="col-lg-6 col-md-12 text-md-start text-center">
<div class="section-title2 mb-50">
{{-- <h2>Have Any Questions</h2> --}}
</div>
@if(session()->has('message'))
<h3 style="color: red">{{session()->get('message')}}</h3>
@endif
    
        <form action="/auth" method="post" class="contact-form" >
        @csrf
<div class="row">
    @error('email')
    <p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
    @enderror
<div class="col-lg-12">
<div class="form-inner sibling2">
<input type="text" placeholder="Enter your Email" name="email">
</div>
</div>

@error('password')
<p x-data = "{show:true}" x-init= "setTimeout(()=> show = false, 5000)" x-show = "show" class="text-left text-danger fs-12px mb-15">{{$message}}</p>
@enderror
<div class="col-lg-6">
<div class="form-inner sibling2">
<input type="text" placeholder="Enter your Password" name="password">
</div>
</div>


<div class="col-lg-12 text-lg-start text-center">
<button type="submit" class="eg-btn btn--outline btn--lg sibling3 capsule">
Login &nbsp;<svg width="18" height="15" viewBox="0 0 22 13" xmlns="http://www.w3.org/2000/svg">
{{-- <path d="M21.9805 6.64708C21.955 6.74302 20.6834 7.78829 18.0766 9.85862C13.9311 13.156 14.0201 13.0954 13.5751 12.949C13.1809 12.8177 13.0219 12.5097 13.1809 12.1814C13.2127 12.1057 14.6369 10.9342 16.3408 9.5809L19.4309 7.11669V5.90479L16.3091 3.41534C14.23 1.75907 13.1682 0.885493 13.1427 0.789551C13.041 0.466377 13.2635 0.143203 13.6577 0.0472607C13.7595 0.0270623 13.8485 0.00181433 13.8612 0.00181433C14.0201 -0.0385824 14.8467 0.582518 18.1148 3.18306C20.6898 5.23824 21.955 6.27846 21.9805 6.36935C22.0059 6.45015 22.0059 6.57134 21.9805 6.64708Z" /> --}}
{{-- <path d="M17.4313 5.90479V7.11669L2.71236 7.10659C2.27365 7.10608 1.84766 7.10558 1.43438 7.10507C1.19278 7.10507 0.954985 7.10457 0.721643 7.10457C0.320448 7.09396 0 6.83189 0 6.51074C0 6.34662 0.0839268 6.19817 0.218718 6.09061C0.349695 5.98659 0.528993 5.92044 0.728001 5.9169L1.23283 5.9164L2.706 5.91488L17.4313 5.90479Z" /> --}}
</svg>
</button>
</div>
</div>
</form>
</div>
</div>
</div>
</div>
<div class="map-section pt-120 pb-0 overflow-hidden">
<div class="container-fluid px-0">
{{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d48330.162702269045!2d-74.29798882771155!3d40.792034138683825!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c3ab00d85ee855%3A0x93a15ba40269dd0!2sWest%20Orange%2C%20NJ%2007052%2C%20USA!5e0!3m2!1sen!2sbd!4v1658243800106!5m2!1sen!2sbd" height="500" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
</div>
</div>





@include('footer')
</body>

<!-- Mirrored from demo.egenslab.com/html/corelaw/preview/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Oct 2023 17:00:23 GMT -->
</html>