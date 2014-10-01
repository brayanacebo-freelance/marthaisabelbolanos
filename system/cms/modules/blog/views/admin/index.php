<div class="row">
	<div class="col-sm-12">
		<section class="panel">
			<header class="panel-heading">
				<?php echo lang('blog:posts_title') ?>
			</header>
			<div class="panel-body">
				<div class="adv-table editable-table ">
					<div class="space15"></div>
					<table class="table table-striped table-hover table-bordered" id="editable-sample">
						<thead>
							<tr>
								<th width="20"><?php echo form_checkbox(array('name' => 'action_to_all', 'class' => 'check-all')) ?></th>
								<th><?php echo lang('blog:post_label') ?></th>
								<th><?php echo lang('blog:category_label') ?></th>
								<th><?php echo lang('blog:date_label') ?></th>
								<th><?php echo lang('blog:written_by_label') ?></th>
								<th><?php echo lang('blog:status_label') ?></th>
								<th width="180"><?php echo lang('global:actions') ?></th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($blog as $post) : ?>
							<tr class="">
								<td><?php echo form_checkbox('action_to[]', $post->id) ?></td>
								<td><?php echo $post->title ?></td>
								<td><?php echo $post->category_title ?></td>
								<td><?php echo format_date($post->created_on) ?></td>
								<td>
									<?php if (isset($post->display_name)): ?>
									<?php echo anchor('user/'.$post->username, $post->display_name, 'target="_blank"') ?>
								<?php else: ?>
								<?php echo lang('blog:author_unknown') ?>
							<?php endif ?>
						</td>
						<td><?php echo lang('blog:'.$post->status.'_label') ?></td>
						<td style="padding-top:10px;">
							<?php if($post->status=='live') : ?>
							<a href="<?php echo site_url('blog/'.date('Y/m', $post->created_on).'/'.$post->slug) ?>" title="<?php echo lang('global:view')?>" class="btn green small" target="_blank"><?php echo lang('global:view')?></a>
						<?php else: ?>
						<a href="<?php echo site_url('blog/preview/' . $post->preview_hash) ?>" title="<?php echo lang('global:preview')?>" class="btn green small" target="_blank"><?php echo lang('global:preview')?></a>
					<?php endif ?>
					<a href="<?php echo site_url('admin/blog/edit/' . $post->id) ?>" title="<?php echo lang('global:edit')?>" class="btn blue small"><?php echo lang('global:edit')?></a>
					<a href="<?php echo site_url('admin/blog/delete/' . $post->id) ?>" title="<?php echo lang('global:delete')?>" class="btn red small"><?php echo lang('global:delete')?></a>
				</td>
			</tr>
		<?php endforeach ?>
	</tbody>
</table>
</div>
<?php $this->load->view('admin/partials/buttons', array('buttons' => array('delete', 'publish'))) ?>	
</div>
</section>
</div>
</div>

<script>
jQuery(document).ready(function() {
	EditableTable.init();
});
</script>



<!-- <div class="one_full">
	<section class="title">
		<h4><?php //echo lang('blog:posts_title') ?></h4>
	</section>

	<section class="item">
		<div class="content">
			<?php //if ($blog) : ?>
				<?php //echo $this->load->view('admin/partials/filters') ?>
	
				<?php //echo form_open('admin/blog/action') ?>
					<div id="filter-stage">
						<?php //echo $this->load->view('admin/tables/posts') ?>
					</div>
				<?php //echo form_close() ?>
			<?php //else : ?>
				<div class="no_data"><?php //echo lang('blog:currently_no_posts') ?></div>
			<?php //endif ?>
		</div>
	</section>
</div> -->
