<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Item extends BaseController
{
    public function index()
    {
        //
    }

    public function delete($id) { //přes softdelete!!!!!
        $article = $this->article->find($id);
        if ($article == null) {
            return redirect()->to('/admin')->with('error', 'Článek nebyl nalezen.');
        }

        $this->article->delete($id);
        
        return redirect()->to("/admin")->with('success', 'Článek smazán.');
    }
}
