<h2>頁尾版權</h2>
<form action="api/C_footer.php" method="post">
    <table>
        <tr>
            <td>頁尾版權文字:</td>
            <td>
                <input type="text" name="text" value="<?= $Footer->find(['id' => 1])['text']; ?>">
            </td>
        </tr>
    </table>
    <input type="submit" value="確定修改">
    <input type="reset" value="重置">

</form>