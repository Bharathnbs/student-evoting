<div>
    Admin Login
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <label >email</label><br>
    <input type="email" wire:model.defer="email" ><br>
    <label >password</label><br>
    <input type="password" wire:model.defer="password" ><br>
    <button wire:click="authenticate">login</button>
</div>
