<div class="container-xl" style="margin-top: 50px;">
    <div class="table-responsive">
        <div class="table-wrapper">
            <a href="#addEmloyeeModal" class="add" data-bs-toggle="modal">
                <button type="button" class="btn btn-success" >Thêm mới</button>
            </a>
            <button type="button" class="btn btn-success" onclick="getAllStudents()">In sinh vien</button>
            <table class="table">
                <?php
                $product = [
                    ['Name' => 'Sản phẩm 1', 'price' => 1000],
                    ['Name' => 'Sản phẩm 2', 'price' => 2000],
                    ['Name' => 'Sản phẩm 3', 'price' => 3000]
                ];
                ?>
                <thead>
                    <tr>
                        <th scope="col">Sản phẩm</th>
                        <th scope="col">Giá thành</th>
                        <th scope="col">Sửa</th>
                        <th scope="col">Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($product as $product): ?>
                        <tr>
                            <td><?= htmlspecialchars($product['Name']) ?></td>
                            <td><?= htmlspecialchars($product['price']) ?> VND</td>
                            <td>
                                <a href="#editEmployeeModal" class="edit" data-bs-toggle="modal"><i class="material-icons"
                                        title="Edit">&#xE254;</i></a>
                            </td>
                            <td>
                                <a href="#deleteEmployeeModal" class="delete" data-bs-toggle="modal">
                                    <i class="material-icons" title="Delete">&#xE872;</i></a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
