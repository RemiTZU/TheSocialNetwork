<?php
echo '<form class="form" enctype="multipart/form-data"  method="POST">';
echo '    <div class="input-container ic1">';
echo '        <input id="email" class="input" type="email" name="email" value="' .$user->getEmail() . '" >';
echo '        <div class="cut"></div>';
echo '        <label for="email" class="placeholder">Email</label>';
echo '    </div>';
echo '    <div class="input-container ic2">';
echo '        <input id="pseudo" class="input" type="text" name="pseudo" value="' . $user->getPseudo() . '" >';
echo '        <div class="cut"></div>';
echo '        <label for="pseudo" class="placeholder">Pseudo</label>';
echo '    </div>';
echo '    <div class="input-container ic2">';
echo '        <input id="password" class="input" type="password" name="password" placeholder="Password">';
echo '        <div class="cut"></div>';
echo '        <label for="password" class="placeholder">Password</label>';
echo '    </div>';
echo '    <div class="input-container ic2">';
echo '        <input id="passwordRepeat" class="input" type="password" name="passwordRepeat" placeholder="Repeat Password">';
echo '        <div class="cut"></div>';
echo '        <label for="passwordRepeat" class="placeholder">Repeat Password</label>';
echo '    </div>';
echo '        <div class="input-container ic2">';
echo '                <input type="hidden" name="MAX_FILE_SIZE" value="" />';
echo '                <div class="cut"></div>';
echo '                    <input class="input" id="profile" name="profile_picture" type="file"';
echo '                        accept="image/png, image/jpeg, image/jpg" autocomplete="off" />';
echo '            </div>';
echo '    <input class ="submit" type="submit" value="Update">';
echo '</form>';
?>