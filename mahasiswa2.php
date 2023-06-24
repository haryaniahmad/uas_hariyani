<?php
    namespace App\Controllers;
    use App\Models\Modelmahasiswa2;

    class mahasiswa2 extends BaseController
    {
        function __construct (){
            $this->Modelmahasiswa2 = new Modelmahasiswa2();
            //$this ->typemahasiswa = new Modelmahasiswa();
        }
        public function index()
        {
            $data['mahasiswa2']= $this->Modelmahasiswa2->getmahasiswa2();

            return view('mahasiswa2', $data);
        }
      
    }
?>