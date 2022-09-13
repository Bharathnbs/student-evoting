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
    <label >name</label><br>
    <input type="text" wire:model="name" ><br>
    <label >email</label><br>
    <input type="email" wire:model="email" ><br>
    <label >roll_no</label><br>
    <input type="text" wire:model="roll_no" ><br>
    <label >password</label><br>
    <input type="password" wire:model="password" ><br>
    <button wire:click="submit">save</button>
</div>
