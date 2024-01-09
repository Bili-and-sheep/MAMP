<?php

global $ef_options, $es_settings;
$categories = $ef_options->get( 'sort_bar_categories' );

if ( $categories ) $categories = get_terms( 'es_category', array( 'term_taxonomy_id' => $categories ) ); ?>

<div class="ert-filter ert-filter__inner">
    <div class="ert-filter__sort">
        <?php if ( $categories || ( $ef_options->get( 'show_sort_by' ) && ( $sort_values = Es_Archive_Sorting::get_sorting_dropdown_values() ) ) ) : ?>
            <ul class="ert-filter__categories">
                <li><a href="<?php echo remove_query_arg( 'filter' ); ?>"><?php _e( 'All', 'ert' ); ?></a></li>

                <?php if ( $categories ) : ?>
                    <?php foreach ( $categories as $id => $category ) : $list = add_query_arg( array( 'filter' => array( 'category' => $category->slug ) ) ); ?>
                        <li><a href="<?php echo $list; ?>"><?php echo $category->name; ?></a></li>
                    <?php endforeach; ?>
                <?php endif; ?>

                <?php if ( $ef_options->get( 'show_sort_by' ) && ( $sort_values = Es_Archive_Sorting::get_sorting_dropdown_values() ) ) : ?>
                    <button id="sortByDrop" type="button" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <?php if ( ! empty( $_GET['view_sort'] ) && ! empty( $sort_values[ $_GET['view_sort'] ] ) ) : ?>
                            <?php echo $sort_values[ $_GET['view_sort'] ]; ?>
                        <?php else : ?>
	                        <?php _e( 'Sort By', 'ept' ); ?>
                        <?php endif; ?>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="sortByDrop">
		                <?php foreach ( $sort_values as $key => $value ) : ?>
                            <a class="dropdown-item" href="<?php echo add_query_arg( 'view_sort', $key ); ?>"><?php echo $value; ?></a>
		                <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </ul>
        <?php endif; ?>
    </div>

    <div class="ert-filter__layout">
        <a href="<?php echo add_query_arg( 'layout', 'list' ); ?>">
            <i class="fa fa-list"></i>
        </a>
        <a href="<?php echo add_query_arg( 'layout', $es_settings->listing_layout != 'list' ? $es_settings->listing_layout : '2_col' ); ?>">
            <i class="fa fa-th-large"></i>
        </a>
    </div>
</div>
