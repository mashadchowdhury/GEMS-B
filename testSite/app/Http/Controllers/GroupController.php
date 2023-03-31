<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('group.index', [
            'group' => Group::with('user')->latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$validated = $request->all();
         $validated = $request->validate([
            'name_group' => 'required|string',
            'booked' => 'boolean',
            'name_accommodation' => 'string',
            'name_primary_contact' => 'required|string',
            'telephone_primary_contact' => 'required|integer|max:32',
            'email_primary_contact' => 'required|string|max:96',
            'name_secondary_contact' => 'required|string',
            'telephone_secondary_contact' => 'required|integer|max:32',
            'email_secondary_contact' => 'required|string|max:96',
            'is_ESS_group' => 'boolean',
            'group_count' => 'required|integer',
            'adult_count' => 'required|integer',
            'children_count' => 'required|integer',
            'pet_count' => 'required|integer',
            'need_accessibility' => 'boolean',
        ]);
        $request->user()->groups()->create($validated);
        return redirect(route('group.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        $this->authorize('update', $group);
        return view('group.edit', [
            'group' => $group,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        $this->authorize('update', $group);
        $validated = $request->all();
        /* $validated = $request->validate([
            'name_group' => 'required|string',
            'booked' => 'required|boolean',
            'name_accommodation' => 'string',
            'name_primary_contact' => 'required|string',
            'telephone_primary_contact' => 'required|integer|max:32',
            'email_primary_contact' => 'required|string|max:96',
            'name_secondary_contact' => 'required|string',
            'telephone_secondary_contact' => 'required|integer|max:32',
            'email_secondary_contact' => 'required|string|max:96',
            'is_ESS_group' => 'required|boolean',
            'group_count' => 'required|integer',
            'adult_count' => 'required|integer',
            'children_count' => 'required|integer',
            'pet_count' => 'required|integer',
            'need_accessibility' => 'required|boolean',
        ]); */
        $group->update($validated);
        return redirect(route('group.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy(Group $group)
    {
        $this->authorize('delete', $group);
        $group->delete();
        return redirect(route('group.index'));
    }
}
