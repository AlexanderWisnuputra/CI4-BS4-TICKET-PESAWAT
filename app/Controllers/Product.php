<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\Modelproduct;
class Product extends BaseController
{
    public function index(){
        $mp = new Modelproduct();
        $data = ['datashow' => $mp->datashow()->getResult()];
            echo View('viewdatashow', $data);
    }
public function adddata(){
            helper('form');
            echo View('viewnewdata');
    }
    public function simpandata(){
            $data = [
                'nama' => $this->request->getpost('nama'),
                'nik' => $this->request->getpost('nik'),
                'hp' => $this->request->getpost('hp'),
                'wisata' => $this->request->getpost('wisata'),
                'tanggal' => $this->request->getpost('tanggal'),
                'dewasa' => $this->request->getpost('dewasa'),
                'anak' => $this->request->getpost('anak'),
                'total' => $this->request->getpost('total')
    ];
        $mp = new Modelproduct();

        $save = $mp->simpan($data);

        if($save){
            return redirect()->to('/list');
        }
}
public function deletedata(){
    $uri = service('uri');
    $nik = $uri->getSegment('2');

        $mp = new Modelproduct();

        $mp->deletedata($nik);
        return redirect()->to('/list');
}

 public function formedit(){
    helper('form');
$uri = service('uri');
    $nik = $uri->getSegment('2');
            $mp = new Modelproduct();
            $ambildata = $mp->ambildata($nik);
if (count($ambildata->getResult()) > 0){
    $row = $ambildata->getRow();
    $data = [
        'nik' => $row->nik,
        'nama' => $row->nama,
        'hp'=> $row->hp,
        'wisata'=> $row->wisata,
        'tanggal'=> $row->tanggal,
        'dewasa' => $row->dewasa,
        'anak' => $row->anak,
        'total' => $row->total
    ];
    echo View('viewformedit',$data);
 }
}
public function updatedata(){
    $nik = $this->request->getpost('nik');

    $data = [
                'nama' => $this->request->getpost('nama'),
                'hp' => $this->request->getpost('hp'),
                'wisata' => $this->request->getpost('wisata'),
                'tanggal' => $this->request->getpost('tanggal'),
                'dewasa' => $this->request->getpost('dewasa'),
                'anak' => $this->request->getpost('anak'),
                'total' => $this->request->getpost('total')
    ];

                $mp = new Modelproduct();
$simpan = $mp->editdata($data, $nik);


if ($simpan){
    return redirect()->to('/list');
}
}

}


