<?php
/* Template Name: Section Template */

// Add hero after header.
add_action( 'beans_header_after_markup', 'example_hero' );

function example_hero() {

    ?>
    <div class="tm-hero uk-block-large">
        <div class="uk-container uk-container-center uk-text-center">
            <!-- Your hero content -->
        </div>
    </div>
    <?php

}

// Replace the main loop with my own section.
beans_modify_action_callback( 'beans_loop_template', 'example_content' );

function example_content() {

    ?>
    <section>
        <!-- Your section content pulling from backend -->
    </section>
    <hr class="uk-article-divider uk-margin-large" />
    <section>
        <!-- Your section content pulling from backend -->
    </section>
    <hr class="uk-article-divider uk-margin-large" />
    <section>
        <!-- Your section content pulling from backend -->
    </section>
    <?php

}

// Load the document. Always Keep this at the bottom of the page template.
beans_load_document();