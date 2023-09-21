<footer id="footer">
<div class="container">
    <?php
    wp_nav_menu(
        array (
            'theme-location' => 'Footer-menu',
            'menu_class' => 'footer-bar',
            'walker' => new Custom_Menu_Walker(),
        )
    );
    ?>
    </div>
</footer>
<?php wp_footer();?>
</body>
</html>