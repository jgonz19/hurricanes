<?php
namespace CrazyElements;

use CrazyElements\PrestaHelper; 

if ( ! defined( '_PS_VERSION_' ) ) {
	exit; // Exit if accessed directly
}
?>
<script type="text/template" id="tmpl-elementor-hotkeys">
	<# var ctrlLabel = environment.mac ? 'Cmd' : 'Ctrl'; #>
	<div id="elementor-hotkeys__content">
		<div id="elementor-hotkeys__actions" class="elementor-hotkeys__col">

			<div class="elementor-hotkeys__header">
				<h3><?php echo PrestaHelper::__( 'Actions', 'elementor' ); ?></h3>
			</div>
			<div class="elementor-hotkeys__list">
				<div class="elementor-hotkeys__item">
					<div class="elementor-hotkeys__item--label"><?php echo PrestaHelper::__( 'Undo', 'elementor' ); ?></div>
					<div class="elementor-hotkeys__item--shortcut">
						<span>{{{ ctrlLabel }}}</span>
						<span>Z</span>
					</div>
				</div>

				<div class="elementor-hotkeys__item">
					<div class="elementor-hotkeys__item--label"><?php echo PrestaHelper::__( 'Redo', 'elementor' ); ?></div>
					<div class="elementor-hotkeys__item--shortcut">
						<span>{{{ ctrlLabel }}}</span>
						<span>Shift</span>
						<span>Z</span>
					</div>
				</div>

				<div class="elementor-hotkeys__item">
					<div class="elementor-hotkeys__item--label"><?php echo PrestaHelper::__( 'Copy', 'elementor' ); ?></div>
					<div class="elementor-hotkeys__item--shortcut">
						<span>{{{ ctrlLabel }}}</span>
						<span>C</span>
					</div>
				</div>

				<div class="elementor-hotkeys__item">
					<div class="elementor-hotkeys__item--label"><?php echo PrestaHelper::__( 'Paste', 'elementor' ); ?></div>
					<div class="elementor-hotkeys__item--shortcut">
						<span>{{{ ctrlLabel }}}</span>
						<span>V</span>
					</div>
				</div>

				<div class="elementor-hotkeys__item">
					<div class="elementor-hotkeys__item--label"><?php echo PrestaHelper::__( 'Paste Style', 'elementor' ); ?></div>
					<div class="elementor-hotkeys__item--shortcut">
						<span>{{{ ctrlLabel }}}</span>
						<span>Shift</span>
						<span>V</span>
					</div>
				</div>

				<div class="elementor-hotkeys__item">
					<div class="elementor-hotkeys__item--label"><?php echo PrestaHelper::__( 'Delete', 'elementor' ); ?></div>
					<div class="elementor-hotkeys__item--shortcut">
						<span>Delete</span>
					</div>
				</div>

				<div class="elementor-hotkeys__item">
					<div class="elementor-hotkeys__item--label"><?php echo PrestaHelper::__( 'Duplicate', 'elementor' ); ?></div>
					<div class="elementor-hotkeys__item--shortcut">
						<span>{{{ ctrlLabel }}}</span>
						<span>D</span>
					</div>
				</div>

				<div class="elementor-hotkeys__item">
					<div class="elementor-hotkeys__item--label"><?php echo PrestaHelper::__( 'Save', 'elementor' ); ?></div>
					<div class="elementor-hotkeys__item--shortcut">
						<span>{{{ ctrlLabel }}}</span>
						<span>S</span>
					</div>
				</div>

			</div>
		</div>

		<div id="elementor-hotkeys__navigation" class="elementor-hotkeys__col">

			<div class="elementor-hotkeys__header">
				<h3><?php echo PrestaHelper::__( 'Go To', 'elementor' ); ?></h3>
			</div>
			<div class="elementor-hotkeys__list">
				<div class="elementor-hotkeys__item">
					<div class="elementor-hotkeys__item--label"><?php echo PrestaHelper::__( 'Finder', 'elementor' ); ?></div>
					<div class="elementor-hotkeys__item--shortcut">
						<span>{{{ ctrlLabel }}}</span>
						<span>E</span>
					</div>
				</div>

				<div class="elementor-hotkeys__item">
					<div class="elementor-hotkeys__item--label"><?php echo PrestaHelper::__( 'Show / Hide Panel', 'elementor' ); ?></div>
					<div class="elementor-hotkeys__item--shortcut">
						<span>{{{ ctrlLabel }}}</span>
						<span>P</span>
					</div>
				</div>

				<div class="elementor-hotkeys__item">
					<div class="elementor-hotkeys__item--label"><?php echo PrestaHelper::__( 'Responsive Mode', 'elementor' ); ?></div>
					<div class="elementor-hotkeys__item--shortcut">
						<span>{{{ ctrlLabel }}}</span>
						<span>Shift</span>
						<span>M</span>
					</div>
				</div>

				<div class="elementor-hotkeys__item">
					<div class="elementor-hotkeys__item--label"><?php echo PrestaHelper::__( 'History', 'elementor' ); ?></div>
					<div class="elementor-hotkeys__item--shortcut">
						<span>{{{ ctrlLabel }}}</span>
						<span>Shift</span>
						<span>H</span>
					</div>
				</div>

				<div class="elementor-hotkeys__item">
					<div class="elementor-hotkeys__item--label"><?php echo PrestaHelper::__( 'Navigator', 'elementor' ); ?></div>
					<div class="elementor-hotkeys__item--shortcut">
						<span>{{{ ctrlLabel }}}</span>
						<span>Shift</span>
						<span>I</span>
					</div>
				</div>

				<div class="elementor-hotkeys__item">
					<div class="elementor-hotkeys__item--label"><?php echo PrestaHelper::__( 'Template Library', 'elementor' ); ?></div>
					<div class="elementor-hotkeys__item--shortcut">
						<span>{{{ ctrlLabel }}}</span>
						<span>Shift</span>
						<span>L</span>
					</div>
				</div>

				<div class="elementor-hotkeys__item">
					<div class="elementor-hotkeys__item--label"><?php echo PrestaHelper::__( 'Keyboard Shortcuts', 'elementor' ); ?></div>
					<div class="elementor-hotkeys__item--shortcut">
						<span>{{{ ctrlLabel }}}</span>
						<span>?</span>
					</div>
				</div>

				<div class="elementor-hotkeys__item">
					<div class="elementor-hotkeys__item--label"><?php echo PrestaHelper::__( 'Quit', 'elementor' ); ?></div>
					<div class="elementor-hotkeys__item--shortcut">
						<span>Esc</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</script>
