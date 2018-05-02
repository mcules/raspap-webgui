<?php

function DisplayScreenConfig()
{
?>
<fieldset class="panel panel-blue">
    <legend class="panel-heading">
    	<i class="fa fa-desktop"></i> Screen configuration
    </legend>

	<div class="form-group panel-body">
		<label for="screenSize">Screen Size <i
			class="fas fa-expand-arrows-alt"></i>
		</label> 
		<select class="form-control" id="screenSize">
			<optgroup label="Main Uses">
				<option value="0">Automatic Mode</option>
				<option value="4">720p / 60Hz</option>
				<option value="16">1080p / 60Hz</option>
			</optgroup>
			<optgroup label="Specific">
    			<option value="0">Automatic Mode</option>
    			<option value="1">VGA (640x480)</option>
    			<option value="2">480p / 60Hz</option>
    			<option value="3">480p / 60Hz / 16:9 aspect ratio</option>
    			<option value="4">720p / 60Hz</option>
    			<option value="5">1080i / 60Hz</option>
    			<option value="6">480i / 60Hz</option>
    			<option value="7">480i / 60Hz / 16:9 aspect ratio</option>
    			<option value="8">240p / 60Hz</option>
    			<option value="9">240p / 60Hz / 16:9 aspect ratio</option>
    			<option value="10">480i / 60Hz / pixel quadrupling</option>
    			<option value="11">480i / 60Hz / pixel quadrupling, 16:9 aspect ratio</option>
    			<option value="12">240p / 60Hz / pixel quadrupling</option>
    			<option value="13">240p / 60Hz / pixel quadrupling, 16:9 aspect ratio</option>
    			<option value="14">480p / 60Hz / pixel doubling</option>
    			<option value="15">480p / 60Hz / pixel doubling, 16:9 aspect ratio</option>
    			<option value="16">1080p / 60Hz</option>
    			<option value="17">576p / 50Hz</option>
    			<option value="18">576p / 50Hz / 16:9 aspect ratio</option>
    			<option value="19">720p / 50Hz</option>
    			<option value="20">1080i / 50Hz</option>
    			<option value="21">576i / 50Hz</option>
    			<option value="22">576i / 50Hz / 16:9 aspect ratio</option>
    			<option value="23">288p / 50Hz</option>
    			<option value="24">288p / 50Hz / 16:9 aspect ratio</option>
    			<option value="25">576i / 50Hz / pixel quadrupling</option>
    			<option value="26">576i / 50Hz / pixel quadrupling, 16:9 aspect ratio</option>
    			<option value="27">288p / 50Hz / pixel quadrupling</option>
    			<option value="28">288p / 50Hz / pixel quadrupling, 16:9 aspect ratio</option>
    			<option value="29">576p / 50Hz / pixel doubling</option>
    			<option value="30">576p / 50Hz / pixel doubling, 16:9 aspect ratio</option>
    			<option value="31">1080p / 50Hz</option>
    			<option value="32">1080p / 24Hz</option>
    			<option value="33">1080p / 25Hz</option>
    			<option value="34">1080p / 30Hz</option>
    			<option value="35">480p / 60Hz / pixel quadrupling</option>
    			<option value="36">480p / 60Hz / pixel quadrupling, 16:9 aspect ratio</option>
    			<option value="37">576p / 50Hz / pixel quadrupling</option>
    			<option value="38">576p / 50Hz / pixel quadrupling, 16:9 aspect ratio</option>
    			<option value="39">1080i / 50Hz / reduced blanking</option>
    			<option value="40">1080i / 100Hz</option>
    			<option value="41">720p / 100Hz</option>
    			<option value="42">576p / 100Hz</option>
    			<option value="43">576p / 100Hz / 16:9 aspect ratio</option>
    			<option value="44">576i / 100Hz</option>
    			<option value="45">576i / 100Hz / 16:9 aspect ratio</option>
    			<option value="46">1080i / 120Hz</option>
    			<option value="47">720p / 120Hz</option>
    			<option value="48">480p / 120Hz</option>
    			<option value="49">480p / 120Hz / 16:9 aspect ratio</option>
    			<option value="50">480i / 120Hz</option>
    			<option value="51">480i / 120Hz / 16:9 aspect ratio</option>
    			<option value="52">576p / 200Hz</option>
    			<option value="53">576p / 200Hz / 16:9 aspect ratio</option>
    			<option value="54">576i / 200Hz</option>
    			<option value="55">576i / 200Hz / 16:9 aspect ratio</option>
    			<option value="56">480p / 240Hz</option>
    			<option value="57">480p / 240Hz / 16:9 aspect ratio</option>
    			<option value="58">480i / 240Hz</option>
    			<option value="59">480i / 240Hz / 16:9 aspect ratio</option>
			</optgroup>

		</select>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="checkbox"
			value="removeBlackBorders" id="blackBorders" /> <label
			for="blackBorders">Remove black borders</label>
		<button type="button" class="btn btn-link" data-toggle="popover"
			data-placement="bottom" title="Black Borders"
			data-content="Remove black borders around display">
			<i class="fa fa-question-circle"></i>
		</button>
	</div>

	<div class="form-group">
		<label for="screenRotation">Screen Rotation <i class="fas fa-sync"></i>
		</label> <select class="form-control" id="screenRotation">
			<option value="0">None</option>
			<option value="1">90°</option>
			<option value="2">180°</option>
			<option value="3">270°</option>
		</select>
	</div>
	<hr />
	<div class="form-check">
		<i class="far fa-volume-mute"></i> <input class="form-check-input"
			type="checkbox" value="mute" id="mute" /> <label for="mute"><i
			class="fas fa-volume-up">&nbsp;</i>Mute sound </label>
	</div>
	<button class="btn btn-primary">Change display settings</button>
</fieldset>
<fieldset>
	<legend>
		<i class="fas fa-power-off"></i> Power Management
		<button type="button" class="btn btn-link" data-toggle="popover"
			data-placement="bottom" title="Screen Off"
			data-content="Only HDMI screen will be shutdown. Does not concerne embedded screen.">
			<i class="fa fa-question-circle"></i>
		</button>
	</legend>
	<div class="form-group">

		
		<div class="crontabOn">
			<label for="crontabOn"><i class="fas fa-sun"></i> ON </label>
			<div class="bootstrap-timepicker">
				<input id="crontabOnTimepicker" type="text" class="input-small"> <i
					class="icon-time"></i>
			</div>
			<input class="form-check-input" type="checkbox" value="sunday"
				id="crontabOnSunday" /> <label for="crontabOnSunday">Sunday</label>
			<input class="form-check-input" type="checkbox" value="monday"
				id="crontabOnMonday" /> <label for="crontabOnMonday">Monday</label>
			<input class="form-check-input" type="checkbox" value="tuesday"
				id="crontabOnTuesday" /> <label for="crontabOnTuesday">Tuesday</label>
			<input class="form-check-input" type="checkbox" value="wednesday"
				id="crontabOnWednesday" /> <label for="crontabOnWednesday">Wednesday</label>
			<input class="form-check-input" type="checkbox" value="thursday"
				id="crontabOnThursday" /> <label for="crontabOnThursday">Thursday</label>
			<input class="form-check-input" type="checkbox" value="fryday"
				id="crontabOnFriday" /> <label for="crontabOnFriday">Friday</label>
			<input class="form-check-input" type="checkbox" value="saturday"
				id="crontabOnSaturday" /> <label for="crontabOnSaturday">Saturday</label>

		</div>

		<div class="crontabOff">
			<label for="crontabOff"><i class="fas fa-moon"></i> OFF </label>
			<div class="bootstrap-timepicker">
				<input id="crontabOffTimepicker" type="text" class="input-small"> <i
					class="icon-time"></i>
			</div>
			<input class="form-check-input" type="checkbox" value="sunday"
				id="crontabOffSunday" /> <label for="crontabOffSunday">Sunday</label>
			<input class="form-check-input" type="checkbox" value="monday"
				id="crontabOffMonday" /> <label for="crontabOffMonday">Monday</label>
			<input class="form-check-input" type="checkbox" value="tuesday"
				id="crontabOffTuesday" /> <label for="crontabOffTuesday">Tuesday</label>
			<input class="form-check-input" type="checkbox" value="wednesday"
				id="crontabOffWednesday" /> <label for="crontabOffWednesday">Wednesday</label>
			<input class="form-check-input" type="checkbox" value="thursday"
				id="crontabOffThursday" /> <label for="crontabOffThursday">Thursday</label>
			<input class="form-check-input" type="checkbox" value="fryday"
				id="crontabOffFriday" /> <label for="crontabOffFriday">Friday</label>
			<input class="form-check-input" type="checkbox" value="saturday"
				id="crontabOffSaturday" /> <label for="crontabOffSaturday">Saturday</label>

		</div>
	</div>

	<button class="btn btn-primary">Display power settings</button>
</fieldset>
<fieldset>
	<legend>
	<i class="fa fa-cog"></i> KPitaine Software
	</legend>
	<div class="form-group">
		<label for="software-version">Version</label> <span
			id="software-version">XXX</span>
	</div>
	<div class="form-group">
		<label for="screenRotation">Software Branch </label> <select
			class="form-control" id="softwareBranch">
			<option value="dev">Development Version</option>
			<option value="master">Stable version</option>
		</select>
	</div>
	<div class="form-check">
		<input class="form-check-input" type="checkbox" value="debugMode"
			id="debugMode" /> <label for="debugMode"><i class="fas fa-terminal">&nbsp;</i>Debug
			Mode</label>
	</div>
	<button class="btn btn-primary">Change software settings</button><br />
	<button class="btn btn-warning"
		onclick="return confirm('⚠ Are you sure to upgrade software manually ?')">Upgrade
		box softwares</button>
</fieldset>

<?php 
}