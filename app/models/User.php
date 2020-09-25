<?php

class User
{
    private $connect;
    public function __construct()
    {
        $this->connect = Connection::get();
    }

    public function all()
    {
        try {
            return $this->connect->query("SELECT * FROM users where idnumber is not null")->fetchAll();
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function save($data)
    {
        try {
            $stmt = $this->connect->prepare("INSERT INTO users VALUES (?,?,?,?,?,?,?,?,?,?)");
            return $stmt->execute($data);
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }

    public function login($dataLogin)
    {
        try {
            $stmt = $this->connect->prepare("SELECT * FROM users where email = :email");
            $stmt->bindParam(":email", $dataLogin->email);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                $data = $stmt->fetch();

                if (password_verify($dataLogin->password, $data->password)) {

                    $_SESSION["credentials"] = [
                        "id" => $data->iduser,
                        "name" => $data->name,
                        "email" => $data->email,
                    ];
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        } catch (PDOException $e) {
            exit($e->getMessage());
        }
    }
}
