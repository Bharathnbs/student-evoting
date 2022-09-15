<div>
    <div class="card" style="width:30%; border:none; background-color:#54436B; margin-left:33%; margin-top:15%;">
        <div class="card-header" style="background-color:#F0E9D2;">
            <h2 style="margin-left:25%;">Admin Login</h2>
        </div>  
        <div class="card-body">
            @if ($errors->any())
                <div>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <label style="color:white;">email</label><br>
            <input type="email" wire:model.defer="email" class="form-control"><br>
            <label style="color:white;">password</label><br>
            <input type="password" wire:model.defer="password" class="form-control"><br>
            <button wire:click="authenticate" class="btn btn-primary" style="margin-left:40%;">login</button>
        </div>      
    </div>
</div>
