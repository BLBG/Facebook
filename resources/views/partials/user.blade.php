<div class="card border-0 bg-light shadow-sm">
    <img src="{{ $user->avatar }}" alt="{{ $user->name }}" class="card-img-top">
    <form action="{{ route('users.updateAvatar', $user) }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="form-group custom-file mb-3">
            <label  class="custom-file-label" for="avatar">Cambiar imagen</label>
            <input class="custom-file-input form-control" type="file" name="avatar" accept="image/*" id="avatar">
        </div>
        @error('avatar')
            <small class="text-danger">{{ $message }}</small>
        @enderror
        <div class="text-right">
            <button class="btn btn-primary btn-sm"> Guardar</button>
        </div>
    </form>
    <div class="card-body">
        @if(auth()->id() === $user->id)
            <h5 class="card-title"><a href="{{ route('users.show', $user) }}">{{ $user->name }}</a><small class="text-secondary ml-2">Eres tú</small></h5>
        @else
            <h5 class="card-title"><a href="{{ route('users.show', $user) }}">{{ $user->name }}</a></h5>
            <friendship-btn
                dusk="request-friendship"
                class="btn btn-primary btn-block"
                :recipient="{{ $user }}"
            ></friendship-btn>
        @endif
    </div>
</div>
