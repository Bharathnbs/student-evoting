<div>
    <div style="background-color:#F0E9D2; height:100px;">
        <h2 style="margin-left:39%; margin-bottom:20px; position:absolute; margin-top:30px;">Candidate List</h2>
    </div>
    <div style="margin-top:30px;">
        @foreach($candidates as $candidate)
            <button wire:click="store({{ $candidate->id }})" class="list-group-item" style="width:300px; padding:20px; margin-left:37%;">{{$candidate->name}}</button>
        @endforeach
    </div>
 
</div>
