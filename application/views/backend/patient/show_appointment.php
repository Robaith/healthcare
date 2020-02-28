<button onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/apply_for_appointment');" 
    class="btn btn-primary pull-right">
        <?php echo get_phrase('apply_for_appointment'); ?>
</button>
<div style="clear:both;"></div>
<br>
<table class="table table-bordered table-striped datatable" id="table-2">
    <thead>
        <tr>
            <th><?php echo get_phrase('date');?></th>
            <th><?php echo get_phrase('patient');?></th>
            <th><?php echo get_phrase('doctor');?></th>
        </tr>
    </thead>

    <tbody>
        <?php foreach ($appointment_info as $row) { ?>   
            <tr>
                <td><?php echo date("d M, Y -  H:i", $row['timestamp']); ?></td>
                <td>
                    <?php $name = $this->db->get_where('patient' , array('patient_id' => $row['patient_id'] ))->row()->name;
                        echo $name;?>
                </td>
                <td>
                    <?php $name = $this->db->get_where('doctor' , array('doctor_id' => $row['doctor_id'] ))->row()->name;
                        echo $name;?>
                </td>
            </tr>
        <?php } ?>
    </tbody>
</table>


<script type="text/javascript">
    jQuery(window).load(function ()
    {
        var $ = jQuery;

        $("#table-2").dataTable({

        });

        $(".dataTables_wrapper select").select2({
            minimumResultsForSearch: -1
        });


    });
</script>