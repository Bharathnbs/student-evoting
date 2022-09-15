<div>
    <div class="card" style="width:30%; margin-left:35%; margin-top:10%; background-color:#54436B; border:none;">
        <div class="card-header" style="background-color:#F0E9D2;">
            <h2 style="margin-left:90px;">Student Login</h2>
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
            <input type="email" wire:model="email" class="form-control"><br>
            <label  style="color:white;">password</label><br>
            <input type="password" wire:model="password" class="form-control"><br>
            <button wire:click="authenticate" class="btn btn-primary" style="margin-left:40%">login</button>
        </div>
    </div>
</div>
