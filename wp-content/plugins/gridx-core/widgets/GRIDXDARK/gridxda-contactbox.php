<?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Elementor gridx gridxdacontactbox
 Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_gridx_gridxdacontactbox_Widget extends \Elementor\Widget_Base {

    /**
     * Get widget name.
     *
     * Retrieve oEmbed widget name.
     *
     * @since 1.0.0
     * @access public
     * @return string Widget name.
     */
    public function get_name() {
        return 'gridxdacontactbox';
    }

    /**
     * Get widget title.
     *
     * Retrieve oEmbed widget title.
     *
     * @since 1.0.0
     * @access public
     * @return string Widget title.
     */
    public function get_title() {
        return esc_html__( 'Dark Contact Box Section', 'gridx-core' );
    }

    /**
     * Get widget categories.
     *
     * Retrieve the list of categories the oEmbed widget belongs to.
     *
     * @since 1.0.0
     * @access public
     * @return array Widget categories.
     */
    public function get_categories() {
        return [ 'gridx' ];
    }

    /**
     * Register oEmbed widget controls.
     *
     * Add input fields to allow the user to customize the widget settings.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function register_controls() {

        $this->start_controls_section(
            'section1',
            [
                'label' => esc_html__( 'Dark Contact Box Section', 'gridx-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

         // TEXT 
        $this->add_control(
            'heading', [
                'label'         => esc_html__( 'Heading', 'gridx-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        // LINK
        $this->add_control(
            'boxlink',
            [
                'label'         => esc_html__( 'Box Link', 'gridx-core' ),
                'type'          => \Elementor\Controls_Manager::URL,
                'placeholder'   => esc_html__( 'https://your-link.com', 'gridx-core' ),
                'show_external' => true,
                'default'       => [
                    'url'           => '#',
                    'is_external'   => true,
                    'nofollow'      => true,
                ],
            ]
        );
        
        $this->end_controls_section();

         // TAB STYLE 

        //START

        $this->start_controls_section(
            'contactbox_design_option',
            [
                'label'         => esc_html__( 'Content Style','gridx-core' ),
                'tab'           => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_responsive_control('contactbox_width',
            [
                'label' => esc_html__( 'Box Width', 'gridx-core' ),
                'type' => \Elementor\Controls_Manager::SLIDER,
                'size_units' => [ 'px', '%', 'em', 'rem', 'custom' ],
                'range' => [
                    'px' => [
                        'min' => 0,
                        'max' => 1000,
                        'step' => 5,
                    ],
                    '%' => [
                        'min' => 0,
                        'max' => 100,
                    ],
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-contact-box-wrap' => 'width: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->add_control(
            'contactbox_heading_option',
            [
                'label'         => esc_html__( 'Heading Options', 'gridx-core' ),
                'type'          => \Elementor\Controls_Manager::HEADING,
                'separator'     => 'before',
            ]
        );

        $this->add_control(
            'contactbox_heading_color',
            [
                'label'         => esc_html__( 'Heading Text Color', 'gridx-core' ),
                'type'          => \Elementor\Controls_Manager::COLOR,
                'selectors'     => [
                    '{{WRAPPER}} .info-box.about-contact-box h1 span'=> 'color: {{VALUE}} !important;',
                ],

            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'          => 'contactbox_heading_typography',
                'label'         => esc_html__( 'Heading Typography', 'gridx-core' ),
                'selector'      => 
                    '{{WRAPPER}} .info-box.about-contact-box h1',
            ]
        );

        //END

        $this->end_controls_section();


}

    /**
     * Render oEmbed widget output on the frontend.
     *
     * Written in PHP and used to generate the final HTML.
     *
     * @since 1.0.0
     * @access protected
     */
    protected function render() {

        $gridxdacontactbox_output = $this->get_settings_for_display(); ?>

         <!-- Start Contact Box
    ============================================= -->
     
    
<div data-aos="zoom-in" class="about-contact-box-wrap">
        
    <div class="about-contact-box info-box shadow-box">
        <a class="overlay-link" href="<?php echo esc_url($gridxdacontactbox_output['boxlink']['url']); ?>"></a>
        <?php 	if( class_exists( 'ReduxFrameworkPlugin' ) ) { 

    global $gridx_options; 
			if($gridx_options['gridx_color_switcher_options'] == 1) : ?>
				
<img src="<?php echo esc_url(wp_get_attachment_image_url($gridxdacontactbox_output['bgimg']['id'], 'full' ));?>" alt="BG" class="bg-img">
				
<?php endif; } ?>
<?php if( class_exists( 'ReduxFrameworkPlugin' ) ) { 
    global $gridx_options; 
			if($gridx_options['gridx_color_switcher_options'] == 1) : ?>				
<img src="<?php echo esc_url($gridx_options['box_dark_img']['url']); ?>" alt="<?php echo esc_attr__( 'Icon', 'gridx' )?>" class="star-icon">
						
<?php elseif($gridx_options['gridx_color_switcher_options'] == 2) : ?>	
<img src="<?php echo esc_url($gridx_options['box_light_img']['url']); ?>" alt="<?php echo esc_attr__( 'Icon', 'gridx' )?>" class="star-icon">
		
<?php endif; } ?>		
       
        <h1><?php echo ($gridxdacontactbox_output['heading']); ?></h1>
        <a href="<?php echo esc_url($gridxdacontactbox_output['boxlink']['url']); ?>" class="about-btn">
            <?php 	if( class_exists( 'ReduxFrameworkPlugin' ) ) { 
    global $gridx_options; 
			if($gridx_options['gridx_color_switcher_options'] == 1) : ?>				
<img src="<?php echo esc_url($gridx_options['button_dark']['url']); ?>" alt="<?php echo esc_attr__( 'Button', 'gridx' )?>">
						
<?php elseif($gridx_options['gridx_color_switcher_options'] == 2) : ?>	
<img src="<?php echo esc_url($gridx_options['button_light']['url']); ?>" alt="<?php echo esc_attr__( 'Button', 'gridx' )?>">
						
<?php endif; } ?>
        </a>
    </div>

</div>

<script>
    AOS.init({
        duration: 1500,
        once: true,

    });</script>
                 

    <?php }
}

