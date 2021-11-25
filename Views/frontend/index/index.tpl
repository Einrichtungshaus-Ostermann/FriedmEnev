{extends file='parent:frontend/index/index.tpl'}

{block name="frontend_index_header_javascript_jquery_lib"}
    {$smarty.block.parent}
    {block name="frontend_index_header_javascript_jquery_lib_friedmenev"}
        <script>
            {if $theme.asyncJavascriptLoading}
            document.asyncReady(function() {
            {else}
            jQuery(window).on('load', function() {
            {/if}
                    function FriedmEnev(){
                        window.StateManager.addPlugin('.FriedmEnev_arrow', 'FriedmEnev');
                    }
                    FriedmEnev();
                    jQuery.subscribe("plugin/swInfiniteScrolling/onFetchNewPageFinished", function() {
                        FriedmEnev();
                    });
                    jQuery.subscribe("plugin/swEmotionLoader/onLoadEmotionFinished", function() {
                        FriedmEnev();
                    });
                    jQuery.subscribe("plugin/swProductCompareMenu/onStartCompareFinished", function() {
                        FriedmEnev();
                    });
                    jQuery.subscribe("plugin/swListingActions/updatePagination", function() {
                        FriedmEnev();
                    });
                    jQuery.subscribe("plugin/swAjaxVariant/onRequestDataCompleted", function() {
                        FriedmEnev();
                    });
                });
        </script>
    {/block}
{/block}