<!-- Modal -->
<div class="modal fade" id="m_portfolio" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">新增作品</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="api/C_por.php" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <table>
                        <tr>
                            <td>作品圖片:</td>
                            <td>
                                <input type="file" name="img">
                            </td>
                        </tr>
                        <tr>
                            <td>作品名稱:</td>
                            <td>
                                <input type="text" name="name" class="w-100" required>
                            </td>
                        </tr>
                        <tr>
                            <td>作品描述:</td>
                            <td>
                                <textarea name="text" cols="30" rows="3" required></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>作品連結</td>
                            <td><input type="text" name="link" class="w-100" required></td>
                        </tr>
                        <tr>
                            <td>github連結</td>
                            <td><input type="text" name="github" class="w-100"></td>
                        </tr>
                        <tr>
                            <td>分類</td>
                            <td>
                                <select name="class" class="w-100 text-center">
                                    <option value="html">HTML</option>
                                    <option value="php">PHP</option>
                                    <option value="else">其他</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="確定新增">
                    <input type="reset" class="btn btn-secondary" value="重置">

                </div>
            </form>
        </div>
    </div>
</div>