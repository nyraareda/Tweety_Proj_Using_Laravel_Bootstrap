@auth
        <!-- Welcome message -->
        <p>Welcome, {{ auth()->user()->name }}</p>

        <!-- Following list -->
        <h3 class="mb-4 hfriend">Following</h3>
        <ul class="sectionfriend friend-list">
            @forelse(current_user()->following as $user)
                <li class="{{ $loop->last ? '' : 'mb-4' }}friend-item">
                    <div>
                            <a href="{{route('profile',$user)}}" class="flex items-center text-sm">
                                <img class="rounded-full" src="{{ $user->avatar }}" alt="{{ $user->name }}" width="40" height="40">
                                <span class="name">{{ $user->name }}</span>
                            </a>
                    </div>
                </li>
                @empty
                <li>No Friends list.</li>
            @endforelse
        </ul>

        <!-- Followers list -->
        <h3 class="mb-4 hfriend">Followers</h3>
        <ul class="sectionfriend friend-list">
            @foreach(current_user()->followedBy as $user)
                <li class="friend-item mb-4">
                    <div class="flex items-center">
                        @if($user->avatar && $user->name)
                        <a href="{{route('profile',$user)}}" class="flex items-center text-sm">
                            <img class="rounded-full" src="{{ $user->avatar }}" alt="{{ $user->name }}" width="50" height="50">
                            <span class="name">{{ $user->name }}</span>
                        </a>
                        @else
                            <p>User's avatar or name is missing.</p>
                        @endif
                    </div>
                </li>
            @endforeach
        </ul>
@endauth


