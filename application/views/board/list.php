<!DOCTYPE html>
<html lang="en">
<?php include_once "application/views/template/head.php"; ?>

<!-- 
    http://localhost/board/list
    board = 1차 주소값, list = 2차 주소값(메소드 실행)
-->
<body>
    <h1>리스트</h1>
    <table>
        <thead>
            <tr>
                <th>번호</th>
                <th>제목</th>
                <th>작성일</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($this->list as $item) { ?>
                <tr data-i_board="<?= $item->i_board ?>">
                    <td><?= $item->i_board ?></td>
                    <td><?= $item->title ?></td>
                    <td><?= $item->created_at ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>