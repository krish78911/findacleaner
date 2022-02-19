<label>
    Enter Your Requirements
</label>
<form action="<?php echo base_url('Home/findCleaners'); ?>" method="POST" id="searchForm">
    <select name="city" required>
        <option value="">City</option>
            <?php foreach($cities as $city) {
                echo '<option value="'.$city->city.'">'.$city->city.'</option>';
            } ?>
    </select>
    <select name="vacumming" required disabled>
        <option value="Yes">Vacuuming</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select>
    <select name="moping" required>
        <option value="">Moping</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select>
    <select name="kitchencleaning" required>
        <option value="">Kitchen Cleaning</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select>
    <select name="bathroomcleaning" required>
        <option value="">Bathroom Cleaning</option>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select>
    <input type="number" name="metersquare" placeholder="size: in meter square" required />
    <button type="submit">Search</button>
</form>