<?php
$propulsionTypes = array(
    'unknown'   => __( '', 'p3k-galactica' ),
    'light_speed'   => __( 'Light Speed', 'p3k-galactica' ),
    'ftl_speed'   => __( 'Faster Than Light', 'p3k-galactica' ),
);

$settings = array(
        array(
            'name' => __( 'General Configuration', 'p3k-galactica' ),
            'type' => 'title',
            'id'   => $prefix . 'general_config_settings'
        ),
        array(
            'id'        => $prefix . 'battlestar_group',
            'name'      => __( 'Battlestar Group', 'p3k-galactica' ), 
            'type'      => 'number',
            'desc_tip'  => __( ' The numeric designation of this Battlestar Group.', 'p3k-galactica')
        ),
        array(
            'id'        => $prefix . 'flagship',
            'name'      => __( 'Flagship', 'p3k-galactica' ), 
            'type'      => 'text',
            'desc_tip'  => __( ' The name of this Battlestar Group flagship. ', 'p3k-galactica')
        ),
        array(
            'id'        => '',
            'name'      => __( 'General Configuration', 'p3k-galactica' ),
            'type'      => 'sectionend',
            'desc'      => '',
            'id'        => $prefix . 'general_config_settings'
        ),

        array(
            'name' => __( 'Flagship Settings', 'p3k-galacticay' ),
            'type' => 'title',
            'id'   => $prefix . 'flagship_settings',
        ),
        array(
            'id'        => $prefix . 'ship_propulsion_type',
            'name'      => __( 'Propulsion Type', 'p3k-galactica' ), 
            'type'      => 'select',
            'class'     => 'wc-enhanced-select',
            'options'   => $propulsionTypes,
            'desc_tip'  => __( ' The primary propulsion type utilized by this flagship.', 'p3k-galactica')
        ),
        array(
            'id'        => $prefix . 'ship_length',
            'name'      => __( 'Length', 'p3k-galactica' ), 
            'type'      => 'number',
            'desc_tip'  => __( ' The length in meters of this ship.', 'p3k-galactica')
        ),
        array(
            'id'        => $prefix . 'ship_in_service',
            'name'      => __( 'In Service?', 'p3k-galactica' ),
            'type'      => 'checkbox',
            'desc'  => __( 'Uncheck this box if the ship is out of service.', 'p3k-galactica' ),
            'default'   => 'yes'
        ),             
        array(
            'id'        => '',
            'name'      => __( 'Flagship Settings', 'p3k-galactica' ),
            'type'      => 'sectionend',
            'desc'      => '',
            'id'        => $prefix . 'flagship_settings',
        ),                        
    );
?>