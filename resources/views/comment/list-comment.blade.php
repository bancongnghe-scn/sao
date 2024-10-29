@foreach ($comments as $comment)
    <div class="comment-box-list comment-{{$comment->id}}" id="comment-{{$comment->id}}">
        <div class="user-comment">
            <div class="row">
                <div class="col-1">
                    <div class="user-avatar propose__box-avatar rounded-circle">
                        <img onerror="this.src='{{ asset('images/avatar-default.png') }}'" class="w-100 h-100 rounded-circle object-fit" src="{{ $comment->user->avatar }}" alt="">
                    </div>
                </div>
                <div class="col">
                    <div class="comment-content">
                        <div class="comment-reated" data-comment="{{ $comment->id }}">
                            @if(!$comment->reacts->isEmpty())
                                @foreach ($comment->reacts->pluck('react_type')->toArray() as $key => $type)
                                    <span class="icon-emoji-{{$key + 1}}">
                                        <img class="" src="{{ asset($iconReactComment[$type]['url']) }}" alt="">
                                    </span>
                                @endforeach
                                    <span class="total-react">{{ $comment->reacts->sum('total_reacts') }}</span>
                            @endif
                        </div>
                        <div class="modal-user-react">

                        </div>
                        <div class="user-info">
                            <span class="user-name popup-user" userid="{{ $comment->user->id }}">{{ $comment->user->name }}</span> <span class="comment-created">{{ date('d/m/Y H:i', strtotime($comment->created_at)) }}</span>
                        </div>
                        <div class="descipt">
                            {!! $comment->content !!}
                            @if (count($comment->medias) > 0)
                            <div>
                                <span class="comment-file-content">Tài liệu<i class="bi-caret-up-fill"></i></span>
                                <div class="comment-files-list" style="display: none">
                                    <div style="display: flex;flex-wrap: wrap;">
                                        @foreach ($comment->medias as $media)
                                        <div class="card-file-info">
                                            <div class="image-file">
                                                <a download href="{{ asset($media->path) }}" target="_blank"><img style="width: 100%" src="{{ isset(FILE_TYPE_PATH[pathinfo($media->path, PATHINFO_EXTENSION)]) ? asset(FILE_TYPE_PATH[pathinfo($media->path, PATHINFO_EXTENSION)]) : $media->path }}" alt=""></a>
                                            </div>
                                            <div class="name-file">{{ $media->name }}</div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            @endif
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div class="action">
            <div>
                <span class="btn-action btn-like-action">
                    @if($comment->authUserReact)
                        <span class="icon-reaction text-react" data-comment="{{ $comment->id }}" data-text="{{ $iconReactComment[$comment->authUserReact->react_type]['text'] }}" data-react="{{ $comment->authUserReact->react_type }}">
                            {{ $iconReactComment[$comment->authUserReact->react_type]['text'] }}
                        </span>
                    @else
                        <span class="icon-reaction" data-comment="{{ $comment->id }}" data-text="Thích" data-react="{{ CM_REACT_LIKE }}" >Thích</span>
                    @endif
                </span>
                <div class="react-emoji-box">
                    <div class="list-react-emoji">
                        @foreach ($iconReactComment as $key => $value)
                            <img class="icon-reaction" data-comment="{{ $comment->id }}" data-react="{{ $key }}" data-text="{{ $value['text'] }}" src="{{ asset($value['url']) }}" alt="">
                        @endforeach
                    </div>
                </div>
            </div>
            @if ($comment->user_id != auth()->user()->id)
                <div>
                    <span class="btn-action user-reply" data-userid="{{ $comment->user->id }}" data-user="{{ $comment->user->name }}">Trả lời</span>
                </div>
            @endif
            @if($comment->user_id == auth()->user()->id)
                <div>
                    <span data-comment="{{ $comment->id }}" class="btn-action btn-edit-comment">Sửa</span>
                </div>
                <div>
                    <span data-route="{{ route('comments-del',['id' => $comment->id]) }}" class="btn-action btn-del-comment">Xóa</span>
                </div>
            @endif
        </div>

        <div class="edit-comment-box">

        </div>

    </div>

@endforeach
