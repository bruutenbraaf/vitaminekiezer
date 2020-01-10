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

<?php $tijd = get_field( 'tijd_tot_popup', 'option' ); ?> 

<script>
    setTimeout(function() {
        jQuery('.popupreview').addClass('open');
    }, <?php echo $tijd * 1000; ?>);
    jQuery('.closereview').on('click', function() {
        jQuery('.popupreview').removeClass('open');
    });
    jQuery('.closebtn').on('click', function() {
        jQuery('.popupreview').removeClass('open');
    });
</script>