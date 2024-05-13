<div class="border border-400 rounded-lg px-4 py-3 mb-4" id="divarea">
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                    <form action="/tweets" class="pb-6" method="post">
                    @csrf
                        <textarea name="body" class="w-full" placeholder="What's up doc?"></textarea>
                        <hr class="my-4">
                        <footer style="display: flex;
                        justify-content: space-between;
                        align-items: center;">
                            <img class="rounded-full justify-between mr-2" src="{{ auth()->user()->avatar }}" alt="" width="50" height="50">
                            <button type="submit" class="rounded-lg bg-blue-500 shadow py-2 px-10 text-white" id="btnpublish">Share Tweet!</button>
                        </footer>
                    </form>
                </div>