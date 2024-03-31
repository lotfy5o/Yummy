<!DOCTYPE html>
<html lang="zxx">

@include('partials.head')

<body>
    <!-- Page Preloder -->
    @include('partials.preloder')

    <!-- Header Section Begin -->

    @include('partials.header')

    <!-- Header End -->

    <!-- Page Top Recipe Section Begin -->
    <section class="page-top-recipe">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-2">
                    <div class="pt-recipe-item large-item">
                        <div class="pt-recipe-img set-bg" data-setbg="{{asset('assets')}}/img/recipe-3.jpg">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="pt-recipe-text">
                            <span>March 10, 2019</span>
                            <h3>Cannellini Aglio e Olio with Salmon</h3>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 order-lg-1">
                    <div class="pt-recipe-item">
                        <div class="pt-recipe-img set-bg" data-setbg="{{asset('assets')}}/img/recipe-1.jpg">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="pt-recipe-text">
                            <h4>Raw Vegan Carrot Cake Bites with Avocado</h4>
                        </div>
                    </div>
                    <div class="pt-recipe-item">
                        <div class="pt-recipe-img set-bg" data-setbg="{{asset('assets')}}/img/recipe-2.jpg">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="pt-recipe-text">
                            <h4>One Pot Weeknight Lasagna Soup Recipe</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 order-lg-3">
                    <div class="pt-recipe-item">
                        <div class="pt-recipe-img set-bg" data-setbg="{{asset('assets')}}/img/recipe-4.jpg">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="pt-recipe-text">
                            <h4>Beef Burger with French Fries and Salad</h4>
                        </div>
                    </div>
                    <div class="pt-recipe-item">
                        <div class="pt-recipe-img set-bg" data-setbg="{{asset('assets')}}/img/recipe-5.jpg">
                            <i class="fa fa-plus"></i>
                        </div>
                        <div class="pt-recipe-text">
                            <h4>Raspberry Pancakes with Honey and Butter</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Page Top Recipe Section End -->


    <!-- Categories Filter Section Begin -->
    <div class="categories-filter-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="filter-item">
                        <ul>
                            <li class="active" data-filter="*">Vegetarian</li>
                            <li data-filter=".mostpopular">Most popular</li>
                            <li data-filter=".meatlover">Meat Lover</li>
                            <li data-filter=".glutenfree">Gluten Free</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="cf-filter" id="category-filter">
                <div class="cf-item mix all mostpopular">
                    <div class="cf-item-pic">
                        <img src="{{asset('assets')}}/img/cate-filter/cate-filter-1.jpg" alt="">
                    </div>
                    <div class="cf-item-text">
                        <h5>Sunday Brunch: Spaghetti and Eggs Recipe</h5>
                    </div>
                </div>
                <div class="cf-item mix all mostpopular">
                    <div class="cf-item-pic">
                        <img src="{{asset('assets')}}/img/cate-filter/cate-filter-2.jpg" alt="">
                    </div>
                    <div class="cf-item-text">
                        <h5>Sunday Brunch: Spaghetti and Eggs Recipe</h5>
                    </div>
                </div>
                <div class="cf-item mix all meatlover mostpopular">
                    <div class="cf-item-pic">
                        <img src="{{asset('assets')}}/img/cate-filter/cate-filter-3.jpg" alt="">
                    </div>
                    <div class="cf-item-text">
                        <h5>Sunday Brunch: Spaghetti and Eggs Recipe</h5>
                    </div>
                </div>
                <div class="cf-item mix all meatlover">
                    <div class="cf-item-pic glutenfree">
                        <img src="{{asset('assets')}}/img/cate-filter/cate-filter-4.jpg" alt="">
                    </div>
                    <div class="cf-item-text">
                        <h5>Sunday Brunch: Spaghetti and Eggs Recipe</h5>
                    </div>
                </div>
                <div class="cf-item mix all meatlover glutenfree">
                    <div class="cf-item-pic">
                        <img src="{{asset('assets')}}/img/cate-filter/cate-filter-5.jpg" alt="">
                    </div>
                    <div class="cf-item-text">
                        <h5>Sunday Brunch: Spaghetti and Eggs Recipe</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Categories Filter Section End -->



    <!-- Footer Section Begin -->
    @include('partials.footer')
    <!-- Footer Section End -->

    <!-- Search model -->
    @include('partials.search-model')
    <!-- Search model end -->

    <!-- Js Plugins -->
    @include('partials.scripts')
</body>

</html>