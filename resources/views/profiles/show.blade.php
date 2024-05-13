

<x-app>
<style>
    .nameProfile{
        font-size: 1.2rem;
        font-weight: bold;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        margin-top: 0.8rem;
    }
    .description{
        width: 41rem;
        text-align: center;
    }
    .buttons{
        display: flex;
        justify-content: space-evenly;
        align-items: baseline;
        flex-direction: row;
        flex-wrap: nowrap;
        padding: 0%;
        margin: -25%;
        width: 60%;
    }
    .header{
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 37rem;
        border-radius: 20px;
    }
    .imgUser {
        position: absolute;
        left: 47%;
        transform: translateX(-47%) translateY(-55%);
        border-radius: 100%;
    }
#edit{
    width: 9rem;
    height: 2.3rem;
    text-align: -webkit-center;
    margin-left: 12.5rem;
    font-size: 0.8rem;
    margin-bottom: 0.5rem;
    padding-top: 0.5rem;
}
</style>
    <div class="container">
    <div class="row">
    <div class="col">
        <header class="mb-2 imgprofile">
            <div class="relative">
            <img src="{{ asset('images/header.jpg') }}" style="top: 0;border-radius: 20px;width: 100%;"/>
            <img class="imgUser" src="{{$user->avatar }}" alt="" class="rounded-full mr-2 bottom-0" width="100">
        </div>
            <div class="flex justify-between text-2xl mb-3 header">
                <div style="max-width: 270px">
                    <h2 class="nameProfile">{{$user->name}}</h2>
                    <p class="paratweet" style="font-size: 0.8rem;padding-top: 0">Joined {{$user->created_at->diffForHumans()}}</p>
                </div>
                <div class="flex buttons">
                    @can('edit',$user)
                    <a href="{{ route('profiles.edit', $user->id) }}" class="rounded-full border border-gray-300 shadow text-black text-xs mr-2" id="edit">Edit Profile</a>
                @endcan
                    <x-follow-button :user="$user">

                    </x-follow-button>
                </div>

            </div>
            <div>
            <p class="text-sm description">Lorem ipsum, dolor sit amet consectetur adipisicing elit. 
                Velit autem 
                corporis ex nemo nostrum architecto, eum vero repudiandae? 
                Nisi consectetur sunt, officia odit animi perspiciatis 
                voluptatibus vero fugit non debitis.
            </p>
            </div>
        </header>
        <hr>
        @foreach($tweets as $tweet)
            <div class="maintimeline border rounded">
                @include('timeline-tweet', ['tweet' => $tweet])
            </div>
        @endforeach
    </div>
</div>

        <!-- Display user's profile information here -->
        {{-- @auth
        <div class="row">
            <div class="col-md-6">
                <h3>Following</h3>
                <ul>
                    @if($following)
                        @foreach($following as $followedUser)
                            <li>{{ $followedUser->name }}</li>
                        @endforeach
                    @else
                        <li>No following</li>
                    @endif
                </ul>
                <h3>Followers</h3>
                <ul>
                    @if($followedBy)
                        @foreach($followedBy as $follower)
                            <li>{{ $follower->name }}</li>
                        @endforeach
                    @else
                        <li>No followers</li>
                    @endif
                </ul>
            </div>
        </div>
        @endauth --}}
    </div>
    </x-app>
