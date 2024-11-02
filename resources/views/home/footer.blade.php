<footer>
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class=" col-md-4">
                    <h3>Contact US</h3>
                    <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Address</li>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i> +01 1234569540</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> demo@gmail.com</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>Menu Link</h3>
                    <ul class="link_menu">
                        <li class="active"><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/about_page') }}"> About</a></li>
                        <li><a href="{{ url('/room_page') }}">Our Room</a></li>
                        <li><a href="{{ url('/gallery_page') }}">Gallery</a></li>
                        <li><a href="{{ url('/blog_page') }}">Blog</a></li>
                        <li><a href="{{ url('/contact_page') }}">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <h3>News letter</h3>

                    @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session('message') }}
                        </div>
                    @endif

                    <form class="bottom_form" action="{{ url('subscribe') }}" method="POST">
                        @csrf
                        <input class="enter" placeholder="Enter your email" type="text" name="email">
                        <button class="sub_btn">Subscribe</button>
                    </form>


                    <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1">

                        <p style="color: red;">
                            @2024 All Rights Reserved by <a style="color: red;" href="https://codevibebd.netlify.app/">CodeVibe Innovations</a>
                            <br><br>
                            Distributed by <a href="https://codevibebd.netlify.app/" target="_blank">CodeVibe</a>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Javascript files-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<!-- sidebar -->
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>