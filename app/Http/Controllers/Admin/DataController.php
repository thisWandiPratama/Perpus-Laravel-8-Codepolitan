<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function authors()
    {
        return datatables()->of(Author::orderBy('name', 'ASC'))
            ->addColumn('action', 'admin.author.action')
            ->addIndexColumn()
            ->toJson();
    }

    public function books()
    {
        return datatables()->of(Book::orderBy('title', 'ASC'))
            // ->addColumn('action', 'admin.author.action')
            ->addIndexColumn()
            ->toJson();
    }

}
