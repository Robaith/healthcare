<table class="table table-bordered table-striped datatable" id="table-2">
    <thead>
        <tr>
            <th><?php echo get_phrase('date');?></th>
            <th><?php echo get_phrase('patient');?></th>
            <th><?php echo 'email';?></th>
            <th>Action</th>

        </tr>
    </thead>

    <tbody>
        <?php foreach ($prescription_info as $row) { ?>   
            <tr>
                <td><?php echo date("d M, Y -  H:i", $row['timestamp']); ?></td>
                <td>
                    <?php $name = $this->db->get_where('patient' , array('patient_id' => $row['patient_id'] ))->row()->name;
                        echo $name;?>
                </td>
                                <td>
                    <?php $name = $this->db->get_where('patient' , array('patient_id' => $row['patient_id'] ))->row()->email;
                        echo $name;?>
                </td>
                                <td>
                    <a  onclick="showAjaxModal('<?php echo base_url();?>index.php?modal/popup/show_prescription_details/<?php echo $row['prescription_id']?>');" 
                        class="btn btn-default btn-sm btn-icon icon-left">
                            View Prescription
                    </a>
                
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