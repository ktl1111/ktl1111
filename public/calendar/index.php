
<?php require_once('../../private/initialize.php'); ?>

<?php $page_title= '行事曆'; ?>

<?php include(SHARED_PATH . '/header.php'); ?>

<!-- Page Content -->
 <div class="container">
  <!-- Heading Row -->
<div class="row my-4">

 <div id="example">


	  <script>
	  $(document).ready(function() {
	   var calendar = $('#calendar').fullCalendar({
	    editable:true,
	    header:{
	     left:'prev,next today',
	     center:'title',
	     right:'month,agendaWeek,agendaDay'
	    },
	    events: 'load.php',
      eventTextColor: 'white',
	    selectable:true,
	    selectHelper:true,
	    select: function(start, end, allDay)
	    {
	     var title = prompt("請輸入活動名稱");
	     if(title)
	     {
	      var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
	      var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
	      $.ajax({
	       url:"insert.php",
	       type:"POST",
	       data:{title:title, start:start, end:end},
	       success:function()
	       {
	        calendar.fullCalendar('refetchEvents');
	        alert("新增成功!");
	       }
	      })
	     }
	    },
	    editable:true,
	    eventResize:function(event)
	    {
	     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
	     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
	     var title = event.title;
	     var id = event.id;
	     $.ajax({
	      url:"update.php",
	      type:"POST",
	      data:{title:title, start:start, end:end, id:id},
	      success:function(){
	       calendar.fullCalendar('refetchEvents');
	       alert('修改活動');
	      }
	     })
	    },

	    eventDrop:function(event)
	    {
	     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
	     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
	     var title = event.title;
	     var id = event.id;
	     $.ajax({
	      url:"update.php",
	      type:"POST",
	      data:{title:title, start:start, end:end, id:id},
	      success:function()
	      {
	       calendar.fullCalendar('refetchEvents');
	       alert("活動已修改");
	      }
	     });
	    },

	    eventClick:function(event)
	    {
	     if(confirm("確定要刪除嗎?"))
	     {
	      var id = event.id;
	      $.ajax({
	       url:"delete.php",
	       type:"POST",
	       data:{id:id},
	       success:function()
	       {
	        calendar.fullCalendar('refetchEvents');
	        alert("活動已刪除");
	       }
	      })
	     }
	    },

	   });
	  });

	  </script>


	  <br />
	  <h2 align="center"><a href="#"></a></h2>
	  <br />
	  <div class="container">
	   <div id="calendar">     </div>

	  </div>
    <!-- /.container -->


  </div>
  <!-- example -->
  </div>
  <!-- /#page-content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Winlites 2019</p>
    </div>
  </footer>
