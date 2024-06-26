@extends('theme.master')

@section('contact-active', 'active')

@section('content')
<!-- Contact Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('contact-us.store') }}" class="contact-form" method="POST">
                    @csrf
                    <h3>Contact Us</h3>
                    @if (session('contactStatus'))
                    <div class="alert alert-success">
                        {{ session('contactStatus') }}
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-lg-6">

                            <input type="text" placeholder="Your name" name="name">
                            <x-input-error :messages="$errors->get('name')" class="" />
                        </div>
                        <div class="col-lg-6">
                            <input type="text" placeholder="Your email" name="email">
                            <x-input-error :messages="$errors->get('email')" class="" />

                        </div>
                        <div class="col-lg-12">
                            <input type="text" placeholder="Subject" name="subject">
                            <x-input-error :messages="$errors->get('subject')" class="" />

                            <textarea placeholder="Message" name="message"></textarea>
                        </div>
                    </div>
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->

<!-- Map Section Begin -->
<div class="map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26440.72384129847!2d-118.24906619231132!3d34.06719475913053!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2c659f50c318d%3A0xe2ffb80a9d3820ae!2sChinatown%2C%20Los%20Angeles%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1570213740685!5m2!1sen!2sbd"
        height="550" style="border:0;" allowfullscreen=""></iframe>
    <div class="map-content set-bg" data-setbg="{{asset('assets')}}/img/map-bg.png">
        <div class="contact-addr"> col-md-6
            <span>Main Road , No 25/11</span>
            <ul>
                <li>+34 556788 3221</li>
                <li>contact@foodblog.com</li>
            </ul>
        </div>
    </div>
</div>
<!-- Map Section End -->
@endsection
