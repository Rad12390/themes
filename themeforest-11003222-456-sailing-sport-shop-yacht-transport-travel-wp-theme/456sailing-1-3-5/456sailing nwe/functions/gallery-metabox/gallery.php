<?php
/*
 * @author    Daan Vos de Wael
 * @copyright Copyright (c) 2013, Daan Vos de Wael, http://www.daanvosdewael.com
 * @license   http://en.wikipedia.org/wiki/MIT_License The MIT License
 * @modifited by lpd-themes.com
*/

  function gallery_metabox_enqueue($hook) {
    if ( 'post.php' == $hook || 'post-new.php' == $hook ) {
      wp_enqueue_script('gallery-metabox', get_template_directory_uri() . '/functions/gallery-metabox/js/gallery-metabox.js', array('jquery', 'jquery-ui-sortable'));
      wp_enqueue_style('gallery-metabox', get_template_directory_uri() . '/functions/gallery-metabox/css/gallery-metabox.css');
    }
  }
  add_action('admin_enqueue_scripts', 'gallery_metabox_enqueue');

  function add_gallery_metabox($post_type) {
    $types = array('portfolio');

    if (in_array($post_type, $types)) {
      add_meta_box(
        'gallery-metabox',
        __( 'Post Gallery', GETTEXT_DOMAIN),
        'gallery_meta_callback',
        $post_type,
        'normal',
        'high'
      );
    }
  }
  add_action('add_meta_boxes', 'add_gallery_metabox');

  function gallery_meta_callback($post) {
    wp_nonce_field( basename(__FILE__), 'gallery_meta_nonce' );
    $ids = get_post_meta($post->ID, 'vdw_gallery_id', true);

    ?>
    <table class="form-table">
      <tr><td>
        <a class="gallery-add button" href="#" data-uploader-title="<?php esc_attr_e( 'Add Image(s) To Gallery', GETTEXT_DOMAIN)?>" data-uploader-button-text="<?php esc_attr_e( 'Add Image(s)', GETTEXT_DOMAIN)?>"><?php _e( 'Add Image(s)', GETTEXT_DOMAIN)?></a>

        <ul id="gallery-metabox-list">
        <?php if ($ids) : foreach ($ids as $key => $value) : $image = wp_get_attachment_image_src($value); ?>

          <li>
            <input type="hidden" name="vdw_gallery_id[<?php echo esc_attr($key); ?>]" value="<?php echo esc_attr($value); ?>">
            <img class="image-preview" src="<?php echo esc_url($image[0]); ?>">
            <a class="change-image button button-small" href="#" data-uploader-title="<?php esc_attr_e( 'Change Image', GETTEXT_DOMAIN)?>" data-uploader-button-text="<?php esc_attr_e( 'Change Image', GETTEXT_DOMAIN)?>"><?php _e( 'Change Image', GETTEXT_DOMAIN)?></a><br>
            <small><a class="remove-image" href="#"><?php _e( 'Remove Image', GETTEXT_DOMAIN)?></a></small>
          </li>

        <?php endforeach; endif; ?>
        </ul>

      </td></tr>
    </table>
  <?php }

  function gallery_meta_save($post_id) {
    if (!isset($_POST['gallery_meta_nonce']) || !wp_verify_nonce($_POST['gallery_meta_nonce'], basename(__FILE__))) return;

    if (!current_user_can('edit_post', $post_id)) return;

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    if(isset($_POST['vdw_gallery_id'])) {
      update_post_meta($post_id, 'vdw_gallery_id', $_POST['vdw_gallery_id']);
    } else {
      delete_post_meta($post_id, 'vdw_gallery_id');
    }
  }
  add_action('save_post', 'gallery_meta_save');

?>