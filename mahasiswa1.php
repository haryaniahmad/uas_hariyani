<?php
    namespace App\Controllers;
    use App\Models\Modelmahasiswa1;

    class mahasiswa1 extends BaseController
    {
        function __construct (){
            $this->Modelmahasiswa1 = new Modelmahasiswa1();
            //$this ->typemahasiswa = new Modelmahasiswa();
        }
        public function index()
        {
            $data['mahasiswa1']= $this->Modelmahasiswa1->getmahasiswa1();

            return view('mahasiswa1', $data);
        }
      
    }
?>