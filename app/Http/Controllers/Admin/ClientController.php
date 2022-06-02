<?php

namespace App\Http\Controllers\Admin; 

use Illuminate\Support\Facades\View;
use App\Http\Controllers\Controller;
use App\Models\Client; // <-- Add this line "Client" is the model name
use App\Http\Requests\Admin\ClientRequest;
use Debugbar;

class ClientController extends Controller
{

    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }
    
    public function index()
    {

        $view = View::make('admin.pages.clients.index')
                ->with('client', $this->client)
                ->with('clients', $this->client->where('active', 1)->get());

        if(request()->ajax()) {
            
            $sections = $view->renderSections(); 

            return response()->json([
                'table' => $sections['table'],
                'form' => $sections['form'],
            ]);
        }

        return $view;
    }

    public function create()
    {

       $view = View::make('admin.pages.clients.index')
        ->with('client', $this->client)
        ->renderSections();

        return response()->json([
            'form' => $view['form']
        ]);
    }

    public function store(ClientRequest $request)
    {            

        $client = $this->client->updateOrCreate([
                'id' => request('id')],[
                'name' => request('name'),
                'title' => request('title'),
                'price' => request('price'),
                'description' => request('description'),
                'specs' => request('specs'),
                'visible' => 1,
                'active' => 1,
        ]);

        $view = View::make('admin.pages.clients.index')
        ->with('clients', $this->client->where('active', 1)->get())
        ->with('client', $client)
        ->renderSections();

        return response()->json([
            'table' => $view['table'],
            'form' => $view['form'],
            'id' => $client->id,
        ]);
    }

    public function edit(Client $client)
    {
        $view = View::make('admin.pages.clients.index')
        ->with('client', $client)
        ->with('clients', $this->client->where('active', 1)->get());   
        
        if(request()->ajax()) {

            $sections = $view->renderSections(); 
    
            return response()->json([
                'form' => $sections['form'],
            ]); 
        }
                
        return $view;
    }

    public function show(Client $client){
        
    }

    public function destroy(Client $client)
    {
        $client->active = 0;
        $client->save();

        $view = View::make('admin.pages.clients.index')
            ->with('client', $this->client)
            ->with('clients', $this->client->where('active', 1)->get())
            ->renderSections();
        
        return response()->json([
            'table' => $view['table'],
            'form' => $view['form']
        ]);
    }
}