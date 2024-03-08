<?php

namespace WebpConverter\Settings\Option;

use WebpConverter\Conversion\Method\GdMethod;

/**
 * {@inheritdoc}
 */
class ExtraFeaturesOption extends OptionAbstract {

	const OPTION_NAME                  = 'features';
	const OPTION_VALUE_ONLY_SMALLER    = 'only_smaller';
	const OPTION_VALUE_KEEP_METADATA   = 'keep_metadata';
	const OPTION_VALUE_CRON_ENABLED    = 'cron_enabled';
	const OPTION_VALUE_BACKUP_ENABLED  = 'backup_enabled';
	const OPTION_VALUE_SERVICE_MODE    = 'service_mode';
	const OPTION_VALUE_REWRITE_INHERIT = 'rewrite_inherit_disabled';

	/**
	 * {@inheritdoc}
	 */
	public function get_name(): string {
		return self::OPTION_NAME;
	}

	/**
	 * {@inheritdoc}
	 */
	public function get_form_name(): string {
		return OptionAbstract::FORM_TYPE_ADVANCED;
	}

	/**
	 * {@inheritdoc}
	 */
	public function get_type(): string {
		return OptionAbstract::OPTION_TYPE_CHECKBOX;
	}

	/**
	 * {@inheritdoc}
	 */
	public function get_label(): string {
		return __( 'Extra features', 'webp-converter-for-media' );
	}

	/**
	 * {@inheritdoc}
	 */
	public function get_info(): string {
		return __( 'Options allow you to enable new functionalities that will increase the capabilities of the plugin', 'webp-converter-for-media' );
	}

	/**
	 * {@inheritdoc}
	 *
	 * @return string[]
	 */
	public function get_available_values( array $settings ): array {
		return [
			self::OPTION_VALUE_ONLY_SMALLER   => __(
				'Automatic removal of files in output formats larger than the original ones',
				'webp-converter-for-media'
			),
			self::OPTION_VALUE_KEEP_METADATA  => sprintf(
				'%1$s (%2$s)',
				__( 'Keep images metadata stored in EXIF or XMP formats', 'webp-converter-for-media' ),
				__( 'unavailable for the GD conversion method', 'webp-converter-for-media' )
			),
			self::OPTION_VALUE_CRON_ENABLED   => sprintf(
				'%1$s (%2$s)',
				__( 'Convert automatically images from custom directories', 'webp-converter-for-media' ),
				__( 'e.g. from /themes or non-standard in /uploads', 'webp-converter-for-media' )
			),
			self::OPTION_VALUE_BACKUP_ENABLED => __(
				'Save converted images in backups generated by other plugins',
				'webp-converter-for-media'
			),
			self::OPTION_VALUE_SERVICE_MODE   => sprintf(
				'%1$s (%2$s)',
				__( 'Enable the service mode', 'webp-converter-for-media' ),
				__( 'only upon the request from plugin\'s technical support', 'webp-converter-for-media' )
			),
		];
	}

	/**
	 * {@inheritdoc}
	 *
	 * @return string[]
	 */
	public function get_disabled_values( array $settings ): array {
		$values = [];
		if ( ( $settings[ ConversionMethodOption::OPTION_NAME ] ?? GdMethod::METHOD_NAME ) === GdMethod::METHOD_NAME ) {
			$values[] = self::OPTION_VALUE_KEEP_METADATA;
		}
		return $values;
	}

	/**
	 * {@inheritdoc}
	 *
	 * @return string[]
	 */
	public function get_default_value( array $settings = null ): array {
		return [
			self::OPTION_VALUE_ONLY_SMALLER,
		];
	}

	/**
	 * {@inheritdoc}
	 */
	public function validate_value( $current_value, array $available_values = null, array $disabled_values = null ) {
		$valid_values = [];
		if ( ! $current_value ) {
			return $valid_values;
		}

		foreach ( $current_value as $option_value ) {
			if ( array_key_exists( $option_value, $available_values ?: [] )
				&& ! in_array( $option_value, $disabled_values ?: [] ) ) {
				$valid_values[] = $option_value;
			}
		}

		return $valid_values;
	}

	/**
	 * {@inheritdoc}
	 */
	public function sanitize_value( $current_value ) {
		$values = [
			self::OPTION_VALUE_ONLY_SMALLER,
			self::OPTION_VALUE_KEEP_METADATA,
			self::OPTION_VALUE_CRON_ENABLED,
			self::OPTION_VALUE_BACKUP_ENABLED,
			self::OPTION_VALUE_SERVICE_MODE,
		];

		return $this->validate_value(
			$current_value,
			array_combine( $values, $values )
		);
	}
}
