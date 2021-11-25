{extends file='parent:frontend/compare/col.tpl'}

{block name='frontend_compare_property_list'}
    {$smarty.block.parent}
    {block name='frontend_compare_property_list_friedmenev'}
        <li class="list--entry entry--enev">
            {if !empty($sArticle.FriedmEnev) && $sArticle.FriedmEnev.active}
                {include file='frontend/plugins/friedm_enev/sw5/arrow.tpl' FriedmEnev=$sArticle.FriedmEnev}
            {else}
                -
            {/if}
        </li>
    {/block}
{/block}