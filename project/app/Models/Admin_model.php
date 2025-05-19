<?php
namespace App\Models;

use CodeIgniter\Model;

class Admin_model extends Model{

    protected $table = 'admin';

    protected $primaryKey = 'id';

    protected $useautoincrement = true;

    protected $allowedFields = [
        'id',
        'username',
        'password'
    ];


}

?>