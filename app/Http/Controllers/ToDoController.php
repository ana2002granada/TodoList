<?php

namespace App\Http\Controllers;

use App\Exports\ToDoExport;
use App\Imports\ToDoImport;
use Carbon\Carbon;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\Request;

class ToDoController extends Controller
{

    public function importForm(): view
    {
        return view('forms.import');
    }

    public function import(Request $request): RedirectResponse
    {
        $file =$request->file('import');
        Excel::import(new ToDoImport, $file);

        return redirect('/app')->with('success', 'All good!');
    }

    public function exportForm(): view
    {

        $date = Carbon::now()->format('Y-m-d');
        return view('forms.export', compact('date'));
    }

    public function export(Request $request): BinaryFileResponse
    {
        $export = (new ToDoExport($request))->download('todo.xlsx');

        return $export;
    }
}
