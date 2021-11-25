{extends file='parent:frontend/listing/product-box/product-badges.tpl'}

{block name='frontend_listing_box_article_discount_friedmenev'}
    {if !$sArticle.liveShopping}
        {$smarty.block.parent}
    {/if}
{/block}
