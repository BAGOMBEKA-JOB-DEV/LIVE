<div>
    @if (session()->has('message'))
        <div class="bg-green-100 text-green-700 p-2 mb-2">
            {{ session('message') }}
        </div>
    @endif

    <div class="bg-white shadow-sm rounded-md w-[900px] py-6 px-6">
    <form wire:submit.prevent="{{ 'store' }}" class="space-y-4   mx-auto bg-white p-6 rounded-lg ">
    <label class="text-[22px] font-semibold block mb-4">Create Contact</label>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <input type="text" wire:model="name" placeholder="Name" class="border focus:outline-blue-300 p-2 pl-4 w-full rounded-md">
            @error('name') <span class="text-red-500 text-sm">{{ $message }}*</span> @enderror
        </div>

        <div>
            <input type="email" wire:model="email" placeholder="Email" class="border focus:outline-blue-300 p-2 pl-4 w-full rounded-md">
            @error('email') <span class="text-red-500 text-sm">{{ $message }}*</span> @enderror
        </div>

        <div>
            <input type="text" wire:model="phone_number" placeholder="Phone Number" class="border focus:outline-blue-300 p-2 pl-4 w-full rounded-md">
            @error('phone_number') <span class="text-red-500 text-sm">{{ $message }}*</span> @enderror
        </div>

        <div>
            <input type="text" wire:model="address" placeholder="Address" class="border focus:outline-blue-300 p-2 pl-4 w-full rounded-md">
            @error('address') <span class="text-red-500 text-sm">{{ $message }}*</span> @enderror
        </div>

        <div>
            <input type="text" wire:model="country" placeholder="Country" class="border focus:outline-blue-300 p-2 pl-4 w-full rounded-md">
            @error('country') <span class="text-red-500 text-sm">{{ $message }}*</span> @enderror
        </div>

        <div>
            <input type="text" wire:model="occupation" placeholder="Occupation" class="border focus:outline-blue-300 p-2 pl-4 w-full rounded-md">
            @error('occupation') <span class="text-red-500 text-sm">{{ $message }}*</span> @enderror
        </div>

        <div>
            <input type="number" wire:model="age" placeholder="Age" class="border focus:outline-blue-300 p-2 pl-4 w-full rounded-md">
            @error('age') <span class="text-red-500 text-sm">{{ $message }}*</span> @enderror
        </div>

        <div>
            <select wire:model="gender" class="border focus:outline-blue-300 p-2 pl-4 w-full rounded-md">
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            @error('gender') <span class="text-red-500 text-sm">{{ $message }}*</span> @enderror
        </div>
    </div>

    <div class="pt-4">
        <button type="submit" class="bg-blue-500 hover:bg-black text-white px-6 py-2 rounded-md">
            Add Contact
        </button>
    </div>
</form>

</div>

<hr class="my-4">

    <!-- /Edit Modal -->
    @if ($showModal)
        <div class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50">
            <div class="bg-white rounded-lg shadow-lg w-[800px] p-6 relative">
            <button 
                wire:click="$set('showModal', false)" 
                class="absolute top-2 right-2 w-5 h-5 flex items-center justify-center rounded-full
                 border border-green-500 text-green-500  transition active:rotate-180 transition-transform duration-200"
                aria-label="Close"
            >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                    <path stroke-linecap="round" stroke-linejoin="round" 
                          d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
            <form wire:submit.prevent="{{ 'update' }}" class="space-y-4   mx-auto bg-white p-6 rounded-lg ">
    <label class="text-[22px] font-semibold block mb-4">Create Contact</label>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div>
            <input type="text" wire:model="name" placeholder="Name" class="border focus:outline-blue-300 p-2 pl-4 w-full rounded-md">
            @error('name') <span class="text-red-500 text-sm">{{ $message }}*</span> @enderror
        </div>

        <div>
            <input type="email" wire:model="email" placeholder="Email" class="border focus:outline-blue-300 p-2 pl-4 w-full rounded-md">
            @error('email') <span class="text-red-500 text-sm">{{ $message }}*</span> @enderror
        </div>

        <div>
            <input type="text" wire:model="phone_number" placeholder="Phone Number" class="border focus:outline-blue-300 p-2 pl-4 w-full rounded-md">
            @error('phone_number') <span class="text-red-500 text-sm">{{ $message }}*</span> @enderror
        </div>

        <div>
            <input type="text" wire:model="address" placeholder="Address" class="border focus:outline-blue-300 p-2 pl-4 w-full rounded-md">
            @error('address') <span class="text-red-500 text-sm">{{ $message }}*</span> @enderror
        </div>

        <div>
            <input type="text" wire:model="country" placeholder="Country" class="border focus:outline-blue-300 p-2 pl-4 w-full rounded-md">
            @error('country') <span class="text-red-500 text-sm">{{ $message }}*</span> @enderror
        </div>

        <div>
            <input type="text" wire:model="occupation" placeholder="Occupation" class="border focus:outline-blue-300 p-2 pl-4 w-full rounded-md">
            @error('occupation') <span class="text-red-500 text-sm">{{ $message }}*</span> @enderror
        </div>

        <div>
            <input type="number" wire:model="age" placeholder="Age" class="border focus:outline-blue-300 p-2 pl-4 w-full rounded-md">
            @error('age') <span class="text-red-500 text-sm">{{ $message }}*</span> @enderror
        </div>

        <div>
            <select wire:model="gender" class="border focus:outline-blue-300 p-2 pl-4 w-full rounded-md">
                <option value="">Select Gender</option>
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            @error('gender') <span class="text-red-500 text-sm">{{ $message }}*</span> @enderror
        </div>
    </div>

    <div class="pt-4">
        <button type="submit" class="bg-blue-500 hover:bg-black text-white px-6 py-2 rounded-md">
            Update Contact
        </button>
    </div>
</form>
            </div>
        </div>
    @endif

<!-- success modal -->
@if ($showSuccessModal)
<div class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 z-50">
    <div class="bg-white p-6 rounded-lg shadow-lg w-[400px] text-center">
        <div class="flex items-center justify-center gap-2 mb-2">
            <h2 class="text-xl font-bold text-green-600">Success!</h2>
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" 
                 viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" 
                 class="w-6 h-6 text-green-600">
                <path stroke-linecap="round" stroke-linejoin="round" 
                      d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 
                         3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 
                         0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 
                         1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 
                         1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 
                         1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 
                         0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 
                         1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 
                         0 0 1 21 12Z" />
            </svg>
        </div>

        <p class="text-gray-700 mb-4">{{ $successMessage }}</p>
        <button wire:click="$set('showSuccessModal', false)"
            class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
            Close
        </button>
    </div>
</div>
@endif



<!-- View Modal -->
@if ($showViewModal)
    <div class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50">
        <div class="bg-white rounded-lg shadow-lg w-[800px] p-6 relative">

            <!-- Close Icon (Top Right Circle Button) -->
            <button 
                wire:click="$set('showViewModal', false)" 
                class="absolute top-2 right-2 w-5 h-5 flex items-center justify-center rounded-full
                 border border-green-500 text-green-500  transition active:rotate-180 transition-transform duration-200"
                aria-label="Close"
            >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                    <path stroke-linecap="round" stroke-linejoin="round" 
                          d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>

            <div class="bg-white p-6 rounded-md  w-full max-w-4xl">
    <h3 class="text-xl font-bold mb-6">Contact Details</h3>
    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
        <p><strong>Name:</strong> {{ $viewingContact->name }}</p>
        <p><strong>Email:</strong> {{ $viewingContact->email }}</p>
        <p><strong>Phone Number:</strong> {{ $viewingContact->phone_number }}</p>
        <p><strong>Address:</strong> {{ $viewingContact->address }}</p>
        <p><strong>Country:</strong> {{ $viewingContact->country }}</p>
        <p><strong>Age:</strong> {{ $viewingContact->age }}</p>
        <p><strong>Occupation:</strong> {{ $viewingContact->occupation }}</p>
    </div>
</div>


        </div>
    </div>
@endif


    <!-- Delete Modal -->
    @if ($showDeleteModal)
        <div class="fixed inset-0 bg-black bg-opacity-40 flex items-center justify-center z-50">
            <div class="bg-white rounded-lg shadow-lg w-[480px] p-6 relative">
            <button 
                wire:click="$set('showDeleteModal', false)" 
                class="absolute top-2 right-2 w-5 h-5 flex items-center justify-center rounded-full
                 border border-green-500 text-green-500  transition active:rotate-180 transition-transform duration-200"
                aria-label="Close"
            >
                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                     viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-3 h-3">
                    <path stroke-linecap="round" stroke-linejoin="round" 
                          d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
                <h3 class="text-xl font-bold  mb-4">Delete Contact</h3>
                <p>Are you sure you want to delete <strong>{{ $contactToDelete->name }}</strong>?</p>
                <div class="mt-4 flex justify-end space-x-2">
                    <button wire:click.prevent="$set('showDeleteModal', false)" class=" hover:bg-gray-400 hover:text-white px-4 py-2 bg-gray-300 rounded">Cancel</button>
                    <button wire:click.prevent="confirmDelete" class="px-4 py-2 bg-red-600 hover:bg-red-400 text-white rounded">Delete</button>
                </div>
            </div>
        </div>
    @endif

    <hr class="my-4">
    <h2 class="text-[22px] mb-2">All Contacts</h2>
    <div class="overflow-x-auto w-full max-w-full">
  <table class="min-w-[1400px] border-collapse w-full">
      <thead class="bg-green-200">
          <tr class="flex justify-between items-center border-b py-2">
              <th class="font-bold text-left w-1/3 ml-3 min-w-[150px]">Name</th>
              <th class="font-bold text-left w-1/3 min-w-[200px]">Email</th>
              <th class="font-bold text-left w-1/3 min-w-[150px] ml-6">Phone Number</th>
              <th class="font-bold text-left w-1/3 min-w-[200px] ml-6">Address</th>
              <th class="font-bold text-left w-1/3 min-w-[150px] ml-6">Country</th>
              <th class="font-bold text-left w-1/3 min-w-[200px] ml-6">Occupation</th>
              <th class="font-bold text-left w-1/3 min-w-[80px] ml-6">Age</th>
              <th class="font-bold text-left w-1/3 min-w-[180px] ml-6">Actions</th>
          </tr>
      </thead>
      <tbody>
          @forelse ($contacts as $contact)
              <tr class="flex justify-between items-center border-b py-2">
                  <td class="w-1/3 ml-3 min-w-[150px]">{{ $contact->name }}</td>
                  <td class="w-1/3 min-w-[200px]">{{ $contact->email }}</td>
                  <td class="w-1/3 min-w-[150px] ml-6">{{ $contact->phone_number }}</td>
                  <td class="w-1/3 min-w-[200px] ml-6">{{ $contact->address }}</td>
                  <td class="w-1/3 min-w-[150px] ml-6">{{ $contact->country }}</td>
                  <td class="w-1/3 min-w-[200px] ml-6">{{ $contact->occupation }}</td>
                  <td class="w-1/3 min-w-[80px] ml-6">{{ $contact->age }}</td>

                  <td class="w-1/3 min-w-[180px] space-x-2">
                      <button wire:click="view({{ $contact->id }})" class="text-green-500 text-sm">View</button>
                      <button wire:click="edit({{ $contact->id }})" class="text-blue-500 text-sm">Edit</button>
                      <button wire:click="prepareDelete({{ $contact->id }})" class="text-red-500 text-sm">Delete</button>
                  </td>
              </tr>
              @empty
            <tr>
                <td colspan="8" class="text-center p-6 text-gray-500 italic">
                    No contacts found
                </td>
            </tr>
          @endforelse
      </tbody>
  </table>
</div>

</div>
