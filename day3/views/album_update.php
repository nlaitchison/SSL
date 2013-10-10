<? foreach($data as $album){ ?>

<div id="main_content">

				<p class='create_new_album'><a href='?action=adminAlbumInfo'> back/cancel</a></p>
				<h2> Update Album </h2>

				<section id="album_image"> 
					<img src="images/<?=$album["albumImage"]?>" alt="album Placeholder Image">
				</section>

				<section>
					<form id="update_album" method="post" action="?action=updateAlbum">
						<fieldset>
							<div class="hidden_id">
								<input type="text" name="albumId" readonly="readonly" value='<?=$album["albumId"]?>'/>
							</div>
							<div class="form_input">
								<label for="album_name"> Album Name </label>
								<input type="text" name="album_name" id="album_name" value='<?=$album["albumName"]?>' />
								<label class="checkbox"> 
									<input type="checkbox" name="album_preorder" value="1" /> 
										Preorder
								</label>
							</div>
							<div class="form_input">
								<label for="album_artist"> Artist Name </label>
								<input type="text" name="album_artist" id="album_artist" value='<?=$album["albumArtist"]?>'/>
							</div>
						</fieldset>	
						<fieldset>
							<div class="form_input">
								<label for="album_image"> Album Image </label>
								<input type="file" accept="image" name="album_image" id="album_image" value='<?=$album["albumImage"]?>'/>
							</div>
							<div class="form_input">
								<label for="album_description"> Album Description </label>
								<div class="clear_fix"></div>
								<textarea name="album_description" id="album_description"><?=$album["albumDescription"]?></textarea>
							</div>
							<div class="form_input">
								<label for="album_release_date"> Album Release Date </label>
								<input type="date" name="album_release_date" id="album_release_date" placeholder="MM/DD/YYYY" value='<?=$album["albumReleaseDate"]?>'/>
							</div>
						</fieldset>
						<fieldset>
							<div class="form_input">
								<label> Album Condition </label>
								<label class="radio"> 
									<input type="radio" name="album_condition" value="new" checked="checked" /> 
										New 
								</label>
								
								<label class="radio"> 
									<input type="radio" name="album_condition" value="used" />
									Used 
								</label>
							</div>
						</fieldset>	
						<fieldset>
							<label> Album Format </label>
								<div class="form_input">	
									<label class="checkbox"> 
										<input type="checkbox" name="twelve" value="12" /> 
											12" Vinyl
									</label>
									<input type="text" name="twelve_stock" placeholder="Enter # in Stock"/>
									<input type="text" name="twelve_price" placeholder="Enter Price - $0.00"/>
									<select multiple id="twelve_color" name="twelve_color[]">
										<option value="Black">Black</option>
										<option value="White">White</option>
										<option value="Orange Creamsicle">Orange Creamsicle</option>
										<option value="Clear">Clear</option>
										<option value="Purple Red Speckled">Purple Red Speckled</option>
										<option value="Gold">Gold</option>
									</select>
								</div>
								<div class="form_input">
									<label class="checkbox"> 
										<input type="checkbox" name="seven" value="7" /> 
											7" Vinyl
									</label>
									<input type="text" name="seven_stock" placeholder="Enter # in Stock"/>
									<input type="text" name="seven_price" placeholder="Enter Price - $0.00"/>
									<select multiple id="seven_color" name="seven_color[]">
										<option value="Black">Black</option>
										<option value="White">White</option>
										<option value="Orange Creamsicle">Orange Creamsicle</option>
										<option value="Clear">Clear</option>
										<option value="Purple Red Speckled">Purple Red Speckled</option>
										<option value="Gold">Gold</option>
									</select>
								</div>
								<div class="form_input">
									<label class="checkbox"> 
										<input type="checkbox" name="cd" value="cd" /> 
											CD 
									</label>
									<input type="text" name="cd_stock" placeholder="Enter # in Stock"/>
									<input type="text" name="cd_price" placeholder="Enter Price - $0.00"/>
								</div>
								<div class="form_input">
									<label class="checkbox"> 
										<input type="checkbox" name="cassette" value="cassette" /> 
											Cassette 
									</label>
									<input type="text" name="cassette_stock" placeholder="Enter # in Stock"/>
									<input type="text" name="cassette_price" placeholder="Enter Price - $0.00"/>
								</div>
						</fieldset>
						<fieldset>
							<div class="form_input">
								<label for="artist_site"> Artist Website </label>
								<input type="url" name="artist_site" id="artist_site" value='<?=$album["albumWebsite"]?>'/>
							</div>
						</fieldset>	
						<fieldset>
							<input type="submit" name="update_album" id="update_album" value="Update Album"/>
						</fieldset>								
					</form>
				</section>
				<div class="clear_fix"></div>
			</div> <!-- end main_content -->
<? } ?>
