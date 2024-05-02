<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientesweb extends Model
{
    use HasFactory;
    protected $fillable = [
        'CCOCLI',
        'NIFCLI',
        'EAN',
        'NOMBREFIS',
        'NOMBRECOM',
        'DOMCLI',
        'CPOCLI',
        'POBCLI',
        'PROCLI',
        'PAIS',
        'TELCLI',
        'TELF2',
        'MOVIL',
        'FAXCLI',
        'EMACLI',
        'WEBCLI',
        'FPACLI',
        'DP1CLI',
        'DP2CLI',
        'DP3CLI',
        'MESNPAG',
        'BANCLI',
        'PROPCLI',
        'MENSAJE',
        'OBSCLI',
    ];
}
