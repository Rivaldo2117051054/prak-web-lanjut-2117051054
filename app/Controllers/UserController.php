<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;
use App\Models\KelasModel;

class UserController extends BaseController
{

    public $userModel;
    public $kelasModel;

    public function __construct(){

        $this->userModel = new UserModel();
        $this->kelasModel = new KelasModel();
    }
    protected $helpers = ['form'];
    public function index()
    {
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];

        return view('list_users', $data);
    }

    // public function profile($nama="",$kelas="",$npm =""){

    //     $data = [
    //         'nama' => $this->request->getVar('nama'),
    //         'kelas' => $this->request->getVar('kelas'),
    //         'npm' => $this->request->getVar('npm')
    //     ];

    //     return view ('profile',$data);
    // }
    public function create(){

        // $kelas = [
        //     [
        //         'id'=> 1,
        //         'nama_kelas'=> 'A',
        //     ],
        //     [
        //         'id'=> 2,
        //         'nama_kelas'=> 'B',
        //     ],
        //     [
        //         'id'=> 3,
        //         'nama_kelas'=> 'C',
        //     ],
        //     [
        //         'id'=> 4,
        //         'nama_kelas'=> 'D',
        //     ],

        // ];

        //$kelasModel = new KelasModel();

        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => 'Create User',
            'kelas' => $kelas,

        ];

        return view('create_user', $data);
    }

    public function store(){

       // $userModel = new UserModel();

        $path = 'assets/upload/img/';

        $foto = $this->request->getFile('foto');
        $name = $foto->getRandomName();

        if($foto->move($path, $name)){
            $foto = base_url($path. $name);
        }

        if (!$this->validate([
            'nama' => [
                'rules' => 'required|alpha_space',
                'errors' => [
                    'required' => 'Nama Harus Diisi !',
                    'alpha_space' => 'Nama Harus Diisi karakter Huruf atau Spasi'
                ]
            ],
            'npm' => [
                'rules' => 'required|is_unique[users.npm]',
                'errors' => [
                    'required' => 'NPM Harus Diisi !',
                    'is_unique' => 'NPM Telah Terdaftar !'
                ]
            ],
            'kelas' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Kelas Harus Dipilih !'
                ]
            ]
    ])) {
        session()->setFlashdata($this->validator->getErrors());
        return redirect()->back()->withInput();
    }

        $this->userModel->saveUser([
            'nama'=> $this->request->getVar('nama'),
            'id_kelas'=> $this->request->getVar('kelas'),
            'npm'=> $this->request->getVar('npm'),
            'foto' => $foto,
        ]);
        // $data = [
        //     'nama' => $this->request->getVar('nama'),
        //     'kelas' => $this->request->getVar('kelas'),
        //     'npm' => $this->request->getVar('npm')
        // ];
        // return view('profile', $data);

        return redirect()->to('user');
    }
    public function show($id){
        $user = $this->userModel->getUser($id);

        $data = [
            'title' => 'Profile',
            'user'  => $user,
        ];
        return view('profile', $data);
    }
}
