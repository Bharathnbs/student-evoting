<div>
    <div class="card" style="width:30%; padding-bottom:50px; margin-left:30%; margin-top:140px;"> 
        @if(session()->has('message'))
            <p>{{ session()->get('message') }}</p>
        @endif
        <div class="card-header" style="background-color:#F0E9D2">
            <label style="font-size:20px;">Roll_no :</label>
            <input type="text" wire:model="roll_no" class="form-control" style="width:80%">
            <button wire:click="updateName" class="btn btn-success" style="position:absolute; left:80%; top:37px;">search</button>
        </div>  
        <label style="font-size:20px; margin-left:20px; magin-top:10px;">Name</label><br>
        <input type="text" wire:model="name"  class="form-control" style="width:80%; margin-left:30px;"><br>
        <label style="font-size:20px;  margin-left:20px;">Dept</label><br>
        <input type="dept" wire:model="dept"  class="form-control" style="width:80%; margin-left:30px;" ><br>
        <button wire:click="apply" class="btn btn-primary" style="width:30%; position:absolute; top:85%; left:30%;">apply</button>
        </div>
    </div>
    