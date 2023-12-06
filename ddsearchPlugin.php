<?php

/**
 * DurationType plugin main class
 *
 * @author James Tripp
 */
class ddsearchPlugin extends Omeka_Plugin_AbstractPlugin
{
    protected $_hooks = array(
        'public_footer'
    );

    public function hookPublicFooter($args)
    {
        echo get_view()->partial('ddsearch-script.php');
    }
}
?>
