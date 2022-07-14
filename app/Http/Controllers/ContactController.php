<?php
namespace App\Http\Controllers;

use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = Contact::all();
        return view('contact.index', compact('contacts'));
    }
    public function create()
    {
        return view('contact.create');
    }
    public function store()
    {
        $data = request()->validate([
            'title' => 'string',
            'contact' => 'string',
            'city' => 'string',
            'country' => 'string',
            'street' => 'string',
        ]);

        Contact::create($data);
        return redirect()->route('contact.index');

    }
    public function show(Contact $contact)
    {
        return view('contact.show', compact('contact'));
//        $post = Post::findOrFail($id);
//        dd($post->title);
    }
    public function edit(Contact $contact)
    {
        return view('contact.edit', compact('contact'));
    }
    public function update(Contact $contact)
    {
        $data = request()->validate([
            'title' => 'string',
            'contact' => 'string',
            'city' => 'string',
            'country' => 'string',
            'street' => 'string',

        ]);
        $contact->update($data);
        return redirect()->route('contact.show', $contact->id);
    }
    public function delete()
    {
        $contact = Contact::withTrashed()->find(2);
        $contact->restore();
        dd('deleted');
    }
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('contact.index');
    }
}
