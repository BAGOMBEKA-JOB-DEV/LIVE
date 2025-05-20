<div>
    @if (session()->has('message'))
        <div class="bg-green-100 text-green-700 p-2 mb-2">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="{{ $isEdit ? 'update' : 'store' }}" class="space-y-4 w-[600px]">
        <input type="text" wire:model="name" placeholder="Name" class="border p-2 w-full rounded-md">
        @error('name') <span class="text-red-500">{{ $message }}</span> @enderror

        <input type="email" wire:model="email" placeholder="Email" class="border p-2 w-full rounded-md">
        @error('email') <span class="text-red-500">{{ $message }}</span> @enderror <br>

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">
            {{ $isEdit ? 'Update' : 'Add' }} Contact
        </button>
    </form>

    <hr class="my-4">

    <h2 class="text-xl font-bold mb-2">All Contacts</h2>
    <ul class="w-[900px]">
        @foreach ($contacts as $contact)
            <li class="flex justify-between items-center border-b py-2">
                <div>{{ $contact->name }} - {{ $contact->email }}</div>
                <div>
                    <button wire:click="edit({{ $contact->id }})" class="text-blue-500 mr-2">Edit</button>
                    <button wire:click="delete({{ $contact->id }})" class="text-red-500">Delete</button>
                </div>
            </li>
        @endforeach
    </ul>
</div>
