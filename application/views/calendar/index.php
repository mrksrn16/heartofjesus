<link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fullcalendar/fullcalendar.min.css" />
<script src="<?php echo base_url() ?>assets/plugins/fullcalendar/lib/moment.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/fullcalendar/fullcalendar.min.js"></script>
<script src="<?php echo base_url() ?>assets/plugins/fullcalendar/gcal.js"></script>
<div class="col-sm-8">
  <span class="box blue"></span><label style="font-size: 12px;">Liturgical</label>
  <span class="box teal marLeft"></span><label style="font-size: 12px;">Holidays</label>
  <span class="box pink marLeft"></span><label style="font-size: 12px;">Marriage</label>
  <span class="box lightblue marLeft"></span><label style="font-size: 12px;">Baptist</label>
  <span class="box gray marLeft"></span><label style="font-size: 12px;">Burial</label>
  <span class="box orange marLeft"></span><label style="font-size: 12px;">Blessing</label>
  <span class="box green marLeft"></span><label style="font-size: 12px;">Done Event</label>
</div>
<div class="col-sm-4" data-aos="fade-right">
  <div class="form-group">
      <label class="col-sm-2 control-label">Search</label>
      <div class="col-sm-10">
        <input type="date" name="" class="form-control" id="filterCalendar">
      </div>
    </div>
</div>
<div class="row" style="margin-top: 10px;"></div>
<div id="calendar" style="margin-top: 10px;" data-aos="fade-up">
</div>

<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 <h4 class="modal-title" id="myModalLabel">Add Event</h4>
             </div>
             <div class="modal-body">
                  <?php $attr = array( "class"=>"form-horizontal", "role" => "form");?>
                      <?php echo form_open('calendar/add_event', $attr);?>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" name="name" class="form-control" placeholder="Name" required="">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-10">
                          <input type="text" name="description" class="form-control" placeholder="Description">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Start Date</label>
                        <div class="col-sm-10">
                          <span class="start"></span>
                          <input type="hidden" name="start" value="" id="hidden_start_date">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">End Date</label>
                        <div class="col-sm-10">
                          <input type="date" name="end" class="form-control end_date" value="">
                        </div>
                        <!-- <div class="col-sm-2">
                          <a href="#" id="btnNow"><button type="button" class="btn btn-sm btn-primary">Now</button></a>
                        </div> -->
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Time</label>
                        <div class="col-sm-10">
                          <input type="time" name="event_time" value="" class="form-control time_of_event">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Name of Priest</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="name_of_priest" id="name_of_priest">
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">&nbsp;</label>
                        <div class="col-sm-10">
                          <input type="submit" name="submit" value="Save" class="btn btn-primary">
                        </div>
                      </div>
                    </form>
                    <center>
                    	Other Events
                    </center>
                    <select class="form-control" id="selEvent">
                    	<option value="marriage">Marriage</option>
                    	<option value="christening">Christening</option>
                    	<option value="burial">Burial</option>
                    	<option value="blessing">Blessing</option>
                    </select>
             </div>
             <div class="modal-footer">
             </div>
        </div>
    </div>
</div>
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" data-backdrop="false">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
             <div class="modal-header">
                 <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                 <h4 class="modal-title" id="myModalLabel">Edit Event - <span class="event_title"></span></h4>
             </div>
             <div class="modal-body">
                  <?php $attr = array( "class"=>"form-horizontal", "role" => "form");?>
                      <?php echo form_open('calendar/update_event', $attr);?>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                          <input type="text" name="name" class="form-control" placeholder="Name" required="" id="eventName">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Description</label>
                        <div class="col-sm-10">
                          <input type="text" name="description" class="form-control" placeholder="Description" id="eventDescription">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Start Date</label>
                        <div class="col-sm-10">
                          <span id=""></span>
                          <input type="date" name="start_event" class="form-control end_date" id="start_date">
                          <!-- <input type="hidden" name="start_event" class="hidden_start_date"> -->
                          <input type="hidden" name="event_id" id="event_id">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">End Date</label>
                        <div class="col-sm-10">
                          <input type="date" name="end" class="form-control end_date">
                        </div>
                       <!--  <div class="col-sm-2">
                          <a href="#" id="btnNow"><button type="button" class="btn btn-sm btn-primary">Now</button></a>
                        </div> -->
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Time</label>
                        <div class="col-sm-10">
                          <input type="time" name="event_time" value="" id="event_time" class="form-control">
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="col-sm-2 control-label">Name of Priest</label>
                        <div class="col-sm-10" style="padding-top: 10px;">
                          <span class="name_of_priest"><b></b></span>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">Priests</label>
                        <div class="col-sm-10">
                          <select class="form-control" name="name_of_priest" id="name_of_priest2">
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">&nbsp;</label>
                        <div class="col-sm-10">
                          <input type="submit" name="submit" value="Save" class="btn btn-primary">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="col-sm-2 control-label">&nbsp;</label>
                        <div class="col-sm-10">
                          <a href="" onclick="return confirm('Delete event?')" id="remove_event"><button class="btn btn-danger" type="button">Remove</button></a>
                        </div>
                      </div>
                    </form>
             </div>
             <div class="modal-footer">
             </div>
        </div>
    </div>
</div>
<?php if($this->uri->segment(2)):?>
<script type="text/javascript">
  window.location.href = "<?php echo base_url();?>" + 'calendar';
</script>
<?php  endif;?>
<script type="text/javascript">
$(document).ready(function() {
	var date_last_clicked;
	var base_url = "<?php echo base_url();?>";
	var selected_date;
  var date_of_event;
  var dateNow = "<?php echo date('Y-m-d');?>";
  $('#btnNow').click(function(){
      $('.end_date').val(dateNow);
  });
	$('#selEvent').change(function(){
		var sel_event = $('#selEvent option:selected').val();
		if(sel_event == 'marriage'){
			window.location.href = base_url + 'marriage/add/' + selected_date ;
		}
		if(sel_event == 'christening'){
			window.location.href = base_url + 'baptist/add/' + selected_date ;
		}
		if(sel_event == 'burial'){
			window.location.href = base_url + 'burial/add/' + selected_date ;
		}
		if(sel_event == 'blessing'){
			window.location.href = base_url + 'blessing/add/' + selected_date ;
		}
	});
  $('#filterCalendar').change(function(){
    $('#calendar').fullCalendar( 'gotoDate', $(this).val() );

  });
	$('.close').click(function(){
		date_last_clicked.css('background-color', 'transparent');
	});
   $('#calendar').fullCalendar({
      eventLimit: 4, // If you set a number it will hide the itens
      eventLimitText: "more",
       events: [{
          title:"Mass",
          start: '06:00', 
          end: '07:00', 
          dow: [0] 
        },
        {
          title:"Mass",
          start: '07:30', 
          end: '08:30', 
          dow: [0] 
        },
        {
          title:"Mass",
          start: '09:00', 
          end: '10:00', 
          dow: [0] 
        },
        {
          title:"Mass",
          start: '11:00', 
          end: '12:00', 
          dow: [0] 
        },
        {
          title:"Mass",
          start: '16:30', 
          end: '18:00', 
          dow: [0] 
        },
        {
          title:"Mass",
          start: '18:00', 
          end: '19:30', 
          dow: [0] 
        },
        {
          title:"Mass",
          start: '06:30', 
          end: '7:30', 
          dow: [1] 
        },
        {
          title:"Mass",
          start: '06:30', 
          end: '7:30', 
          dow: [2] 
        },
        {
          title:"Novena",
          start: '06:30', 
          end: '7:30', 
          dow: [3] 
        },
        {
          title:"Novena",
          start: '18:00', 
          end: '19:30', 
          dow: [3] 
        },
        {
          title:"Healing Mass",
          start: '06:30', 
          end: '07:30', 
          dow: [4] 
        },
        {
          title:"Mass",
          start: '06:30', 
          end: '07:30', 
          dow: [5] 
        },
        {
          title:"Mass",
          start: '06:30', 
          end: '07:30', 
          dow: [6] 
        },
        {
          title:"Anticipated Mass",
          start: '18:30', 
          end: '19:30', 
          dow: [6] 
        },
        {
          start: '2018-03-26',
          end: '2018-03-31',
          rendering: 'background'
        },
      ],
      eventSources: [
           {
               events: function(start, end, timezone, callback) {
                   $.ajax({
                   url: '<?php echo base_url() ?>calendar/get_events',
                   dataType: 'json',
                   data: {
                   // our hypothetical feed requires UNIX timestamps
                   start: start.unix(),
                   end: end.unix()
                   },
                   success: function(msg) {
                       var events = msg.events;
                       callback(events);
                   }
                   });
                   
               },
           },
            {
               events: function(start, end, timezone, callback) {
                   $.ajax({
                   url: '<?php echo base_url() ?>blessing/get_events',
                   dataType: 'json',
                   data: {
                   // our hypothetical feed requires UNIX timestamps
                   start: start.unix(),
                   end: end.unix()
                   },
                   success: function(msg) {
                       var events = msg.events;
                       callback(events);
                   }
                   });
                   
               },
               color: '#FF9800',     // an option!
               textColor: '#fff' // an option!
           },
           {
               events: function(start, end, timezone, callback) {
                   $.ajax({
                   url: '<?php echo base_url() ?>baptist/get_events',
                   dataType: 'json',
                   data: {
                   // our hypothetical feed requires UNIX timestamps
                   start: start.unix(),
                   end: end.unix()
                   },
                   success: function(msg) {
                       var events = msg.events;
                       callback(events);
                   }
                   });
                   
               },
               color: '#00BCD4',     // an option!
               textColor: '#fff' // an option!
           },
           {
             events: function(start, end, timezone, callback) {
                 $.ajax({
                 url: '<?php echo base_url() ?>burial/get_events',
                 dataType: 'json',
                 data: {
                 // our hypothetical feed requires UNIX timestamps
                 start: start.unix(),
                 end: end.unix()
                 },
                 success: function(msg) {
                     var events = msg.events;
                     callback(events);
                 }
                 });
                 
             },
             color: '#607D8B',     // an option!
               textColor: '#fff' // an option!
           },
           {
             events: function(start, end, timezone, callback) {
                 $.ajax({
                 url: '<?php echo base_url() ?>marriage/get_events',
                 dataType: 'json',
                 data: {
                 // our hypothetical feed requires UNIX timestamps
                 start: start.unix(),
                 end: end.unix(),
                 },
                 success: function(msg) {
                     var events = msg.events;
                     callback(events);
                 }
                 });
             },
             color: '#E91E63',     // an option!
               textColor: '#fff' // an option!
           },
           {
             events: function(start, end, timezone, callback) {
                 $.ajax({
                 url: '<?php echo base_url() ?>holidays/get_holidays',
                 dataType: 'json',
                 data: {
                 // our hypothetical feed requires UNIX timestamps
                 start: start.unix(),
                 end: end.unix()
                 },
                 success: function(msg) {
                     var events = msg.events;
                     callback(events);
                 }
                 });
             },
             color: '#009688',     // an option!
               textColor: '#fff' // an option!
           },

       ],
      dayClick: function(date, jsEvent, view) {
          var year = "<?php echo date('Y')?>";
          var not_allowed_dates = [year + "-03-26", year + "-03-27", year + "-03-28" ,year + "-03-29", year + "-03-30", year + "-03-31"];
          if(isInArray(date.format('YYYY-MM-DD'), "[" + not_allowed_dates + "]")){

          }else{
             date_last_clicked = $(this);
            $(this).css('background-color', '#bed7f3');
            var sel = (pad(date.month() + 1) )+"/" + pad(date.date())+"/"+date.year();
            $(".start").text(sel);
            selected_date = date.year()+"-"+(pad(date.month() + 1) )+"-"+pad(date.date());
            date_of_event = selected_date;
            $("#hidden_start_date").val(selected_date);
            $("#start_date").val(selected_date);
            $('#addModal').modal();
          }
      },
       eventClick: function(event, jsEvent, view) {

          $('#eventName').val(event.title);
          $('.event_title').text(event.title);
          $('.name_of_priest').text(event.priest);
          $('#eventDescription').val(event.description);
          $('#event_time').val(event.event_time);
          //$('#start_date').text(event.start.format('YYYY/MM/DD'));
          $('#start_date').val(event.start.format('YYYY-MM-DD'));
          $('.hidden_start_date').val(event.start.format('YYYY-MM-DD'));
          $('#end_date').val(event.end.subtract(1, "days").format('YYYY-MM-DD'));
          $('#remove_event').attr('href' , base_url + 'calendar/remove_event/' + event.id);
          $('#event_id').val(event.id);
          if(event.slug == 'blessing'){
            window.location.href = base_url + 'blessing/edit/' + event.id;
          }else if(event.slug == 'baptist'){
            window.location.href = base_url + 'baptist/edit/' + event.id;
          }else if(event.slug == 'burial'){
            window.location.href = base_url + 'burial/edit/' + event.id;
          }else if(event.slug == 'marriage'){
            window.location.href = base_url + 'marriage/edit/' + event.id + '/' + event.bride_id + '/' + event.broom_id;
          }else{
            $('#editModal').modal();
          }
       },
       eventAfterAllRender: function(){
          $(".fc-title:contains('Done')").addClass('event-done');
        }
    });
    var time_of_event;
    $('.time_of_event').change(function(){
        time_of_event = $(this).val();
        if(time_of_event && date_of_event){
            $('#name_of_priest option').remove();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>priests/get_priest",
                data:{ date_of_event:date_of_event, time_of_event:time_of_event },
                dataType: "JSON",
                success: function(data){
                    //alert(data.result[0]['name']);
                    if(data.result){
                        selOpts = "";
                        for(var i = 0; i < data.result.length; i++){
                            selOpts += "<option value='"+data.result[i]['name']+"'>"+data.result[i]['name']+"</option>";
                        }
                        $('#name_of_priest').append(selOpts);
                    }else{
                       alert('No priest available/found'); 
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    // alert('No priest available/found');
                }
            });
        }
    });
    $('#event_time').change(function(){
      date_of_event = $('#start_date').val();
        time_of_event = $(this).val();
        if(time_of_event && date_of_event){
            $('#name_of_priest2 option').remove();
            $.ajax({
                type: "POST",
                url: "<?php echo base_url();?>priests/get_priest",
                data:{ date_of_event:date_of_event, time_of_event:time_of_event },
                dataType: "JSON",
                success: function(data){
                    //alert(data.result[0]['name']);
                    if(data.result){
                        selOpts = "";
                        for(var i = 0; i < data.result.length; i++){
                            selOpts += "<option value='"+data.result[i]['name']+"'>"+data.result[i]['name']+"</option>";
                        }
                        $('#name_of_priest2').append(selOpts);
                    }else{
                       alert('No priest available/found'); 
                    }
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    // alert('No priest available/found');
                }
            });
        }
    });

    function pad(n){return n<10 ? '0'+n : n}
    function isInArray(value, array) {
      return array.indexOf(value) > -1;
    }
});
</script>