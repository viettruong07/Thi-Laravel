<?php

namespace App\Http\Controllers;

use App\Models\Library;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;

class LibraryController extends BaseController
{
    public function search(Request $request)
    {
        $searchTerm = $request->input('search');

        // Tìm kiếm trong cơ sở dữ liệu
        $librarys = Library::where('title', 'LIKE', '%' . $searchTerm . '%')
                    ->orWhere('authorid', 'LIKE', '%' . $searchTerm . '%')
                    ->get();

        return view('/search', compact('librarys', 'searchTerm'));
    }
}
