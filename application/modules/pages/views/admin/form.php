<? if($this->uri->segment(3,'create') == 'create'): ?>
	<h2>Create Page</h2>
	
<? else: ?>
	<h2>Edit Page "<?= $page->title; ?>"</h2>
<? endif; ?>
	<input type="text" id="slug" name="slug" maxlength="100" size="20" value="<?= $page->slug; ?>" class="text width-10" />
</div>

<div class="field">
	<label for="lang">Language</label>
	<?=form_dropdown('lang', $languages, $page->lang); ?>
</div>
<? $this->load->view('admin/layout_fragments/table_buttons', array('buttons' => array('save', 'cancel') )); ?>