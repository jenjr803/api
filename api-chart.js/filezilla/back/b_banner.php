<style>
     img {
        max-width: 100px;
    }
</style>


    <h2 class="title">Banner</h2>
    <form action="api/U.php" method="post" enctype="multipart/form-data">
        <table class="table">
            <thead>
                <tr>
                    <th class="col-5">圖片</th>
                    <th class="col-3">說明</th>
                    <th class="col-1">顯示</th>
                    <th class="col-1">刪除</th>
                    <th class="col-2">更新圖片</th>
                </tr>
            </thead>
            <?php
            $rows = $Banner->all();
            foreach ($rows as $row) {
                $checked = ($row['sh'] == 1) ? 'checked' : '';
            ?>
                <tbody>
                    <tr>
                        <td>
                            <img src="./img/banner/<?= $row['img']; ?>">
                        </td>
                        <td>
                            <input type="text" name="text[]" value="<?= $row['text']; ?>">
                        </td>
                        <td>
                            <input type="radio" name="sh" value="<?= $row['id']; ?>" <?= $checked; ?>>
                        </td>
                        <td>
                            <input type="checkbox" name="del[]" value="<?= $row['id']; ?>">
                        </td>
                        <td>
                            <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                            <input type="button" class="btn btn-success U_img" data-bs-toggle="modal" data-bs-target="#m_U_img" data-id="<?= $row['id']; ?>" value="更新圖片">
                        </td>
                    </tr>
                </tbody>
            <?php
            }
            ?>
        </table>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#m_banner">
            新增banner
        </button>
        <br>
        <input type="submit" value="確定修改">
        <input type="reset" value="重置">
    </form>
    <?php
    include "./modal/m_banner.php";
    include "./modal/m_U_img.php";
    ?>


<script>
    $(document).on("click", ".U_img", function() {
        let myId = $(this).data('id')
        $(".modal-body #img_id").val(myId)
    })
</script>