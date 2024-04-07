<footer class="footer-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="fs-left">
                    <div class="logo">
                        <a href="./index.html">
                            <img src="{{asset('assets')}}/img/footer-logo.png" alt="">
                        </a>
                    </div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                        viverra maecenas accumsan lacus vel facilisis.</p>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <form action="{{ route('Subscriber.store') }}" class="subscribe-form" method="POST">
                    @csrf
                    <h3>Subscribe to our newsletter</h3>
                    @if (session('subscriberStatus'))
                    <div class="alert alert-success">
                        {{ session('subscriberStatus') }}
                    </div>
                    @endif
                    <input type="email" placeholder="Your e-mail" name="email">
                    <button type="submit">Subscribe</button>
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </form>
                <div class="social-links">
                    <a href="#"><i class="fa fa-instagram"></i><span>Instagram</span></a>
                    <a href="#"><i class="fa fa-pinterest"></i><span>Pinterest</span></a>
                    <a href="#"><i class="fa fa-facebook"></i><span>Facebook</span></a>
                    <a href="#"><i class="fa fa-twitter"></i><span>Twitter</span></a>
                    <a href="#"><i class="fa fa-youtube"></i><span>Youtube</span></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright-text">
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved | This template is made with <i class="fa fa-heart-o"
                        aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                </div>
            </div>
        </div>
    </div>
</footer>
