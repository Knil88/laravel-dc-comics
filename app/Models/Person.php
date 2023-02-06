<?php
// Il Model ci serve per importare la tabella sia nel controller che nel seed
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;
}
