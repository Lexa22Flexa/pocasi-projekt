<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Bundesland;
use App\Models\Data;
use App\Models\Station;
use App\Models\UserModel;

class Main extends BaseController
{
    var $bundesland;
    var $stanice;
    var $data;

    public function __construct()
    {
        $this->bundesland = new Bundesland(); //díky this existuje proměnná po celé třídě => bez toho by existovala jen v konstruktoru
        $this->stanice = new Station();
        $this->data = new Data();
        
    }

    public function index()
    {
        $data["bundesland"] = $this->bundesland->orderBy("name", "asc")->findAll();

        echo view("index", $data);
    }

    public function zemezeme($id) {
        $data["bundesland"] = $this->bundesland->where("id", $id)->findAll();

        echo view ("zeme", $data);
    }

    public function zeme($id) {
        $stanice["stanice"] = $this->stanice->where("bundesland", $id)->find();

        echo view('zeme-stanice', $stanice);
    }

    public function stanice($id) {
        $data["data"] = $this->data->where("Stations_ID", $id)->orderBy("date", "asc")->paginate(25);
        $pager = $this->data->pager;

        echo view("stanice", $data);
    }

    public function vsechnyStanice() {
        $data["bundesland"] = $this->bundesland->orderBy("name", "asc")->findAll();
        $stanice["stanice"] = $this->stanice->orderBy("place", "asc")->findAll();
        

        echo view("vsechny-stanice", $stanice);
    }
}