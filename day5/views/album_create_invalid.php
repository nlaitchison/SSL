<div id="main_content">
	<div id="page_header">
		<h2 id="page_title"> Create a New Album </h2>
	</div>

	<div class='clear_fix'></div>

	<section id="preview_album_image"> 
		<img src="images/large_album_art.png" alt="album Placeholder Image">
	</section>

	<section>
		<form id="create_album_form" method="post" action="?action=createAlbum">
			<fieldset>
				<div class="form_input">
					<label for="album_name"> <b> Album Name </b> </label>
					<input type="text" name="album_name" id="album_name" value='<?=$data["formInputs"]["albumName"]?>'/>
					<label class="checkbox"> 
						<? if($data["formInputs"]["albumPreorder"] == 1)
							{
								echo'<input type="checkbox" name="album_preorder" value="1" checked="checked"/> Preorder';
							}
							else{
								echo'<input type="checkbox" name="album_preorder" value="1"/> Preorder';
						}?>
					</label>
					<p class="error_msg"><?=$dataTwo["albumName"]?></p>
					<div class="clear_fix"></div>
				</div>
				<div class="form_input">
					<label for="album_artist"> <b> Artist Name </b></label>
					<input type="text" name="album_artist" id="album_artist" value='<?=$data["formInputs"]["albumArtist"]?>' />
					<p class="error_msg"><?=$dataTwo["albumArtist"]?></p>
				</div>
			</fieldset>	
			<fieldset>
				<div class="form_input">
					<label for="album_image"> <b> Album Image</b> </label>
					<input type="file" accept="image" name="album_image" id="album_image" value='<?=$data["formInputs"]["albumImage"]?>'/>
					<p class="error_msg"><?=$dataTwo["albumImage"]?></p>
				</div>
				<div class="form_input">
					<label for="album_description"> <b> Album Description </b></label>
					<div class="clear_fix"></div>
					<textarea name="album_description" id="album_description"><?=$data["formInputs"]["albumDescription"]?></textarea>
					<p class="error_msg"><?=$dataTwo["albumDescription"]?></p>
				</div>
				<div class="form_input">
					<label for="album_release_date"> <b> Album Release Date</b> </label>
					<input type="date" name="album_release_date" id="album_release_date" placeholder="MM/DD/YYYY" value='<?=$data["formInputs"]["albumRelease"]?>'/>
					<p class="error_msg"><?=$dataTwo["albumRelease"]?></p>
				</div>
			</fieldset>
			<fieldset>
				<div class="form_input">
					<label> <b> Album Condition </b></label>
					<label class="radio"> 
						<input type="radio" name="album_condition" value="New" checked="checked" /> 
							New 
					</label>
					
					<label class="radio"> 
						<input type="radio" name="album_condition" value="Used" />
						Used 
					</label>
				</div>
			</fieldset>	
			<fieldset>
				<label> <b> Album Format </b></label>
					<div class="form_input">	
						<label class="checkbox"> 
							<? if($data["twelveInputs"]["twelve"] == "12")
							{
								echo'<input type="checkbox" name="twelve" value="12" checked="checked" /> 12" Vinyl';
							}
							else{
								echo'<input type="checkbox" name="twelve" value="12" /> 12" Vinyl';
							}?>
						</label>
						<div class="format_inputs">
							<input type="text" name="twelve_stock" placeholder="Enter # in Stock" value='<?=$data["twelveInputs"]["twelve_stock"]?>'/>
							<input type="text" name="twelve_price" placeholder="Enter Price - 0.00" value='<?=$data["twelveInputs"]["twelve_price"]?>'/>
							<select multiple id="twelve_color" name="twelve_color[]">
								<option value="Black">Black</option>
								<option value="White">White</option>
								<option value="Orange Creamsicle">Orange Creamsicle</option>
								<option value="Clear">Clear</option>
								<option value="Purple Red Speckled">Purple Red Speckled</option>
								<option value="Gold">Gold</option>
							</select>
							<p class="error_msg"><?=$dataTwo["twelve_stock"]?> <?=$dataTwo["twelve_price"]?> <?=$dataTwo["twelve_color"]?></p>
						</div>
					</div>
					<div class="form_input">
						<label class="checkbox"> 
							<? if($data["sevenInputs"]["seven"] == "7")
							{
								echo'<input type="checkbox" name="seven" value="7" checked="checked" /> 7" Vinyl';
							}
							else{
								echo'<input type="checkbox" name="seven" value="7" /> 7" Vinyl';
							}?>
						</label>
						<div class="format_inputs">
							<input type="text" name="seven_stock" placeholder="Enter # in Stock" value='<?=$data["sevenInputs"]["seven_stock"]?>'/>
							<input type="text" name="seven_price" placeholder="Enter Price - 0.00" value='<?=$data["sevenInputs"]["seven_price"]?>'/>
							<select multiple id="seven_color" name="seven_color[]">
								<option value="Black">Black</option>
								<option value="White">White</option>
								<option value="Orange Creamsicle">Orange Creamsicle</option>
								<option value="Clear">Clear</option>
								<option value="Purple Red Speckled">Purple Red Speckled</option>
								<option value="Gold">Gold</option>
							</select>
							<p class="error_msg"><?=$dataTwo["seven_stock"]?> <?=$dataTwo["seven_price"]?> <?=$dataTwo["seven_color"]?></p>
						</div>
					</div>
					<div class="form_input">
						<label class="checkbox"> 
							<? if($data["cdInputs"]["cd"] == "cd")
							{
								echo'<input type="checkbox" name="twelve" value="cd" checked="checked" /> CD';
							}
							else{
								echo'<input type="checkbox" name="twelve" value="cd" /> CD';
							}?>
						</label>
						<div class="format_inputs">
							<input type="text" name="cd_stock" placeholder="Enter # in Stock" value='<?=$data["cdInputs"]["cd_stock"]?>'/>
							<input type="text" name="cd_price" placeholder="Enter Price - 0.00" value='<?=$data["cdInputs"]["cd_price"]?>'/>
							<p class="error_msg"><?=$dataTwo["cd_stock"]?> <?=$dataTwo["cd_price"]?></p>
						</div>
					</div>
					<div class="form_input">
						<label class="checkbox"> 
							<? if($data["cassetteInputs"]["cassette"] == "cassette")
							{
								echo'<input type="checkbox" name="cassette" value="cassette" checked="checked" /> Cassette';
							}
							else{
								echo'<input type="checkbox" name="cassette" value="cassette" /> Cassette';
							}?>
						</label>
						<div class="format_inputs">
							<input type="text" name="cassette_stock" placeholder="Enter # in Stock" value='<?=$data["cassetteInputs"]["cassette_stock"]?>'/>
							<input type="text" name="cassette_price" placeholder="Enter Price - 0.00" value='<?=$data["cassetteInputs"]["cassette_price"]?>'/>
							<p class="error_msg"><?=$dataTwo["cassette_stock"]?> <?=$dataTwo["cassette_price"]?></p>
						</div>
					</div>
			</fieldset>
			<fieldset>
				<div class="form_input">
					<label for="artist_site"> <b> Artist Website </b> </label>
					<input type="url" name="artist_site" id="artist_site" placeholder="http://sample.com" value='<?=$data["formInputs"]["albumWebsite"]?>'/>
				</div>
			</fieldset>	
			<fieldset id="buttons">
				<input type="submit" name="create_album" id="create_album" class="custom_button" value="Add Album"/>
				<a class='custom_button' href='?action=adminAlbumInfo' > cancel</a>
			</fieldset>								
		</form>
	</section>
	<div class="clear_fix"></div>
</div> <!-- end main_content -->