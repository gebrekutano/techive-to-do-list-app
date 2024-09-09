<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\ToDoList;
use Illuminate\Http\Request;
use Exception;

class ToDoListsController extends Controller
{

    /**
     * Display a listing of the to do lists.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $toDoLists = ToDoList::all();

        // return view('to_do_lists.index', compact('toDoLists'));

        return response()->json($toDoLists);
    }

    /**
     * Show the form for creating a new to do list.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('to_do_lists.create');
    }

    /**
     * Store a new to do list in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $data = $this->getData($request);
        
        ToDoList::create($data);

        return redirect()->route('to_do_lists.to_do_list.index')
            ->with('success_message', 'To Do List was successfully added.');
    }

    /**
     * Display the specified to do list.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $toDoList = ToDoList::findOrFail($id);

        // return view('to_do_lists.show', compact('toDoList'));
        return response()->json($toDoList);
    }

    /**
     * Show the form for editing the specified to do list.
     *
     * @param int $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $toDoList = ToDoList::findOrFail($id);
        

        return view('to_do_lists.edit', compact('toDoList'));
    }

    /**
     * Update the specified to do list in the storage.
     *
     * @param int $id
     * @param Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        
        $data = $this->getData($request);
        
        $toDoList = ToDoList::findOrFail($id);
        $toDoList->update($data);

        return redirect()->route('to_do_lists.to_do_list.index')
            ->with('success_message', 'To Do List was successfully updated.');  
    }

    /**
     * Remove the specified to do list from the storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\RedirectResponse | \Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $toDoList = ToDoList::findOrFail($id);
            $toDoList->delete();

            return redirect()->route('to_do_lists.to_do_list.index')
                ->with('success_message', 'To Do List was successfully deleted.');
        } catch (Exception $exception) {

            return back()->withInput()
                ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request.']);
        }
    }

    
    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
                'titile' => 'string|min:1|nullable',
            'content' => 'string|min:1|nullable',
            'status' => 'string|min:1|nullable', 
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
