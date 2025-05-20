<?php
namespace App\Livewire;

use Livewire\Component;
use App\Models\Contact;

class ContactCrud extends Component
{
    public $contacts, $name, $email, $contact_id;
    public $isEdit = false;

    public function render()
    {
        $this->contacts = Contact::all();
        return view('livewire.contact-crud');
    }

    public function resetFields()
    {
        $this->name = '';
        $this->email = '';
        $this->isEdit = false;
        $this->contact_id = null;
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        Contact::create([
            'name' => $this->name,
            'email' => $this->email
        ]);

        $this->resetFields();
        session()->flash('message', 'Contact added successfully!');
    }

    public function edit($id)
    {
        $contact = Contact::findOrFail($id);
        $this->contact_id = $id;
        $this->name = $contact->name;
        $this->email = $contact->email;
        $this->isEdit = true;
    }

    public function update()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        if ($this->contact_id) {
            $contact = Contact::find($this->contact_id);
            $contact->update([
                'name' => $this->name,
                'email' => $this->email
            ]);
            session()->flash('message', 'Contact updated!');
        }

        $this->resetFields();
    }

    public function delete($id)
    {
        Contact::find($id)->delete();
        session()->flash('message', 'Contact deleted!');
    }
}
