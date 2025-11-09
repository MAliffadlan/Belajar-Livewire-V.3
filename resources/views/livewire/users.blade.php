<div class="w-1/2 m-auto my-10" >
    
<div class="py-2">
  <div class="mx-auto">
    <h2 class="mt-10 text-center text-2xl/9 font-bold tracking-tight text-gray-900">Create New User</h2>
  </div>

  <div class="mt-10">
    <form wire:submit="createNewUser" action="#" method="POST" class="space-y-6">
      <div>
        <label for="name" class="block text-sm/6 font-medium text-gray-900">Name</label>
        <div class="mt-2">
          <input wire:model="name" type="text" type="name" id="name" autocomplete="name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
        </div>
      </div>

      <div>
        <label for="email" class="block text-sm/6 font-medium text-gray-900">Email address</label>
        <div class="mt-2">
          <input wire:model="email" id="email" type="email" name="email" autocomplete="email" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
        </div>
      </div>

      <div>
        <div class="flex items-center justify-between">
          <label for="password" class="block text-sm/6 font-medium text-gray-900">Password</label>
        </div>
        <div class="mt-2">
          <input wire:model="password" id="password" type="password" name="password" required autocomplete="current-password" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6" />
        </div>
      </div>

      <div>
        <button wire:click.prevent="createNewUser" class="flex w-full justify-center rounded-md bg-indigo-600 px-3 py-1.5 text-sm/6 font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Sign in</button>
      </div>
    </form>
  </div>
</div>


    <hr class="border-1 my-5">
    <h2 class="text-2xl font-semibold mb-2">User List</h2>
    <ul class="list-disc" >
        @foreach($users as $user)
        <li>{{ $user->name }}</li>
        @endforeach
    </ul>
</div>
 