<div id="content">

    <h2 id="content_name">Додавання фотографій до альбому</h2>

    <div class="container">

        <!-- The file upload form used as target for the file upload widget -->
        <form id="fileupload" action="<?=base_url()?>index.php/admin/add_photo" method="POST" enctype="multipart/form-data" >

           <input type="hidden" value="" name="id">

            <!-- Redirect browsers with JavaScript disabled to the origin page -->
            <noscript><input type="hidden" name="redirect" value="<?=base_url();?>"></noscript>
            <!-- The fileupload-buttonbar contains buttons to add/delete files and start/cancel the upload -->
            <div class="row fileupload-buttonbar">
                <div class="col-lg-7">
                    <!-- The fileinput-button span is used to style the file input field as button -->
                <span class="btn btn-success fileinput-button" ng-class="{disabled: disabled}">
                    <i class="glyphicon glyphicon-plus"></i>
                    <span class="add_files_button">Обрати фотографії...</span>
                    <input type="file" name="files[]" multiple ng-disabled="disabled">
                </span>
                    <button type="button" class="btn btn-primary start" data-ng-click="submit()">
                        <i class="glyphicon glyphicon-upload"></i>
                        <span>Почати завантаження</span>
                    </button>
                    <button type="button" class="btn btn-warning cancel" data-ng-click="cancel()">
                        <i class="glyphicon glyphicon-ban-circle"></i>
                        <span class="cancel_upload_button">Відмінити завантаження</span>
                    </button>
                    <!-- The global file processing state -->
                    <span class="fileupload-process"></span>
                </div>
                <!-- The global progress state -->
                <div class="col-lg-5 fade" data-ng-class="{in: active()}">
                    <!-- The global progress bar -->
                    <div class="progress progress-striped active" data-file-upload-progress="progress()"><div class="progress-bar progress-bar-success" data-ng-style="{width: num + '%'}"></div></div>
                    <!-- The extended global progress state -->
                    <div class="progress-extended">&nbsp;</div>
                </div>
            </div>
            <!-- The table listing the files available for upload/download -->
            <table class="table table-striped files ng-cloak">
                <tr data-ng-repeat="file in queue" data-ng-class="{'processing': file.$processing()}">
                    <td data-ng-switch data-on="!!file.thumbnailUrl">
                        <div class="preview" data-ng-switch-when="true">
                            <a data-ng-href="{{file.url}}" title="{{file.name}}" download="{{file.name}}" data-gallery><img data-ng-src="{{file.thumbnailUrl}}" alt=""></a>
                        </div>
                        <div class="preview" data-ng-switch-default data-file-upload-preview="file"></div>
                    </td>
                    <td>
                        <p class="name" data-ng-switch data-on="!!file.url">
                        <span data-ng-switch-when="true" data-ng-switch data-on="!!file.thumbnailUrl">
                            <a data-ng-switch-when="true" data-ng-href="{{file.url}}" title="{{file.name}}" download="{{file.name}}" data-gallery>{{file.name}}</a>
                            <a data-ng-switch-default data-ng-href="{{file.url}}" title="{{file.name}}" download="{{file.name}}">{{file.name}}</a>
                        </span>
                            <span data-ng-switch-default>{{file.name}}</span>
                        </p>
                        <strong data-ng-show="file.error" class="error text-danger">{{file.error}}</strong>
                    </td>
                    <td>
                        <p class="size">{{file.size | formatFileSize}}</p>
                        <div class="progress progress-striped active fade" data-ng-class="{pending: 'in'}[file.$state()]" data-file-upload-progress="file.$progress()"><div class="progress-bar progress-bar-success" data-ng-style="{width: num + '%'}"></div></div>
                    </td>
                    <td>
                        <button type="button" class="btn btn-primary start" data-ng-click="file.$submit()" data-ng-hide="!file.$submit || options.autoUpload" data-ng-disabled="file.$state() == 'pending' || file.$state() == 'rejected'">
                            <i class="glyphicon glyphicon-upload"></i>
                            <span>Start</span>
                        </button>
                        <button type="button" class="btn btn-warning cancel" data-ng-click="file.$cancel()" data-ng-hide="!file.$cancel">
                            <i class="glyphicon glyphicon-ban-circle"></i>
                            <span>Cancel</span>
                        </button>
                        <button data-ng-controller="FileDestroyController" type="button" class="btn btn-danger destroy" data-ng-click="file.$destroy()" data-ng-hide="!file.$destroy">
                            <i class="glyphicon glyphicon-trash"></i>
                            <span>Delete</span>
                        </button>
                    </td>
                </tr>
            </table>
        </form>

    </div>

</div>

