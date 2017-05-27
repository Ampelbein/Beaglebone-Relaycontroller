4<?php
?>

		<script>$(function(){ $(".btn").on('click',(function()
			{ $.get("index.php?relay="+$(this).attr('name'));
			  setTimeout('$("#allebuttons").load("RelayStatus.php");', 1000);
		})); });</script>
				<h2>Licht</h2>
					<span class="input-group-addon">Wohnzimmer</span>
				<input type="button" class="btn btn-success" name="livingRoom1" id="livingRoom1" <?php $relaystatus=system("cat /sys/class/gpio/gpio11/value"); echo $relaystatus=="1" ? '' : 'style="visibility:hidden"' ?> value="An" />
				<input type="button" class="btn btn-danger" name="livingRoom0" id="livingRoom0" <?php $relaystatus=system("cat /sys/class/gpio/gpio11/value"); echo $relaystatus=="0" ? '' : 'style="visibility:hidden"' ?>  value="Aus" />
				<div class="input-group btn-group">
					<span class="input-group-addon">Balkon</span>
				<input type="button" class="btn btn-success" name="balcony1" <?php $relaystatus=system("cat /sys/class/gpio/gpio61/value"); echo $relaystatus=="1" ? '' : 'style="visibility:hidden"' ?> value="An" />
				<input type="button" class="btn btn-danger" name="balcony0" <?php $relaystatus=system("cat /sys/class/gpio/gpio61/value"); echo $relaystatus=="0" ? '' : 'style="visibility:hidden"' ?> value="Aus"/>
				</div>
				<div class="input-group btn-group">
					<span class="input-group-addon">Esstisch - Balkon</span>
				<input type="button" class="btn btn-success" name="dinnerTable1" <?php $relaystatus=system("cat /sys/class/gpio/gpio88/value"); echo $relaystatus=="1" ? '' : 'style="visibility:hidden"' ?> value="An" />
				<input type="button" class="btn btn-danger" name="dinnerTable0" <?php $relaystatus=system("cat /sys/class/gpio/gpio88/value"); echo $relaystatus=="0" ? '' : 'style="visibility:hidden"' ?> value="Aus" />
				</div>
				<div class="input-group btn-group">
					<span class="input-group-addon">Strahler</span>
				<input type="button" class="btn btn-success" name="strahler1" <?php $relaystatus=system("cat /sys/class/gpio/gpio89/value"); echo $relaystatus=="1" ? '' : 'style="visibility:hidden"' ?> value="An" />
				<input type="button" class="btn btn-danger" name="strahler0" <?php $relaystatus=system("cat /sys/class/gpio/gpio89/value"); echo $relaystatus=="0" ? '' : 'style="visibility:hidden"' ?> value="Aus" />
				</div>
                                <div class="input-group btn-group">
                                        <span class="input-group-addon">Strahler - Boden</span>
                                <input type="button" class="btn btn-success" name="strahlerBoden1" <?php $relaystatus=system("cat /sys/class/gpio/gpio65/value"); echo $relaystatus=="1" ? '' : 'style="visibility:hidden"' ?> value="An" />
                                <input type="button" class="btn btn-danger" name="strahlerBoden0" <?php $relaystatus=system("cat /sys/class/gpio/gpio65/value"); echo $relaystatus=="0" ? '' : 'style="visibility:hidden"' ?> value="Aus" />
                                </div>
				<div class="input-group btn-group">
					<span class="input-group-addon">Esstisch - K&uuml;che</span>
                                <input type="button" class="btn btn-success" name="esstisch1" <?php $relaystatus=system("cat /sys/class/gpio/gpio60/value"); echo $relaystatus=="1" ? '' : 'style="visibility:hidden"' ?> value="An" />
                                <input type="button" class="btn btn-danger" name="esstisch0" <?php $relaystatus=system("cat /sys/class/gpio/gpio60/value"); echo $relaystatus=="0" ? '' : 'style="visibility:hidden"' ?> value="Aus" />
				</div>
				<hr />
				<div class="input-group btn-group">
					<span class="input-group-addon">!! Alle !!</span>
				<input type="button" class="btn btn-success" name="all1" value="An" />
				<input type="button" class="btn btn-danger" name="all0" value="Aus" />
				</div>
				<hr />
				<div>
				<div class="input-group btn-group">
					<span class="input-group-addon">Klimager&auml;t Wohnen</span>
                                <input type="button" class="btn btn-success" name="klima0" <?php $relaystatus=system("cat /sys/class/gpio/gpio50/value"); echo $relaystatus=="0" ? '' : 'style="visibility:hidden"' ?> value="An" />
                                <input type="button" class="btn btn-danger" name="klima1" <?php $relaystatus=system("cat /sys/class/gpio/gpio50/value"); echo $relaystatus=="1" ? '' : 'style="visibility:hidden"' ?> value="Aus" />
				</div>
                                <div class="input-group btn-group">
                                <span class="input-group-addon">Klimager&auml;t Andreas</span>
                                <input type="button" class="btn btn-success" name="klimaAnd0" <?php $relaystatus=system("cat /sys/class/gpio/gpio115/value"); echo $relaystatus=="0" ? '' : 'style="visibility:hidden"' ?> value="An" />
                                <input type="button" class="btn btn-danger" name="klimaAnd1" <?php $relaystatus=system("cat /sys/class/gpio/gpio115/value"); echo $relaystatus=="1" ? '' : 'style="visibility:hidden"' ?> value="Aus" />
				</div>
				<hr>
				<h2>Tür</h2>
				<div class="input-group btn-group">
					<span class="input-group-addon">Haust&uuml;r</span>
					<input type="button" class="btn btn-success" name="openDoor1"  value="&ouml;ffnen" />
				</div>
                                <div class="input-group btn-group">
                                        <span class="input-group-addon">Garage</span>
                                        <input type="button" class="btn btn-success" name="GaragHoch1"  value="Hoch" />
                                        <input type="button" class="btn btn-danger" name="GaragStop1" value="Stop" />
                                        <input type="button" class="btn btn-success" name="GaragRunter1"  value="Runter" />
                                </div>
				<input type="hidden" name="relay" id="relay" value="" />
				<h2>Rollo</h2>
				<div class="input-group btn-group">
                                        <span class="input-group-addon">B&uuml;ro</span>
                                        <input type="button" class="btn btn-success" name="BueroHoch1"  value="Hoch" />
					<input type="button" class="btn btn-danger" name="BueroStop1" value="Stop" />
					<input type="button" class="btn btn-success" name="BueroRunter1"  value="Runter" />
                                </div>
                                <div class="input-group btn-group">
                                        <span class="input-group-addon">Wohnen - Fenster</span>
                                        <input type="button" class="btn btn-success" name="WohnfHoch1"  value="Hoch" />
                                        <input type="button" class="btn btn-danger" name="WohnfStop1" value="Stop" />
                                        <input type="button" class="btn btn-success" name="WohnfRunter1"  value="Runter" />
                                </div>
                                <div class="input-group btn-group">
                                        <span class="input-group-addon">Wohnen - T&uuml;r</span>
                                        <input type="button" class="btn btn-success" name="WohntHoch1"  value="Hoch" />
                                        <input type="button" class="btn btn-danger" name="WohntStop1" value="Stop" />
                                        <input type="button" class="btn btn-success" name="WohntRunter1"  value="Runter" />
                                </div>
                                <div class="input-group btn-group">
                                        <span class="input-group-addon">Susanne</span>
                                        <input type="button" class="btn btn-success" name="SusanHoch1"  value="Hoch" />
                                        <input type="button" class="btn btn-danger" name="SusanStop1" value="Stop" />
                                        <input type="button" class="btn btn-success" name="SusanRunter1"  value="Runter" />
                                </div>
                                <div class="input-group btn-group">
                                        <span class="input-group-addon">K&uuml;che</span>
                                        <input type="button" class="btn btn-success" name="SchlfHoch1"  value="Hoch" />
                                        <input type="button" class="btn btn-danger" name="SchlfStop1" value="Stop" />
                                        <input type="button" class="btn btn-success" name="SchlfRunter1"  value="Runter" />
                                </div>
                                <div class="input-group btn-group">
                                        <span class="input-group-addon">Schlafen - Fenster</span>
                                <input type="button" class="btn btn-success" name="SchlafFenster0" <?php $relaystatus=system("cat /sys/class/gpio/gpio31/value"); echo $relaystatus=="0" ? '' : 'style="visibility:hidden"' ?> value="Runter" />
                                <input type="button" class="btn btn-danger" name="SchlafFenster1" <?php $relaystatus=system("cat /sys/class/gpio/gpio31/value"); echo $relaystatus=="1" ? '' : 'style="visibility:hidden"' ?> value="Hoch" />
                                </div>
                                <div class="input-group btn-group">
                                        <span class="input-group-addon">Schlafen - T&uuml;r</span>
                                <input type="button" class="btn btn-success" name="SchlafTuer1" <?php $relaystatus=system("cat /sys/class/gpio/gpio30/value"); echo $relaystatus=="1" ? '' : 'style="visibility:hidden"' ?> value="Runter" />
                                <input type="button" class="btn btn-danger" name="SchlafTuer0" <?php $relaystatus=system("cat /sys/class/gpio/gpio30/value"); echo $relaystatus=="0" ? '' : 'style="visibility:hidden"' ?> value="Hoch" />
                                </div>
                                <div class="input-group btn-group">
                                        <span class="input-group-addon">ALLE ROLLOS</span>
                                        <input type="button" class="btn btn-success" name="allRolHo1"  value="Hoch" />
					<input type="button" class="btn btn-danger" name="allRollo1"  value="Stop" />
					<input type="button" class="btn btn-success" name="allRolRu1"  value="Runter" />
