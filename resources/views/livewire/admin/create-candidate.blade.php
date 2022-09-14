<div>
    <div class="card" style="width:30%; margin-left:30%; margin-top:140px;"> 
        <div class="card-header" style="background-color:#F0E9D2">
            <label style="font-size:20px;">Roll_no :</label>
            <input type="text" wire:model="roll_no" class="form-control" style="width:80%">
            <button wire:click="updateName" class="btn btn-success" style="position:absolute; left:80%; top:37px;">search</button><br>
            @if(session()->has('message'))
                <p sytle="margin-left:20px;">{{ session()->get('message') }}</p>
            @endif
        </div> 
        <div class="card-body">
            <label style="font-size:20px; margin-left:20px; magin-top:10px;">Name</label><br>
            <input type="text" wire:model="name"  class="form-control" style="width:80%; margin-left:30px;"><br>
            <label style="font-size:20px;  margin-left:20px;">Dept</label><br>
            <input type="dept" wire:model="dept"  class="form-control" style="width:80%; margin-left:30px;" ><br>
            <button wire:click="apply" class="btn btn-primary" style="width:30%; margin-left:130px;">apply</button>
        </div> 
        <div class="card-footer">
            @if(session()->has('success'))
                <p>{{ session()->get('success') }}</p>
            @endif
        </div>
    </div>
    </div>
    