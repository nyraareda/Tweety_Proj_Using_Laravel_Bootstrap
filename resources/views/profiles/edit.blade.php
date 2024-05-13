<x-app>
        <h1>Edit your profile</h1>
        <form action="{{$user->path()}}" method="POST" enctype="multipart/form-data">
        @csrf
                @method('PATCH')

                <div class="mb-3 border border-gray-400 p-2 w-full">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name', $user->name) }}">
                        @error('name')
                                <p class="error-message">{{ $message }}</p>
                        @enderror
                      </div>
                      <div class="mb-3 border border-gray-400 p-2 w-full">
                        <label for="username" class="form-label">UserName</label>
                        <input type="text" class="form-control" id="username" name="username" value="{{ old('username', $user->username) }}">
                        @error('username')
                        <p class="error-message text-red-500 text-xs">
                                {{$message}}
                        </p>
                        @enderror
                      </div>

                      <div class="mb-3">

                        <label for="avatar" class="form-label">Avatar</label>

                        <div class="flex">
                        <input type="file" class="form-control" id="avatar" name="avatar" value="{{ old('avatar', $user->avatar) }}">
                       

                        <img src="{{$user->avatar}}" alt="your avatar" width="40">
                      </div>
                      @error('avatar')
                      <p class="error-message text-red-500 text-xs">
                              {{$message}}
                      </p>
                      @enderror
                      </div>

                      <div class="mb-3 border border-gray-400 p-2 w-full">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" aria-describedby="nameHelp"  name="email" value="{{$user->email}}">
                        <div id="nameHelp" class="form-text">We'll never share your email with anyone else.</div>

                        @error('email')
                        <p class="error-message text-red-500 text-xs mt-2">
                                {{$message}}
                        </p>
                        @enderror
                      </div>

                      <div class="mb-3 border border-gray-400 p-2 w-full">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                        @error('password')
                        <p class="error-message text-red-500 text-xs mt-2">
                                {{$message}}
                        </p>
                        @enderror
                      </div>

                      <div class="mb-3 border border-gray-400 p-2 w-full">
                        <label for="passwordConfirm" class="form-label">Confirm Password</label>
                        <input type="password" class="form-control" id="passwordConfirm" name="password_confirmation">
                        @error('password_confirmation')
                        <p class="error-message text-red-500 text-xs mt-2">
                                {{$message}}
                        </p>
                        @enderror
                      </div>
                      <div style="display: flex;
                      flex-wrap: nowrap;
                      align-items: baseline;">
                      <button type="submit" class="btn btn-primary" style="font-weight: bold">Submit</button>

                      <a class="btn btn-secondary" href="{{$user->path()}}" id="btnecancel">Cancel</a>
                </div>
        </form>
</x-app>
