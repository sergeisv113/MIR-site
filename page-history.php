
<?php
/*
 Template Name: Наши истории
 */
?>

<?php
get_header();
?>
<div class="aboutus">
    <div class="container">
        <h1 class="title">Наша история</h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    Все начиналось с желания
                </div>
                <div class="aboutus__text">
                    <?php the_field('history_1'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('history_1_img'); ?>" alt="мир детства">

            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('history_2_img'); ?>" alt="мир детства">

            </div>
            <div class="col-lg-6">
                <div class="subtitle">
                    Главное - качество
                </div>
                <div class="aboutus__text">
                    <?php the_field('history_2'); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    Современные технологии
                </div>
                <div class="aboutus__text">
                    <?php the_field('history_3'); ?>
                </div>
            </div>
            <div class="col-lg-6">
                <img class="aboutus__img" src="<?php the_field('history_3_img'); ?>" alt="мир детства">

            </div>
        </div>
    </div>
</div>


<?php
get_footer();
?>