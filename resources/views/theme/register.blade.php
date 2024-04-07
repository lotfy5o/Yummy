@extends('theme.master')


@section('content')
<!-- Contact Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('register') }}" class="contact-form" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-8 mx-auto">

                            <div>
                                <input type="text" placeholder="Enter your name" name="name">
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>
                            <div>
                                <input type="text" placeholder="Enter email address" name="email">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div>
                                <input type="text" placeholder="Enter your password" name="password">
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>
                            <div>
                                <input type="text" placeholder="Enter your password confirmation"
                                    name="password_confirmation">
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>
                            <div>
                                <a class="mr-3" href="{{ route('login') }}">Already Registered?</a>
                                <button type="submit">Register</button>
                            </div>
                        </div>

                    </div>

                </form>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->


@endsection
