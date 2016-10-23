<?php wp_footer(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/javascript/main.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
        spaceBetween: 0, 
        direction: 'vertical'
    });
</script>
</body>
</html>
