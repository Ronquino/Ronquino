<li class="nav-item">
    <a href="{{ route('students.index') }}"
       class="nav-link {{ Request::is('students*') ? 'active' : '' }}">
        <p>Students</p>
    </a>
</li>


<li class="nav-item">
    <a href="{{ route('rooms.index') }}"
       class="nav-link {{ Request::is('rooms*') ? 'active' : '' }}">
        <p>Rooms</p>
    </a>
</li>


