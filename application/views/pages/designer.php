<script src="<?=SITE_ROOT?>lib/zeroclipboard/ZeroClipboard.min.js"></script>
<script src="<?=SITE_ROOT?>js/designer.js"></script>
<div class="container-fluid">
<div id="section-style" class="modal hide fade">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-circle"></i></button>
		<h3>Section Style</h3>
	</div>
	<div class="modal-body">
		<p class="pull-center pad-bottom">Select the style you want to use for this section</p>
		<div class="styles"></div>
	</div>
	<div class="modal-footer">
		<a href="#" class="btn" data-dismiss="modal">Cancel</a>
	</div>
</div>
<div id="edit-section" class="modal hide fade">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-circle"></i></button>
		<h3>Edit SECTION</h3>
	</div>
	<div class="modal-body">
		<table class="table table-striped table-bordered">
			<tr>
				<th width="25px">1</th>
				<td><input type="text" value="Content"/></td>
			</tr>
			<tr>
				<th>2</th>
				<td><input type="text" value="Content"/></td>
			</tr>
			<tr>
				<th>3</th>
				<td><input type="text" value="Content"/></td>
			</tr>
		</table>
	</div>
	<div class="modal-footer">
		<a href="#" class="btn" data-dismiss="modal">Cancel</a>
		<a href="#" class="btn btn-success" data-action="save-section" data-dismiss="modal">Save &amp; close</a>
	</div>
</div>
<div id="save" class="modal hide fade">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-circle"></i></button>
		<h3>Save + Share</h3>
	</div>
	<div class="modal-body">
	</div>
	<div class="modal-footer">
		<a href="#" class="btn btn-success" data-dismiss="modal">Close</a>
	</div>
</div>
<div id="clipboard" class="modal hide fade">
	<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="icon-remove-circle"></i></button>
		<h3>Clipboard</h3>
	</div>
	<div class="modal-body">
		<div class="pull-center">
			<textarea id="clipboard-text"></textarea>
			<a href="#" data-action="copy-text" data-clipboard-target="clipboard-text" class="btn btn-success"><i class="icon-copy"></i> Copy to clipboard</a>
		</div>
	</div>
	<div class="modal-footer">
		<a href="#" class="btn btn-success" data-dismiss="modal">Close</a>
	</div>
</div>
<div class="row-fluid">
<div class="span3">
	<div id="sidebar" class="sidebar-nav">
	</div>
</div>
<div class="span9">
	<? include('application/views/site/messages.php') ?>
	<div id="editor" class="pull-center"></div>
</div>
</div>
</div>
