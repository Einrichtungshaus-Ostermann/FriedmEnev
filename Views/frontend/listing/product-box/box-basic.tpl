{extends file='parent:frontend/listing/product-box/box-basic.tpl'}

{block name='ost_ostermann_trends_theme_frontend_listing_box_article_configuratble'}
	{block name='frontend_listing_box_article_discount_friedmenev'}
        {if count($sArticle.FriedmEnev)}
            <div class="mo-friedm_env-arrow-wrapper">
                {foreach $sArticle.FriedmEnev as $FriedmEnevKey => $FriedmEnevValue}
                    {include file='frontend/plugins/friedm_enev/sw5/arrow.tpl' FriedmEnev=$FriedmEnevValue}
                {/foreach}
            </div>
        {/if}
	{/block}
	{$smarty.block.parent}
{/block}