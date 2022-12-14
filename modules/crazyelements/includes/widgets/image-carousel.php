<?php
namespace CrazyElements;

use CrazyElements\PrestaHelper; if ( ! defined( '_PS_VERSION_' ) ) {
	exit; // Exit if accessed directly.
}

class Widget_Image_Carousel extends Widget_Base {

	/**
	 * Get widget name.
	 *
	 * Retrieve image carousel widget name.
	 *
	 * @since 1.0
	 * @access public
	 *
	 * @return string Widget name.
	 */
	public function get_name() {
		return 'image-carousel';
	}

	/**
	 * Get widget title.
	 *
	 * Retrieve image carousel widget title.
	 *
	 * @since 1.0
	 * @access public
	 *
	 * @return string Widget title.
	 */
	public function get_title() {
		return PrestaHelper::__( 'Image Carousel', 'elementor' );
	}

	/**
	 * Get widget icon.
	 *
	 * Retrieve image carousel widget icon.
	 *
	 * @since 1.0
	 * @access public
	 *
	 * @return string Widget icon.
	 */
	public function get_icon() {
		return 'ceicon-slider-push';
	}

	/**
	 * Get widget keywords.
	 *
	 * Retrieve the list of keywords the widget belongs to.
	 *
	 * @since 1.0
	 * @access public
	 *
	 * @return array Widget keywords.
	 */
	public function get_keywords() {
		return [ 'image', 'photo', 'visual', 'carousel', 'slider' ];
	}

	/**
	 * Retrieve the list of scripts the image carousel widget depended on.
	 *
	 * Used to set scripts dependencies required to run the widget.
	 *
	 * @since 1.3.0
	 * @access public
	 *
	 * @return array Widget scripts dependencies.
	 */
	public function get_script_depends() {
		return [ 'jquery-slick' ];
	}

	/**
	 * Register image carousel widget controls.
	 *
	 * Adds different input fields to allow the user to change and customize the widget settings.
	 *
	 * @since 1.0
	 * @access protected
	 */
	protected function _register_controls() {
		$this->start_controls_section(
			'section_image_carousel',
			[
				'label' => PrestaHelper::__( 'Image Carousel', 'elementor' ),
			]
		);

		$this->add_control(
			'carousel',
			[
				'label' => PrestaHelper::__( 'Add Images', 'elementor' ),
				'type' => Controls_Manager::GALLERY,
				'default' => [],
				'show_label' => false,
				'dynamic' => [
					'active' => true,
				],
			]
		);

		$this->add_control(
			'carousel_width',
			[
				'label' => PrestaHelper::__( 'Image width', 'elementor' ),
				'type' => Controls_Manager::TEXT,
				'default' => '200',
				'title' => PrestaHelper::__( 'Add Image Width For Carousel.', 'elementor' ),
				'label_block' => false,
				'description' => PrestaHelper::__( 'Default size 200px,If blank than 200px will be taken automatically. ', 'elementor' ),
			]
		);



		$this->add_control(
			'carousel_height',
			[
				'label' => PrestaHelper::__( 'Image height', 'elementor' ),
				'type' => Controls_Manager::TEXT,
				'default' => '200',
				'title' => PrestaHelper::__( 'Add Image Height For Carousel.', 'elementor' ),
				'label_block' => false,
				'description' => PrestaHelper::__( 'Default size 200px,If blank than 200px will be taken automatically. ', 'elementor' ),
			]
		);
		$slides_to_show = range( 1, 10 );
		$slides_to_show = array_combine( $slides_to_show, $slides_to_show );
		$this->add_responsive_control(
			'slides_to_show',
			[
				'label' => PrestaHelper::__( 'Slides to Show', 'elementor' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'' => PrestaHelper::__( 'Default', 'elementor' ),
				] + $slides_to_show,
				'frontend_available' => true,
			]
		);
		$this->add_responsive_control(
			'slides_to_scroll',
			[
				'label' => PrestaHelper::__( 'Slides to Scroll', 'elementor' ),
				'type' => Controls_Manager::SELECT,
				'description' => PrestaHelper::__( 'Set how many slides are scrolled per swipe.', 'elementor' ),
				'options' => [
					'' => PrestaHelper::__( 'Default', 'elementor' ),
				] + $slides_to_show,
				'condition' => [
					'slides_to_show!' => '1',
				],
				'frontend_available' => true,
			]
		);
		$this->add_control(
			'image_stretch',
			[
				'label' => PrestaHelper::__( 'Image Stretch', 'elementor' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'no',
				'options' => [
					'no' => PrestaHelper::__( 'No', 'elementor' ),
					'yes' => PrestaHelper::__( 'Yes', 'elementor' ),
				],
			]
		);
		$this->add_control(
			'navigation',
			[
				'label' => PrestaHelper::__( 'Navigation', 'elementor' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'both',
				'options' => [
					'both' => PrestaHelper::__( 'Arrows and Dots', 'elementor' ),
					'arrows' => PrestaHelper::__( 'Arrows', 'elementor' ),
					'dots' => PrestaHelper::__( 'Dots', 'elementor' ),
					'none' => PrestaHelper::__( 'None', 'elementor' ),
				],
				'frontend_available' => true,
			]
		);
		$this->add_control(
			'link_to',
			[
				'label' => PrestaHelper::__( 'Link', 'elementor' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'none',
				'options' => [
					'none' => PrestaHelper::__( 'None', 'elementor' ),
					'file' => PrestaHelper::__( 'Media File', 'elementor' ),
					'custom' => PrestaHelper::__( 'Custom URL', 'elementor' ),
				],
			]
		);

		$this->add_control(
			'link',
			[
				'label' => PrestaHelper::__( 'Link', 'elementor' ),
				'type' => Controls_Manager::URL,
				'placeholder' => PrestaHelper::__( 'https://your-link.com', 'elementor' ),
				'condition' => [
					'link_to' => 'custom',
				],
				'show_label' => false,
			]
		);
		$this->add_control(
			'open_lightbox',
			[
				'label' => PrestaHelper::__( 'Lightbox', 'elementor' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'no',
				'options' => [
					'yes' => PrestaHelper::__( 'Yes', 'elementor' ),
					'no' => PrestaHelper::__( 'No', 'elementor' ),
				],
				'condition' => [
					'link_to' => 'file',
				],
			]
		);
		$this->add_control(
			'caption_type',
			[
				'label' => PrestaHelper::__( 'Caption', 'elementor' ),
				'type' => Controls_Manager::SELECT,
				'default' => '',
				'options' => [
					'' => PrestaHelper::__( 'None', 'elementor' ),
					'title' => PrestaHelper::__( 'Title', 'elementor' ),
				],
			]
		);
		$this->add_control(
			'view',
			[
				'label' => PrestaHelper::__( 'View', 'elementor' ),
				'type' => Controls_Manager::HIDDEN,
				'default' => 'traditional',
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'section_additional_options',
			[
				'label' => PrestaHelper::__( 'Additional Options', 'elementor' ),
			]
		);
		$this->add_control(
			'pause_on_hover',
			[
				'label' => PrestaHelper::__( 'Pause on Hover', 'elementor' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'yes',
				'options' => [
					'yes' => PrestaHelper::__( 'Yes', 'elementor' ),
					'no' => PrestaHelper::__( 'No', 'elementor' ),
				],
				'frontend_available' => true,
			]
		);
		$this->add_control(
			'autoplay',
			[
				'label' => PrestaHelper::__( 'Autoplay', 'elementor' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'yes',
				'options' => [
					'yes' => PrestaHelper::__( 'Yes', 'elementor' ),
					'no' => PrestaHelper::__( 'No', 'elementor' ),
				],
				'frontend_available' => true,
			]
		);
		$this->add_control(
			'autoplay_speed',
			[
				'label' => PrestaHelper::__( 'Autoplay Speed', 'elementor' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 5000,
				'frontend_available' => true,
			]
		);
		$this->add_control(
			'infinite',
			[
				'label' => PrestaHelper::__( 'Infinite Loop', 'elementor' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'yes',
				'options' => [
					'yes' => PrestaHelper::__( 'Yes', 'elementor' ),
					'no' => PrestaHelper::__( 'No', 'elementor' ),
				],
				'frontend_available' => true,
			]
		);
		$this->add_control(
			'effect',
			[
				'label' => PrestaHelper::__( 'Effect', 'elementor' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'slide',
				'options' => [
					'slide' => PrestaHelper::__( 'Slide', 'elementor' ),
					'fade' => PrestaHelper::__( 'Fade', 'elementor' ),
				],
				'condition' => [
					'slides_to_show' => '1',
				],
				'frontend_available' => true,
			]
		);
		$this->add_control(
			'speed',
			[
				'label' => PrestaHelper::__( 'Animation Speed', 'elementor' ),
				'type' => Controls_Manager::NUMBER,
				'default' => 500,
				'frontend_available' => true,
			]
		);
		$this->add_control(
			'direction',
			[
				'label' => PrestaHelper::__( 'Direction', 'elementor' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'ltr',
				'options' => [
					'ltr' => PrestaHelper::__( 'Left', 'elementor' ),
					'rtl' => PrestaHelper::__( 'Right', 'elementor' ),
				],
				'frontend_available' => true,
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'section_style_navigation',
			[
				'label' => PrestaHelper::__( 'Navigation', 'elementor' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'navigation' => [ 'arrows', 'dots', 'both' ],
				],
			]
		);
		$this->add_control(
			'heading_style_arrows',
			[
				'label' => PrestaHelper::__( 'Arrows', 'elementor' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'navigation' => [ 'arrows', 'both' ],
				],
			]
		);
		$this->add_control(
			'arrows_position',
			[
				'label' => PrestaHelper::__( 'Position', 'elementor' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'inside',
				'options' => [
					'inside' => PrestaHelper::__( 'Inside', 'elementor' ),
					'outside' => PrestaHelper::__( 'Outside', 'elementor' ),
				],
				'condition' => [
					'navigation' => [ 'arrows', 'both' ],
				],
			]
		);
		$this->add_control(
			'arrows_size',
			[
				'label' => PrestaHelper::__( 'Size', 'elementor' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 20,
						'max' => 60,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .elementor-image-carousel-wrapper .slick-slider .slick-prev:before, {{WRAPPER}} .elementor-image-carousel-wrapper .slick-slider .slick-next:before' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'navigation' => [ 'arrows', 'both' ],
				],
			]
		);
		$this->add_control(
			'arrows_color',
			[
				'label' => PrestaHelper::__( 'Color', 'elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-image-carousel-wrapper .slick-slider .slick-prev:before, {{WRAPPER}} .elementor-image-carousel-wrapper .slick-slider .slick-next:before' => 'color: {{VALUE}};',
				],
				'condition' => [
					'navigation' => [ 'arrows', 'both' ],
				],
			]
		);
		$this->add_control(
			'heading_style_dots',
			[
				'label' => PrestaHelper::__( 'Dots', 'elementor' ),
				'type' => Controls_Manager::HEADING,
				'separator' => 'before',
				'condition' => [
					'navigation' => [ 'dots', 'both' ],
				],
			]
		);
		$this->add_control(
			'dots_position',
			[
				'label' => PrestaHelper::__( 'Position', 'elementor' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'outside',
				'options' => [
					'outside' => PrestaHelper::__( 'Outside', 'elementor' ),
					'inside' => PrestaHelper::__( 'Inside', 'elementor' ),
				],
				'condition' => [
					'navigation' => [ 'dots', 'both' ],
				],
			]
		);
		$this->add_control(
			'dots_size',
			[
				'label' => PrestaHelper::__( 'Size', 'elementor' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 5,
						'max' => 10,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .elementor-image-carousel-wrapper .elementor-image-carousel .slick-dots li button:before' => 'font-size: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'navigation' => [ 'dots', 'both' ],
				],
			]
		);
		$this->add_control(
			'dots_color',
			[
				'label' => PrestaHelper::__( 'Color', 'elementor' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .elementor-image-carousel-wrapper .elementor-image-carousel .slick-dots li button:before' => 'color: {{VALUE}};',
				],
				'condition' => [
					'navigation' => [ 'dots', 'both' ],
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'section_style_image',
			[
				'label' => PrestaHelper::__( 'Image', 'elementor' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		$this->add_responsive_control(
			'gallery_vertical_align',
			[
				'label' => PrestaHelper::__( 'Vertical Align', 'elementor' ),
				'type' => Controls_Manager::CHOOSE,
				'label_block' => false,
				'options' => [
					'flex-start' => [
						'title' => PrestaHelper::__( 'Start', 'elementor' ),
						'icon' => 'ceicon-v-align-top',
					],
					'center' => [
						'title' => PrestaHelper::__( 'Center', 'elementor' ),
						'icon' => 'ceicon-v-align-middle',
					],
					'flex-end' => [
						'title' => PrestaHelper::__( 'End', 'elementor' ),
						'icon' => 'ceicon-v-align-bottom',
					],
				],
				'condition' => [
					'slides_to_show!' => '1',
				],
				'selectors' => [
					'{{WRAPPER}} .slick-track' => 'display: flex; align-items: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'image_spacing',
			[
				'label' => PrestaHelper::__( 'Spacing', 'elementor' ),
				'type' => Controls_Manager::SELECT,
				'options' => [
					'' => PrestaHelper::__( 'Default', 'elementor' ),
					'custom' => PrestaHelper::__( 'Custom', 'elementor' ),
				],
				'default' => '',
				'condition' => [
					'slides_to_show!' => '1',
				],
			]
		);
		$this->add_control(
			'image_spacing_custom',
			[
				'label' => PrestaHelper::__( 'Image Spacing', 'elementor' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 100,
					],
				],
				'default' => [
					'size' => 20,
				],
				'show_label' => false,
				'selectors' => [
					'{{WRAPPER}} .slick-list' => 'margin-left: -{{SIZE}}{{UNIT}};',
					'{{WRAPPER}} .slick-slide .slick-slide-inner' => 'padding-left: {{SIZE}}{{UNIT}};',
				],
				'condition' => [
					'image_spacing' => 'custom',
					'slides_to_show!' => '1',
				],
			]
		);
		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name' => 'image_border',
				'selector' => '{{WRAPPER}} .elementor-image-carousel-wrapper .elementor-image-carousel .slick-slide-image',
				'separator' => 'before',
			]
		);
		$this->add_control(
			'image_border_radius',
			[
				'label' => PrestaHelper::__( 'Border Radius', 'elementor' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .elementor-image-carousel-wrapper .elementor-image-carousel .slick-slide-image' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		$this->end_controls_section();
		$this->start_controls_section(
			'section_caption',
			[
				'label' => PrestaHelper::__( 'Caption', 'elementor' ),
				'tab' => Controls_Manager::TAB_STYLE,
				'condition' => [
					'caption_type!' => '',
				],
			]
		);
		$this->add_control(
			'caption_align',
			[
				'label' => PrestaHelper::__( 'Alignment', 'elementor' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => PrestaHelper::__( 'Left', 'elementor' ),
						'icon' => 'ceicon-text-align-left',
					],
					'center' => [
						'title' => PrestaHelper::__( 'Center', 'elementor' ),
						'icon' => 'ceicon-text-align-center',
					],
					'right' => [
						'title' => PrestaHelper::__( 'Right', 'elementor' ),
						'icon' => 'ceicon-text-align-right',
					],
					'justify' => [
						'title' => PrestaHelper::__( 'Justified', 'elementor' ),
						'icon' => 'ceicon-text-align-justify',
					],
				],
				'default' => 'center',
				'selectors' => [
					'{{WRAPPER}} .elementor-image-carousel-caption' => 'text-align: {{VALUE}};',
				],
			]
		);
		$this->add_control(
			'caption_text_color',
			[
				'label' => PrestaHelper::__( 'Text Color', 'elementor' ),
				'type' => Controls_Manager::COLOR,
				'default' => '',
				'selectors' => [
					'{{WRAPPER}} .elementor-image-carousel-caption' => 'color: {{VALUE}};',
				],
			]
		);
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'caption_typography',
				'scheme' => Scheme_Typography::TYPOGRAPHY_4,
				'selector' => '{{WRAPPER}} .elementor-image-carousel-caption',
			]
		);
		$this->end_controls_section();

	}

	/**
	 * Render image carousel widget output on the frontend.
	 *
	 * Written in PHP and used to generate the final HTML.
	 *
	 * @since 1.0
	 * @access protected
	 */
	protected function render() {
		$settings = $this->get_settings_for_display();
		if ( empty( $settings['carousel'] ) ) {
			return;
		}
		$slides = [];
		foreach ( $settings['carousel'] as $index => $attachment ) {
			$image_url = $attachment['url'];
			$style='';
			if($settings['carousel_width']!='' ){
				$style.='width: '.$settings['carousel_width'].'px;';
			}else{
				$style.='width: 200px;';
			}
			if( $settings['carousel_height']!='' ){
				$style.='height: '.$settings['carousel_height'].'px;';
			}else{
				$style.='height: 200px;';
			}
			$image_html = '<img class="slick-slide-image" style="'.$style.'" src="' . PrestaHelper::esc_attr( $image_url ) . '" alt="' . PrestaHelper::esc_attr( Control_Media::get_image_alt( $attachment ) ) . '" />';
			$link = $this->get_link_url( $attachment, $settings );
			if ( $link ) {
				$link_key = 'link_' . $index;
				$this->add_render_attribute( $link_key, [
					'href' => $link['url'],
					'data-elementor-open-lightbox' => $settings['open_lightbox'],
					'data-elementor-lightbox-slideshow' => $this->get_id(),
					'data-elementor-lightbox-index' => $index,
				] );
				if ( Plugin::$instance->editor->is_edit_mode() ) {
					$this->add_render_attribute( $link_key, [
						'class' => 'elementor-clickable',
					] );
				}
				if ( ! empty( $link['is_external'] ) ) {
					$this->add_render_attribute( $link_key, 'target', '_blank' );
				}
				if ( ! empty( $link['nofollow'] ) ) {
					$this->add_render_attribute( $link_key, 'rel', 'nofollow' );
				}
				$image_html = '<a ' . $this->get_render_attribute_string( $link_key ) . '>' . $image_html . '</a>';
			}
			$image_caption = $this->get_image_caption( $attachment );
			$slide_html = '<div class="slick-slide"><figure class="slick-slide-inner">' . $image_html;
			if ( ! empty( $image_caption ) ) {
				$slide_html .= '<figcaption class="elementor-image-carousel-caption">' . $image_caption . '</figcaption>';
			}
			$slide_html .= '</figure></div>';
			$slides[] = $slide_html;
		}

		if ( empty( $slides ) ) {
			return;
		}
		$this->add_render_attribute( 'carousel', 'class', 'elementor-image-carousel' );
		if ( 'none' !== $settings['navigation'] ) {
			if ( 'dots' !== $settings['navigation'] ) {
				$this->add_render_attribute( 'carousel', 'class', 'slick-arrows-' . $settings['arrows_position'] );
			}
			if ( 'arrows' !== $settings['navigation'] ) {
				$this->add_render_attribute( 'carousel', 'class', 'slick-dots-' . $settings['dots_position'] );
			}
		}

		if ( 'yes' === $settings['image_stretch'] ) {
			$this->add_render_attribute( 'carousel', 'class', 'slick-image-stretch' );
		}
		?>
		<div class="elementor-image-carousel-wrapper elementor-slick-slider" dir="<?php echo $settings['direction']; ?>">
			<div <?php echo $this->get_render_attribute_string( 'carousel' ); ?>>
				<?php echo implode( '', $slides ); ?>
			</div>
		</div>
		<?php
	}

	/**
	 * Retrieve image carousel link URL.
	 *
	 * @since 1.0
	 * @access private
	 *
	 * @param array $attachment
	 * @param object $instance
	 *
	 * @return array|string|false An array/string containing the attachment URL, or false if no link.
	 */
	private function get_link_url( $attachment, $instance ) {
		if ( 'none' === $instance['link_to'] ) {
			return false;
		}

		if ( 'custom' === $instance['link_to'] ) {
			if ( empty( $instance['link']['url'] ) ) {
				return false;
			}

			return $instance['link'];
		}

		return [
			'url' =>  $attachment['url'] ,
		];
	}

	/**
	 * Retrieve image carousel caption.
	 *
	 * @since 1.2.0
	 * @access private
	 *
	 * @param array $attachment
	 *
	 * @return string The caption of the image.
	 */
	private function get_image_caption( $attachment ) {
		$caption_type = $this->get_settings_for_display( 'caption_type' );

		if ( empty( $caption_type ) ) {
			return '';
		}
		$imagepathinfo = pathinfo($attachment['url']);
		if ( 'title' === $caption_type ) {
			return $imagepathinfo['filename'];
		}
		return '';

	}
}