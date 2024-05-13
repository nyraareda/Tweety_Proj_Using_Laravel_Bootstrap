@auth
    <div class="create flex p-4 border-b border-b-gray-400 border rounded">
        <div class="mr-2 flex-shrink-0">
            <a href="{{$tweet->user->path()}}">
                <img src="{{ $tweet->user->avatar }}" alt="" class="rounded-full mr-2" width="50" height="50">
            </a>
        </div>
        <div>
            <h5 class="headerTweet text-sm font-bold mx-2 my-1">
                <a href="{{$tweet->user->path()}}">
                    {{$tweet->user->name}}
                </a>
            </h5>
            <p class="paratweet border-b border-gray-300">
                {{$tweet->body}}
            </p>
        </div>
    </div>
@endauth
