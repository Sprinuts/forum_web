<?php
namespace App\Models;

use CodeIgniter\Model;

class Game_model extends Model{

    protected $table = 'game';

    protected $primaryKey = 'id';

    protected $useautoincrement = true;

    protected $allowedFields = [
        'id',
        'gamepath'
    ];


}

?>