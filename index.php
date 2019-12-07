<?php
    get_header();
?>

<!-- Banner start -->
<div class="banner">
    <div class="banner-content">
        <div class="banner-text">
            <p>Mentarem Kelana Jaya</p>
            <span>Perusahaan Multi Jasa</span>
        </div>
        <button class="btn">Jelajahi situs</button>
    </div>
    <div class="filter-banner"></div>
</div>
<!-- Banner stop -->

 <!-- Section tentang start-->
 <div class="section-tentang">
    <div class="container">
        <div class="buled">
            <?php the_custom_logo(); ?>
        </div>
        <div class="section-text">
            <h2>Tentang Kami</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quisquam, sed animi? Ad quos, sit eaque similique illo accusantium architecto amet necessitatibus tenetur illum. Neque, nisi aliquid aut veritatis iure aperiam?</p>
        </div>
    </div>
</div>
<!-- Section tentang stop-->

 <!-- Section layanan start -->
 <div class="section-layanan">
    <div class="container">
        <div class="section-text">
            <h2>Layanan</h2>
            <p>Pelayanan terbaik dari kami hanya untuk anda</p>
        </div>
        <div class="section-row">
            <div class="grid-3">
                <div class="card-layanan">
                    <div class="filter-card"></div>
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/trip.jpg" alt="trip_on_trip">
                    <div class="card-layanan-content">
                        <p>Trip on Trip</p>
                    </div>
                </div>
            </div>
            <div class="grid-3">
                <div class="card-layanan">
                    <div class="filter-card"></div>
                <img src="<?php echo get_template_directory_uri();?>/assets/images/hotel.jpg" alt="hospitality">
                    <div class="card-layanan-content">
                        <p>Terra Hospitality Management</p>
                    </div>
                </div>
            </div>
            <div class="grid-3">
                <div class="card-layanan">
                    <div class="filter-card"></div>
                    <img src="<?php echo get_template_directory_uri();?>/assets/images/mice.jpg" alt="mice">
                    <div class="card-layanan-content">
                        <p>M.I.C.E</p>
                    </div>
                </div>
            </div>
            <div class="grid-3">
                <div class="card-layanan">
                    <div class="filter-card"></div>
                <img src="<?php echo get_template_directory_uri();?>/assets/images/transport.jpg" alt="transport">
                    <div class="card-layanan-content">
                        <p>Transportasi</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Section layanan stop -->

<!-- Section blog Start -->
<div class="section-blog">
    <div class="main-container">
    <div class="section-text">
        <h2>Blog</h2>
        <p>Simak juga artikel dari kami</p>
    </div>
    <br>
    <?php
        if(have_posts() ):
            while(have_posts() ): the_post();?>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <p><?php the_content(); ?></p>
            <?php 
            endwhile;
        else:
            echo 'Tidak ada post';
        endif;
    ?>
    </div>
</div>
<!-- Section blog stop -->

<!-- Section kontak start -->
<div class="section-kontak">
    <div class="section-text">
        <h2>Kontak</h2>
        <p>Hubungi kami untuk informasi lebih lanjut</p>
    </div>
    <a class="btn" href=" https://wa.me/6281326579284?text=Saya%20berminat%20untuk%20bertanya%20lebih%20lanjut%20mengenai%20layanan%20mentarem...">Whatsapp</a>
</div>
<!-- Section kontak stop -->
<?php
    get_footer();
?>