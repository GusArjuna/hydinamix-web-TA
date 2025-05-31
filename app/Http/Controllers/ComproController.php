<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ComproController extends Controller
{
    public function index()
    {
        return view('index',[
            "clients"=>[
                [
                    'name' => 'smblt',
                    'url' => url('src/img/clients/smblt.png'),
                ],
                [
                    'name' => 'tobaco',
                    'url' => url('src/img/clients/tobaco.png'),
                ],
                [
                    'name' => 'mulawarman',
                    'url' => url('src/img/clients/mulawarman.png'),
                ],
                [
                    'name' => 'tkl',
                    'url' => url('src/img/clients/tkl.png'),
                ],
                [
                    'name' => 'upti',
                    'url' => url('src/img/clients/upti.png'),
                ],
                [
                    'name' => 'unair',
                    'url' => url('src/img/clients/unair.png'),
                ],
                [
                    'name' => 'slc',
                    'url' => url('src/img/clients/slc.png'),
                ],
                [
                    'name' => 'pwc',
                    'url' => url('src/img/clients/pwc.png'),
                ],
                [
                    'name' => 'ptpn',
                    'url' => url('src/img/clients/ptpn.png'),
                ],
            ],
        ]);
    }
    public function team()
    {
        return view('team',[
            'teams' => [
                [
                    'name' => 'Rizal Udin Firman Hidayat, SE., MM',
                    'url' => url('src/img/team/rizal.png'),
                    'position' => 'Staff',
                    'description' => 'Strategic and Innovation Expert',
                ],
                [
                    'name' => 'Wahid Abrori, SE',
                    'url' => url('src/img/team/wahid.png'),
                    'position' => 'Staff',
                    'description' => 'Regional Economix Development Expert',
                ],
                [
                    'name' => 'Niken Savitri Primasari, SE.,MM.,AK.',
                    'url' => url('src/img/team/niken.png'),
                    'position' => 'Staff',
                    'description' => 'Strategic Planning and Feasibility Expert',
                ],
                [
                    'name' => 'Mahmud Rizal Irawan, ST,.MT',
                    'url' => url('src/img/team/mahmud.png'),
                    'position' => 'Staff',
                    'description' => 'Regional and Urban Planning Expert',
                ],
                [
                    'name' => 'Mochammad Taufiq Prasetyo, S.E., M.SE',
                    'url' => url('src/img/team/taufiq.png'),
                    'position' => 'Staff',
                    'description' => 'Industrial Economix Expert',
                ],
                [
                    'name' => 'Rezza Vitriya, S.M., M.M.',
                    'url' => url('src/img/team/rezza.png'),
                    'position' => 'Staff',
                    'description' => 'Financial Management Expert',
                ],
                [
                    'name' => 'Wedhar Gilang Prihandoko, SSi.',
                    'url' => url('src/img/team/wedhar.png'),
                    'position' => 'Staff',
                    'description' => 'Mixed Research Method Expert',
                ],
                [
                    'name' => 'Kristiana, S.Stat.',
                    'url' => url('src/img/team/kristiana.png'),
                    'position' => 'Staff',
                    'description' => 'Data Visualization Expert',
                ],
                [
                    'name' => 'Linda Septiana Hariyanti, A.Md.',
                    'url' => url('src/img/team/rezza.png'),
                    'position' => 'Staff',
                    'description' => 'Data Collecting Expert',
                ],
            ],
        ]);
    }
}
