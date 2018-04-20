<div id="center">
<h2>create new item</h2>

<?php echo validation_errors(); ?>

<?php echo form_open($func);
 $months = array("January", "februari", "maart", "april", "mei", "juni","juli", "augustus", "september", "oktober", "november", "december");
?>

    <label for="person">name</label>
    <input type="person" name="person" /><br />

    <label for="day">day</label>
    <select name="day" value="day">
    <option disabled selected value> selecteer een dag </option>
<?php 
    for($x = 1; $x < 32; $x++){
        echo "<option name=\"".$x."\">".$x."</option>";
    }
?>
    </select><br />

    <label for="month">month</label>
    <select name="month" value="month">
    <option disabled selected value> selecteer een maand </option>
    <?php 
    for($x = 1; $x < 13; $x++){
        echo "<option name=\"".$months[$x]."\" value=\"".$x."\">".$months[$x - 1]."</option>";
    }
?>
    </select><br />

    <label for="year">year</label>
    <select name="year" value="year">
    <option disabled selected value> selecteer een jaar </option>
    <?php 
        $i = 2019;
        while($i>1900) {
            echo "<option name=\"".$i."\">".$i."</option>";
            $i--;
        }
?>
    </select><br />

    <input type="submit" name="submit" value="Create news item" />
<?php echo'<script>console.log(\''.$func.'\')</script>'; ?>
</form>
</div>