{extends file='parent:frontend/note/item.tpl'}

{block name='frontend_note_item_details_name'}
	{$smarty.block.parent}
	{block name='frontend_note_item_details_name_friedmenev'}
		<div class="note--ordernumber">
			{include file='frontend/plugins/friedm_enev/sw5/arrow.tpl' FriedmEnev=$sBasketItem.FriedmEnev}
		</div>
	{/block}
{/block}