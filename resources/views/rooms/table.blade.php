<div class="table-responsive">
    <table class="table" id="rooms-table">
        <thead>
            <tr>
                <th>Roomnumber</th>
        <th>Roomname</th>
        <th>Yourname</th>
        <th>Youraddress</th>
        <th>Date</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($rooms as $room)
            <tr>
                <td>{{ $room->roomNumber }}</td>
            <td>{{ $room->roomName }}</td>
            <td>{{ $room->yourName }}</td>
            <td>{{ $room->yourAddress }}</td>
            <td>{{ $room->Date }}</td>
                <td width="120">
                    {!! Form::open(['route' => ['rooms.destroy', $room->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('rooms.show', [$room->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-eye"></i>
                        </a>
                        <a href="{{ route('rooms.edit', [$room->id]) }}" class='btn btn-default btn-xs'>
                            <i class="far fa-edit"></i>
                        </a>
                        {!! Form::button('<i class="far fa-trash-alt"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
