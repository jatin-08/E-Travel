<?php

class User_info extends Model
{

    // $allowedColumns -> The name written inside only those value are taken from the database and reflected in the database.
    protected $allowedColumns = [
        'uid',
        'uname',
        'uemail',
        'upasswd',
        'ucofpasswd'
    ];

    // $beforeInsert -> It will convert the password into the hash value before it insert into the database.
    protected $beforeInsert = [
        'hash_password'
    ];

    // Creating a validate() -> It will insert the data into database after full validation.
    public function validate($data)
    {
        $this->errors = [];

        if (empty($data['uname'])) {
            $this->errors['uname'] = "Name it required";
        }

        if (isset($data['uemail'])) {

            if (empty($data['uemail']) || !filter_var($data['uemail'], FILTER_VALIDATE_EMAIL)) {
                $this->errors['uemail'] = "Email id is required";
            }
        }

        if (!empty($data['uemail'])) {
            if ($this->where('uemail', $data['uemail'])) {
                $this->errors['uemail'] = "<span class='fw-bold'>" . $data['uemail'] . "</span> is already exist";
            }
        }

        if (isset($data['upasswd'])) {
            if (($data['upasswd'] != $data['ucofpasswd']) || empty($data['upasswd'])) {
                $this->errors['upasswd'] = "Password not matched.";
            }
        } else {
            unset($data['upasswd']);
            unset($data['ucofpasswd']);
        }


        if (count($this->errors) == 0) {
            return true;
        }
        return false;
    }
}



?>