<?php
    namespace App\Controllers;
    use App\Models\Modelmahasiswa;

    class mahasiswa extends BaseController
    {
        function __construct (){
            $this->Modelmahasiswa = new Modelmahasiswa();
            //$this ->typemahasiswa = new Modelmahasiswa();
        }
        public function index()
        {
            $data['mahasiswa']= $this->Modelmahasiswa->getmahasiswa();

            return view('mahasiswa', $data);
        }
      
    }
?>