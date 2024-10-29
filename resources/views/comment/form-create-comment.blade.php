@vite(['resources/css/comment.css'])

<div class="list-comments-body"></div>

<div class="comment-box">
    <div class="user-comment">
        <div class="row">
            <div class="col-1">
                <div class="user-avatar propose__box-avatar rounded-circle">
                    <img onerror="this.src='{{ asset('images/avatar-default.png') }}'" class="w-100 h-100 rounded-circle object-fit" src="{{ auth()->user()->avatar ?? asset('images/avatar-default.png') }}" alt="">
                </div>
            </div>
            <div class="col">
                <div class="form-comment">
                    <div data-url="
{{--{{ route('comments-posst') }}--}}
                        " id="form-create-comment">
                        {{-- Change name type -> type_comment - 12/08/2024 --}}
                        <input type="text" class="filter-create" name="type_comment" value="{{ @$comment_type }}" hidden>
                        <input type="text" class="filter-create" id="element_id" name="element_id" value="" hidden>

                        <textarea placeholder="Thêm bình luận" type="text" name="comment" id="comment-input" class="form-control comment-input filter-create" style="resize: none;"></textarea>

                        <span class="required-error error"></span>
                        <div class="bottom-form" style="display: none">
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
                                                <div class="list-user"></div>
                                            </div>
                                        </div>
                                    </div>
                                </span>

                                <span class="btn-action uploadFile"> <i class="fa fa-upload"></i>Tập tin</span>

                                <span>
                                    <div class="dropup">
                                        <a href="#" class="nav-link" data-toggle="dropdown">
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
                                <div class="list-file"></div>

                                <div class="btn-upload">
                                    <div class="ui-btn-upload" >
                                        <div class="drop-click-upload">Thả tập tin của bạn vào đây</div>
                                        <input type="file" class="upload-input" multiple hidden>
                                        <input type="file" class="upload-files-list" name="files[]" multiple hidden>
                                    </div>
                                </div>
                            </div>
                            <div class="form-btn">
                                <button class="btn btn-success mr-4" id="btn-submit-comment" type="button">Gửi</button>
                                <button id="cancel-comment" class="btn btn-light" type="button">Hủy bỏ</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- @include('common.message') --}}
<script type="module" src="https://cdn.jsdelivr.net/npm/emoji-picker-element@^1/index.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script>
    var clsComment = null;
    {{--const cmTypeCreate = @json(CM_CREATE_TYPE),--}}
    {{--      cmTypeUpdate = @json(CM_EDIT_TYPE),--}}
    {{--      cmTypeDel = @json(CM_DEL_TYPE),--}}
    {{--      cmTypeReact = @json(CM_REACTION_TYPE);--}}
    {{--const cmProposalType = @json(COMMENT_TYPE_PROPOSAL),--}}
    {{--      cmProjectType = @json(COMMENT_TYPE_PROJECT),--}}
    {{--      cmRecruitmentTargetType = @json(COMMENT_TYPE_RECRUITMENT_TARGET),--}}
    {{--      cmRecruitmentProcessType = @json(COMMENT_TYPE_RECRUITMENT_PROCESS),--}}
    {{--      cmTrainingCourseType = @json(COMMENT_TYPE_TRAINING_COURSE);--}}
    {{--const fileTypesAllow = @json(FILE_TYPE_ALLOW),--}}
    {{--      fileSizeAllow = @json(FILE_SIZE_ALLOW),--}}
    {{--      fileTypePath = @json(FILE_TYPE_PATH);--}}
    {{--const cmReactTypeLike = @json(CM_REACT_LIKE);--}}
    {{--const baseUrl = window.location.origin,--}}
    {{--      commentListUrl = "{{ route('comments-list') }}",--}}
    {{--      commentReactUrl = "{{ route('comments-react') }}",--}}
    {{--      commentDeleteUrl = "{{ route('comments-del', ['id' => ':id']) }}",--}}
    {{--      getCommentEditUrl = "{{ route('ajax-get-comments-edit') }}",--}}
    {{--      getUserTagUrl = "{{ route('comments-tag-list-user') }}",--}}
    {{--      getMoreComments = "{{ route('comments-list-more') }}",--}}
    {{--      getInfoUserUrl = "{{ route('get-info-user')}}",--}}
    {{--      getListReactUserUrl = "{{ route('get-list-react-user')}}";--}}
    {{--const errorDefaultAva = "this.src='{{ asset('images/avatar-default.png') }}'",--}}
    {{--      defaultAva = "{{ asset('images/avatar-default.png') }}";--}}
</script>
@vite(['resources/js/comment/comment.js'])
