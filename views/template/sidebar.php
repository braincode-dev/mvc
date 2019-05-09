<?php

?>

<h4 class="title-t">Add User in DataBase</h4>
<form method="post" action="" id="add-user-form">
    <div class="form-group">
        <input type="text" class="form-control" placeholder="User name" name="name">
    </div>
    <div class="form-group">
        <input type="email" class="form-control" placeholder="Your email" name="email">
    </div>
    <div class="form-group">
        <select class="form-control" name="country">
            <?php foreach ($countryList as $item):?>
                <option value="<?=$item['name']?>" ><?=$item['name']?></option>
            <?php endforeach;?>
        </select>
    </div>
    <button type="submit" class="btn btn-mvc" id="add-user">Add user</button>
</form>