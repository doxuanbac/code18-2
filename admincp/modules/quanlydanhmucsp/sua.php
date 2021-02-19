<?php
    if(isset($_GET['iddanhmuc'])){
        $iddanhmuc = $_GET["iddanhmuc"];
    }
?>
<?php
    $sql_sua_danhmucsp = "SELECT * FROM tbl_danhmuc WHERE id_danhmuc = '$_GET[iddanhmuc]' ORDER BY thutu DESC";
    $query_sua_danhmucsp = mysqli_query($mysqli, $sql_sua_danhmucsp);
    $row = mysqli_fetch_row($query_sua_danhmucsp)
?>
<p>Sửa danh mục sản phẩm</p>
<table border="1px" width="50%" style="border-collapse: collapse;">
    <form action="modules/quanlydanhmucsp/xuly.php" method="POST">
        <tr>
            <td>Tên danh mục</td>
            <td><input type="text" name="tendanhmuc" value=""></td>
        </tr>
        <tr>
            <td>Thứ tự</td>
            <td><input type="text" name="thutu" value=""></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="suadanhmuc" value="Cập nhập"></td>
        </tr>
    </form>
</table>