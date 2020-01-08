<?php get_header(); ?>
<div class="header-page d-flex justify-content-center align-items-center">
    <div class="inner">
        <h1>Binnenkort online</h1>
        <?php if (have_rows('usps', 'option')) : ?>
            <ul>
                <?php while (have_rows('usps', 'option')) : the_row(); ?>
                    <li> <?php the_sub_field('usp'); ?> </li>
                <?php endwhile; ?>
            </ul>
        <?php endif; ?>
    </div>
</div>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h1>Binnenkort online</h1>
                <p>Ons excuses, deze pagina is nog niet beschikbaar.<p>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>