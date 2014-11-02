<div class="blog-cat"><span class="glyphicon glyphicon-comment"></span> Comentarios</div>

<div class="blog-crear-comentario">
	<?php echo form_open("comments/create/{$module}", 'id="create-comment"') ?>	
	<div class="form-group">
		<?php echo form_hidden('entry', $entry_hash) ?>
		<textarea name="comment" class="form-control" id="comentario" cols="30" rows="10" placeholder="<?php  echo lang('comments:message_label')  ?> *"><?php echo $comment['comment'] ?></textarea>
	</div>
	<button type="submit" class="btn btn-default">Crear</button>
	<?php echo form_close() ?>
</div>