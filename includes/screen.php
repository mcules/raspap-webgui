<?php

function DisplayScreenConfig() {
?>
<h2>Screen configuration</h2>
<form>
	<div class="form-group">
		<label for="screenRotation">Screen Rotation</label>
		<select class="form-control" id="screenRotation">
			<option value="0">None</option>
			<option value="1">90°</option>
			<option value="2">180°</option>
			<option value="3">270°</option>
		</select>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="checkbox" value="removeBlackBorders" id="blackBorders" />
		<label for="blackBorders">Remove black borders</label>
		<button type="button" class="btn btn-link" data-toggle="popover" data-placement="bottom" title="Black Borders" data-content="Remove black borders around display">
			<i class="fa fa-question-circle"></i>
		</button>
	</div>
	<hr />
	<div class="form-group">
		<label for="crontabOn">Auto shutdown</label>
		<div class="bootstrap-timepicker">
			<input id="crontabOnTimepicker" type="text" class="input-small">
			<i class="icon-time"></i>
		</div>
	</div>
</form>
<script>
jQuery(function () {
  jQuery('[data-toggle="popover"]').popover()
})
</script>
<?php 
}