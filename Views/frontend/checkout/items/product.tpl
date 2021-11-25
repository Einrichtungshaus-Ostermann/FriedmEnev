{extends file='parent:frontend/checkout/items/product.tpl'}

{block name='frontend_checkout_cart_item_details_sku'}
    {$smarty.block.parent}
    {block name='frontend_checkout_cart_item_details_sku_friedmenev'}
        {if $sBasketItem.additional_details.FriedmEnev.active}
            {include file='frontend/plugins/friedm_enev/sw5/arrow.tpl' FriedmEnev=$sBasketItem.additional_details.FriedmEnev}
        {/if}
    {/block}
{/block}