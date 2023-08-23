      <?php
if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly.
}

/**
 * Elementor gridx gridxdaeducationbox Widget.
 *
 * Elementor widget that inserts an embbedable content into the page, from any given URL.
 *
 * @since 1.0.0
 */
class Elementor_gridx_gridxdaeducationbox_Widget extends \Elementor\Widget_Base {

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
        return 'gridxdaeducationbox';
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
        return esc_html__( 'Dark Education Box Section', 'gridx-core' );
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
                'label' => esc_html__( 'Dark Education Box Section', 'gridx-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        $this->add_control(
            'title', [
                'label'         => esc_html__( 'Title', 'gridx-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );


         // IMAGE
        $this->add_control(
            'bgimg',
            [
                'label'     => esc_html__( 'Background Image', 'gridx-core' ),
                'type'      => \Elementor\Controls_Manager::MEDIA,
                'default'   => [
                    'url'       => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
    

     

        $this->end_controls_section();

        //TAB2

        $this->start_controls_section(
            'section2',
            [
                'label' => esc_html__( 'Dark Experience Detail Section', 'gridx-core' ),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );

        // Repeater Start 

        $repeater = new \Elementor\Repeater();

        // TEXT 
        $repeater->add_control( //this line only for repeater 
            'year',
            [
                'label'         => esc_html__( 'Years ','gridx-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $repeater->add_control(
            'heading',
            [
                'label'         => esc_html__( 'Heading','gridx-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );

        $repeater->add_control(
            'subheading',
            [
                'label'         => esc_html__( 'Sub Heading','gridx-core' ),
                'type'          => \Elementor\Controls_Manager::TEXT,
                'label_block'   => true,
            ]
        );


        $this->add_control(
            'list1', //repeater name
            [
                'label'     => esc_html__( 'Experience List', 'gridx-core' ),
                'type'      => \Elementor\Controls_Manager::REPEATER,
                'fields'    => $repeater->get_controls(),
                'default'   => [
                    [
                     'list_title' => esc_html__( 'Add Features List', 'gridx-core' ),
                    ],
                ],
                'title_field' => '{{{ year }}}', // Reapeter Title 
            ]
        );

        $this->end_controls_section();

        // TAB STYLE 

        //START

        $this->start_controls_section(
            'educationbox_design_option',
            [
                'label'         => esc_html__( 'Content Style','gridx-core' ),
                'tab'           => \Elementor\Controls_Manager::TAB_STYLE,
            ]
        );

        $this->add_control(
            'educationbox_title_option',
            [
                'label'         => esc_html__( 'Title Options', 'gridx-core' ),
                'type'          => \Elementor\Controls_Manager::HEADING,
                'separator'     => 'before',
            ]
        );

        $this->add_control(
            'educationbox_title_color',
            [
                'label'         => esc_html__( 'Title Text Color', 'gridx-core' ),
                'type'          => \Elementor\Controls_Manager::COLOR,
                'selectors'     => [
                    '{{WRAPPER}} .about-edc-exp h3'=> 'color: {{VALUE}} !important;',
                ],

            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'          => 'educationbox_title_typography',
                'label'         => esc_html__( 'Title Typography', 'gridx-core' ),
                'selector'      => 
                    '{{WRAPPER}} .about-edc-exp h3',
            ]
        );

        //END

        //START
        $this->add_control(
            'educationbox_heading_option',
            [
                'label'         => esc_html__( 'Heading Options', 'gridx-core' ),
                'type'          => \Elementor\Controls_Manager::HEADING,
                'separator'     => 'before',
            ]
        );

        $this->add_control(
            'educationbox_heading_color',
            [
                'label'         => esc_html__( 'Heading Text Color', 'gridx-core' ),
                'type'          => \Elementor\Controls_Manager::COLOR,
                'selectors'     => [
                    '{{WRAPPER}} .about-edc-exp ul li h2'=> 'color: {{VALUE}} !important;',
                ],

            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'          => 'educationbox_heading_typography',
                'label'         => esc_html__( 'Heading Typography', 'gridx-core' ),
                'selector'      => 
                    '{{WRAPPER}} .about-edc-exp ul li h2',
            ]
        );

        //END

        //START
        $this->add_control(
            'educationbox_sheading_option',
            [
                'label'         => esc_html__( 'Sub Heading Options', 'gridx-core' ),
                'type'          => \Elementor\Controls_Manager::HEADING,
                'separator'     => 'before',
            ]
        );

        $this->add_control(
            'educationbox_sheading_color',
            [
                'label'         => esc_html__( 'Sub Heading Text Color', 'gridx-core' ),
                'type'          => \Elementor\Controls_Manager::COLOR,
                'selectors'     => [
                    '{{WRAPPER}} .about-edc-exp ul li .type'=> 'color: {{VALUE}} !important;',
                ],

            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'          => 'educationbox_sheading_typography',
                'label'         => esc_html__( 'Sub Heading Typography', 'gridx-core' ),
                'selector'      => 
                    '{{WRAPPER}} .about-edc-exp ul li .type',
            ]
        );

        //END


        //START
        $this->add_control(
            'educationbox_years_option',
            [
                'label'         => esc_html__( 'Years Options', 'gridx-core' ),
                'type'          => \Elementor\Controls_Manager::HEADING,
                'separator'     => 'before',
            ]
        );

        $this->add_control(
            'educationbox_years_color',
            [
                'label'         => esc_html__( 'Years Text Color', 'gridx-core' ),
                'type'          => \Elementor\Controls_Manager::COLOR,
                'selectors'     => [
                    '{{WRAPPER}} .about-edc-exp ul li .date'=> 'color: {{VALUE}} !important;',
                ],

            ]
        );

        $this->add_group_control(
            \Elementor\Group_Control_Typography::get_type(),
            [
                'name'          => 'educationbox_years_typography',
                'label'         => esc_html__( 'Years Typography', 'gridx-core' ),
                'selector'      => 
                    '{{WRAPPER}} .about-edc-exp ul li .date',
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

        $gridxdaeducationbox_output = $this->get_settings_for_display(); ?>

         <!-- Start Education
    ============================================= -->

<div  data-aos="zoom-in">
            <div class="about-edc-exp about-education shadow-box">
                <?php 	if( class_exists( 'ReduxFrameworkPlugin' ) ) { 

    global $gridx_options; 
			if($gridx_options['gridx_color_switcher_options'] == 1) : ?>
				
<img src="<?php echo esc_url(wp_get_attachment_image_url($gridxdaeducationbox_output['bgimg']['id'], 'full' ));?>" alt="BG" class="bg-img">
				
<?php endif; } ?>
                <h3><?php echo esc_html($gridxdaeducationbox_output['title']); ?></h3>

                <ul>
                    <?php if(!empty($gridxdaeducationbox_output['list1'])):
                        foreach ($gridxdaeducationbox_output['list1'] as $gridxdaeducationbox_loop):?>
                    <li>
                        <p class="date"><?php echo esc_html($gridxdaeducationbox_loop['year']); ?></p>
                        <h2><?php echo esc_html($gridxdaeducationbox_loop['heading']); ?></h2>
                        <p class="type"><?php echo esc_html($gridxdaeducationbox_loop['subheading']); ?></p>
                    </li>
                    <?php endforeach; endif;?>
                </ul>
            </div>
</div>

 <script>
    AOS.init({
        duration: 1500,
        once: true,

    });</script>


    <?php }
}

