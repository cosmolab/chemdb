<?php echo form_open(site_url('quartz_chem/add_split_weights')); ?>

<input type=hidden name="batch_id" value="<?php echo $batch->id; ?>">
<input type=hidden name="is_refresh" value="true">

<table width="800" class="arial10">
    <tr>
        <td>
            <h3>Batch information:</h3><p/>
            Batch ID: <?php echo $batch->id; ?><br>
            Batch start date: <?php echo $batch->start_date; ?><br>
            Batch owner: <?php echo $batch->owner; ?><br>
            Batch description: <?php echo $batch->description; ?><p/>
        </td>
    </tr>
    <tr>
        <td colspan="4">
            Batch notes:<br>
            <textarea align="center" name="notes" rows="5" cols="100"><?php echo $batch->notes; ?></textarea>
        </td>
    </tr>
    <tr>
        <td align="center">
            <input type="submit" value="Save and refresh"><br>
        </td>
    </tr>
    <tr><td><hr></td></tr>
</table>

<?php if ($errors): ?>
    <?php echo validation_errors(); ?>
<?php endif; ?>

<table width="800" class="arial8">
    <tr>
        <td colspan="3" class="arial12">Sample information:</td>
        <td colspan="5" class="arial8">
            <input type="button" id="setBkrSeq" value="Set Beaker Sequence">
        </td>
    </tr>
    <tr>
        <td>Analysis ID</td>
        <td>Sample name</td>
        <td>Dissolution bottle ID</td>
        <td>Split number</td>
        <td>Split beaker ID</td>
        <td>Beaker tare wt.</td>
        <td>Beaker + split wt.</td>
        <td>Split wt.</td>
    </tr>

<?php
for ($i = 0; $i < $numsamples; $i++): // main sample loop
    $an = $batch->Analysis[$i];
?>

    <tr><td colspan="8"><hr></td></tr>

        <?php for ($s = 0; $s < $an->Split->count(); $s++): ?>
            <tr>

            <?php if ($s == 0): ?>

                <td><?php echo $an->id; ?></td>
                <td>
                    <?php
                    if ($an->Sample->name != null) {
                        echo $an->Sample->name;
                    } else {
                        echo $an->sample_name;
                    }
                    ?>
                </td>
                <td align="center">
                    <?php echo $an->DissBottle ? $an->DissBottle->bottle_number : ''; ?>
                </td>

            <?php elseif ($s == $an->Split->count() - 1): ?>

                <td colspan="2"></td>
                <td align="center">
                    <input type="submit" value="Add a split" name="<?php echo 'a' . $i; ?>" tabindex="-1">
                </td>

            <?php else: ?>

                <td colspan="3"></td>

            <?php endif; ?>

            <td>Split <?php echo $s + 1; ?>:</td>
            <td>
                <select name="split_bkr[]" class="bkr_select">
                    <?php
                    foreach ($bkr_list as $b) {
                        echo "<option value=$b->id ";
                        if ($b->id == $an->Split[$s]->split_bkr_id) {
                            echo 'selected';
                        }
                        echo "> $b->bkr_number </option>\n";
                    }
                    ?>
                </select>
            </td>

            <td>
                <input type="text" name="bkr_tare[]" value="<?php echo $an->Split[$s]->wt_split_bkr_tare; ?>">
            </td>
            <td>
                <input type="text" name="bkr_split[]" value="<?php echo $an->Split[$s]->wt_split_bkr_split; ?>">
            </td>
            <td>
                <?php
                // calculate and print split weight
                $split_wt = $an->Split[$s]->wt_split_bkr_split
                          - $an->Split[$s]->wt_split_bkr_tare;
                printf('%.4f', $split_wt);
                ?>
            </td>
        </tr>

        <?php endfor; // split loop?>

<?php endfor; // sample loop?>

    <tr><td colspan="8"><hr></td></tr>
</table>

<table width="800">
    <tr>
    <td align="center">
    <input type="submit" value="Save and refresh">
    </td>
    </tr>
    <tr><td><hr></td></tr>
</table>

<?php echo form_close(); ?>

<?php $this->load->view('quartz_chem/bottom_links'); ?>
