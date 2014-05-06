<div id="content">

    <h2 id="content_name">Додавання до альбому</h2>

    <!-- Область для перетаскивания -->
    <div id="drop-files" ondragover="return false">
        <p></p>
        <form action=""  enctype="multipart/form-data" method="POST" id="frm">
            <input type="file" min="1" max="9999" name="file[]" multiple="true" id="uploadbtn" /> <!--будет передан массив файлов -->
            <input type="submit" name="load_files" value="Go" />
        </form>
    </div>

    <!-- Область предварительного просмотра -->
    <div id="uploaded-holder">
        <div id="dropped-files">
            <!-- Кнопки загрузить и удалить, а также количество файлов -->
            <div id="upload-button">

                    <span>0 Файлов</span>
                    <a href="#" class="upload">Загрузить</a>
                    <a href="#" class="delete">Удалить</a>
                    <!-- Прогресс бар загрузки -->
                    <div id="loading">
                        <div id="loading-bar">
                            <div class="loading-color"></div>
                        </div>
                        <div id="loading-content"></div>
                    </div>

            </div>
        </div>
    </div>



</div>

