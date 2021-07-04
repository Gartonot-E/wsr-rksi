<?

// Включаем произвольные поля
add_action('add_meta_boxes', 'my_extra_fields', 1);

function my_extra_fields() {
	add_meta_box( 'extra_fields', 'Дополнительные поля', 'extra_fields_box_func', 'post', 'normal', 'high'  );
}


// Html структура для произвольных полей
function extra_fields_box_func( $post ){
	?>
		<style>
			.form {
				display: flex;
				flex-direction: column;
			}
			.form label textarea,
			.form label input { width: 100%; }
		</style>
        <div class="form"> 
            <label>
                <p>Укажите ссылку на трансляцию</p>
                <input type="text" name="extra[title]" value="<?php echo get_post_meta($post->ID, 'title', 1); ?>"> 
            </label>
        </div>
        
        <input type="hidden" name="extra_fields_nonce" value="<?php echo wp_create_nonce(__FILE__); ?>" />
	
    <?
}



// Сохраняем данные, при сохранении поста
function my_extra_fields_update( $post_id ){
	// базовая проверка
	if (
		   empty( $_POST['extra'] )
		|| ! wp_verify_nonce( $_POST['extra_fields_nonce'], __FILE__ )
		|| wp_is_post_autosave( $post_id )
		|| wp_is_post_revision( $post_id )
	)
		return false;

	// Сохраняем данные или удаляем
	$_POST['extra'] = array_map( 'sanitize_text_field', $_POST['extra'] );
	
    foreach( $_POST['extra'] as $key => $value ){
        // Удаляем, если поле пустое
        if( empty($value) ){
			delete_post_meta( $post_id, $key );
			continue;
		}
        // Добавляем поля в мета
		update_post_meta( $post_id, $key, $value );
	}
	return $post_id;
}

// включаем обновление полей при сохранении
add_action( 'save_post', 'my_extra_fields_update', 0 );

?>