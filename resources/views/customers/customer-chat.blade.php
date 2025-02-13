@extends('layout.mainlayout')

@section('content')
<div class="content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-10">
                <div class="card shadow-sm">
                    <div class="card-header bg-white border-bottom py-3">
                        <div class="d-flex align-items-center">
                            <a href="{{ route('customer.chatList') }}" class="btn btn-light rounded-circle me-3">
                                <i class="feather-arrow-left"></i>
                            </a>
                            <div class="d-flex align-items-center">
                                @if($receiver->image)
                                    <img src="{{ asset('storage/'.$receiver->image) }}"
                                         class="rounded-circle me-2"
                                         alt="{{ $receiver->name }}'s Avatar"
                                         width="40"
                                         height="40"
                                         style="object-fit: cover;">
                                @else
                                    <img src="{{ asset('assets/img/profiles/avatar-02.jpg') }}"
                                         class="rounded-circle me-2"
                                         alt="Default Avatar"
                                         width="40"
                                         height="40">
                                @endif
                                <div>
                                    <h5 class="mb-0">{{ $receiver->name }}</h5>
                                    <small class="text-muted">Online</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body bg-light">
                        <div class="chat-messages p-4">
                            @forelse($messages as $message)
                                <div class="message {{ $message->sender_id == auth()->id() ? 'sent' : 'received' }} mb-3">
                                    <div class="message-bubble">
                                        <div class="message-text">
                                            {{ $message->message }}
                                        </div>
                                        <div class="message-time small">
                                            {{ $message->created_at->format('h:i A') }}
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="text-center p-5">
                                    <div class="mb-3">
                                        <i class="feather-message-circle" style="font-size: 48px; color: #ccc;"></i>
                                    </div>
                                    <h6 class="text-muted">No messages yet</h6>
                                    <p class="small text-muted">Start the conversation with {{ $receiver->name }}!</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                    <div class="card-footer bg-white py-3">
                        <form action="{{ route('customer.sendMessage', ['receiverId' => $receiverId]) }}" method="POST">
                            @csrf
                            <div class="input-group">
                                <input type="text"
                                       name="message"
                                       class="form-control border-0 bg-light"
                                       placeholder="Type your message here..."
                                       required>
                                <button type="submit" class="btn btn-primary px-4">
                                    <i class="feather-send"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .chat-messages {
        height: calc(100vh - 300px);
        min-height: 400px;
        overflow-y: auto;
        scrollbar-width: thin;
        scrollbar-color: rgba(0,0,0,.2) transparent;
    }

    .chat-messages::-webkit-scrollbar {
        width: 6px;
    }

    .chat-messages::-webkit-scrollbar-track {
        background: transparent;
    }

    .chat-messages::-webkit-scrollbar-thumb {
        background-color: rgba(0,0,0,.2);
        border-radius: 3px;
    }

    .message {
        margin-bottom: 1rem;
        display: flex;
        flex-direction: column;
    }

    .message.sent {
        align-items: flex-end;
    }

    .message.received {
        align-items: flex-start;
    }

    .message-bubble {
        max-width: 70%;
        padding: 12px 16px;
        border-radius: 18px;
        position: relative;
        box-shadow: 0 1px 2px rgba(0,0,0,.1);
    }

    .sent .message-bubble {
        background-color: #007bff;
        color: white;
        border-bottom-right-radius: 4px;
    }

    .received .message-bubble {
        background-color: white;
        border-bottom-left-radius: 4px;
    }

    .message-text {
        margin-bottom: 4px;
        line-height: 1.4;
    }

    .sent .message-time {
        color: rgba(255,255,255,.8);
        font-size: 0.7rem;
    }

    .received .message-time {
        color: #999;
        font-size: 0.7rem;
    }

    .input-group {
        background: #f8f9fa;
        padding: 8px;
        border-radius: 25px;
    }

    .form-control {
        border-radius: 20px !important;
        padding-left: 20px;
    }

    .form-control:focus {
        box-shadow: none;
    }

    .btn-primary {
        border-radius: 50% !important;
        width: 42px;
        height: 42px;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .btn-light {
        background: #f8f9fa;
        border: none;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .btn-light:hover {
        background: #e9ecef;
    }

    .card {
        border-radius: 15px;
        border: none;
    }

    .card-header {
        border-top-left-radius: 15px !important;
        border-top-right-radius: 15px !important;
    }
</style>

<script>
// Auto scroll to bottom on page load
document.addEventListener('DOMContentLoaded', function() {
    const chatMessages = document.querySelector('.chat-messages');
    chatMessages.scrollTop = chatMessages.scrollHeight;
});
</script>
@endsection
