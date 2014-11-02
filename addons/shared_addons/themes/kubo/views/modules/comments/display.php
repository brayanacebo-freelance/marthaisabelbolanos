<?php if ($comments): ?>
<?php $comments = array_map("unserialize", array_unique(array_map("serialize", $comments))); ?>
<section class="comentarios">
	<?php foreach ($comments as $item): ?>
		<article class="comentario">
			<a class="comentario-img" href="#non">
				<?php echo gravatar($item->user_email, 50) ?>
			</a>
			<div class="comentario-body">
				<div class="text">
					<p><?php echo nl2br($item->comment) ?></p>
				</div>
				<p class="attribution">por <a href="#non"><?php echo $item->user_name ?></a> <?php echo format_date($item->created_on) ?></p>
			</div>
		</article>
	<?php endforeach ?>
</section>​
<?php else: ?>
	<p><?php echo lang('comments:no_comments') ?></p>
<?php endif ?>