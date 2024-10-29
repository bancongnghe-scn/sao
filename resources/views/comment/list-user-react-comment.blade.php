<span class="d-inline-block tab-container-react-list" >
    <ul id="ul-tab" class="nav nav-tabs nav-list-emoji" style="background-color: #ffffff; border: 0; white-space: nowrap; flex-flow: nowrap;border-bottom:1px solid #e9ecef" role="tablist">
        @if (count($reacts) > 1)
            <li class="nav-item" role="presentation">
                <a href="#emoji-all" class="tab-show" data-bs-toggle="tab" aria-selected="false" role="tab">
                   Tất cả ({{ $totalReact }})
                </a>
            </li>
        @endif
        @foreach ($reacts as $key => $value)
            <li class="nav-item" role="presentation">
                <a href="#emoji-{{ $value['react_type'] }}" class="tab-show {{ $key == 0 ? 'active' : '' }}" data-bs-toggle="tab" aria-selected="{{ $key == 0 ? 'true' : 'false' }}" role="tab">
                    <img src=" {{ asset($iconReactComment[ $value['react_type']]['url']) }} " alt=""> {{ $value['total_react'] }}
                </a>
            </li>
        @endforeach
    </ul>
</span>
<div class="tab-content"  style="padding: 5px;max-height: 190px;overflow: scroll; overflow-x: hidden;">
    @if (count($reacts) > 1)
        <div class="tab-pane fade " id="emoji-all" role="tabpanel">
            @foreach ($reacts as $key => $value)
                @foreach ($value['user'] as $key => $user)
                    <div class="popup-user" userid="{{ $user['id'] }}" style="margin-bottom: 10px">
                        <div class="user-tag-info" style="display: flex; align-items: center;">
                            <div class="propose__box-avatar rounded-circle" style="width: 30px !important;height: 30px !important;margin-right: 10px;">
                                <img onerror="this.src='{{ asset('images/avatar-default.png') }}'" class="w-100 h-100 rounded-circle object-fit" src="{{ asset($user['avatar']) }}" alt="">
                            </div>
                            <div class="user-tag-name">
                                <div> {{ $user['code'] .' - '. $user['name'] }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    @endif

    @foreach ($reacts as $key => $value)
        <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}" id="emoji-{{ $value['react_type'] }}" role="tabpanel">
            @foreach ($value['user'] as $key => $user)
                <div class="popup-user" userid="{{ $user['id'] }}" style="margin-bottom: 10px">
                    <div class="user-tag-info" style="display: flex; align-items: center;">
                        <div class="propose__box-avatar rounded-circle" style="width: 30px !important;height: 30px !important;margin-right: 10px;">
                            <img onerror="this.src='{{ asset('images/avatar-default.png') }}'" class="w-100 h-100 rounded-circle object-fit" src="{{ asset($user['avatar']) }}" alt="">
                        </div>
                        <div class="user-tag-name">
                            <div> {{ $user['code'] .' - '. $user['name'] }}</div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
</div>