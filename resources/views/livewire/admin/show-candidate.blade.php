<div>
    <p style="font-size:20px; margin-left:20px; margin-top:10px;">number of candidate : {{ $count }}</p>
    <table class="table table-bordered table-dark table-striped">
        <thead class="table-light">
            <tr>
                <th>id</th>
                <th>Candidate Name</th>
                <th>department</th>
                <th>opration</th>
            </tr>
        </thead>
        <tbody>
            @foreach($candidates as $candidate)
            <tr>
                <td>#{{ $candidate->id }}</td>
                <td>{{ $candidate->name }}</td>
                <td>{{ $candidate->dept }}</td>
                <td><button wire:click="deletecandidate({{ $candidate->id }})" class="btn btn-outline-primary"> delete</button></td>

            </tr>
            @endforeach
        </tbody>
    </table>
    
</div>
