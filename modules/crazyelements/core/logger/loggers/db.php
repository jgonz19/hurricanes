<?php
namespace CrazyElements\Core\Logger\Loggers;

use CrazyElements\Core\Logger\Items\Log_Item_Interface as Log_Item;

use CrazyElements\PrestaHelper; 

if ( ! defined( '_PS_VERSION_' ) ) {
	exit; // Exit if accessed directly
}

class Db extends Base {

	public function save_log( Log_Item $item ) {
		$log = $this->maybe_truncate_log();

		$id = $item->get_fingerprint();

		if ( empty( $log[ $id ] ) ) {
			$log[ $id ] = $item;
		}

		$log[ $id ]->increase_times( $item );

		PrestaHelper::update_option( self::LOG_NAME, $log, 'no' );
	}

	private function maybe_truncate_log() {
		/** @var Log_Item[] $log */
		$log = $this->get_log();

		if ( Log_Item::MAX_LOG_ENTRIES < count( $log ) ) {
			$log = array_slice( $log, -Log_Item::MAX_LOG_ENTRIES );
		}

		return $log;
	}

	protected function get_log() {
		// Clear cache.
		wp_cache_delete( self::LOG_NAME, 'options' );

		return PrestaHelper::get_option( self::LOG_NAME, [] );
	}
}
