<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class QrController extends Controller
{

    public function show()
    {
        // URL complète du menu
        // ⚠️ Remplace ton IP locale ici si tu veux tester sur ton téléphone
        $menuUrl = 'https://hewabora.synergieup.store/menu';

        // Envoie l’URL à la vue
        return view('qrcode', compact('menuUrl'));
    }
}
