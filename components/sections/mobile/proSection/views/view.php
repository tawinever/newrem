<?php
/**
 * Created by PhpStorm.
 * User: rauan
 * Date: 5/20/17
 * Time: 5:38 PM
 */
$cnt = 1;
?>
<div class="section-pros">
    <? while(true):?>
        <?if(isset($simpleData['text'.$cnt]) && isset($simpleData['img'.$cnt])):?>
       		<a href="#prosCollapse<?=$cnt?>" data-toggle="collapse">
            <div class="pro-item">
                <div class="svg-container">
                    <?=$simpleData['img'.$cnt]?>
                </div>
                <div class="pro-item-title">
                    <?=$simpleData['title'.$cnt]?>
                </div>
                <div class="more-label">
                	подробнее
                </div>	
            </div>
            </a>
            <div class="collapse pro-item-text" id="prosCollapse<?=$cnt?>">
            	<?=$simpleData['text'.$cnt]?>
            </div>		
            <?$cnt++?>
        
        <?else:
            break;
        endif;?>
    <?endwhile;?>
</div>
