@extends('theme.master')

@section('about-active', 'active')

@section('content')


<!-- About Me Section Begin -->
<section class="about-me spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="about-left">
                    <img src="{{asset('assets')}}/img/about-me.jpg" alt="">
                    <div class="about-title">
                        <span>16 January 2019</span>
                        <h2>I’m Maria Smith, <br />a mother & a food blogger</h2>
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
                            volutpat id. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="about-right">
                    <div class="sidebar">
                        <div class="sidebar-item">
                            <a href="#"><img src="{{asset('assets')}}/img/cat-feature/small-1.jpg" alt=""></a>
                            <div class="sidebar-item-text">
                                <div class="cat-name">Vegan</div>
                                <h6>One Pot Weeknight Lasagna Soup Recipe</h6>
                            </div>
                        </div>
                        <div class="sidebar-item">
                            <a href="#"><img src="{{asset('assets')}}/img/cat-feature/small-2.jpg" alt=""></a>
                            <div class="sidebar-item-text">
                                <div class="cat-name">Vegan</div>
                                <h6>Lava Cake with a Tone of Chocolate</h6>
                            </div>
                        </div>
                        <div class="sidebar-item">
                            <a href="#"><img src="{{asset('assets')}}/img/cat-feature/small-3.jpg" alt=""></a>
                            <div class="sidebar-item-text">
                                <div class="cat-name">Vegan</div>
                                <h6>One Pot Weeknight Lasagna Soup Recipe</h6>
                            </div>
                        </div>
                        <div class="sidebar-item">
                            <a href="#"><img src="{{asset('assets')}}/img/cat-feature/small-4.jpg" alt=""></a>
                            <div class="sidebar-item-text">
                                <div class="cat-name">Vegan</div>
                                <h6>Smoked Salmon mini Sandwiches with Onion</h6>
                            </div>
                        </div>
                        <div class="sidebar-item">
                            <a href="#"><img src="{{asset('assets')}}/img/cat-feature/small-5.jpg" alt=""></a>
                            <div class="sidebar-item-text">
                                <div class="cat-name">Vegan</div>
                                <h6>Asparagus with Pork Loin and Vegetables</h6>
                            </div>
                        </div>
                        <div class="sidebar-item">
                            <a href="#"><img src="{{asset('assets')}}/img/cat-feature/small-6.jpg" alt=""></a>
                            <div class="sidebar-item-text">
                                <div class="cat-name">Vegan</div>
                                <h6>Dry Cookies with Corn</h6>
                            </div>
                        </div>
                        <div class="sidebar-item">
                            <a href="#"><img src="{{asset('assets')}}/img/cat-feature/small-7.jpg" alt=""></a>
                            <div class="sidebar-item-text">
                                <div class="cat-name">Vegan</div>
                                <h6>Italian Tiramisu with Coffe</h6>
                            </div>
                        </div>
                    </div>
                    <div class="about-right-add set-bg" data-setbg="{{asset('assets')}}/img/about-right.jpg">
                        <h4>Buy my Cook Book</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Me Section End -->


@endsection