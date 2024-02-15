<?php echo View::make('includes/header'); ?>
<?php echo View::make('includes/nav'); ?>

<!-- Page Header Start -->
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>About Us</h2>
            </div>
            <div class="col-12">
                <a href="">Home</a>
                <a href="">About Us</a>
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->


<!-- About Start -->
<div class="about wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="about-img">
                    <img src="{{ URL::asset('asset/img/about.png') }} " alt="Image">
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="section-header text-left">
                    <p>Learn About Us</p>
                    <h2>Welcome to Yooga</h2>
                </div>
                <div class="about-text">
                    <p>
                        Yoga is the science of activating your inner energies to such a vibrant and exuberant state that your body, mind, and emotions function at their highest peaks
                    </p>
                    <p>
                        “The word ‘Yoga’ means ‘union.’ Union means you begin to experience the universality of who you are. For example, today, modern science proves to you beyond any doubt that the whole existence is just one energy manifesting itself in various forms. If this scientific fact becomes a living reality for you – that you begin to experience everything as one – then you are in Yoga. When you are in Yoga, you experience everything as a part of yourself. That is liberation, that is mukti, that is ultimate freedom.” -Sadhguru
                    </p>
                    <a class="btn" href="">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->


<!-- Team Start -->
<div class="team">
    <div class="container">
        <div class="section-header text-center wow zoomIn" data-wow-delay="0.1s">
            <p>Yoga Trainer</p>
            <h2>Expert Yoga Trainer</h2>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.0s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{ URL::asset('asset/img/team-1.jpg') }} " alt="Image">
                        <div class="team-social">
                            <a href="https://freewebsitecode.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://facebook.com/freewebsitecode"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://freewebsitecode.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://freewebsitecode.com/"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UC9HlQRmKgG3jeVD_fBxj1Pw/videos"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="team-text">
                        <h2>Millie Harper</h2>
                        <p>Yoga Teacher</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{ URL::asset('asset/img/team-2.jpg') }} " alt="Image">
                        <div class="team-social">
                            <a href="https://freewebsitecode.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://facebook.com/freewebsitecode"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://freewebsitecode.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://freewebsitecode.com/"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UC9HlQRmKgG3jeVD_fBxj1Pw/videos"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="team-text">
                        <h2>Lilly Fry</h2>
                        <p>Yoga Teacher</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{ URL::asset('asset/img/team-3.jpg') }}" alt="Image">
                        <div class="team-social">
                            <a href="https://freewebsitecode.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://facebook.com/freewebsitecode"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://freewebsitecode.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://freewebsitecode.com/"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UC9HlQRmKgG3jeVD_fBxj1Pw/videos"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="team-text">
                        <h2>Elise Moran</h2>
                        <p>Yoga Teacher</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                <div class="team-item">
                    <div class="team-img">
                        <img src="{{ URL::asset('asset/img/team-4.jpg') }}" alt="Image">
                        <div class="team-social">
                            <a href="https://freewebsitecode.com/"><i class="fab fa-twitter"></i></a>
                            <a href="https://facebook.com/freewebsitecode"><i class="fab fa-facebook-f"></i></a>
                            <a href="https://freewebsitecode.com/"><i class="fab fa-linkedin-in"></i></a>
                            <a href="https://freewebsitecode.com/"><i class="fab fa-instagram"></i></a>
                            <a href="https://www.youtube.com/channel/UC9HlQRmKgG3jeVD_fBxj1Pw/videos"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                    <div class="team-text">
                        <h2>Kate Glover</h2>
                        <p>Yoga Teacher</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->
<?php echo View::make('includes/footer'); ?>