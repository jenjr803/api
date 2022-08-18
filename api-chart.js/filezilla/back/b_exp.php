<div class="container">
    <h2>經歷</h2>
    <form action="api/C_exp.php" method="post">
        <table>
            <tr>
                <td>年度:</td>
                <td>
                    <input type="text" name="year">
                </td>
            </tr>
            <tr>
                <td>經歷</td>
                <td>
                    <textarea name="exp" cols="30" rows="10"></textarea>
                </td>
            </tr>
        </table>
        <input type="submit" value="確定新增">
    </form>
    <form action="api/U_exp.php" method="post">
        <?php
        $rows = $Exp->all();
        foreach ($rows as $row) {
        ?>
            <table>
                <tr>
                    <td>年度:</td>
                    <td>
                        <input type="text" name="year[]" value="<?= $row['year']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>經歷</td>
                    <td>
                        <textarea name="exp[]" cols="30" rows="10"><?= $row['exp']; ?></textarea>
                    </td>
                </tr>
                <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
            </table>
            <input type="submit" value="確定修改">
            <input type="button" class="btn btn-danger" onclick="del('por_exp','<?= $row['id']; ?>')" value="刪除">
        <?php
        }
        ?>
    </form>
</div>