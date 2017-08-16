<?php

/**
 * Locations_Tab_Settings
 *
 * @class   Locations_Tab_Settings
 * @version 1.0
 * @since   1.0
 * @package Locations
 * @author  Chasm.Solutions
 */

if ( ! defined( 'ABSPATH' ) ) { exit; } // Exit if accessed directly

class MM_Admin_Tab_Settings
{
    
    /**
     * Page content for the tab
     */
    public function page_contents()
    {
        
        $html = '';
        
        $html .= '<div class="wrap"><h2>Settings</h2>'; // Block title
        
        $html .= '<div class="wrap"><div id="poststuff"><div id="post-body" class="metabox-holder columns-2">';
        $html .= '<div id="post-body-content">';
        $worldID = "'AFG-BAA'";
        $oz_record = json_decode( file_get_contents( 'https://services1.arcgis.com/DnZ5orhsUGGdUZ3h/ArcGIS/rest/services/OmegaZones082016/FeatureServer/0/query?where=WorldID='.$worldID.'&outFields=*&returnGeometry=true&resultRecordCount=1&f=pgeojson' ) );
        print '<pre>'; print_r($oz_record); print '</pre>';
        
        $html .= '</div><!-- end post-body-content --><div id="postbox-container-1" class="postbox-container">';
        
        $html .= '</div><!-- postbox-container 1 --><div id="postbox-container-2" class="postbox-container">';
        $html .= '';/* Add content to column */
        
        $html .= '</div><!-- postbox-container 2 --></div><!-- post-body meta box container --></div><!--poststuff end --></div><!-- wrap end -->';
        
        return $html;
        
    }
    
}
