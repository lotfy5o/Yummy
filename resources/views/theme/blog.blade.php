@extends('theme.master')

@section('blog-active', 'active')

@section('content')
<!-- Blog Section Begin -->
<section class="blog-section spad">
    <div class="blog-pic">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <img src="{{asset('assets')}}/img/blog-img.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-text">
                    <div class="blog-title">
                        <span>16 January 2019</span>
                        <h2>5 Tips for e Perfect Steak</h2>
                        <ul class="tags">
                            <li>Desert</li>
                            <li>Asian</li>
                            <li>Spicy</li>
                        </ul>
                    </div>
                    <div class="blog-desc">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                            ut labore et dolore magna aliqua. Lorem ipsum dolor sit amet. Donec in sodales dui, a
                            blandit nunc. Pellentesque id eros venenatis, sollicitudin neque sodales, vehicula nibh.
                            Nam massa odio, porttitor vitae efficitur non, ultricies volutpat tellus. Cras egestas
                            in lacus a finibus. Suspendisse sed urna at elit condimentum viverra. Suspendisse non
                            lobortis nisi. Maecenas accumsan quam quis porta laoreet. Aliquam felis odio, aliquet
                            fermentum semper at, porttitor ac mi. Duis vel condimentum risus. Phasellus eu dolor vel
                            neque commodo accumsan eget et enim. Pellentesque non elit sed risus tincidunt aliquam
                            eu eget metus.</p>
                        <p>Donec sit amet enim tortor. Sed egestas nulla nibh, vitae porta velit sagittis eget.
                            Donec vitae tellus semper, cursus sem id, iaculis purus. Aenean ligula risus, maximus
                            tristique eros vel, auctor ornare tortor. Aliquam vel augue sapien. Duis non auctor
                            ante, ac vestibulum tortor. Etiam quis dolor ultricies, dignissim ante a, ornare ipsum.
                            Phasellus suscipit rhoncus nulla, quis bibendum tortor elementum ac. Nullam viverra
                            tellus diam, nec accumsan orci aliquam sed. Sed placerat sagittis lacus, non rutrum diam
                            volutpat id.</p>
                        <p>Pellentesque tempor lectus nisi, ut consectetur mauris feugiat et. Nam lacinia placerat
                            sem nec consequat. Praesent tempus eros vitae iaculis sollicitudin. Nulla facilisi.
                            Aenean sit amet magna in nunc malesuada ornare quis sed libero. Aenean ornare rutrum
                            vestibulum. Morbi a mi vel nunc bibendum viverra sed ut dui. Proin accumsan, neque quis
                            fringilla bibendum, lectus neque interdum odio, quis blandit metus nibh sit amet nibh.
                            Vivamus lobortis libero non tellus imperdiet fringilla. Sed quis enim id odio blandit
                            maximus ut a mi. Aenean enim ante, rutrum id cursus ac, facilisis at sapien. Vestibulum
                            facilisis quam sit amet leo elementum, eu tincidunt nibh blandit. Nam sit amet faucibus
                            nunc, a venenatis dolor. Nulla tempus ornare massa vitae malesuada. Curabitur ultricies
                            faucibus ipsum id imperdiet. Donec in dolor ex.</p>
                        <div class="blog-quote">
                            <i class="fa fa-quote-left"></i>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices
                                gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis.</p>
                        </div>
                    </div>
                    <div class="blog-comment">
                        <h3>Comments (3)</h3>
                        <div class="single-comment">
                            <img src="{{asset('assets')}}/img/blog-comment.png" alt="">
                            <ul>
                                <li>Maria Smith</li>
                                <li>March 29, 2019</li>
                                <li>Reply</li>
                            </ul>
                            <p>amet magna in nunc malesuada ornare quis sed libero. Aenean ornare rutrum vestibulum.
                                Morbi a mi vel nunc bibendum viverra sed ut dui. Proin accumsan, neque quis
                                fringilla bibendum, lectus neque interdum odio, quis blandit metus nibh sit amet
                                nibh. Vivamus lobortis libero non tellus imperdiet fringilla. Sed quis enim id odio
                                blandit maximus ut a mi. Aenean enim ante, rutrum id cursus ac, facilisis at sapien.
                                Vestibulum facilisis quam sit amet leo elementum.</p>
                        </div>
                    </div>
                    <form action="#" class="comment-form">
                        <h3>Leave a Comment</h3>
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" placeholder="Your name">
                            </div>
                            <div class="col-lg-6">
                                <input type="text" placeholder="Your email">
                            </div>
                            <div class="col-lg-12">
                                <textarea placeholder="Comment"></textarea>
                            </div>
                        </div>
                        <button type="submit">Post</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Section End -->

<!-- Similar Recipe Section Begin -->
@include('partials.similar-recipe')
<!-- Similar Recipe Section End -->
@endsection