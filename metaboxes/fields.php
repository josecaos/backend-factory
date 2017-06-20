<?php

$aliados_fields = array();
$social_fields = array();
$field_types = array( "text", "url", "email", "integer", "float", "date", "time", "textarea", "html", "upload" );

// Informacion staff
$staff_fields[] = array(
  // nombre - puesto - bio
  array(
    'field_name'            => 'staff-nombre',
    'field_type'            => $field_types[0],
    'repeatable'            => false,
    'related_post_types'    => false,
    'field_label'           => 'Nombre',
    'description'           => 'Ingresa el nombre del integrante.',
    'markup_function'       => 'standard_metabox_markup',
  ),
  array(
    'field_name'            => 'staff-puesto',
    'field_type'            => $field_types[0],
    'repeatable'            => false,
    'related_post_types'    => false,
    'field_label'           => 'Puesto',
    'description'           => 'Ingresa el puesto del integrante.',
    'markup_function'       => 'standard_metabox_markup',
  ),
  array(
    'field_name'            => 'staff-bio',
    'field_type'            => $field_types[7],
    'repeatable'            => false,
    'related_post_types'    => false,
    'field_label'           => 'Biografía integrante',
    'description'           => 'Ingresa el la información del integrante.',
    'markup_function'       => 'standard_metabox_markup',
  )
);
// Informacion roockies
$roockies_fields[] = array(
  // nombre - generacion - proyecto - universidad - carrera
  array(
    'field_name'            => 'roockie-nombre',
    'field_type'            => $field_types[0],
    'repeatable'            => false,
    'related_post_types'    => false,
    'field_label'           => 'Nombre',
    'description'           => 'Ingresa el nombre del estudiante.',
    'markup_function'       => 'standard_metabox_markup',
  ),
  array(
    'field_name'            => 'roockie-generacion',
    'field_type'            => $field_types[0],
    'repeatable'            => false,
    'related_post_types'    => false,
    'field_label'           => 'Generación',
    'description'           => 'Ingresa la generación del estudiante.',
    'markup_function'       => 'standard_metabox_markup',
  ),
  array(
    'field_name'            => 'roockie-proyectos',
    'field_type'            => $field_types[7],
    'repeatable'            => false,
    'related_post_types'    => false,
    'field_label'           => 'Proyectos',
    'description'           => 'Ingresa los proyectos del estudiante.',
    'markup_function'       => 'standard_metabox_markup',
  ),
  array(
    'field_name'            => 'roockie-universidad',
    'field_type'            => $field_types[0],
    'repeatable'            => false,
    'related_post_types'    => false,
    'field_label'           => 'Universidad',
    'description'           => 'Ingresa la universidad de formación del estudiante.',
    'markup_function'       => 'standard_metabox_markup',
  ),
  array(
    'field_name'            => 'roockie-carrera',
    'field_type'            => $field_types[0],
    'repeatable'            => false,
    'related_post_types'    => false,
    'field_label'           => 'Carrera',
    'description'           => 'Ingresa el la información del integrante.',
    'markup_function'       => 'standard_metabox_markup',
  ),
  array(
    'field_name'            => 'roockie-bio',
    'field_type'            => $field_types[7],
    'repeatable'            => false,
    'related_post_types'    => false,
    'field_label'           => 'Biografía',
    'description'           => 'Ingresa el la información del integrante.',
    'markup_function'       => 'standard_metabox_markup',
  )
);
$p_roockies_fields[] = array(
  // nombre proyecto - Integrantes - descripcion
  array(
    'field_name'            => 'nombre-proyecto',
    'field_type'            => $field_types[0],
    'repeatable'            => false,
    'related_post_types'    => false,
    'field_label'           => 'Nombre proyecto',
    'description'           => 'Ingresa el nombre del proyecto.',
    'markup_function'       => 'standard_metabox_markup',
  ),
  array(
    'field_name'            => 'integrantes-proyecto',
    'field_type'            => $field_types[7],
    'repeatable'            => false,
    'related_post_types'    => false,
    'field_label'           => 'Integrantes',
    'description'           => 'Ingresa los integrantes del proyecto.',
    'markup_function'       => 'standard_metabox_markup',
  ),
  array(
    'field_name'            => 'descripcion-proyecto',
    'field_type'            => $field_types[7],
    'repeatable'            => false,
    'related_post_types'    => false,
    'field_label'           => 'Descripción Proyecto',
    'description'           => 'Ingresa los proyectos del estudiante.',
    'markup_function'       => 'standard_metabox_markup',
  )
);

// mentores
// Informacion roockies
$mentores_fields[] = array(
  // nombre, Expertise y tema
  array(
    'field_name'            => 'mentor-nombre',
    'field_type'            => $field_types[0],
    'repeatable'            => false,
    'related_post_types'    => false,
    'field_label'           => 'Nombre',
    'description'           => 'Ingresa el nombre del docente.',
    'markup_function'       => 'standard_metabox_markup',
  ),
  array(
    'field_name'            => 'mentor-expertise',
    'field_type'            => $field_types[7],
    'repeatable'            => false,
    'related_post_types'    => false,
    'field_label'           => 'Formación',
    'description'           => 'Ingresa la formación del docente.',
    'markup_function'       => 'standard_metabox_markup',
  ),
  array(
    'field_name'            => 'mentor-tema',
    'field_type'            => $field_types[0],
    'repeatable'            => false,
    'related_post_types'    => false,
    'field_label'           => 'Tema',
    'description'           => 'Ingresa tema del docente.',
    'markup_function'       => 'standard_metabox_markup',
  ),
  array(
    'field_name'            => 'mentor-bio',
    'field_type'            => $field_types[7],
    'repeatable'            => false,
    'related_post_types'    => false,
    'field_label'           => 'Biografía',
    'description'           => 'Ingresa el la información del docente.',
    'markup_function'       => 'standard_metabox_markup',
  )
);
$extended_fields[] = array(
  // nombre, Area y Bio
  array(
    'field_name'            => 'extended-nombre',
    'field_type'            => $field_types[0],
    'repeatable'            => false,
    'related_post_types'    => false,
    'field_label'           => 'Nombre',
    'description'           => 'Ingresa el nombre del colaborador.',
    'markup_function'       => 'standard_metabox_markup',
  ),
  array(
    'field_name'            => 'extended-area',
    'field_type'            => $field_types[0],
    'repeatable'            => false,
    'related_post_types'    => false,
    'field_label'           => 'Área',
    'description'           => 'Ingresa el área del colaborador.',
    'markup_function'       => 'standard_metabox_markup',
  ),
  array(
    'field_name'            => 'extended-bio',
    'field_type'            => $field_types[7],
    'repeatable'            => false,
    'related_post_types'    => false,
    'field_label'           => 'Bio',
    'description'           => 'Ingresa la información del colaborador.',
    'markup_function'       => 'standard_metabox_markup',
  )
);
$aliados_fields[] = array(
  // titulo logo
  array(
    'field_name'            => 'aliados-titulo-logo',
    'field_type'            => $field_types[0],
    'repeatable'            => false,
    'related_post_types'    => false,
    'field_label'           => 'Titulo logo',
    'description'           => 'Agrega el titulo que aparecerá en el logo, dentro del slider aliados',
    // 'markup_function'       => 'standard_metabox_markup',
  ),
  array(
    'field_name'            => 'aliados-link',
    'field_type'            => $field_types[0],
    'repeatable'            => false,
    'related_post_types'    => false,
    'field_label'           => 'Link logo aliado',
    'description'           => 'Agrega el link de logo de aliado.',
    // 'markup_function'       => 'standard_metabox_markup',
  )
);

// banners sidebar
$sidebar_banner_slider_fields[] = array(
  // titulo logo
  array(
    'field_name'            => 'side-banner',
    'field_type'            => $field_types[0],
    'repeatable'            => false,
    'related_post_types'    => false,
    'field_label'           => 'Texto banner',
    'description'           => 'Agrega texto sobre la imágen(Banner)',
    // 'markup_function'       => 'standard_metabox_markup',
  ),
  array(
    'field_name'            => 'side-link',
    'field_type'            => $field_types[0],
    'repeatable'            => false,
    'related_post_types'    => false,
    'field_label'           => 'Link de banner sidebar ',
    'description'           => 'Agrega el link de el banner en el slidebar.',
    // 'markup_function'       => 'standard_metabox_markup',
  )
);
$footer_banner_slider_fields[] = array(
  // titulo logo
  array(
    'field_name'            => 'banner-texto',
    'field_type'            => $field_types[0],
    'repeatable'            => false,
    'related_post_types'    => false,
    'field_label'           => 'Texto banner',
    'description'           => 'Agrega texto sobre la imágen(Banner)',
    // 'markup_function'       => 'standard_metabox_markup',
  ),
  array(
    'field_name'            => 'banner-link',
    'field_type'            => $field_types[0],
    'repeatable'            => false,
    'related_post_types'    => false,
    'field_label'           => 'Link de banner footer',
    'description'           => 'Agrega el link del banner en el footer.',
    // 'markup_function'       => 'standard_metabox_markup',
  )
);
// redes sociales icono + link
$social_fields[] = array(
  // titulo logo
  array(
    'field_name'            => 'social-fontawesome',
    'field_type'            => $field_types[0],
    'repeatable'            => false,
    'related_post_types'    => false,
    'field_label'           => 'Icono Red Social ',
    'description'           => 'Ingresa el nombre del ícono de la librería font-awesome.',
    // 'markup_function'       => 'standard_metabox_markup',
  ),
  array(
    'field_name'            => 'social-link',
    'field_type'            => $field_types[0],
    'repeatable'            => false,
    'related_post_types'    => false,
    'field_label'           => 'Link de red social ',
    'description'           => 'Agrega el link de la red social.',
    // 'markup_function'       => 'standard_metabox_markup',
  )
);
//
