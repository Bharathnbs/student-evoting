<div>

    @foreach($candidates as $candidate)
        <div style="margin-top:30px;">
            <div class="name" style="background-color:#F0E9D2; width:30%; height:100px; margin-left:15%; margin-top:5px;">
                <p style="margin-left:40%; padding-top:30px; font-size:30px;">{{ $candidate->name }}</p>
            </div>
            <div class="voting-count" style="background-color:#54436B;  width:30%; height:100px; margin-left:48%; margin-top:-100px; color:white;">
                <p style="margin-left:45%; padding-top:20px; font-size:40px;">{{ $candidate->voting_count }}</p>
            </div>
        </div>
    @endforeach

    <div style="width:500px; height:200px; background-color:#2C786C; margin-left:31%; margin-top:50px;">
        <p style="color:white; margin-left:20%; padding-top:30px; font-size:30px">Winner Of Candidate</p>
        <p style="margin-left:35%; color:white; font-size:30px; ">{{ $winner }}</p>
    </div>

</div>
