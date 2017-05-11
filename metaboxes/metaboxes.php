<?php

global $metaboxes;


$aliados_fields = array();
$field_types = array( "text", "url", "email", "integer", "float", "date", "time", "textarea", "html", "upload" );


$aliados_fields[] = array(
  // titulo logo
  array(
    'field_name'            => 'aliados-cpt',
    'field_type'            => $field_types[0],
    'repeatable'            => false,
    'related_post_types'    => false,
    'field_label'           => 'Titulo logo',
    'description'           => 'Agrega el titulo que aparecerá en el slider de aliados',
    'markup_function'       => 'standard_metabox_markup',
  )
);

$metaboxes = array(

  'aliados-metabox'=>array(

    'post_type'    => 'aliados',
    'name'         => 'aliados-cpt-metabox',
    'title'        => 'Logos de aliados',

    'description'  => 'Ingresa los logos de tus aliados',

    'fields' => $aliados_fields[0]
  ),

  'related-metabox'=>array(

    'post_type'    => 'rpt',
    'name'         => 'rpt-metabox',
    'title'        => 'Related Post Type',

    'description'  => 'Related Post Types',

    'fields' => array(
      array(
        'field_name'            => 'rpt-test-cpt',

        'field_type'            => 'related_post',
        'repeatable'            => true,
        'related_post_types'    => array('test-cpt'),

        'field_label'           => 'Related Post Type Posts',
        'description'           => '',
        'markup_function'       => 'standard_metabox_markup'
      ),
    )
  ),

  'date-cpt-date-metabox'=>array(

    'post_type'    => 'date-cpt',
    'name'         => 'date-cpt-metabox',
    'title'        => 'Date CPT Metabox',

    'description'  => 'Fill in Date',

    'fields' => array(

      array(
        'field_name'            => 'test-cpt-date',
        'field_type'            => 'date',
        'repeatable'            => false,
        'field_label'           => 'Date Field',
        'description'           => 'A date field.',
        'markup_function'       => 'standard_metabox_html'
      ),


    )
  ),


  'repeatable-field-cpt' => array(

    'post_type'    => 'repeatable-field-cpt',
    'name'         => 'repeatable-test',
    'title'        => 'Repeatable Test',

    'description'  => '',

    'fields' => array(

      array(
        'field_name'            => 'repeatable-field',
        'field_type'            => 'text',
        'repeatable'            => true,
        'field_label'           => 'Repeatable Field',
        'description'           => 'A Repeatable field.',
        'markup_function'       => 'standard_metabox_html'
      ),


    )
  ),




);


?>
