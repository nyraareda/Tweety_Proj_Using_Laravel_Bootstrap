<x-master>
<section class="px-8">
        <main class="container mx-auto">
            <div class="sm:flex lg:flex-wrap sm:flex-nowrap lg:justify-evenly">
                @auth
                <div class="lg:w-32" style="width: 14%;">
                    @include('sidebar-links')
                </div>
                @endauth
                <div class="timeline lg:flex-1 lg:mx-10 lg:w-2/3">
                    {{$slot}}
                </div>
                @auth
                <div class="divFriend lg:w-1/6 rounded-lg p-4">
                    @include('friend-list')
                </div>
                @endauth
            </div>
        </main>
    </section>
</x-master>