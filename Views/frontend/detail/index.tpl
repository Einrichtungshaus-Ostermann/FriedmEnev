{extends file='parent:frontend/detail/index.tpl'}

{block name="frontend_detail_index_buy_container_base_info"}
	{$smarty.block.parent}
	{block name="frontend_detail_index_buy_container_base_info_friedmenev"}
		{if $sArticle.FriedmEnev.active}
			<div class="article_details_bottom">
				{if strlen($sArticle.FriedmEnev.download)}<a href="{$sArticle.FriedmEnev.download}" target="_blank" title="{s name="produktdatenblatt" namespace="frontend/plugins/FriedmEnev"}Produktdatenblatt{/s}">{s name="produktdatenblatt" namespace="frontend/plugins/FriedmEnev"}Produktdatenblatt{/s}</a>{/if}
				{include file='frontend/plugins/friedm_enev/sw5/arrow.tpl' FriedmEnev=$sArticle.FriedmEnev}
			</div>
		{/if}
	{/block}
{/block}