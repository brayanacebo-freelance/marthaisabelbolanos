
<div class="row row-for-menu2">
	<div class="col-sm-12">
		<section class="panel">
			<header class="panel-heading">Comentarios</header>
			<div class="panel-body">
				<div class="tab-content">
					<div id="home-2" class="tab-pane active">
						<div class="adv-table">
							<table  class="display table table-bordered table-striped" id="dynamic-table">
								<thead>
									<tr>
										<th><?php echo lang('comments:message_label') ?></th>
										<th><?php echo lang('comments:item_label') ?></th>
										<th><?php echo lang('global:author') ?></th>
										<th><?php echo lang('comments_active.date_label') ?></th>
										<th width="<?php echo Settings::get('moderate_comments') ? 265 : 130 ?>"></th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($comments as $comment): ?>
									<tr class="">
										<td>
											<a href="<?php echo site_url('admin/comments/preview/'.$comment->id) ?>" rel="modal" target="_blank">
												<?php if( strlen($comment->comment) > 30 ): ?>
												<?php echo character_limiter((Settings::get('comment_markdown') and $comment->parsed > '') ? strip_tags($comment->parsed) : $comment->comment, 30) ?>
											<?php else: ?>
											<?php echo (Settings::get('comment_markdown') and $comment->parsed > '') ? strip_tags($comment->parsed) : $comment->comment ?>
										<?php endif ?>
									</a>
								</td>
								<td>
									<strong><?php echo lang($comment->singular) ? lang($comment->singular) : $comment->singular ?>: </strong>
									<?php echo anchor($comment->cp_uri ? $comment->cp_uri : $comment->uri, $comment->entry_title ? $comment->entry_title : '#'.$comment->entry_id) ?>
								</td>
								<td>
									<?php if ($comment->user_id > 0): ?>
									<?php echo anchor('admin/users/edit/'.$comment->user_id, user_displayname($comment->user_id, false)) ?>
								<?php else: ?>
								<?php echo mailto($comment->user_email, $comment->user_name) ?>
							<?php endif ?>
						</td>
						<td><?php echo format_date($comment->created_on) ?></td>
						<td class="align-center buttons buttons-small">
							<?php if ($this->settings->moderate_comments): ?>
							<?php if ($comment->is_active): ?>
							<a href="<?php echo site_url('admin/comments/unapprove/' . $comment->id) ?>" title="<?php echo lang('global:edit')?>" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a>
						<?php else: ?>
						<a href="<?php echo site_url('admin/comments/approve/' . $comment->id) ?>" title="<?php echo lang('global:edit')?>" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a>
					<?php endif ?>
				<?php endif ?>
				
				<a href="<?php echo site_url('admin/comments/edit/' . $comment->id) ?>" title="<?php echo lang('global:edit')?>" class="btn btn-info btn-sm"><i class="fa fa-pencil"></i></a>
				<a href="<?php echo site_url('admin/comments/delete/' . $comment->id) ?>" title="<?php echo lang('global:delete')?>" class="btn btn-danger btn-sm" data-toggle="modal" href="#ModalEliminar"><i class="fa fa-trash-o"></i></a>
				<a href="<?php echo site_url('admin/comments/report/' . $comment->id) ?>" title="<?php echo lang('global:edit')?>" class="btn btn-warning btn-sm"><i class="fa fa-exclamation-triangle"></i></a>
			</td>
		</td>
	</tr>
<?php endforeach ?>
</tbody>
</table>
</div>
</div>
</div>
</section>
</div>
</div>