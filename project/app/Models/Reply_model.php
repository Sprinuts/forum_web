<?php
namespace App\Models;

use CodeIgniter\Model;

class Reply_model extends Model{

    protected $table = 'reply';

    protected $primaryKey = 'id';

    protected $useautoincrement = true;

    protected $allowedFields = [
        'id',
        'username',
        'message',
        'forumid'
    ];


}

?>