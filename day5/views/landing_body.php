<div id="main_content">

				<!--<section id="banner">
					<img src="images/banner.png" alt="Banner Placeholder Image" />
				</section>  end banner -->

				<!--<section id="news" class="clear_fix"> 
					<div id="upcoming" class="half_div">
						<img src="images/instore_events.png" alt="In Store Events Placeholder Image" />
					</div>
					<div id="promotions" class="half_div">
						<img src="images/promotions.png" alt="Promotions Placeholder Image" />
					</div>
					<div class="clear_fix">
				</section>  end news -->

				<section id="new_releases" class="clear_fix">
					<h2> New Releases </h2>
					<ul>
						<?
							$count = 0;
							foreach($data as $album){
								if($album['albumCondition'] == "New" && $count < 4){
									echo '<li class="album_block">';
									echo '<img src="images/album_art/'.$album["albumImage"].'"" alt="Album Art for '.$album["albumName"].' by '.$album["albumArtist"].'" width="220" height="220"/>'; 
									echo '<p class="abum_name">' .$album["albumName"]. '</p>';
									echo '<p class="band_name">' .$album["albumArtist"]. '</p>';
									echo '<p class="album_formats"> Formats </p>';
									echo '</li>';
									$count++;
								}
							} 
						?>
					</ul>
					<div class="clear_fix">
				</section> <!-- end new releases -->

				<section id="used_records" class="clear_fix"> 
					<h2> Used Records &amp; CDs </h2>
					<ul>
						<? 
							$countTwo = 0;
							foreach($data as $album){
								if($album['albumCondition'] == "Used" && $countTwo < 4){
									echo '<li class="album_block">';
									echo '<img src="images/album_art/'.$album["albumImage"].'"" alt="Album Art for '.$album["albumName"].' by '.$album["albumArtist"].'" width="220" height="220"/>'; 
									echo '<p class="abum_name">' .$album["albumName"]. '</p>';
									echo '<p class="band_name">' .$album["albumArtist"]. '</p>';
									echo '<p class="album_formats"> Formats </p>';
									echo '</li>';
									$countTwo++;
								}
							}
						?> 
					</ul>
					<div class="clear_fix">
				</section> <!-- end new used records -->

			</div> <!-- end main_content -->
