
<!-- Modal -->
<div class="modal fade" id="m_U_por" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">編輯作品</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="api/U_por.php" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <table>
                        <tr>
                            <td>更新圖片</td>
                            <td>
                                <input type="file" name="img">

                            </td>
                        </tr>
                        <tr>
                            <td>名稱</td>
                            <td>
                                <input type="text" name="name" class="w-100" required value="">
                            </td>
                        </tr>

                        <tr>
                            <td>文字敘述</td>
                            <td><textarea name="text" cols="30" rows="3" required></textarea></td>
                        </tr>
                        <tr>
                            <td>作品連結</td>
                            <td><input type="text" name="link" class="w-100" required value=""></td>
                        </tr>
                        <tr>
                            <td>github連結</td>
                            <td><input type="text" name="github" class="w-100" value=""></td>
                        </tr>
                        <tr>
                            <td>分類</td>
                            <td>
                                <select name="class" class="w-100 text-center">
                                    <!-- <?php
                                            $f = "f_por";
                                            $b = "b_por";
                                            $d = "d_por";
                                            $selected1 = ($por['class'] == "$f") ? "selected" : "";
                                            $selected2 = ($por['class'] == "$b") ? "selected" : "";
                                            $selected3 = ($por['class'] == "$d") ? "selected" : "";
                                            ?> -->
                                    <!-- <option value="<?= $f; ?>" <?= $selected1; ?>>前端(f_por)</option>
                                    <option value="<?= $b; ?>" <?= $selected2; ?>>後端(b_por)</option>
                                    <option value="<?= $d; ?>" <?= $selected3; ?>>設計(d_por)</option> -->
                                    <option value="html">HTML</option>
                                    <option value="php">PHP</option>
                                    <option value="else">其他</option>
                                </select>
                            </td>
                        </tr>

                    </table>
                    <input type="hidden" name="id" id="por_id">
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="更新">
                    <input type="reset" class="btn btn-secondary" value="重置">

                </div>
            </form>
        </div>
    </div>
</div>