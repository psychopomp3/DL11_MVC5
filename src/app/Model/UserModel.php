<?php
namespace App\Model;

use App\App;
use App\Weblitzer\Model;


class UserModel extends Model
{
    protected static $table = 'user';

    public static function insert($user)
    {
        App::getDatabase()->prepareInsert(
            'INSERT INTO ' . self::$table . ' (nom, email) VALUES (?, ?) ',
            [
                $user['nom'],
                $user['email']
            ]
            );

    }

    public static function update($user, $id)
    {
        App::getDatabase()->prepareInsert(
            'UPDATE ' . self::$table . ' SET nom = ?, email = ? WHERE id = ' . $id ,
            [
                $user['nom'],
                $user['email']
            ]
            );
    }

}
?>