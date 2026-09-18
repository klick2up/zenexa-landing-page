<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lead;

class AdminLeadController extends Controller
{
    public function index()
    {
        $leads = Lead::latest()->paginate(15);
        return view('admin.leads.index', compact('leads'));
    }

    public function toggleRead(Lead $lead)
    {
        $lead->update([
            'is_read' => !$lead->is_read
        ]);

        return back()->with('success', 'Lead status updated.');
    }

    public function destroy(Lead $lead)
    {
        $lead->delete();
        return back()->with('success', 'Lead successfully deleted.');
    }
}
