<?php
class PermissionModels extends Models{
    protected $table = 'permissions';

    public function buildPermission($userData, $isMultiUser = false){
        if(!$isMultiUser){
            return $this->_buildPermission($userData);
        }
        $result = [];
        foreach ($userData as $user){
            $result[] = $this->_buildPermission($user);
        }
        return $result;
    }

    private function _buildPermission($userData){
        $permissions = explode('|', $userData);
        $coditions = [
            'id' => [
                'typeWhere' => 'IN',
                'value' => '("' . implode('", "', $permissions) . '")'
            ]
        ];
        $permissions = $this->where($coditions)->get();
        return array_column($permissions, 'permision_code');
    }
}