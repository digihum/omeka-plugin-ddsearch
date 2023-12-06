<script type="text/javascript">
    jQuery(document).ready(function()
    {
        var ddsearchSearchForm = '<?php echo ddsearch::getSearchFormHtml(); ?>';
        jQuery('#search-container').replaceWith(ddsearchSearchForm);

        jQuery("#search-erase-icon").click(function()
        {
            var query = jQuery('#query');
            query.val('');
            query.focus();
        });

        // Show or hide the 'Recent Items' link (see comments in recent-items-script.js updateCookie function).
        var recentItemsCount = getRecentItemIdsFromCookie().length;
        var recentItemLink = jQuery('#recent-items-link');
        recentItemsCount === 0 ? recentItemLink.hide() : recentItemLink.show();
    });
</script>

<style>
    /* span.search-erase {
        position: relative;
    }
    span.search-erase span {
        position: absolute;
        display: block;
        top: 5px;
        right: 5px;
        width: 16px;
        height: 20px;
        color: #a0a0a0 !important;
        background-color: #fff;
        cursor: pointer;
    } */
</style>