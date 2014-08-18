<!-- carousel -->
<div id="carousel" class="pad-section">
    <div id="carouselBox" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carouselBox" data-slide-to="0" class="active"></li>
            <li data-target="#carouselBox" data-slide-to="1"></li>
            <li data-target="#carouselBox" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="<?php echo bloginfo('template_directory'); ?>/img/carrousel/1.jpg" alt="...">
                <div class="carousel-caption">
                    <h3>Title #1</h3>
                    <p>Nice description #1</p>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo bloginfo('template_directory'); ?>/img/carrousel/2.jpg" alt="...">
                <div class="carousel-caption">
                    <h3>Title #2</h3>
                    <p>Nice description #2</p>
                </div>
            </div>
            <div class="item">
                <img src="<?php echo bloginfo('template_directory'); ?>/img/carrousel/3.jpg" alt="...">
                <div class="carousel-caption">
                    <h3>Title #3</h3>
                    <p>Nice description #3</p>
                </div>
            </div>

        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carouselBox" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carouselBox" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
    </div>
</div>
<!-- /carousel -->