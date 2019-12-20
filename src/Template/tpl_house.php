<?php 
include_once('../Database/Queries/house_queries.php');
include('../Template/tpl_picture_slider.php');


function getHouseInfo($id){
    $house = getHouse($id); ?>

    <div class="padding">
        <div id="houseAv">
            <h1><?php echo $house['title']; ?></h1>
            <div id="photo_info">
                <?php pic_slider($id); ?><br>
                <a><?php echo $house['description']; ?></a>
                <br><br>
                <a><?php echo $house['location']; ?></a>
                <a><?php echo $house['rent']; ?></a>
                <a><?php echo $house['classificacao']; ?></a>
                <?php if(isset($_SESSION['Username']) == true && $_SESSION['Username'] == $house['id_owner']){?>
                    <a href="edit_house.php?id_house=<?php echo $house['id_house']?>">Edit House Info</a>
                <?php } ?>
            </div>
        
        <div id="availabilityCheck">
            <?php 
            $availabilities = getHouseAvailability($id);

            $numberPeopleHouse = getHouseNumberPeople($id);
            $numberGuests = $numberPeopleHouse[0];
            $dateUnavailable=[];

            $stringDates="";
            foreach($availabilities as $range){

                $dateUnavailable = date_range($range['start_date'], $range['end_date']);

                foreach($dateUnavailable as $date){
                    $stringDates.=$date;
                    $stringDates.=" ";
                }
            }
            ?>  

            <input type="hidden" value="<?php echo $stringDates; ?>" id="stringDates" />       

            <script>
                $(function() {
                    var stringDates = $("input#stringDates").val();
                    var dates = stringDates.split(" ");
                    var oneYearFromNow = new Date();
                    oneYearFromNow.setFullYear(oneYearFromNow.getFullYear() + 1);
                    $( "#calendario" ).datepicker({
                        dateFormat: "dd-mm-yy",
                        minDate: new Date(),
                        maxDate: oneYearFromNow,
                        onSelect: function(dateStr) {
                        var min = $(this).datepicker('getDate') || new Date(); // Selected date or today if none
                        $('#calendario2').datepicker('option', {minDate: min});
                    },
                    currentText: new Date(),
                    beforeShowDay: function(date){
                        var string = jQuery.datepicker.formatDate('dd-mm-yy', date);
                        if($.inArray(string, dates)!=-1){
                            return[false];
                        }else{
                            return[true];
                        }
                    }
                });
                    $( "#calendario2" ).datepicker({
                        dateFormat: "dd-mm-yy",
                        maxDate: oneYearFromNow,
                        currentText: new Date(),
                        beforeShowDay: function(date){
                            var string = jQuery.datepicker.formatDate('dd-mm-yy', date);
                            if($.inArray(string, dates)!=-1){
                                return[false];
                            }else{
                                return[true];
                            }
                        }
                    });
                });
                
            </script>    
            <h2><?php echo "Check Availablity"?> </h2>
            <form id="reservationForm" action="../actions/action_add_reservation.php" method="post">
                <label>Check-in:</label>
                <input type="text" class="datePick" id="calendario" name="start_date" required />
                <label>Check-out:</label>
                <input type="text" class="datePick" id="calendario2" name="end_date" required/>
                <input type="hidden" value="<?php echo $id; ?>" name="id_house" />
                <input type="hidden" value="<?php echo $house['rent']; ?>" name="rent" />
                <label>Hospedes:</label>
                <input type="number" name="numeroHospedes" min="1" max="<?php echo $numberGuests['max_guests'] ?>" required/>
                <button type="submit">Reserve</button>
            </form>
        </div>
        </div>
    </div> 

    <?php }

    function drawStarsHouse($rating){
        for ($i=0; $i < $rating; $i++) { 
            echo '<span class="fa fa-star checked"></span>';
        }
        $no_stars = 5 - $rating;
        for ($j=0; $j < $no_stars; $j++) { 
            echo '<span class="fa fa-star"></span>';
        }
    }

    function date_range($first, $last, $step = '+1 day', $output_format = 'd-m-Y' ) {

    $dates = array();
    $current = strtotime($first);
    $last = strtotime($last);

    while( $current <= $last ) {

        $dates[] = date($output_format, $current);
        $current = strtotime($step, $current);
    }
    return $dates;

}?>

?>
