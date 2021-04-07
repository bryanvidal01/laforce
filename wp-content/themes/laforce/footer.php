        <footer class="footer clearfix">
            <div class="social">
                <ul class="clearfix">
                    <?php if(get_field('params_facebook','option')): ?>
                        <li>
                            <a class="font_RightGrotesk-TightMedium color-green" href="<?= get_field('params_facebook','option'); ?>" target="_blank">
                                Facebook
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if(get_field('params_instagram','option')): ?>
                        <li>
                            <a class="font_RightGrotesk-TightMedium color-green" href="<?= get_field('params_instagram','option'); ?>" target="_blank">
                                Instagram
                            </a>
                        </li>
                    <?php endif; ?>

                    <?php if(get_field('params_twitter','option')): ?>
                        <li>
                            <a class="font_RightGrotesk-TightMedium color-green" href="<?= get_field('params_twitter', 'option'); ?>" target="_blank">
                                Twitter
                            </a>
                        </li>
                    <?php endif; ?>
                    <?php if(get_field('params_linkedin', 'option')): ?>
                        <li>
                            <a class="font_RightGrotesk-TightMedium color-green" href="<?= get_field('params_linkedin', 'option'); ?>" target="_blank">
                                Linkedin
                            </a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
            <div class="copyright">
                <img src="http://fakeimg.pl/300x150/" alt="">
                <span class="font_RightGrotesk-TightMedium color-green">©</span><span class="font_RightGrotesk-SpatialBlack">2021</span>
            </div>
        </footer>
        <div class="sub-footer clearfix">
            <div class="slogan">
                <p>La bouffe c’est la vie !</p>
            </div>
            <div class="nav-sup">
                <ul>
                    <li>
                        <a href="">Mentions légales</a>
                    </li>
                    <li>
                        <a href="">Crédits</a>
                    </li>
                </ul>
            </div>
        </div>

        <?php wp_footer(); ?>
    </body>
</html>
