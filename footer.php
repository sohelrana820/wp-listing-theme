<!-- Footer start-->
<?php global $carhouse;?>
<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-item">
                <div class="footer-item-content">
                    <a href="index.html">
                        <img src="<?php echo $carhouse['opt_footer_logo']['url'];?>" alt="logo">
                    </a>
                    <p><?php echo $carhouse['opt_footer_text'];?></p>

                    <ul>
                        <li>
                            <a href="#">
                                <i class="fa fa-map-marker"></i>
                                <?php echo $carhouse['opt_footer_address'];?>
                            </a>
                        </li>
                        <li>
                            <a href="tel:+55-417-634-7071"><i class="fa fa-phone"></i>  <?php echo $carhouse['opt_footer_phone'];?></a>
                        </li>
                        <li>
                            <a href="mailto:sales@carhouse.com">
                                <i class="fa fa-envelope-o "></i> <?php echo $carhouse['opt_footer_email'];?>
                            </a>
                        </li>
                    </ul>

                    <ul class="social-list clearfix">
                        <?php foreach ($carhouse['opt_footer_social_links'] as $media => $link):?>
                        <li>
                            <a href="<?php echo $link;?>" class="facebook">
                                <i class="fa <?php echo $media;?>"></i>
                            </a>
                        </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 footer-item">
                <div class="footer-item-content">
                    <h2>What we offer ?</h2>
                    <div class="line-dec"></div>
                    <ul>
                        <li>
                            <a href="#">Rent a car now</a>
                        </li>
                        <li>
                            <a href="#">Search for sale</a>
                        </li>
                        <li>
                            <a href="#">Best daily dealers</a>
                        </li>
                        <li>
                            <a href="#">Weekly lucky person</a>
                        </li>
                        <li>
                            <a href="#">Change car color</a>
                        </li>
                        <li>
                            <a href="#">Rent a car now</a>
                        </li>

                        <li>
                            <a href="#">Best daily dealers</a>
                        </li>
                        <li>
                            <a href="#">Change car color</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 footer-item">
                <div class="footer-item-content">
                    <h2>tags</h2>
                    <div class="line-dec"></div>
                    <a href="#" class="tags">Apps</a>
                    <a href="#" class="tags">gallery</a>
                    <a href="#" class="tags">photography</a>
                    <a href="#" class="tags">Web</a>
                    <a href="#" class="tags">blog right sidebar</a>
                    <a href="#" class="tags">books</a>
                    <a href="#" class="tags">business</a>
                    <a href="#" class="tags">design</a>
                    <a href="#" class="tags">education</a>
                    <a href="#" class="tags">Fitness</a>
                    <a href="#" class="tags">pen</a>
                    <a href="#" class="tags">real</a>
                </div>
            </div>

            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 footer-item">
                <div class="footer-item-content">
                    <h2>Recent motors</h2>
                    <div class="line-dec"></div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri()?>/assets/img/recent/recent-1.jpg" alt="recent-1">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="car_details.html">Jaguar f-type r</a>
                            <div class="line-dec-o"></div>
                            <span>$105,400</span>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="<?php echo get_template_directory_uri()?>/assets/img/recent/recent-2.jpg" alt="recent-2">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="car_details.html">Mercedes Benz C Class</a>
                            <div class="line-dec-o"></div>
                            <span>$42.000</span>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="car_details.html">
                                <img class="media-object" src="<?php echo get_template_directory_uri()?>/assets/img/recent/recent-3.jpg" alt="recent-3">
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="car_details.html">BMW e46 m3 diski serie</a>
                            <div class="line-dec-o"></div>
                            <span>$49.000</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-2 col-md-2 col-sm-6 col-xs-12 footer-item ">
                <div class="footer-item-content">
                    <h2>Gallery</h2>
                    <div class="line-dec"></div>
                    <div class="gallery-item">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/gallery/gallery-1.jpg" alt="gallery-1">
                    </div>
                    <div class="gallery-item">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/gallery/gallery-2.jpg" alt="gallery-2">
                    </div>
                    <div class="gallery-item">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/gallery/gallery-3.jpg" alt="gallery-3">
                    </div>
                    <div class="gallery-item">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/gallery/gallery-4.jpg" alt="gallery-4">
                    </div>
                    <div class="gallery-item">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/gallery/gallery-5.jpg" alt="gallery-5">
                    </div>
                    <div class="gallery-item">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/gallery/gallery-6.jpg" alt="gallery-6">
                    </div>
                    <div class="gallery-item">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/gallery/gallery-7.jpg" alt="gallery-7">
                    </div>
                    <div class="gallery-item">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/gallery/gallery-8.jpg" alt="gallery-8">
                    </div>
                    <div class="gallery-item">
                        <img src="<?php echo get_template_directory_uri()?>/assets/img/gallery/gallery-9.jpg" alt="gallery-9">
                    </div>

                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end-->

<!-- Sub footer start-->
<div class="sub-footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <p><?php echo $carhouse['opt_footer_copyright_text'];?></p>
            </div>
            <div class="col-md-6 col-sm-6 hidden-xs ">
                <ul>
                    <li>
                        <a href="contact.html">Contact Us</a>
                    </li>
                    <li>
                        <a href="about.html">About Us</a>
                    </li>
                    <li>
                        <a href="car_list.html">Car Listing</a>
                    </li>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- Sub footer end-->

<script src="<?php echo get_template_directory_uri()?>/assets/js/jquery-2.2.0.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri()?>/assets/js/bootstrap-slider.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo get_template_directory_uri()?>/assets/js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script src="<?php echo get_template_directory_uri()?>/assets/js/app.js"></script>

<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-83150110-3', 'auto');
    ga('send', 'pageview');

</script>
</body>
</html>