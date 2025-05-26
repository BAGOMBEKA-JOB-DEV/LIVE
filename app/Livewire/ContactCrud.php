<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact;
use Illuminate\Validation\Rule;

class ContactCrud extends Component
{
    public $contacts, $name, $email, $contact_id;
    public $phone_number, $address, $country, $occupation, $age, $gender;

    public $isEdit = false;

    public $search = '';

    public $showModal = false;
    public $showAddContactModal = false;
    public $showViewModal = false;
    public $showDeleteModal = false;

    public $showSuccessModal = false;
    public $successMessage = '';

    public $viewingContact;
    public $contactToDelete;

    public function render()
    {
        $this->contacts = Contact::orderBy('created_at', 'desc')->get();
        return view('livewire.contact-crud');
    }

    public function resetFields()
    {
        $this->name = '';
        $this->email = '';
        $this->phone_number = '';
        $this->address = '';
        $this->country = '';
        $this->occupation = '';
        $this->age = '';
        $this->gender = '';
        $this->contact_id = null;
        $this->isEdit = false;
    }

    public function store()
    {
        $this->validate([
            'name' => ['required', Rule::unique('contacts', 'name')],
            'email' => ['required', 'email', Rule::unique('contacts', 'email')],
            'phone_number' => 'nullable|string',
            'address' => 'nullable|string',
            'country' => 'nullable|string',
            'occupation' => 'nullable|string',
            'age' => 'nullable|integer',
            'gender' => 'nullable|string',
        ]);

        Contact::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone_number' => $this->phone_number,
            'address' => $this->address,
            'country' => $this->country,
            'occupation' => $this->occupation,
            'age' => $this->age,
            'gender' => $this->gender,
        ]);

        $this->resetFields();
        $this->showAddContactModal = false;
        $this->successMessage = 'Contact added successfully!';
        $this->showSuccessModal = true;
    }


    //validation messages
    protected $messages = [
        'name.unique' => 'That name is already taken. Choose a different name!.',
        'email.unique' => 'This email is already registered.',
    ];
    

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        $this->contact_id = $id;
        $this->name = $contact->name;
        $this->email = $contact->email;
        $this->phone_number = $contact->phone_number;
        $this->address = $contact->address;
        $this->country = $contact->country;
        $this->occupation = $contact->occupation;
        $this->age = $contact->age;
        $this->gender = $contact->gender;
        $this->isEdit = true;
        $this->showModal = true;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'nullable|string',
            'address' => 'nullable|string',
            'country' => 'nullable|string',
            'occupation' => 'nullable|string',
            'age' => 'nullable|integer',
            'gender' => 'nullable|string',
        ]);

        if ($this->contact_id) {
            $contact = Contact::find($this->contact_id);
            $contact->update([
                'name' => $this->name,
                'email' => $this->email,
                'phone_number' => $this->phone_number,
                'address' => $this->address,
                'country' => $this->country,
                'occupation' => $this->occupation,
                'age' => $this->age,
                'gender' => $this->gender,
            ]);

            $this->resetFields();
            $this->showModal = false;
            $this->successMessage = 'Contact updated successfully!';
            $this->showSuccessModal = true;
        }
    }

    public function prepareDelete($id)
    {
        $this->contactToDelete = Contact::findOrFail($id);
        $this->showDeleteModal = true;
    }

    public function confirmDelete()
    {
        if ($this->contactToDelete) {
            $this->contactToDelete->delete();
            $this->contactToDelete = null;
            $this->showDeleteModal = false;
            $this->successMessage = 'Contact deleted successfully!';
            $this->showSuccessModal = true;
        }
    }

    public function view($id)
    {
        $this->viewingContact = Contact::findOrFail($id);
        $this->showViewModal = true;
    }

    public function openCreateModal()
    {
        $this->resetFields();
        $this->showModal = true;
    }

    public function closeModals()
    {
        $this->resetFields();
        $this->showModal = false;
        $this->showViewModal = false;
        $this->showDeleteModal = false;
    }
}
