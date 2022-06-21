<?php
namespace application\models;
// 같은 namespace라면 use를 적어줄 필요가 없다.
use PDO;

class BoardModel extends Model {
    public function selBoardList() {
        $sql = "SELECT i_board, title, created_at
                FROM t_board
                ORDER BY i_board DESC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function selBoard(&$param) {
        $sql = "SELECT A.i_board, A.title, A.created_at, A.i_user, B.nm, A.ctnt
                FROM t_board A
                INNER JOIN t_user B
                ON A.i_user = B.i_user
                WHERE i_board = :i_board";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':i_board', $param["i_board"]);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_OBJ);
    }

    public function delBoard(&$param) {
        $sql = "DELETE FROM t_board WHERE i_board = :i_board";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindValue(':i_board', $param["i_board"]);
        return $stmt->execute();
    }
}