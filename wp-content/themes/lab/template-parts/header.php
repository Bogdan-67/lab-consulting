
    
    <header class="header" id="header">
        <div class="local-navigation">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-3">
                        <div class="about">
                            <h1 class="about__title">
                                <?php the_title() ?>
                            </h1>
                            <?php if ( function_exists( 'dimox_breadcrumbs' ) ) dimox_breadcrumbs(); ?>
                        </div>
                    </div>
                    <div class="col-xl-6 ms-auto">

                        <ul class="local-menu d-flex">
                            <?php wp_list_pages(array (
                                'child_of' => get_the_ID(),
                                'title_li' => 0
                                )
                            ); ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>