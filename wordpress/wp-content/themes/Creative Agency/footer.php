<footer>
    <section id="footer">
        <div class="container">
            <div class="col-md-6"></div>
            <div class="col-md-6"></div>
            <!-- ajout de ma nouvelle widget area -->
            <?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?>
                    <div id="header-widget-area-left" class="nwa-header-widget widget-area row" role="complementary">
                        <?php dynamic_sidebar( 'sidebar-1' ); ?>
                    </div>
                <?php endif; ?>
            <!-- fin nouvelle widget area -->
        </div>
    </section>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <?php wp_footer(); ?>
    </body>
</html>



