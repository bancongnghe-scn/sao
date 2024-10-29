
<form action="{{ route('comments-edit') }}" method="post" id="form-edit-comment">
    <input type="text" name="comment_id" value="{{ $comment->id }}" hidden>
    <textarea type="text" name="comment" class="form-control comment-input">{{ $comment->content }}</textarea>

    <span class="required-error error"></span>
    <div class="bottom-form bottom-form-edit">
        <div class="form-action">
            <span class="tagUser">
                <div class="dropup">
                    <a  href="#" class="nav-link btn-click-tagUser" id="" data-toggle="dropdown">
                        <span class="btn-action"> @ Nhắc đến </span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="dropdown-list-user">
                            <div class="search-user">
                                <input type="text" class="form-control search-user-tag" placeholder="Tìm kiếm">
                            </div>
                            <hr>
                            <div class="list-user">

                            </div>
                        </div>
                    </div>
                </div>
            </span>

            <span class="btn-action uploadFile"> <i class="fa fa-upload"></i>Tập tin</span>

            <span >
                <div class="dropup">
                    <a  href="#" class="nav-link" data-toggle="dropdown">
                        <span class="btn-action"><i class="fa fa-smile emoji"></i></span>
                    </a>
                    <div class="dropdown-menu">
                        <emoji-picker emoji-version="15.0" class="light"></emoji-picker>
                    </div>
                </div>
            </span>
        </div>
        <div class="box-files">
            <div class="drag-white-space">
                <span>Thả tập tin ở đây</span>
            </div>
            <div class="list-file">
                @if (count($comment->medias) > 0)
                    @foreach ($comment->medias as $media)
                        <div class="card-file-info card-edit-file">
                            <button type="button" data-filepath="{{ $media->path }}" data-fileid="{{ $media->id }}" class="remove-file-comment">X</button>
                            <div class="image-file">
                                <img style="width: 100%" src="{{ isset(FILE_TYPE_PATH[pathinfo($media->path, PATHINFO_EXTENSION)]) ? asset(FILE_TYPE_PATH[pathinfo($media->path, PATHINFO_EXTENSION)]) : $media->path }}" alt="">
                            </div>
                            <div class="name-file">
                                {{ $media->name }}
                            </div>
                        </div>
                    @endforeach
                @endif
                <input type="text" class="input-del-files" value="" name="del_files" hidden>
            </div>

            <div class="btn-upload">
                <div class="ui-btn-upload" >
                    <div class="drop-click-upload">Thả tập tin của bạn vào đây</div>
                    <input type="file" class="upload-input" multiple hidden>
                    <input type="file" class="upload-files-list" name="files[]" multiple hidden>
                </div>
            </div>
        </div>
        <div class="form-btn">
            <button class="btn btn-success mr-4" type="submit">Sửa</button>
            <button  class="btn btn-light btn-cancel-edit" type="button">Hủy bỏ</button>
        </div>
    </div>
</form>
