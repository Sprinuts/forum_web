<?php
namespace App\Models;

use CodeIgniter\Model;

class Forum_model extends Model{

    protected $table = 'forum';

    protected $primaryKey = 'id';

    protected $useautoincrement = true;

    protected $allowedFields = [
        'id',
        'username',
        'message'
    ];


}

?>