<html>
<?php include("h.php");?>
<style>
</style>
<body>
<?php include("condb.php");?>
<?php $stmt   = "select * from db_table_Test";
$query  = sqlsrv_query($connect,$stmt);
 ?>
<div class="container">
    <div class="row">
        <table class="table table-condensed table-striped table-bordered">
            <thead>
            <tr>
                <th style="text-align: center">ID</th>
                <th style="text-align: center">Name</th>
                <th style="text-align: center">Faculty</th>
                <th style="text-align: center">Faculty Name</th>

            <tr>
            </thead>
            <?php
            while ($result = sqlsrv_fetch_array($query,SQLSRV_FETCH_ASSOC))
            {
                ?>
                <tbody>
                <tr>
                    <th><?PHP echo $result["a_id"]; ?></th>
                    <th><?PHP echo $result["a_pass"];?> </th>
                    <th><?PHP echo $result["a_name"];?></th>

                </tr>
                </tbody>
                <?PHP
            }
            ?>
        </table>
    </div>
</div>
</body>
</html>