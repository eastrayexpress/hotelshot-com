<?php // no direct access
defined('_JEXEC') or die('Restricted access'); ?>				
<div class="benefit" style="margin-bottom: 10px">
    <h3>
        Most popular cities</h3>
</div>
<?php for($i=0;$i<count($list);$i++):?>
<?php 
	if($i%2==0)
		$style ="padding: 5px; padding-left: 0";
	else
		$style="padding:5px";
	
?>
<div class="grid_4" style="<?php echo $style;?>">
    <img src="<?php echo $list[$i]->thumbnail;?>" style="width: 150;
        height: 75px">
    <h3 class="city-index">
        <?php echo $list[$i]->title;?></h3>
<div class="hotel-count">
        <?php echo $list[$i]->availableHotels;?> hotels
    </div>
    <div class="price-range">
        from <?php echo $list[$i]->cheapestPrice;?> USD</div>
</div>
<?php endfor;?>