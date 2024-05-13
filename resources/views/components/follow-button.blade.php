@unless (current_user()->is($user))
    

<form method="POST" action="{{ route('profiles.follow', $user->id) }}">
    @csrf
    <button type="submit" class="rounded-full bg-blue-500 text-white shadow py-2 px-4 text-xs mr-2" style="background-color: #0d6efd;width: 9rem;height: 2.3rem;text-align: -webkit-center;margin-left: 12.5rem;font-size: 0.8rem;">
        @if(current_user()->isFollow($user))
            Unfollow
        @else
            Follow Me
        @endif
    </button>
</form>
@endunless