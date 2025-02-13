@extends('layout.mainlayout')

@section('content')
<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <a href="{{ route('customer.chatList') }}" class="btn btn-secondary me-3">
                                <i class="feather-arrow-left"></i> Back
                            </a>
                            <div>
                                <h5 class="mb-0">Chat with {{ $receiver->name }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chat-messages p-4">
                            @forelse($messages as $message)
                                <div class="message {{ $message->sender_id == auth()->id() ? 'sent' : 'received' }} mb-3">
                                    <div class="message-bubble">
                                        <div class="message-text">
                                            {{ $message->message }}
                                        </div>
                                        <div class="message-time small text-muted">
                                            {{ $message->created_at->format('h:i A') }}
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="text-center text-muted">
                                    No messages yet. Start the conversation!
                                </div>
                            @endforelse
                        </div>
                    </div>
                    <div class="card-footer">
                        <form action="{{ route('customer.sendMessage', ['receiverId' => $receiverId]) }}" method="POST">
                            @csrf
                            <div class="input-group">
                                <input type="text"
                                       name="message"
                                       class="form-control"
                                       placeholder="Type your message here..."
                                       required>
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-paper-plane"></i> Send
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
        max-height: 400px;
        overflow-y: auto;
    }

    .message {
        margin-bottom: 1rem;
    }

    .message.sent {
        text-align: right;
    }

    .message.received {
        text-align: left;
    }

    .message-bubble {
        display: inline-block;
        max-width: 70%;
        padding: 10px 15px;
        border-radius: 15px;
    }

    .sent .message-bubble {
        background-color: #007bff;
        color: white;
    }

    .received .message-bubble {
        background-color: #e9ecef;
    }

    .message-time {
        font-size: 0.75rem;
        margin-top: 5px;
    }
</style>
@endsection
