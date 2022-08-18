<!-- Modal -->
<div class="modal fade" id="m_banner" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">新增Banner</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="api/C.php" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <table>
                        <tr>
                            <td>Banner圖片:</td>
                            <td>
                                <input type="file" name="img">                            
                            </td>
                        </tr>
                        <tr>
                            <td>說明文字:

                            </td>
                            <td><input type="text" name="text"></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-primary" value="新增">
                    <input type="reset" class="btn btn-secondary" value="重置">
                    
                </div>
            </form>
        </div>
    </div>
</div>