<?php
/*
** custom theme functions
** the class Inflect is by Sho Kuwamoto (http://kuwamoto.org/2007/12/17/improved-pluralizing-in-php-actionscript-and-ror/) and is used for pluralization in taxonomies and custom post types.
** add_post_type()     a helper class for creating robust custom post types with one line of code
** add_taxonomy()      a helper class for creating custom taxonomies
*/


class Inflect
{
  static $plural = array(
  '/(quiz)$/i'               => "$1zes",
  '/^(ox)$/i'                => "$1en",
  '/([m|l])ouse$/i'          => "$1ice",
  '/(matr|vert|ind)ix|ex$/i' => "$1ices",
  '/(x|ch|ss|sh)$/i'         => "$1es",
  '/([^aeiouy]|qu)y$/i'      => "$1ies",
  '/(hive)$/i'               => "$1s",
  '/(?:([^f])fe|([lr])f)$/i' => "$1$2ves",
  '/(shea|lea|loa|thie)f$/i' => "$1ves",
  '/sis$/i'                  => "ses",
  '/([ti])um$/i'             => "$1a",
  '/(tomat|potat|ech|her|vet)o$/i'=> "$1oes",
  '/(bu)s$/i'                => "$1ses",
  '/(alias)$/i'              => "$1es",
  '/(octop)us$/i'            => "$1i",
  '/(ax|test)is$/i'          => "$1es",
  '/(us)$/i'                 => "$1es",
  '/s$/i'                    => "s",
  '/$/'                      => "s"
  );

  static $irregular = array(
  'move'   => 'moves',
  'foot'   => 'feet',
  'goose'  => 'geese',
  'sex'    => 'sexes',
  'child'  => 'children',
  'man'    => 'men',
  'tooth'  => 'teeth',
  'person' => 'people'
  );

  static $uncountable = array(
  'sheep',
  'fish',
  'deer',
  'series',
  'species',
  'money',
  'rice',
  'information',
  'equipment'
  );

  public static function pluralize( $string )
  {
  // save some time in the case that singular and plural are the same
  if ( in_array( strtolower( $string ), self::$uncountable ) )
  return $string;

  // check for irregular singular forms
  foreach ( self::$irregular as $pattern => $result )
  {
  $pattern = '/' . $pattern . '$/i';

  if ( preg_match( $pattern, $string ) )
    return preg_replace( $pattern, $result, $string);
  }

  // check for matches using regular expressions
  foreach ( self::$plural as $pattern => $result )
  {
    if ( preg_match( $pattern, $string ) )
    return preg_replace( $pattern, $result, $string );
  }

  return $string;
  }
}


/*
** Use this function by calling add_post_type with the name of your desired class
** as singular noun. If it needs a space, please add it as all underscored will
** be taken literally. Pass in any class overrides as an array.
** ex: add_post_type( 'singular noun', array( 'public' => false ) );
*/
function add_post_type( $name, $args = array() ) {
  add_action( 'init', function() use( $name, $args ) {
    //label alterations
    $machinename  = strtolower( str_replace( ' ', '-', $name ) );
    $upper        = ucwords( $name );
    $plural       = Inflect::pluralize( $name );
    $upperplural  = ucwords( $plural );
    $args         = array_merge(
      array(
        'public'          => true,
        'label'           => sprintf( "$machinename" ),
        'supports'        => array( 'title', 'editor' ),
        'taxonomies'      => array( 'post_tag', 'category' ),
        'menu_position'   => 5,
        'labels'          => array(
          'name'                => sprintf( "$upperplural" ),
          'singular_name'       => sprintf( "$upper" ),
          'all_items'           => sprintf( "All $upperplural" ),
          'add_new_item'        => sprintf( "Add New $upper" ),
          'edit_item'           => sprintf( "Edit $upper" ),
          'new_item'            => sprintf( "New $upper" ),
          'view_item'           => sprintf( "View $upper" ),
          "search_items"        => sprintf( "Search $upperplural" ),
          'not_found'           => sprintf( "No $plural found" ),
          'not_found_in_trash'  => sprintf( "No $plural found in Trash" ),
          'menu_name'           => sprintf( "$upperplural" )
          )
        ),
      $args
    );
    register_post_type( $machinename, $args );
  } );
}


/*
** Use this function to add custom taxonomies
** Be sure to pass in the machine_name of the associated post_type if it's a custom.
**
*/
function add_taxonomy( $name, $post_type, $args = array() ) {
  add_action( 'init', function() use( $name, $post_type, $args ) {
    $machinename  = strtolower( str_replace( ' ', '-', $name ) );
    $post_type    = strtolower( str_replace( ' ', '-', $post_type) );
    $upper        = ucwords( $name );
    $plural       = Inflect::pluralize( $name );
    $upperplural  = ucwords( $plural );
    $args         = array_merge(
      array(
        'public'          => true,
        'label'           => sprintf( "$machinename" ),
        'hierarchical'    => true,
        'show_tagcloud'   => false,
        'labels'          => array(
          'name'                        => sprintf( "$upperplural" ),
          'singular_name'               => sprintf( "$upper" ),
          'all_items'                   => sprintf( "All $upperplural" ),
          'add_new_item'                => sprintf( "Add New $upper" ),
          'edit_item'                   => sprintf( "Edit $upper" ),
          'new_item_name'               => sprintf( "Add $upper Name" ),
          'search_items'                => sprintf( "Search $upperplural" ),
          'popular_items'               => sprintf( "Popular $upperplural" ),
          'parent_item'                 => sprintf( "Parent $upper" ),
          'update_item'                 => sprintf( "Update $upper" ),
          'seperate_items_with_commas'  => sprintf( "Seperate $upperplural with commas" ),
          'add_or_remove_items'         => sprintf( "Add or remove $upperplural" ),
          'choose_from_most_used'       => sprintf( "Choose from most used $upperplural" ),
          'menu_name'                   => sprintf( "$upperplural" )
        )
      ),
      $args
    );
    register_taxonomy( $machinename, $post_type, $args );
  } );
}


?>
