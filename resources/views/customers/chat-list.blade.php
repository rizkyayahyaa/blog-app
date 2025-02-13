@extends('layout.mainlayout')

@section('content')
<div class="content">
    <div class="container">
        <div class="card shadow-sm">
            <div class="card-header bg-white border-bottom py-3">
                <div class="d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">
                        <i class="feather-users me-2"></i>Available Users
                    </h4>
                    <a href="{{ route('dashboard') }}" class="btn btn-primary btn-sm rounded-pill ms-3 hover-scale">
                        <i class="feather-arrow-left me-1"></i>Back to Dashboard
                    </a>
                    <div class="input-group" style="width: 300px;">
                        <input type="text" class="form-control" placeholder="Search users..." id="searchUser">
                        <span class="input-group-text bg-primary text-white">
                            <i class="feather-search"></i>
                        </span>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row g-3">
                    @foreach($users as $user)
                        <div class="col-md-4 user-card">
                            <div class="card h-100 border-0 shadow-sm hover-shadow transition-all">
                                <div class="card-body">
                                    <div class="d-flex flex-column align-items-center">
                                        <div class="position-relative mb-3">
                                            @if($user->image)
                                                <img src="{{ asset('storage/'.$user->image) }}"
                                                     class="rounded-circle border border-3 border-primary p-1"
                                                     alt="{{ $user->name }}'s Avatar"
                                                     width="80"
                                                     height="80"
                                                     style="object-fit: cover;">
                                            @else
                                                <img src="{{ asset('assets/img/profiles/avatar-02.jpg') }}"
                                                     class="rounded-circle border border-3 border-primary p-1"
                                                     alt="Default Avatar"
                                                     width="80"
                                                     height="80">
                                            @endif
                                            <span class="position-absolute bottom-0 end-0 bg-success rounded-circle p-1"
                                                  style="width:12px;height:12px;"></span>
                                        </div>
                                        <h5 class="mb-2">{{ $user->name }}</h5>
                                        <small class="text-muted mb-3">
                                            <i class="feather-mail me-1"></i>{{ $user->email }}
                                        </small>
                                        <a href="{{ route('customer.chat', ['receiverId' => $user->id]) }}"
                                           class="btn btn-primary btn-sm rounded-pill px-4 hover-scale">
                                            <i class="feather-message-circle me-1"></i>Start Chat
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.hover-shadow:hover {
    transform: translateY(-3px);
    box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
}

.transition-all {
    transition: all 0.3s ease;
}

.hover-scale:hover {
    transform: scale(1.05);
}

.card {
    border-radius: 15px;
}

.card-header {
    border-top-left-radius: 15px;
    border-top-right-radius: 15px;
}

.form-control {
    border-radius: 20px;
}

.input-group-text {
    border-radius: 0 20px 20px 0;
}

.btn-primary {
    transition: all 0.3s ease;
}

.btn-primary:hover {
    background-color: #0056b3;
    transform: translateY(-2px);
}
</style>

<script>
document.getElementById('searchUser').addEventListener('input', function(e) {
    const searchTerm = e.target.value.toLowerCase();
    const userCards = document.querySelectorAll('.user-card');

    userCards.forEach(card => {
        const userName = card.querySelector('h5').textContent.toLowerCase();
        const userEmail = card.querySelector('small').textContent.toLowerCase();

        if (userName.includes(searchTerm) || userEmail.includes(searchTerm)) {
            card.style.display = '';
        } else {
            card.style.display = 'none';
        }
    });
});
</script>
@endsection
