<?php 
$tabs = array(
	array('id' => 'specification', 'label' => 'Specification', 'content' => 'product_specification'),
	array('id' => 'download', 'label' => 'Download', 'content' => 'product_download'),
);
$i = 0;
?>

<div class="product-tabs-holder">
	<ul class="product-tabs nav nav-tabs">
		<?php foreach($tabs as $tab):$active=$i==0?'class="active"':null;?>
		<li <?php echo $active?>><a href="#<?php echo $tab['id']?>" data-toggle="tab" ><?php echo $tab['label'] ?></a></li>		
		<?php $i++;endforeach?>
	</ul>
	<div class="tab-content">
		<?php $i=0;foreach($tabs as $tab):$active=$i==0?' active':null;?>
		<div class="tab-pane<?php echo $active?>" id="<?php echo $tab['id']?>">
			<?php echo $product->$tab['content']?>
		</div>	
		<?php $i++;endforeach?>	
	</div>
</div><!-- product-tabs-holder -->
