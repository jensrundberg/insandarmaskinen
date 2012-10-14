<div class="bpfb_final_link row">
	<?php if ($image) { ?>
	<div class="span2">
		<a href="<?php echo $url;?>"><img src="<?php echo $image; ?>" /></a>
	</div>
	<?php } ?>
	<div class="span4">
		<div class="bpfb_link_preview_title"><?php echo $title;?></div>
		<div class="bpfb_link_preview_url">
			<a href="<?php echo $url;?>"><?php echo $url;?></a>
		</div>
		<div class="bpfb_link_preview_body"><?php echo $body;?></div>
	</div>
</div>