<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
sdsdfsdfsdfsdf
<div class="orbit" role="region" aria-label="Favorite Space Pictures" data-orbit>
    <div class="orbit-wrapper">
        <div class="orbit-controls">
            <button class="orbit-previous"><span class="show-for-sr">Предыдущий</span>&#9664;&#xFE0E;</button>
            <button class="orbit-next"><span class="show-for-sr">Следующий</span>&#9654;&#xFE0E;</button>
        </div>
        <ul class="orbit-container">

        <?foreach ($arResult as $item): ?>

            <?
                $file = CFile::ResizeImageGet($item["PREVIEW_PICTURE"], array('width' => 1100,'height' => 500), BX_RESIZE_IMAGE_EXACT, true);
            ?>

            <li class="orbit-slide">
                <figure class="orbit-figure">
                    <img class="orbit-image" src="<?=$file['src']?>" alt="Space">
                    <figcaption class="orbit-caption"><?=$item['NAME']?></figcaption>
                </figure>
            </li>

        <?endforeach;?>

        </ul>
    </div>

    <nav class="orbit-bullets">

        <?foreach ($arResult as $item=>$key): ?>
            <button data-slide="<?=$key?>"><span class="show-for-sr"><?=$item['NAME']?></span></button>
        <?endforeach;?>

    </nav>
</div>