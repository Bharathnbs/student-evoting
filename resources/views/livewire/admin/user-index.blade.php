<div>
    <table class="table table-dark table-striped table-bordered">
        <thead class="table-header table-light">
            <tr>
                <th>id</th>
                <th>name</th>
                <th>roll_no</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td># {{ $user->id}}</td>
                <td>{{ $user->name}}</td>
                <td>{{ $user->roll_no}}</td>
                <td>{{ $user->email}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
