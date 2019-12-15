<?php 
include_once('../Database/Queries/house_queries.php');

function edit_House($house_id){ 
    $house = getHouse($house_id);?>

    <div id="AddHouseForm">
        <form action="../actions/action_edit_house.php" method="post" >
            <label> Title
                <input type="text" name="Title" maxlength="100" value='<?php echo $house['title'] ?>'>
            </label>
            <label> Rent Price
                <input type="number" name="Rent" value='<?php echo $house['rent'] ?>'>
            </label>
            <label> Location
                <input type="text" name="Location" maxlength="100" value='<?php echo $house['location'] ?>'>
            </label>
            <label> Description
                <input type="text" name="Description" maxlength="256" value='<?php echo $house['description'] ?>'>
            </label>
            <label> Area
                <input type="number" name="Area" value='<?php echo $house['area'] ?>'>
            </label>
            <label> Max Guests
                <input type="number" name="MaxGuests" value='<?php echo $house['max_guests'] ?>'>
            </label>
            <label> Nº of Rooms
                <input type="number" name="Nofrooms" value='<?php echo $house['quartos'] ?>'>
            </label>
            <label> Nº of Bathrooms
                <input type="number" name="NofBathrooms" value='<?php echo $house['casas_de_banho'] ?>'>
            </label>
            <input type="hidden" name="id_house" value='<?php echo $house_id ?>'>
            <label> Photos
                <input name="housephotos[]" type="file" multiple="multiple" />
            </label>
            <button type="submit">Edit</button>
        </form>
    </div>
<?php } ?>
