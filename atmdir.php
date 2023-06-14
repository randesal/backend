<div class="col-4"><label class="sr-only col-form-label-sm" for="partNo">Part No</label></div>
<div class="col-8 mb-2 ">
<select class="form-select form-select-sm" name="atmdir" id="partNo">
    <?php
    $dir    = '\\\\192.168.1.7\Nasserver_PE\Adrian\TTV\XLS\\';
    $files2 = scandir($dir, SCANDIR_SORT_ASCENDING);
    foreach($files2 as &$val){
        $firstletter = substr($val,0,1);
        if($firstletter == 'B' && $firstletter != ' '){
        echo "<option value='" . $val . "'>".$val."</option>";
        }
    };
    ?>      
</select>
</div>