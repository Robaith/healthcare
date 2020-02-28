<button onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/add_appointment');" 
    class="btn btn-primary pull-right">
        <?php echo get_phrase('add_appointment'); ?>
</button>
<div style="clear:both;"></div>
<br>
<table class="table table-bordered table-striped datatable" id="table-2">
    <thead>
        <tr>
            <th></th>
            <th><?php echo get_phrase('date');?></th>
            <th><?php echo get_phrase('patient');?></th>
            <th><?php echo get_phrase('doctor');?></th>
            <th><?php echo get_phrase('options');?></th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($appointment_info as $row) { ?>   
            <tr>
                <td></td>
                <td><?php echo date("d M, Y -  H:i", $row['timestamp']); ?></td>
                <td>
                    <?php $name = $this->db->get_where('patient' , array('patient_id' => $row['patient_id'] ))->row()->name;
                        echo $name;?>
                </td>
                <td>
                    <?php $name = $this->db->get_where('doctor' , array('doctor_id' => $row['doctor_id'] ))->row()->name;
                        echo $name;?>
                </td>
                <td>
                    <a  onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/edit_appointment/<?php echo $row['appointment_id']?>');" 
                        class="btn btn-default btn-sm btn-icon icon-left">
                            <i class="entypo-pencil"></i>
                            View
                    </a>
                    <a href="<?php echo base_url();?>index.php?doctor/appointment/delete/<?php echo $row['appointment_id']?>" 
                        class="btn btn-danger btn-sm btn-icon icon-left" onclick="return checkDelete();">
                            <i class="entypo-cancel"></i>
                            Delete
                    </a>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>


