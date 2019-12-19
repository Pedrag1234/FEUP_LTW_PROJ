<?php 
include_once('../Database/Queries/house_queries.php');

function edit_House($house_id){ 
    $house = getHouse($house_id);
    ?>

    <div id="AddHouseForm">
        <form action="../actions/action_edit_house.php" method="post" enctype="multipart/form-data">
            <label> Title
                <input type="text" name="Title" maxlength="100" value='<?php echo $house['title'] ?>'>
            </label>
            <label> Location
                <input type="text" name="Location" maxlength="100" value='<?php echo $house['location'] ?>'>
            </label>
            <label> Rent Price
                <input type="number" name="Rent" value='<?php echo $house['rent'] ?>'>
            </label>
            <label> Description
            <textarea cols="23" rows="5" name="Description"><?php echo $house['description'] ?></textarea>
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
<?php } 

function removePhotos($house_id){
    $photos = getHousePics($house_id);
    if (empty($photos)) { ?>
        <div id="delPics">
            <h3>Found no photos to delete</h3>
        </div>
    <?php }
    else { 
        $i = 1;?>
        <div id="delPics">
            <form action="../actions/action_remove_photos.php" method="post">   
                <select name="photos2del[]" multiple="multiple">
                    <?php foreach($photos as $photo){
                    echo '<option value="'.$photo['photo_id'].'")> Photo '.$i.'</option>';
                    $i++;
                    } ?>
                </select>
                <button type="submit">Remove photo/s</button>
            </form>
        </div>
   <?php }
}

?>