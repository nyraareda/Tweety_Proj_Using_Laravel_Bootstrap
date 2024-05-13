<x-app>
    <div>
        @foreach($users as $user)
        <a href="{{$user->path()}}" class="flex items-csnter mb-5">
        <img class="mr-4" src="{{$user->avatar}}" alt="{{$user->username}}" width="60">
        <div style="display: flex; align-items: center;"> 
            <h4 class="name">
                {{'@' . $user->username}}
            </h4>
        </div>
    </a>
        @endforeach

        {{ $users->links() }}
    
    </div>
</x-app>