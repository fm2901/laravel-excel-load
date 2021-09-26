<?php

namespace App\Imports;
use App\Models\Row;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Contracts\Queue\ShouldQueue;
use Maatwebsite\Excel\Concerns\WithChunkReading;

class ExcelImport implements ToModel, WithChunkReading, ShouldQueue
{
    public function model(array $row)
    {
        return new Row([
            'id'   => $row[0],
            'name' => $row[1],
            'date' => date("Y-m-d", strtotime($row[2])),
        ]);
    }

    public function chunkSize(): int
    {
        return 1000;
    }
}
