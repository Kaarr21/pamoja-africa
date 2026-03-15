<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ContactInquiry;
use Illuminate\Support\Facades\Mail;

class ContactForm extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';
    public $honeypot_field = '';

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string',
    ];

    public function submit()
    {
        if (!empty($this->honeypot_field)) {
            return;
        }
        $this->validate();

        $inquiry = ContactInquiry::create([
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message,
        ]);

        try {
            Mail::raw("New Contact Inquiry from {$this->name} ({$this->email}): \n\n{$this->message}", function($msg) {
                $msg->to('hello@pamojaafrica.com')
                    ->subject('New Website Inquiry');
            });
        } catch (\Exception $e) {
            // Fails silently if mail is not completely configured
        }

        session()->flash('success', 'Your message has been sent successfully!');
        $this->reset(['name', 'email', 'message']);
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
