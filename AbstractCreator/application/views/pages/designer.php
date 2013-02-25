<script src="/js/designer.js"></script>
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