<!-- navigation panel -->
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Testing Name Here</a>
        </div>

        <?php wp_nav_menu( array( 'theme_location' => 'menuTop',
            'container' => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id' => 'navbar-collapse-main',
            'menu_class' => 'nav navbar-nav navbar-right' ) ); ?>

    </div><!-- /.container-fluid -->
</nav>