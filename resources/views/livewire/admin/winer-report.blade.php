<div>

    @foreach($candidates as $candidate)
        <div style="background-color:black;">
            <div class="name" style="background-color:red; width:30%; height:100px; margin-left:15%;">
                {{ $candidate->name }}
            </div>
            <div class="voting-count" style="background-color:blue;  width:30%; height:100px; margin-left:50%;">
                {{ $candidate->voting_count }}
            </div>
        </div>
    @endforeach


</div>
