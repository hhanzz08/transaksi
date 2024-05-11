<?php
 
namespace App\Models;
 
use CodeIgniter\Model;
 
class UsersModel extends Model
{
    protected $table = "users";
    protected $primaryKey = "username";
    protected $returnType = "object";
    protected $useTimestamps = true;
    protected $allowedFields = ['username', 'password', 'name'];
<<<<<<< HEAD
}
=======
}
 
>>>>>>> 9f74178bd09e6359563bf049f5aa181224f9d326
