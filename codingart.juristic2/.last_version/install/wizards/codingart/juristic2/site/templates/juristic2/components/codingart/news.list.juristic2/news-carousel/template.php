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
?>
<?
$monthes = array(
	"01" => GetMessage('MONT_ITEM_1'), 
	"02" => GetMessage('MONT_ITEM_2'), 
	"03" => GetMessage('MONT_ITEM_3'), 
	"04" => GetMessage('MONT_ITEM_4'), 
	"05" => GetMessage('MONT_ITEM_5'), 
	"06" => GetMessage('MONT_ITEM_6'),
	"07" => GetMessage('MONT_ITEM_7'), 
	"08" => GetMessage('MONT_ITEM_8'), 
	"09" => GetMessage('MONT_ITEM_9'), 
	"10" => GetMessage('MONT_ITEM_10'), 
	"11" => GetMessage('MONT_ITEM_11'), 
	"12" => GetMessage('MONT_ITEM_12')
);
?>
<section class="news-section">
<div class="team-pattern-layer-two" style="">
		</div>
<div class="team-pattern-layer" style=""><br><br>
		</div>
	<div class="container">
		 <!-- Sec Title -->
		 <div class="row">
		<div class="section-title text-left col-lg-5 col-md-10 col-12 row">
			<div class="col-3">
				<svg xmlns="http://www.w3.org/2000/svg" width="75" height="75" viewBox="0 0 75 75" fill="none" class="mr-auto mb-4 d-block">
				<circle cx="37.5" cy="37.5" r="35" fill="#C9B38C" stroke="#F1F1F1" stroke-width="5"/>
				<path d="M51.1875 22H24.8125C23.2617 22 22 23.2617 22 24.8125V51.1875C22 52.7383 23.2617 54 24.8125 54H51.1875C52.7383 54 54 52.7383 54 51.1875V24.8125C54 23.2617 52.7383 22 51.1875 22ZM52.125 51.1875C52.125 51.7044 51.7044 52.125 51.1875 52.125H24.8125C24.2956 52.125 23.875 51.7044 23.875 51.1875V31.375H52.125V51.1875ZM52.125 29.5H23.875V24.8125C23.875 24.2956 24.2956 23.875 24.8125 23.875H51.1875C51.7044 23.875 52.125 24.2956 52.125 24.8125V29.5Z" fill="white"/>
				<path d="M26.6875 27.625C27.2053 27.625 27.625 27.2053 27.625 26.6875C27.625 26.1697 27.2053 25.75 26.6875 25.75C26.1697 25.75 25.75 26.1697 25.75 26.6875C25.75 27.2053 26.1697 27.625 26.6875 27.625Z" fill="white"/>
				<path d="M30.4375 27.625C30.9553 27.625 31.375 27.2053 31.375 26.6875C31.375 26.1697 30.9553 25.75 30.4375 25.75C29.9197 25.75 29.5 26.1697 29.5 26.6875C29.5 27.2053 29.9197 27.625 30.4375 27.625Z" fill="white"/>
				<path d="M34.1875 27.625C34.7053 27.625 35.125 27.2053 35.125 26.6875C35.125 26.1697 34.7053 25.75 34.1875 25.75C33.6697 25.75 33.25 26.1697 33.25 26.6875C33.25 27.2053 33.6697 27.625 34.1875 27.625Z" fill="white"/>
				<path d="M36.0625 33.25H26.6875C26.1697 33.25 25.75 33.6697 25.75 34.1875V41.8125C25.75 42.3302 26.1697 42.75 26.6875 42.75H36.0625C36.5802 42.75 37 42.3302 37 41.8125V34.1875C37 33.6697 36.5802 33.25 36.0625 33.25ZM35.125 40.875H27.625V35.125H35.125V40.875Z" fill="white"/>
				<path d="M49.3125 40.875H39.8125C39.2947 40.875 38.875 41.2947 38.875 41.8125C38.875 42.3303 39.2947 42.75 39.8125 42.75H49.3125C49.8302 42.75 50.25 42.3303 50.25 41.8125C50.25 41.2947 49.8302 40.875 49.3125 40.875Z" fill="white"/>
				<path d="M49.3125 37.0625H39.8125C39.2947 37.0625 38.875 37.4822 38.875 38C38.875 38.5178 39.2947 38.9375 39.8125 38.9375H49.3125C49.8302 38.9375 50.25 38.5178 50.25 38C50.25 37.4822 49.8302 37.0625 49.3125 37.0625Z" fill="white"/>
				<path d="M49.3125 44.625H26.6875C26.1697 44.625 25.75 45.0447 25.75 45.5625C25.75 46.0803 26.1697 46.5 26.6875 46.5H49.3125C49.8302 46.5 50.25 46.0803 50.25 45.5625C50.25 45.0447 49.8302 44.625 49.3125 44.625Z" fill="white"/>
				<path d="M49.3125 48.375H26.6875C26.1697 48.375 25.75 48.7947 25.75 49.3125C25.75 49.8303 26.1697 50.25 26.6875 50.25H49.3125C49.8302 50.25 50.25 49.8303 50.25 49.3125C50.25 48.7947 49.8302 48.375 49.3125 48.375Z" fill="white"/>
				</svg>
			</div>
			<div class="col-9">
				<h2><?=$arParams['BASE_TITLE']?></h2>
				<div class="text mb-1">
					<?=$arParams['BASE_DESC']?>
				</div>
				<a href="<?=SITE_DIR?>news/" class="btn mt-5"><?=GetMessage('MORE_TEXT')?></a>
			</div>

		</div>
		<div class="<?if($arParams['BASE_MODE'] == 'Y'){echo 'news-carousel owl-carousel owl-theme ';} else {echo "row";}?> col-lg-7 col-md-10 col-12">
			<?$i=0; $num=0;
			foreach($arResult["ITEMS"] as $arItem){
		
					$id_item = $arItem['ID'];
					$title = $arItem['NAME'];
					if(iconv_strlen($title) > 35){
						$title = substr($arItem['NAME'], 0, 35);
						$title = substr($title, 0, strrpos($title, ' '))."... ";
					}

					$img = $arItem["PREVIEW_PICTURE"]["SRC"];	
					$url_detal=$arItem["DETAIL_PAGE_URL"];
					$data = explode(".", $arItem['TIMESTAMP_X']);
					//$mont = substr($monthes[$data[1]], 0, 3);
					$mont = $monthes[$data[1]];
					$user = explode(")", $arItem['USER_NAME']);
					
					
					$reslt = CIBlockSection::GetByID($arItem['IBLOCK_SECTION_ID']);
					$ar_reslt = $reslt->GetNext();
					$category = $ar_reslt['NAME'];
					$category_link = $ar_reslt['SECTION_PAGE_URL'];
					
					?>	
					 
					<?
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?> 
				 	<!-- News Block -->
					<div class="news-block <?if($arParams['BASE_MODE'] == 'N'){echo 'col-lg-4 col-md-6 col-sm-12 p-0';}?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<div class="inner-box">
							<div class="image">
			 					<a href="<?=$url_detal?>"><img src="<?=$img?>" alt=""></a>
								
							</div>
							<div class="lower-content">
								<div class="post-date" >
			 						<strong><?=$data[0]?></strong><?=$mont?>
								</div>
								
								<h3><a href="<?=$url_detal?>"><?=$title?></a></h3>
								<a class="more" href="<?=$url_detal?>"><?=GetMessage('NEXT')?></a>
							</div>
						</div>
					</div>

				<?
				$i++;
			}
			
			?>	
		</div>

	</div>
	</div>
</section>