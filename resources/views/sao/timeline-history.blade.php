<section>
    <style>
        .timeline-with-icons {
            border-left: 1px solid hsl(0, 0%, 90%);
            position: relative;
            list-style: none;

            .timeline-item {
                position: relative;
                padding: 5px 20px;
                background: #f2f1f1;
                border-radius: 10px;
                margin-bottom: 5px;

                &::after {
                    position: absolute;
                    display: block;
                    top: 0;
                }
            }

            .timeline-icon {
                top: 0;
                position: absolute;
                left: -48px;
                background-color: hsl(217, 88.2%, 90%);
                color: hsl(217, 88.8%, 35.1%);
                border-radius: 50%;
                height: 31px;
                width: 31px;
                display: flex;
                align-items: center;
                justify-content: center;
            }
        }
    </style>
    <ul class="timeline-with-icons">
        @foreach ($list_history as $history)
            <li class="timeline-item">
                <span class="timeline-icon">
                    <i class="bi bi-star"></i>
                </span>
                <div class="mb-2">
                    <label class="text-muted mb-2 fw-bold">
                        {{ date('d/m/Y H:i', strtotime($history->time_change)) }}
                    </label>
                </div>
                <a href="javascript:void(0)" class="open-detail-user" user_id="{{ $history->user_change }}">
                    <span class="text-muted text-primary">
                        {{ $history->user_name ?? '' }}
                    </span>
                </a>
                <span>{{ $history->content_change }}</span>
            </li>
        @endforeach
    </ul>
</section>
