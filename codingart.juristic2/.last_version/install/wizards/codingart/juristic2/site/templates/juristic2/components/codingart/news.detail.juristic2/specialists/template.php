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
	$section_id = $arResult["IBLOCK_SECTION_ID"];
	$name = $arResult["NAME"];
	$name_title = str_replace(" ","-",$arResult["NAME"]);
	$img = $arResult["DETAIL_PICTURE"]['SRC'];
	$speshel = $arResult['PROPERTIES']['SPEC_SPESHEL']['VALUE'];
	$phone = $arResult['PROPERTIES']['SPEC_PHONE']['VALUE'];
	$stag = $arResult['PROPERTIES']['SPEC_STAG']['VALUE'];
	$obraz = $arResult['PROPERTIES']['SPEC_OBRAZ'];
	$priem = $arResult['PROPERTIES']['SPEC_PRIEM']['VALUE'];
	$nagrad = $arResult['PROPERTIES']['SPEC_NAGRAD']['VALUE'];
	if($arResult['PROPERTIES']['SPEC_OPIT_JOB']['VALUE'])
	$opit_job = htmlspecialcharsBack($arResult['PROPERTIES']['SPEC_OPIT_JOB']['VALUE']['TEXT']);
	$soc_vk = $arResult['PROPERTIES']['SPEC_VK']['VALUE'];
	$soc_fb = $arResult['PROPERTIES']['SPEC_FB']['VALUE'];
	$soc_inst = $arResult['PROPERTIES']['SPEC_INST']['VALUE'];
	?>
	<?top_line($name);?>
	<?$APPLICATION->SetTitle($name_title);?>
	<!-- Doctor Single Section -->
	<section class="doctor-detail-section" style="padding: 0 !important">
		<div class="container">
			<div class="row">
				
				<!-- Image Column -->
				<div class="image-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image">
							<img src="<?=$img?>" alt="" />
							<?if($phone){?>
							<div class="number-box">
								<a href="<?=$phone;?>"><span class="icon icon icon-phone2"></span><?=$phone;?></a>
							</div>
							<?}?>
						</div>
					</div>
					<div class="row ml-0">
						<div class="col-lg-4 col-5 pl-0">
							<a class="btn mt-3" data-toggle="modal" data-target="#modal-spec" onclick="modal_spec_content('<?=$name;?>','<?=$speshel;?>')">Записаться</a>
						</div>
						<div class="col-lg-7 col-7 mt-3 pr-0">
							Запишитесь на прием к специалисту в удобное для вас время
						</div>
					</div>
					
					
				</div>
				
				<!-- Content Column -->
				<div class="content-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						<?if($name or $speshel or $stag){?>
						<h2><?=GetMessage('PESONAL_MASS')?></h2>
						<ul class="doctor-info-list">
							<?if($name){?><li><tr><span><?=GetMessage('PROP_1')?></span><?=$name;?></tr></li><?}?>
							<?if($speshel){?><li><tr><span><?=GetMessage('PROP_2')?></span><?=$speshel;?></tr></li><?}?>
							<?if($stag){?><li><tr><span><?=GetMessage('PROP_3')?></span><?=$stag;?></tr></li><?}?>
						</ul>
						<?}?>
						<?if($obraz['VALUE']){?>
						<h2><?=GetMessage('EDUC_TRAINING')?></h2>
						<?}?>
						<ul class="doctor-info-list">
							<?if($priem){?><li><tr><span><?=GetMessage('PROP_4')?></span> <?=$priem;?></tr></li><?}?>
							<?if($obraz){
								$num = 0; 
								while($obraz['VALUE'][$num]) {
										?>
									<li><table>
										<tr>
											<span><?=$obraz['DESCRIPTION'][$num]?></span> <?=$obraz['VALUE'][$num]?>
										</tr></table>
									</li>
								<?$num++;}
							}?>

							<?if($nagrad){?><li><tr><span><?=GetMessage('PROP_6')?></span><?=$nagrad;?></tr></li><?}?>
						</ul>

						
						<?if($soc_vk or $soc_fb or $soc_inst){?>
						<h2><?=GetMessage('SOC_MEDIA')?></h2>
						<ul class="social-box">
							<?if($soc_vk){?><li class="vk"><a href="<?=$soc_vk;?>" class="icon"><img src="/bitrix/templates/juristic2/assets/images/vk.png" class="mx-auto mb-4 d-block"></a></li><?}?>
							<?if($soc_fb){?><li class="facebook"><a href="<?=$soc_fb;?>" class="icon "><img src="/bitrix/templates/juristic2/assets/images/fb.png" class="mx-auto mb-4 d-block"></a></li><?}?>
							<?if($soc_inst){?><li class="instagram"><a href="<?=$soc_inst;?>" class="icon "><img src="/bitrix/templates/juristic2/assets/images/ins.png" class="mx-auto mb-4 d-block"></a></li><?}?>

						

						</ul>
						<?}?>
					</div>
				</div>
				
			</div>
		</div>
	</section>

	
<?if($opit_job){?>
	<div class="biography-section">
		<div class="pattern-one" style="background-image: url(<?=SITE_DIR?>images/icons/pattern-icon-10.png);"></div>
		<div class="container">
			<div class="row">
				
			
				<div class="title-column col-lg-12 col-md-12 col-sm-12">
					<h2><?=GetMessage('EXPERIENCE')?></h2>
					<div class="inner-column">
						<br>
						<p><?=$opit_job;?></p>
					</div>
				</div>
				
				
			</div>
		</div>
	</div>
<?}?>
