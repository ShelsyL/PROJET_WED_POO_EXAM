<?php
/*
	./public/app/vues/template/partials/_main.php
*/
?>

<main>
    <!--================Blog Area =================-->
    <section class="blog_area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                  <!-- ZONE DYNAMIQUE -->
                    <?php echo $content; ?>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar">

                          <?php include '../app/vues/template/partials/_aside.php'; ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
</main>
