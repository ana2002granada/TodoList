<?php

namespace App\Exports;

use App\Models\Todo;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ToDoExport implements FromQuery, WithHeadings
{
    use Exportable;

    private ? String $status;
    private ? String $start_date;
    private ? String $end_date;

    public function __construct(Request $request)
    {
        $this->status = $request->status;
        $this->start_date = $request->start_date;
        $this->end_date = $request->end_date;
    }
    public function query()
    {
        return Todo::query()->statusFilter($this->status)
            ->dateFilter($this->start_date, $this->end_date);
    }


    public function headings(): array
    {
        return [
            "id",
            "title",
            "description",
            "status",
            "created_at",
            "updated_at",
        ];
    }

}
