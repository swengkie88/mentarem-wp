<footer>
    <div class="container">
        <div class="navbar-footer">
            <?php
                $args = array('theme_location' => 'footer_menu');
                wp_nav_menu($args);
            ?>
        </div>
        &copy; <?php echo "Hak Cipta "; bloginfo('name'); echo " - Produksi "; echo date('Y'); ?>
    </div>
</footer>
<?php wp_footer();?>
</body>
</html>