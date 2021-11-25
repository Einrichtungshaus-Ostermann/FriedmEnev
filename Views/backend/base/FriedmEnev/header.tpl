{extends file='parent:backend/base/header.tpl'}

{block name="backend/base/header/css"}
	{$smarty.block.parent}
	<link rel="stylesheet" type="text/css" href="{link file="backend/_resources/styles/FriedmEnev.css"}" />
{/block}