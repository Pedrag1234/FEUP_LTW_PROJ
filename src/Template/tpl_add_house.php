<?php 

function add_House(){ ?>
    <div id="AddHouseForm">
        <form action="../actions/action_add_house.php" method="post" enctype="multipart/form-data">
            <label> Title
                <input type="text" name="Title" maxlength="100">
            </label>
            <label> Rent Price
                <input type="number" name="Rent">
            </label
            <label> Location
                <input type="text" name="Location" maxlength="100">
            </label>
            <label> Description
                <input type="text" name="Description" maxlength="256">
            </label>
            <label> Area
                <input type="number" name="Area">
            </label>
            <label> Max Guests
                <input type="number" name="MaxGuests">
            </label>
            <label> Nº of Rooms
                <input type="number" name="Nofrooms">
            </label>
            <label> Nº of Bathrooms
                <input type="number" name="NofBathrooms">
            </label>
            <label> Photos
                <input name="housephotos[]" type="file" multiple="multiple" />
            </label>
            <button type="submit">Add House</button>
        </form>
    </div>
<?php } ?>