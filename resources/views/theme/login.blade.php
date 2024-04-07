@extends('theme.master')


@section('content')
<!-- Contact Section Begin -->
<section class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <form action="{{ route('login') }}" class="contact-form" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-8 mx-auto">


                            <div class="">
                                <input type="text" placeholder="Enter email address" name="email">
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
                            <div class="">
                                <input type="text" placeholder="Enter your password" name="password">
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <div>
                                <a class="mr-3" href="{{ route('register') }}">Don't Have an Account?</a>
                                <button type="submit">Login</button>
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
