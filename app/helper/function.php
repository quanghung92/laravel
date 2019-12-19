<?php
// để autoload file mình tự tạo trong terminal gõ composer dump-autoload
// file này được khai báo trong composer.json ở phần autoload có tên là file
// file này có tác dụng để show ra các erorrors của các trang adduser và edit user
function showErorrs($errors,$name)
{
    if($errors->has($name)){
        echo '<div class="alert alert-danger" role="alert">';
        echo '<strong>'.$errors->first($name).'</strong>';//lấy ra lổi của $errors cái lổi của key là full
        echo '</div>';
    }
}
