<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kendaraan extends Model
{
    protected $table = 'kendaraans';
    protected $fillable = ['nopol','merk','tipe','jenis','model','tahun','jmlCC','noRangka','noMesin','noBpkb','warnaKb','warnaTnkb','photoKb','photoBpkb','photoStnk', 'kategori'];
}
