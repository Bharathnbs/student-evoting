<div>
<div>
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
    <input type="email" wire:model="email" ><br>
    <label >password</label><br>
    <input type="password" wire:model="password" ><br>
    <button wire:click="authenticate">login</button>
</div>
</div>
