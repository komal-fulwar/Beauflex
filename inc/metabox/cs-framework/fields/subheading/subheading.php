<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
/**
 *
 * Field: Sub Heading
 *
 * @since 1.0.0
 * @version 1.0.0
 *
 */
class DTMFramework_Option_subheading extends DTMFramework_Options {

  public function __construct( $field, $value = '', $unique = '' ) {
    parent::__construct( $field, $value, $unique );
  }

  public function output() {

    echo "{$this->element_before()}";
    echo "{$this->field['content']}";
    echo "{$this->element_after()}";

  }

}