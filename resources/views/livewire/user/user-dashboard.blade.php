<div>
    <div style="background-color:#F0E9D2; height:100px;">
        <h2 style="margin-left:39%; margin-bottom:20px; position:absolute; margin-top:30px;">Candidate List</h2>
    </div>
    @if(session()->has('message'))
        <p style="font-size:30px; margin-left:150px;">{{ session()->get('message') }}</p>
    @endif
    <div style="margin-top:50px;">
        @foreach($candidates as $candidate)
            <button wire:click="store({{ $candidate->id }})" class="list-group-item" style="width:300px; padding:20px; margin-left:37%; background-color:#54436B; color:white;">{{$candidate->name}}</button>
        @endforeach
    </div>
    <button wire:click="logout" class="btn btn-outline-primary" style="position:absolute; top:30px; left:90%;">logout</button>
</div>
