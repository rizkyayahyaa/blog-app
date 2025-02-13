<div class="chat-list">
    <a href="{{ route('customer.chatList') }}" class="btn btn-primary mb-3">
        <i class="feather-users"></i> Chat List
    </a>

    @if(isset($chatUsers) && $chatUsers->count() > 0)
        @foreach($chatUsers as $chatUser)
            <a href="{{ route('customer.chat', $chatUser->id) }}"
               class="chat-user-item d-flex align-items-center p-3 border-bottom">
                <div class="avatar mr-3">
                    <img src="{{ $chatUser->avatar ?? asset('assets/img/profiles/avatar-default.jpg') }}"
                         alt="{{ $chatUser->name }}"
                         class="rounded-circle"
                         width="40">
                </div>
                <div class="user-info">
                    <h6 class="mb-0">{{ $chatUser->name }}</h6>
                </div>
            </a>
        @endforeach
    @else
        <p class="text-muted">No users found</p>
    @endif
</div>
