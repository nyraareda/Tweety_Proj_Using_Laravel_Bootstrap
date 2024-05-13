<style>
    .logout-btn {
        border: none;
        cursor: pointer;
        font-size: 1.125rem; /* Adjust font size as needed */
        color: #333; /* Text color */
        text-decoration: none;
        font-weight: bold;
        display: flex;
        font-family: system-ui;
    }

    .logout-btn:hover {
        color: #555; /* Text color on hover */
    }
</style>

<ul class="sidebarul">
    
        <li class="sidebarli">
            <a href="{{route('home')}}" class="font-bold text-lg block">
                Home
            </a>
        </li>
        <li class="sidebarli">
            <a href="/explore" class="font-bold text-lg block">
                Explore
            </a>
        </li>
        <li class="sidebarli">
            <a href="#" class="font-bold text-lg block">
                Notifications
            </a>
        </li>
        <li class="sidebarli">
            <a href="#" class="font-bold text-lg block">
                Messages
            </a>
        </li>
        <li class="sidebarli">
            <a href="{{ auth()->check() ? route('profile', ['user' =>current_user()]) : route('login') }}" class="font-bold text-lg block">
        Profile
    </a>
        </li>
        <li class="sidebarli">

    <a href="#" class="font-bold text-lg block">
                Notifications
            </a>
        </li>
        <li class="sidebarli">
            <a href="#" class="font-bold text-lg block">
                Bookmark
            </a>
        </li>
        <li class="sidebarli">
            <form action="/logout" method="POST">
                @csrf
                <button type="submit" class="logout-btn">Logout</button>           
            </form>
        </li>
    </ul>
