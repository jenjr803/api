<style>
    img {
        max-width: 100px;
    }
</style>

<div class="container">
    <h2 class="title">Portfolio</h2>
    <form action="api/U.php" method="post" enctype="multipart/form-data">
        <table class="table">
            <thead>
                <tr>
                    <th class="col-2">作品圖片</th>
                    <th class="col-1">名稱</th>
                    <th class="col-2">作品描述</th>
                    <th class="col-2">作品連結</th>
                    <th class="col-1">類別</th>
                    <th class="col-2">顯示/排序</th>
                    <th class="col-2">編輯/刪除</th>

                </tr>
            </thead>
            <?php
            $rows = $Portfolio->all(" ORDER BY `rank` DESC");
            foreach ($rows as $key => $row) {
                //資料在第一筆
                if ($key == 0) {
                    $up = $row['id'] . "-" . $row['id'];
                    $down = $row['id'] . "-" . $rows[$key + 1]['id'];
                }
                //資料在最後一筆
                if ($key == (count($rows) - 1)) {
                    $down = $row['id'] . "-" . $row['id'];
                    $up = $row['id'] . "-" . $rows[$key - 1]['id'];
                }
                //資料在中間
                if ($key > 0 && $key < (count($rows) - 1)) {
                    $up = $row['id'] . "-" . $rows[$key - 1]['id'];
                    $down = $row['id'] . "-" . $rows[$key + 1]['id'];
                }
            ?>
                <tbody>
                    <tr>
                        <td>
                            <img src="./img/por/<?= $row['img']; ?>">
                        </td>
                        <td>
                            <?= $row['name']; ?>

                        </td>
                        <td>
                            <?= $row['text']; ?>

                        </td>
                        <td>
                            Link:<a href=""><?= $row['link']; ?></a>
                            Github:<a href=""><?= $row['github']; ?></a>
                        </td>
                        <td>
                            <?= $row['class']; ?>
                        </td>
                        <td>
                            上/下
                            <button class="btn btn-success">
                                <?= ($row['sh'] == 1) ? "上架中" : "隱藏中"; ?>
                            </button>
                        </td>
                        <td>
                            <input type="hidden" name="id[]" value="<?= $row['id']; ?>">
                            <input type="button" class="btn btn-success U_por" data-bs-toggle="modal" data-bs-target="#m_U_por" data-id="<?= $row['id']; ?>" value="編輯">
                            <input type="button" class="btn btn-danger" onclick="del('por_portfolio','<?= $row['id']; ?>')" value="刪除">
                        </td>
                    </tr>
                </tbody>
            <?php
            }
            ?>
        </table>
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#m_portfolio">
            新增作品
        </button>
        
    </form>
    <?php
    include "./modal/m_portfolio.php";
    include "./modal/m_U_por.php";
    ?>
</div>

<script>
    $(document).on("click", ".U_por", function() {
        let myId = $(this).data('id')
        $(".modal-body #por_id").val(myId)
    })
</script>