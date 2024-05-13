<x-app>
@include('publish-tweet-panel')
            <div class="border border-gray-300 rounded-lg lg:mx-10 lg:mb-0 mb-4" class="maintimeline" style="max-width: 900px;margin-right: 0.5rem;">
            @forelse($tweets as $t)
            @include('timeline-tweet', ['tweet' => $t])
            @empty
                <p class="p-4">No Tweets Yet.</p>
            @endforelse  
            </div>
</x-app>
