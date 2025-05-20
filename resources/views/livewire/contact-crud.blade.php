<div>
    @if (session()->has('message'))
        <div class="bg-green-100 text-green-700 p-2 mb-2">
            {{ session('message') }}
        </div>
    @endif
     <div class="bg-white shadow-sm rounded-md w-[700px] py-6 px-6">
    <form wire:submit.prevent="{{ $isEdit ? 'update' : 'store' }}" class="space-y-4 w-[600px]">
        <label class="text-[22px]">Create Contact</label>
        <input type="text" wire:model="name" placeholder="Name" class="border p-2 pl-4 w-full rounded-md">
        @error('name') <span class="text-red-500 text-sm">{{ $message }}*</span> @enderror

        <input type="email" wire:model="email" placeholder="Email" class="border p-2 pl-4 w-full rounded-md">
        @error('email') <span class="text-red-500 text-sm">{{ $message }}*</span> @enderror <br>

        <button type="submit" class="bg-blue-500 hover:bg-black text-white px-4 py-2 rounded-md">
            {{ $isEdit ? 'Update' : 'Add' }} Contact
        </button>
    </form>
</div>

<hr class="my-4">

<h2 class="text-[22px]  mb-2">All Contacts</h2>

<table class="w-[900px] border-collapse">
    <thead>
        <tr class="flex justify-between items-center border-b py-2">
            <th class="font-bold text-left w-1/3">Name</th>
            <th class="font-bold text-left w-1/3">Email</th>
            <th class="font-bold text-left w-1/3">Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($contacts as $contact)
            <tr class="flex justify-between items-center border-b py-2">
                <td class="w-1/3">{{ $contact->name }}</td>
                <td class="w-1/3">{{ $contact->email }}</td>
                <td class="w-1/3">
                    <button wire:click="delete({{ $contact->id }})" class="text-green-500 text-sm">View</button>
                    <button wire:click="edit({{ $contact->id }})" class="text-blue-500 text-sm mr-2">Edit</button>
                    <button wire:click="delete({{ $contact->id }})" class="text-red-500 text-sm">Delete</button>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

</div>
