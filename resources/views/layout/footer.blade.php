<!-- Footer -->
<footer class="footer">
    <div class="container">
        <div class="row gap-y align-items-center">

            <div class="col-6 col-lg-3">
                <a href="{{ url('/') }}"><img src="{{ asset('assets/img/fornax-studio-logo.png') }}" alt="{{ config('app.name') }} Logo" width="160"></a>
            </div>

            <div class="col-6 col-lg-3 text-right order-lg-last">
                {{--<div class="social">
                    <a class="social-facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                    <a class="social-twitter" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                    <a class="social-instagram" href="https://www.instagram.com//"><i class="fa fa-instagram"></i></a>
                    <a class="social-dribbble" href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a>
                </div>--}}
            </div>

            <div class="col-lg-6">
                <div class="nav nav-bold nav-uppercase nav-trim justify-content-lg-center">
                    <a class="nav-link" href="{{ url('/') }}">@lang('pages.menu.Home')</a>
                    <a class="nav-link" href="{{ url('/projects') }}">@lang('pages.menu.Projects')</a>
                    <a class="nav-link" href="{{ url('/contact') }}">@lang('pages.menu.Contact')</a>
                </div>
            </div>

        </div>
    </div>
</footer><!-- /.footer -->