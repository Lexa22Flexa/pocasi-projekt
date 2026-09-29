<?php

namespace App\Controllers;

use App\Models\Station;
use App\Models\Data;

class Item extends BaseController
{
    protected $data;

    public function __construct() {
        $this->data = new Data();
    }

    public function delete() {
        //$datum = $this->request->getPost('smazat');
        //echo "Datum: " . $datum . "<br>";
        //$data = $this->data->where('date', $datum)->findAll();


        $date = $this->request->getPost('smazat');
        $stationId = $this->request->getPost('station_id');

        $data = $this->data->where('date', $date)->where('Stations_ID', $stationId)->findAll();

        if ($data === null) {
            return redirect()->to('/')->with('error', 'Záznamy s tímto datemnebyly nalezen.');
        }

        foreach ($data as $record) {
            //$this->data->delete($record->id);
            //echo ($record->id."\n");
            $this->data->delete($record->id);
        }

        return redirect()->to('/')->with('success', 'Záznam smazán.');

        /*if ($data === null) {
            return redirect()->to('/')->with('error', 'Záznamy s tímto datemnebyly nalezen.');
        }

        foreach ($data as $record) {
            $this->data->delete($record->id);
        }*/

        //$this->data->delete($id);
        //return var_dump($data);
        //return redirect()->to('/')->with('success', 'Záznam smazán.');

        //pak odkomentovat, toto je jenom pro test!!!!!
    }
}
