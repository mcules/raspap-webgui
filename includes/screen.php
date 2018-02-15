<?php

function DisplayScreenConfig() {
?>
<h2><i class="fa fa-desktop"></i> Screen configuration</h2>
<form>
	<div class="form-group">
		<label for="screenSize">Screen Size <i class="fas fa-expand-arrows-alt"></i>
		</label>
		<select class="form-control" id="screenSize">
			<option value="auto">automatic</option>
			<option value="720p">720p</option>
			<option value="1080p">1080p</option>
			<option value="custom">custom</option>
		</select>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="checkbox" value="removeBlackBorders" id="blackBorders" />
		<label for="blackBorders">Remove black borders</label>
		<button type="button" class="btn btn-link" data-toggle="popover" data-placement="bottom" title="Black Borders" data-content="Remove black borders around display">
			<i class="fa fa-question-circle"></i>
		</button>
	</div>
	
	<div class="form-group">
		<label for="screenRotation">Screen Rotation <i class="fas fa-sync"></i>
		</label>
		<select class="form-control" id="screenRotation">
			<option value="0">None</option>
			<option value="1">90°</option>
			<option value="2">180°</option>
			<option value="3">270°</option>
		</select>
	</div>
	
	<hr />
	<div class="form-group">
	
		<h3><i class="fas fa-power-off"></i> Power Management</h3>
		<div class="crontabOn">
			<label for="crontabOn"><i class="fas fa-sun"></i> ON </label>
			<div class="bootstrap-timepicker">
        			<input id="crontabOnTimepicker" type="text" class="input-small">
        			<i class="icon-time"></i>
			</div>
			<input class="form-check-input" type="checkbox" value="sunday" id="crontabOnSunday" />
			<label for="crontabOnSunday">Sunday</label>
			<input class="form-check-input" type="checkbox" value="monday" id="crontabOnMonday" />
			<label for="crontabOnMonday">Monday</label>
			<input class="form-check-input" type="checkbox" value="tuesday" id="crontabOnTuesday" />
			<label for="crontabOnTuesday">Tuesday</label>
			<input class="form-check-input" type="checkbox" value="wednesday" id="crontabOnWednesday" />
			<label for="crontabOnWednesday">Wednesday</label>
			<input class="form-check-input" type="checkbox" value="thursday" id="crontabOnThursday" />
			<label for="crontabOnThursday">Thursday</label>
			<input class="form-check-input" type="checkbox" value="fryday" id="crontabOnFriday" />
			<label for="crontabOnFriday">Friday</label>
			<input class="form-check-input" type="checkbox" value="saturday" id="crontabOnSaturday" />
			<label for="crontabOnSaturday">Saturday</label>
			
		</div>
		
		<div class="crontabOff">
			<label for="crontabOff"><i class="fas fa-moon"></i> OFF </label>
			<div class="bootstrap-timepicker">
        			<input id="crontabOffTimepicker" type="text" class="input-small">
        			<i class="icon-time"></i>
			</div>
			<input class="form-check-input" type="checkbox" value="sunday" id="crontabOffSunday" />
			<label for="crontabOffSunday">Sunday</label>
			<input class="form-check-input" type="checkbox" value="monday" id="crontabOffMonday" />
			<label for="crontabOffMonday">Monday</label>
			<input class="form-check-input" type="checkbox" value="tuesday" id="crontabOffTuesday" />
			<label for="crontabOffTuesday">Tuesday</label>
			<input class="form-check-input" type="checkbox" value="wednesday" id="crontabOffWednesday" />
			<label for="crontabOffWednesday">Wednesday</label>
			<input class="form-check-input" type="checkbox" value="thursday" id="crontabOffThursday" />
			<label for="crontabOffThursday">Thursday</label>
			<input class="form-check-input" type="checkbox" value="fryday" id="crontabOffFriday" />
			<label for="crontabOffFriday">Friday</label>
			<input class="form-check-input" type="checkbox" value="saturday" id="crontabOffSaturday" />
			<label for="crontabOffSaturday">Saturday</label>
			
		</div>
		<span class="alert alert-info">Only HDMI screen will be shutdown</span>
	</div>
	<hr />
	<div class="form-check">
		<i class="far fa-volume-mute"></i>

		<input class="form-check-input" type="checkbox" value="mute" id="mute" />
		<label for="mute">Mute sound</label>
	</div>
</form>
<?php 
}