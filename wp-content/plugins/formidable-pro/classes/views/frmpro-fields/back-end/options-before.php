<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( 'You are not allowed to call this page directly.' );
}
?>
<input type="hidden" id="frm_in_section_<?php echo esc_attr( $field['id'] ); ?>" name="field_options[in_section_<?php echo esc_attr( $field['id'] ); ?>]" value="<?php echo esc_attr( $field['in_section'] ); ?>" />
