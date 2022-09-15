<div>
    @foreach($candidates as $candidate)
       <p style="margin-left:30%;" >{{ $candidate->name}} | {{ $candidate->voting_count}} </p>   
    @endforeach
</div>
