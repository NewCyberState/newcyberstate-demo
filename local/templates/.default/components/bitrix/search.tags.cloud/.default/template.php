<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

if($arParams["SHOW_CHAIN"] != "N" && !empty($arResult["TAGS_CHAIN"])):
?>
<noindex>
	<div class="search-tags-chain" <?=$arParams["WIDTH"]?>><?
		foreach ($arResult["TAGS_CHAIN"] as $tags):
			?><a href="<?=$tags["TAG_PATH"]?>" rel="nofollow"><?=$tags["TAG_NAME"]?></a> <?
			?>[<a href="<?=$tags["TAG_WITHOUT"]?>" class="search-tags-link" rel="nofollow">x</a>]  <?
		endforeach;?>
	</div>
</noindex>
<?
endif;

if(is_array($arResult["SEARCH"]) && !empty($arResult["SEARCH"])):
?>
<noindex>
    <ul class="list-inline list-inline-condensed mb-2">
	<?
		foreach ($arResult["SEARCH"] as $key => $res)
		{
		?>
            <li class="list-inline-item">
            <a href="<?=$res["URL"]?>" rel="nofollow"><?=$res["NAME"]?></a>
            </li><?
		}
	?></ul>
</noindex>
<?
else:
	echo GetMessage('SEARCH_NOTHING_TO_FOUND');
endif;
?>