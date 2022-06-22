<?php
namespace application\models;
use PDO;


class UserModel extends Model {
    public function insUser(&$param) {
        $sql = "INSERT INTO t_user
                (uid, upw, nm, gender)
                VALUES
                (:uid, :upw, :nm, :gender)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindvalue(":uid",$param["uid"]);
        $stmt->bindvalue(":upw",$param["upw"]);
        $stmt->bindvalue(":nm",$param["nm"]);
        $stmt->bindvalue(":gender",$param["gender"]);
        $stmt->execute();
    }

    public function selUser(&$param) {
        $sql = "SELECT * FROM t_user WHERE uid = :uid";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindvalue(":uid", $param["uid"]);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}