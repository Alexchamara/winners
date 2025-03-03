@if($errors->any())
    <div class="alert alert-danger alert-dismissible fade show  font-12">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        <p class="font-12"><strong>Something went wrong</strong></p>
        <ul class="font-12">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if(session('success'))
    <div class="alert alert-success alert-dismissible fade show  font-12">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>

        <span class="font-12">{{ session('success') }}</span>
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger alert-dismissible fade show  font-12">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>

        <span class="font-12">{{ session('error') }}</span>
    </div>
@endif

@if(session('warning'))
    <div class="alert alert-warning alert-dismissible fade show  font-12">
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>

        <span class="font-12">{{ session('warning') }}</span>
    </div>
@endif

