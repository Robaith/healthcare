<div class="row">
    <!-- CALENDAR-->
    <div class="col-md-6 col-xs-6">    
        <div class="panel panel-primary " data-collapsed="0">
            <div class="panel-heading">
                <div class="panel-title">
                    <i class="fa fa-calendar"></i>
                    <?php echo get_phrase('appointment_schedule'); ?>
                </div>
            </div>
            <div class="panel-body" style="padding:0px;">
                <div class="calendar-env">
                    <div class="calendar-body">
                        <div id="appointment_calendar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xs-6">    
        <div class="panel panel-primary " data-collapsed="0">
            <div class="panel-heading">
                <div class="panel-title">
                    <i class="fa fa-calendar"></i>
                    <?php echo get_phrase('event_schedule'); ?>
                </div>
            </div>
            <div class="panel-body" style="padding:0px;">
                <div class="calendar-env">
                    <div class="calendar-body">
                        <div id="event_calendar"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


