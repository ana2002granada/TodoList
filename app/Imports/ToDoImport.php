<?php

namespace App\Imports;

use App\Models\Todo;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Arr;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ToDoImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row): \Illuminate\Database\Eloquent\Model|Todo|null
    {
        return new Todo([
            'title' => Arr::get($row,'title'),
            'description' => Arr::get($row,'description'),
            'status' => Arr::get($row,'status')
        ]);
    }
}
