<div class="row">
<div class="large-6 small-10 small-centered columns">
<div style="background-color: #2196F3;border-radius:15px;">
<div class="row">
<div class="large-5 small-6 small-centered columns">
<h2 style="font-family: 'Rochester', cursive;">Update List</h2>
</div>
</div>
<form enctype="multipart/form-data" action="?action=updateListAction" method="POST">
	<fieldset>

					<input type="hidden" name="list_id" value="<? echo $data[0]["list_id"]?>"/>

		Event :<select name="event">
    					<option value="<? echo $data[0]['event']?>"><? echo $data[0]["event"]?></option>
    					<option value="Mothers' Day">Mothers' Day</option>
							<option value="Valentine's Day">Valentine's Day</option>
							<option value="Easter">Easter</option>
							<option value="Fathers' Day">Fathers' Day</option>
							<option value="Christmas">Christmas</option>
							<option value="Hanukkah">Hanukkah</option>
							<option value="Birthday">Birthday</option>
							<option value="Baby Shower">Baby Shower</option>
							<option value="Wedding">Wedding</option>
  					</select>

		Address: <input type="text" name="address" value="" placeholder="<? echo $data[0]['address']?>" />

		City: <input type="text" name="city" value="" placeholder="<? echo $data[0]['city']?>" />

		State: <select name="state" value="">
    					<option value="<? echo $data[0]['state']?>"><? echo $data[0]["state"]?></option>
    					<option value="AL">Alabama</option>
							<option value="AK">Alaska</option>
							<option value="AZ">Arizona</option>
							<option value="AR">Arkansas</option>
							<option value="CA">California</option>
							<option value="CO">Colorado</option>
							<option value="CT">Connecticut</option>
							<option value="DE">Delaware</option>
							<option value="DC">District Of Columbia</option>
							<option value="FL">Florida</option>
							<option value="GA">Georgia</option>
							<option value="HI">Hawaii</option>
							<option value="ID">Idaho</option>
							<option value="IL">Illinois</option>
							<option value="IN">Indiana</option>
							<option value="IA">Iowa</option>
							<option value="KS">Kansas</option>
							<option value="KY">Kentucky</option>
							<option value="LA">Louisiana</option>
							<option value="ME">Maine</option>
							<option value="MD">Maryland</option>
							<option value="MA">Massachusetts</option>
							<option value="MI">Michigan</option>
							<option value="MN">Minnesota</option>
							<option value="MS">Mississippi</option>
							<option value="MO">Missouri</option>
							<option value="MT">Montana</option>
							<option value="NE">Nebraska</option>
							<option value="NV">Nevada</option>
							<option value="NH">New Hampshire</option>
							<option value="NJ">New Jersey</option>
							<option value="NM">New Mexico</option>
							<option value="NY">New York</option>
							<option value="NC">North Carolina</option>
							<option value="ND">North Dakota</option>
							<option value="OH">Ohio</option>
							<option value="OK">Oklahoma</option>
							<option value="OR">Oregon</option>
							<option value="PA">Pennsylvania</option>
							<option value="RI">Rhode Island</option>
							<option value="SC">South Carolina</option>
							<option value="SD">South Dakota</option>
							<option value="TN">Tennessee</option>
							<option value="TX">Texas</option>
							<option value="UT">Utah</option>
							<option value="VT">Vermont</option>
							<option value="VA">Virginia</option>
							<option value="WA">Washington</option>
							<option value="WV">West Virginia</option>
							<option value="WI">Wisconsin</option>
							<option value="WY">Wyoming</option>
  					</select>

		Zip: <input type="text" name="zip" value="" placeholder="<? echo $data[0]['zip']?>" />

<div class="row">
<div class="large-4 medium-5 small-8 small-centered columns">
  	<input class="button align-left" type="submit" name="submit" value="Update"/>
  	<a class="button align-left" href="?action=deleteListAction&id=<? echo $data[0]["list_id"]?>">Delete</a>
</div>
</div>
		  	 
  </fieldset>
</form>
</div></div></div>