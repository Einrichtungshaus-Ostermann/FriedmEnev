{extends file='parent:frontend/listing/product-box/product-badges.tpl'}

{block name='frontend_listing_box_article_discount'}
	{block name='frontend_listing_box_article_discount_friedmenev'}
		{if $sArticle.FriedmEnev.active}
			{include file='frontend/plugins/friedm_enev/sw5/arrow.tpl' FriedmEnev=$sArticle.FriedmEnev}
		{/if}
	{/block}
	{$smarty.block.parent}
{/block}