			<?php for ($i=1; $i<=4; $i++) { 
			    $guest_label = 'guest_'. $i;
			    // Check if the Guest Field is populated - guest name
			    if (get_field($guest_label) != null) {
			    	$website = 'guest_website_'. $i;	
			    	$handle_label = 'twitter_handle_'. $i;

				// Check if twitter handle for guest is provided
				if (get_field($handle_label) != null) {
				    $handle_value = get_field($handle_label);
	                    	    echo '<a class="guest" href="http://twitter.com/';
			    	    echo $handle_value;
			    	    echo '" ';
			    	    echo 'target="_blank">';
				    $img =  getUserStatus($handle_value);
				    echo '<img class="guest_pic" src="'.$img.'"/>';	
			    	    echo '<h3 class="tk-adelle">';
				    echo the_field($guest_label);
				    echo '<br />';
				    echo '<span class="handle">@';
				    echo the_field($handle_label);
				    echo '</span>';
				    echo '</h3>';
				    echo '</a>';
				}

				// If no twitter handle is not provided
				else {
				    // Check if the guest website field is populated
				    if (get_field($website) != null) {
					echo '<a class="guest" href="http://';
			    	    	echo the_field($website);
			    	    	echo '" ';
					echo 'target="_blank">';
					echo '<img class="guest_pic" src="';
				    	echo bloginfo('template_directory');
				    	echo '/images/no_avatar.png';
				    	echo '" />';
				    	echo '<h3 class="tk-adelle">';
				    	echo the_field($guest_label);
					echo '</h3><h6>';
					echo the_field($website);
				    	echo '</h6>';
					echo '</a>';
				    }
				    else {
					echo '<span class="guest">';
					echo '<img class="guest_pic" src="';
				    	echo bloginfo('template_directory');
				    	echo '/images/no_avatar.png';
				    	echo '" />';
				    	echo '<h3 class="tk-adelle">';
				    	echo the_field($guest_label);
				    	echo '</h3>';
					echo '</span>';
				    }	
				    
				} // End check for whether twitter handle is provided or not

			    } // End check for existence of a Guest Speaker
			} // End For loop  
			if (in_category('design-with-juhan')) {
			    echo '<a class="guest" href="http://twitter.com/jsonin" target="_blank">';
			    $img =  getUserStatus('jsonin');
			    echo '<img class="guest_pic" src="'.$img.'"/>';
			    echo '<h3 class="tk-adelle">Juhan Sonin<br />@jsonin</h3></a>';			
			}