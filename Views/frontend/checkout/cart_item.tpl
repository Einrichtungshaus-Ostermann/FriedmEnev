{extends file='parent:frontend/checkout/cart_item.tpl'}

{block name='frontend_checkout_cart_item_details_sku'}
    {$smarty.block.parent}
    {block name='frontend_checkout_cart_item_details_sku_friedmenev'}
        {if $sBasketItem.additional_details.FriedmEnev.active}
            <div style="float:left;width:100%">
                {include file='frontend/plugins/friedm_enev/sw5/arrow.tpl' FriedmEnev=$sBasketItem.additional_details.FriedmEnev}
            </div>
        {/if}
    {/block}
{/block}