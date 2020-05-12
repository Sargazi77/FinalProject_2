<?php

namespace app\modules\api\resources;


use app\models\User;

/**
 * Class UserResource
 *
 * @package app\modules\api\resources
 */
class UserResource extends User
{
    public function fields()
    {
        return [
            'id', 'username', 'access_token'
        ];
    }
}
