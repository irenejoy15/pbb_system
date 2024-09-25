<script>
    $('#myList a').on('click', function (e) {
        e.preventDefault()
        $(this).tab('show')
    })
    function get_machines(){
        $('#machine_body').empty();
        $('#expected_downtime_body').empty();
        $('#unexpected_downtime_body').empty();
        document.getElementById('hidden_button').style.display = "";
        let line = document.getElementById('lines').value;
        $.ajax({
            type: 'GET', //THIS NEEDS TO BE GET
            url: api_url+'/Downtime/GetDowntimeDetails?iDowntimeHeaderId=0&iLineId='+line,
            success: function (data) {
                irene_parse = data;
                $.each(irene_parse.machineDowntime, function(index,item) {
                    var x = document.getElementById('machine_body').insertRow(-1);
                    var i = x.insertCell(0);
                    var r = x.insertCell(1);
                    
                    let hidden_description = '<input name="mcd_desc[]" type="hidden" value="'+item.description+'">';
                    let hidden_type_id = '<input name="mcd_type_id[]" type="hidden" value="'+item.downtimeTypeId+'">';

                    i.innerHTML = item.description+hidden_description+hidden_type_id;
                    r.innerHTML = '<input class="form-control" name="mcd_minutes[]" type="number" min="0" value="0">';
                   
                });

                $.each(irene_parse.expectedDowntime, function(index,item) {
                    var x = document.getElementById('expected_downtime_body').insertRow(-1);
                    var i = x.insertCell(0);
                    var r = x.insertCell(1);
                    
                    let hidden_description = '<input name="exp_desc[]" type="hidden" value="'+item.description+'">';
                    let hidden_type_id = '<input name="exp_type_id[]" type="hidden" value="'+item.downtimeTypeId+'">';

                    i.innerHTML = item.description+hidden_description+hidden_type_id;
                    r.innerHTML = '<input class="form-control" name="exp_minutes[]" type="number" min="0" value="0">';
                   
                });

                $.each(irene_parse.unexpectedDowntime, function(index,item) {
                    var x = document.getElementById('unexpected_downtime_body').insertRow(-1);
                    var i = x.insertCell(0);
                    var r = x.insertCell(1);
                    
                    let hidden_description = '<input name="unexp_desc[]" type="hidden" value="'+item.description+'">';
                    let hidden_type_id = '<input name="unexp_type_id[]" type="hidden" value="'+item.downtimeTypeId+'">';

                    i.innerHTML = item.description+hidden_description+hidden_type_id;
                    r.innerHTML = '<input class="form-control" name="unexp_minutes[]" type="number" min="0" value="0">';
                   
                });
            }
        });
    }

    function hideall(){
        $('#machine_body').empty();
        $('#expected_downtime_body').empty();
        $('#unexpected_downtime_body').empty();
        document.getElementById('hidden_button').style.display = "none";
    }

    function create(){
   
        
        //MAIN
        let job = document.getElementById('job_number').value;
        let lines = document.getElementById('lines').value;
        let created_by = "{!!$user_auth->name!!}";
        let shift_length_create = document.getElementById('shift_length_create').value;
        //MACHINE BODY
        let mcd_desc = document.getElementsByName('mcd_desc[]');
        let mcd_type_id = document.getElementsByName('mcd_type_id[]');
        let mcd_minutes = document.getElementsByName('mcd_minutes[]');
        let mcdDetails = [];
        for (var i = 0; i < mcd_desc.length; i++) {
            let mcd_type_id_post = mcd_type_id[i].value;
            let mcd_minutes_post = mcd_minutes[i].value;
            
            mcdDetails.push({
                "iMinute": mcd_minutes_post,
                "downtimeTypeId": mcd_type_id_post
            });
        }
        //END MACHINE BODY
        
        //EXPECTED BODY
        let exp_desc = document.getElementsByName('exp_desc[]');
        let exp_type_id = document.getElementsByName('exp_type_id[]');
        let exp_minutes = document.getElementsByName('exp_minutes[]');
        console.log(exp_minutes);
        let expDetails = [];
        for (var i = 0; i < exp_desc.length; i++) {
            let exp_type_id_post = exp_type_id[i].value;
            let exp_minutes_post = exp_minutes[i].value;
            
            expDetails.push({
                "iMinute": exp_minutes_post,
                "downtimeTypeId": exp_type_id_post
            });
        }
        //END EXPECTED BODY

        //UNEXPECTED BODY
        let unexp_desc = document.getElementsByName('unexp_desc[]');
        let unexp_type_id = document.getElementsByName('unexp_type_id[]');
        let unexp_minutes = document.getElementsByName('unexp_minutes[]');
        let unexpDetails = [];
        for (var i = 0; i < unexp_desc.length; i++) {
            let unexp_type_id_post = unexp_type_id[i].value;
            let unexp_minutes_post = unexp_minutes[i].value;
            
            unexpDetails.push({
                "iMinute": unexp_minutes_post,
                "downtimeTypeId": unexp_type_id_post
            });
        }
        //END UNEXPECTED BODY
       
        $.ajax({
            type:'POST',
            method:'POST',
            url:api_url+'/Downtime/UpdateDowntimeHeader',
            crossDomain: true,
            dataType: 'json',
            headers: { 
                'Accept': 'application/json',
                'Content-Type': 'application/json' 
            },
            data:  JSON.stringify({
                "id": 0,
                "lineId": lines,
                "jobNo": job,
                "shiftLength": shift_length_create,
                "createdBy":created_by,
                "downtimeDate":"{!!$initial_date!!}",
                "machineDowntime":mcdDetails,
                "expectedDowntime":expDetails,
                "unexpectedDowntime":unexpDetails,
            }),
            success:function(data){
                expDetails = [];
                unexpDetails = [];
                mcdDetails = [];
                
                $('#machine_body').empty();
                $('#expected_downtime_body').empty();
                $('#unexpected_downtime_body').empty();
                Swal.fire({
                    position: "center",
                    icon: "success",
                    title: "SUCCESSFULLY SAVED",
                    showConfirmButton: false,
                    timer: 2000
                });
                setTimeout(() => {
                    // getCounter(line_start,year_now,month_now_start);
                    $('#modalCreate').modal('hide');
                }, "2000");
            }
        });
    }
</script>
