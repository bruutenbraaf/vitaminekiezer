<div class="popupreview">
    <div class="popupreviewbox">
        <div class="closereview"></div>
        <?php the_field('tekst', 'option'); ?>
        <?php $accepteren = get_field('accepteren', 'option'); ?>
        <?php if ($accepteren) { ?>
            <a class="btn compare" href="<?php echo $accepteren['url']; ?>" target="_blank"><?php echo $accepteren['title']; ?></a>
        <?php } ?>
        <?php $negeren = get_field('negeren', 'option'); ?>
        <?php if ($negeren) { ?>
            <a class="btn btn-secondair closebtn" href="<?php echo $negeren['url']; ?>" target="<?php echo $negeren['target']; ?>"><?php echo $negeren['title']; ?></a>
        <?php } ?>
    </div>
</div>

<?php $tijd = get_field('tijd_tot_popup', 'option'); ?>

<script>
    jQuery(document).ready(function() {
        if ('set' !== jQuery.cookie('review-pop')) {
            jQuery('.popupreview').addClass('open');
        }
        jQuery('.closereview').on('click', function() {
            jQuery('.popupreview').removeClass('open');
            jQuery.cookie('review-pop', 'set', { expires: 7, path: '/' });
        });
        jQuery('.closebtn').on('click', function() {
            jQuery('.popupreview').removeClass('open');
        });
    });
</script>