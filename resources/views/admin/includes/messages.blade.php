@if(session('success'))
    <ul class="list-group">
        <li class="list-group-item text-success">
            {{ session('success') }}
        </li>
    </ul>
@endif
@if(session('failed'))
    <ul class="list-group">
        <li class="list-group-item text-danger">
            {{ session('failed') }}
        </li>
    </ul>
@endif
@if(session('info'))
    <ul class="list-group">
        <li class="list-group-item text-info">
            {{ session('info') }}
        </li>
    </ul>
@endif