   <?php
        $pageTitle = "Contact Us";
       
				?>
				<p><strong>We would like to hear from you</strong></p>

				<form method="post" action="message.php">
   		    <table>
                <tr>
                  <th><label for="name">Name</label></th>
                     <td><input type="text" id="name" name="name" /></td>
				</tr>
				<p>
					<label for="gender">
					Please select your gender
					<input type="radio" name="gender" value="female" />Female
					<input type="radio" name="gender" value="male" />Male
					</label>
				</p>
				<tr>
                  <th><label for="email">Email Address</label></th>
                     <td><input type="text" id="email" name="email" /></td>
				</tr>
				<tr>
                  <th><label for="text">Message</label></th>
                     <td><textarea name="details" id="details"></textarea></td>
				</tr>
			</table>
			<br/>
				<input type="submit" value="Send"/>
        
				</form>
				