<div id="nav_column">
    <div id="admin_menu" class="side_block">
        <h2>АДМІН МЕНЮ</h2>
        <ul>
            <li>
                <a href="#">Галерея</a>
                <ul>
                    <li><a href="<?=base_url();?>index.php/admin/add_albom/albom">Додати альбом</a></li>
                    <li><a href="<?=base_url();?>index.php/admin/editlist/albom">Редагувати альбом</a></li>
                    <li><a href="#">Видалити альбом</a></li>
                </ul>
            </li>

            <li>
                <a href="#">Кращі студенти</a>
                <ul>
                    <li><a href="<?=base_url();?>index.php/admin/add/best_students">Додати студента</a></li>
                    <li><a href="<?=base_url();?>index.php/admin/editlist/best_students">Редагувати студента</a></li>
                    <li><a href="<?=base_url();?>index.php/admin/del/best_students">Видалити студента</a></li>
                </ul>
            </li>

            <li>
                <a href="#">Іменні стипендіати</a>
                <ul>
                    <li><a href="<?=base_url();?>index.php/admin/add/registered_fellows">Додати студента</a></li>
                    <li><a href="<?=base_url();?>index.php/admin/editlist/registered_fellows">Редагувати студента</a></li>
                    <li><a href="<?=base_url();?>index.php/admin/del/registered_fellows">Видалити студента</a></li>
                </ul>
            </li>

            <li>
                <a href="#">Першокурсники</a>
                <ul>
                    <li><a href="<?=base_url();?>index.php/admin/add/pervokursnik">Додати групу</a></li>
                    <li><a href="<?=base_url();?>index.php/admin/editlist/pervokursnik">Редагувати групи</a></li>
                    <li><a href="<?=base_url();?>index.php/admin/del/pervokursnik">Видалити групу</a></li>
                </ul>
            </li>

            <li>
                <a href="#">Випускники</a>
                <ul>
                    <li><a href="<?=base_url();?>index.php/admin/add/vipusknik">Додати групу</a></li>
                    <li><a href="<?=base_url();?>index.php/admin/editlist/vipusknik">Редагувати групи</a></li>
                    <li><a href="<?=base_url();?>index.php/admin/del/vipusknik">Видалити групу</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="side_block">
        <div id="calendar" class="demo">
            <div id="datepicker"></div>
        </div>
    </div>
</div>