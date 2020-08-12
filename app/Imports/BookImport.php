<?php

namespace App\Imports;

use App\Book;
use Maatwebsite\Excel\Concerns\ToModel;
use Faker;
class BookImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {          set_time_limit(0);
        $faker=Faker\Factory::create();
        return new Book([
            'isbn'=> $row[0],
            'book_title'=>$row[1],
            'book_author'=>$row[2],
            'year'=>$row[3],
            'publisher'=>$row[4],
            'image_s_url'=>$row[5],
            'image_m_url'=>$row[6],
            'image_l_url'=>$row[7],
        ]);
    }
}
