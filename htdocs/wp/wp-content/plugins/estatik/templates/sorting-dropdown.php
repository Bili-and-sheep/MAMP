<?php if ( $list = Es_Archive_Sorting::get_sorting_dropdown_values() ):
    $current_value = !empty( $_GET['view_sort'] ) ? $_GET['view_sort'] : false; ?>
    <form method="GET" class="es-dropdown-container">
        <label>
            <select class="js-es-select2-base js-es-change-submit" name="view_sort">
                <?php foreach ( $list as $key => $value ): ?>
                    <option value="<?php echo $key; ?>" <?php selected( $current_value, $key ); ?>><?php echo $value; ?></option>
                <?php endforeach; ?>
            </select>
        </label>
    </form>
<?php endif;
