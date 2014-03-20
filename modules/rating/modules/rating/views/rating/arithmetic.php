<span class="rating_arithmetic">
	<span class="rating" id="<?php echo $id; ?>">
        <i class="minus"></i>
        <span id="rating_<?php echo $id; ?>" <?php if($rating < 0) echo 'class="mark_minus"'; elseif($rating > 0) echo 'class="mark_plus"'; ?>>
            <?php echo $rating; ?>
        </span>
        <i class="plus"></i>
	</span>
</span>