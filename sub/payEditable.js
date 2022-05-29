$( document ).ready(function() {
    $('#editableTable').SetEditable({
        columnsEd: "0,1,2,3",
        onEdit: function(columnsEd) {
          var pay_id = columnsEd[0].childNodes[1].innerHTML;
          var pay = columnsEd[0].childNodes[2].innerHTML;
          var job = columnsEd[0].childNodes[3].innerHTML;
          $.ajax({
              type: 'POST',			
              url : "payAction.php",	
              dataType: "json",					
              data: {pay_id:pay_id, pay:pay, job:job, action:'edit'},			
              success: function (response) {
                  if(response.status) {
                  }						
              }
          });
        },
        onBeforeDelete: function(columnsEd) {
        var empId = columnsEd[0].childNodes[1].innerHTML;
        $.ajax({
              type: 'POST',			
              url : "payAction.php",
              dataType: "json",					
              data: {id:empId, action:'delete'},			
              success: function (response) {
                  if(response.status) {
                  }			
              }
          });
        },
      });
  });