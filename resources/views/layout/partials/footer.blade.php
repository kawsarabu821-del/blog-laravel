<footer class="footer-section pt-5">
        <div class="newsletter-section">
            <div class="container">
                <div class="newsletter-wrapper d-md-flex justify-content-between align-items-center">
                    <div class="newsletter-title mb-3 mb-md-0 me-md-4">
                        <div class="section_heading">
                            <h2 class="section_title text-white">Newsletter Subscription</h2>
                            <p class="sub_title text-white text-sm">Subscribe us to get latest news of promotional trip
                            </p>
                        </div>
                    </div>
                    <div class="newsletter-form">
                        <form action="#" method="post">
                            <div class="input-group">
                                <input name="email" type="email" class="form-control shadow-none"
                                    placeholder="Enter your email address" required="">
                                <button type="submit" class="input-group-text bg-primary border-primary text-white">
                                    Subscribe
                                    <img src="assets/images/icons/subscribe.svg" alt="Subscribe">
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="footer__top pt-5 pb-5">
                <div class="footer-wrapper">
                    <div class="row gy-4 gy-lg-0">
                        <div class="col-lg-5">
                            <div class="footer_widget">
                                <div class="widget_heading mb-4 text-white">
                                    <h3>Contact Info</h3>
                                </div>
                                <div class="mb-4">
                                    <div class="site_info d-flex align-items-center mb-4">
                                        <div class="me-2">
                                            <img src="assets/images/icons/phone.svg" alt="For Support">
                                        </div>
                                        <div>
                                            <h5>For Support</h5>
                                            <h6><a href="tel:+393246822222">+88 01234567895</a></h6>
                                        </div>
                                    </div>
                                    <div class="site_info d-flex align-items-center mb-4">
                                        <div class="me-2">
                                            <img src="assets/images/icons/email.svg" alt="Send Us Email">
                                        </div>
                                        <div>
                                            <h5>Send Us Email</h5>
                                            <h6><a
                                                    href="mailto:info@blog.com">info@blog.com</a>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                                <ul class="social-icons">
                                    <li>
                                        <a href="#" title="facebook" target="_blank">
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="instagram" target="_blank">
                                            <i class="fab fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="twitter" target="_blank">
                                            <i class="fab fa-x-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" title="youtube" target="_blank">
                                            <i class="fab fa-youtube"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="footer_widget">
                                <div class="widget_heading mb-4 text-white">
                                    <h3>General Links</h3>
                                </div>
                                <div class="links">
                                    <ul>
                                        <li><a href="{{route('blog.index')}}">Blog</a></li>
                                        <li><a href="{{route('privacy.index')}}">Privacy Policy</a></li>
                                        <li><a href="{{route('terms.index')}}">Terms Conditions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="footer_widget latest_post">
                                <div class="widget_heading mb-4 text-white">
                                    <h3>Latest Post</h3>
                                </div>
                                <div class="links">
                                    <ul>

                                        @foreach($latest_posts as $lpost)
                                          <li><a href="{{route('blog.single',$lpost->slug)}}">{{ $lpost->title}}</a></li>
                                        @endforeach

                                        <!-- <li><a href="#">BMW ECU Cloning</a></li>
                                        <li><a href="">ECU Remaping of Toyota</a></li> -->
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer__bottom py-5 text-center">
            Copyright © 2024 All Rights Reserved
        </div>
    </footer>

    <!-- scroll to top -->
   <div class="scrollToTop">
        <i class="fa fa-angle-up"></i>
    </div>

    <!-- Js -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/lightgallery.min.js') }}"></script>
<script src="{{ asset('assets/js/owlcarousel.min.js') }}"></script>
<script src="{{ asset('assets/js/flatpickr.min.js') }}"></script>
<script src="{{ asset('assets/js/select2.min.js') }}"></script>
<script src="{{ asset('assets/js/intlTelInput.js') }}"></script>
<script src="{{ asset('assets/js/intlTelInput-jquery.js') }}"></script>
<script src="{{ asset('assets/js/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>

    
</body>
</html>