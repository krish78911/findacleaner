<div class="headings">
    Enter Your Requirements
</div>
<form action="<?php echo base_url('Home/findCleaners/5/0'); ?>" method="POST" id="searchForm" autocomplete="off">
    <div class="row">
        <div class="col-lg-6">
            <span>City</span>
            <select name="city" required>
                <option value="">City</option>
                    <?php foreach($cities as $city) {
                        echo '<option value="'.$city->city.'">'.$city->city.'</option>';
                    } ?>
            </select>
        </div>
        <div class="col-lg-6">
            <span>Vacuuming</span>
            <select name="vacumming" required disabled>
                <option value="Yes">Yes</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <span>Moping</span>
            <select name="moping" required>
                <option value="">Moping</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
        </div>
        <div class="col-lg-6">
            <span>Kitchen Cleaning</span>
            <select name="kitchencleaning" required>
                <option value="">Kitchen Cleaning</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <span>Bathroom Cleaning</span>
            <select name="bathroomcleaning" required>
                <option value="">Bathroom Cleaning</option>
                <option value="Yes">Yes</option>
                <option value="No">No</option>
            </select>
        </div>
        <div class="col-lg-6">
            <span>size: in meter square (&#13217;)</span>
            <input type="number" name="metersquare" maxlength="50" placeholder="size: in meter square (&#13217;)" required />
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <button type="submit">Search</button>
        </div>
    </div>
</form>