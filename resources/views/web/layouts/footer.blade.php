<footer class="youplay-footer youplay-footer-parallax">
    <div class="image" data-speed="0.4" data-img-position="50% 0%">
        <img src="{{ asset('webs/images/dark/footer-bg.jpg') }}" alt="" class="jarallax-img">
    </div>
    <div class="wrapper">
        <!-- Social Buttons -->
        <div class="social">
            <div class="container">
                <h3>Connect socially with <strong>Gamesss</strong></h3>

                <div class="social-icons">
                    <div class="social-icon">
                        <a href="#">
                            <i class="fab fa-discord"></i>
                            <span>Subscribe to Discord</span>
                        </a>
                    </div>
                    <div class="social-icon">
                        <a href="#">
                            <i class="fab fa-twitch"></i>
                            <span>Watch on Twitch</span>
                        </a>
                    </div>
                    <div class="social-icon">
                        <a href="#">
                            <i class="fab fa-youtube"></i>
                            <span>Watch on Youtube</span>
                        </a>
                    </div>
                    <div class="social-icon">
                        <a href="#">
                            <i class="fab fa-twitter-square"></i>
                            <span>Follow on Twitter</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Social Buttons -->

        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                {{(Setting::getValByName('footer_text')) ? Setting::getValByName('footer_text') :  __('Copyright AccountGo') }} {{ date('Y') }} <small>Powered By <a href="http://asepit.com/" target="_blank">ASEPIT</a></small>
            </div>
        </div>
        <!-- /Copyright -->
    </div>
</footer>
