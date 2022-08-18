<!-- Modal -->
<div class="modal fade" id="m_U_img" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">更新Banner圖片</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="api/U_img.php" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    <table>
                        <tr>
                            <td>Banner圖片:</td>
                            <td>
                                <input type="file" name="img">           
                            </td>
                        </tr>
                    </table>
                    <!-- <input type="hidden" name="id"> -->
                    <input type="hidden" name="id" id="img_id">
                </div>
                <div class="modal-footer">
                    <input type="submit" class="btn btn-success" value="更新">
                    <input type="reset" class="btn btn-secondary" value="重置">
                    
                </div>
            </form>
        </div>
    </div>
</div>
