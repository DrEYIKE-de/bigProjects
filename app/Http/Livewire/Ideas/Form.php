<?php

namespace App\Http\Livewire\Ideas;

use App\Models\Ideas;
use Livewire\Component;
use Livewire\WithFileUploads;
use Symfony\Component\HttpFoundation\Request;

class Form extends Component
{
    use WithFileUploads;

    public $title;
    public $category;
    public $description;
    public $investments;
    public $docs=[];

  protected $rules = [
        'title' => 'required|min:6',
        'category' => 'required',
        'description'=>"required|min:30",
        'investments' => 'required',
        "docs.*" => "sometimes|required|mimes:jpg, jpeg, png, bmp, gif, svg,pdf|max:2048"
    ];
    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function postIdea()
    {
       
        $validatedData = $this->validate([
            "title"=>$this->title,
            'category' => $this->category,
            'description'=> $this->description,
            'investments' => $this->investments,
           // "docs" => 
        ]);
        if($validatedData)
        {
         Ideas::create($validatedData);
            session()->flash('success-message', 'Idea successfully updated.');
        }
        else
        {
            session()->flash('danger-message', 'Wrong parameters,please retry.');
        }
    }
    public function render()
    {
        return view('livewire.ideas.form');
    }
}
