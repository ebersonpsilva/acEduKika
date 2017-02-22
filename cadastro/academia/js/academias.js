jQuery(function($){
    $("#cnpj").inputmask("99.999.999/9999-99");
    $("#cep").inputmask("99999-999");
    $("#numero").maxlength({max: 5,showFeedback:false});
    $("input[name=telefone]").inputmask("(99) 9999-9999");
    $("input[name=celular]").blur(function(){
        $(this).inputmask("(99) 9999[9]-9999");
    });
    $("#id").val(0);
    $("#action").val('new');
    $(".close").click(function(){
    	$(".alert").hide();
    });
    $('[data-toggle="tooltip"]').tooltip();
    $("input[name=celular]").focus(function(){
        var tel = $(this).val();
        tel = tel.replace(/_/g,"");
        if(tel.length == 14){
            $("input[name=celular]").inputmask("(99) 9999-9999");
        }else{
            $("input[name=celular]").inputmask("(99) 99999-9999");
        }
    });
    
    $("#cnpj").blur(function(){
        var dc = $(this).val();
        if(dc !== ''){
            $.post('../libs/php/validDocumento.php',{doc:dc},function(res){
                if(res.rs == 0){
                    $("#Alert").fadeIn(0);
                    $("#rsAlert").html(res.msg);
                    $("#cnpj").focus();
                }else if(res.rs == 1){
                    if(contElement('#rsAlert') == 1){
                        $("#rsAlert").empty();
                        $("#Alert").hide();
                    }else{
                        $("#mCnpj").remove();
                    }
                }
            },"json");
        }
    });

    var contElement = function(campo){
        var qtde = $(campo+" div").length;
        return qtde;
    }
    
    fecha = function(campo){
        $(campo).fadeOut();
    }
    
    resetForm = function(){
        $("#academias")[0].reset();
        $("#bairro").removeAttr('readonly');
        $("#endereco").removeAttr('readonly');
        $("#cidade").removeAttr('readonly');
        $("#idCep").val('');
        $("#cnpj").val('').focus();
        $("#action").val('new');
        $("#id").val(0);
    }
    
    focaMsg = function(campo){
        $('html, body').animate({
            scrollTop: $(campo).offset().top
        }, 'slow');
    }
    
    checkMsg = function(){
        if($("#Warning").is(':visible')){
            $("#Warning").hide();
            $("#rsWarning").empty();
        }
        if($("#Info").is(':visible')){
            $("#Info").hide();
            $("#rsInfo").empty();
        }
        if($("#Alert").is(':visible')){
            $("#Alert").hide();
            $("#rsAlert").empty();
        }
    }
    
    editar = function(id){
    	$("#action").val('alter');
    	$("#id").val(id);
    	$.post('../cadastro/academia/php/sAcademia.php',{lista:2,id:id},function(res){
            //console.log(res);
            if(res.rs == 1){
                $.each(res,function(index,value){
            		var campos = $("#academias").find('input,select');
            		var botoes = $("#academias").find('button');
            		campos.removeAttr('readonly');
            		botoes.removeAttr('disabled');
                	if(index != 'rs'){
                		$("#cnpj").val(value.cnpj);
	                    $("#razaoSocial").val(value.rSocial);
	                    $("#responsavel").val(value.responsavel);
	                    $("#telefone").val(value.telefone);
	                    $("#cep").val(value.cep);
	                    $("#idCep").val(value.idCep);
	                    $("#bairro").val(value.bairro);
	                    $("#endereco").val(value.endereco);
	                    $("#cidade").val(value.cidade);
	                    $("#numero").val(value.numero);
	                    $("#complemento").val(value.complemento);
	                    $("#email").val(value.email);
	                    $("#celular").val(value.celular);
	                    (value.matriz == 1) ? $("#quis").prop('checked',true) : $("#quis").prop('checked',false);
	                    focaMsg(".right_col");
                    	var e=$("#formCadastro").closest(".x_panel"),t=$("#formCadastro").find("i"),n=e.find(".x_content");
                        e.attr("style")?n.slideToggle(200,function(){
                        	e.removeAttr("style")
	                    }):'';
                    } 
                });
            }else if(res.rs == 2){
                $("#Warning").fadeIn();
                $("#rsWarning").html(res.msg);
                focaMsg(".right_col");
            }else if(res.rs == 0){
                $("#Alert").fadeIn();
                $("#rsAlert").html(res.msg);
                focaMsg(".right_col");                        
            }else{
                console.log("Não foi gerado lista!");
            }
        },"json");
    }
    
    visualizar = function(id){
    	$("#action").val('visualizar');
    	$("#id").val(id);
    	$.post('../cadastro/academia/php/sAcademia.php',{lista:2,id:id},function(res){
            //console.log(res);
            if(res.rs == 1){
                $.each(res,function(index,value){
                	if(index != 'rs'){
                		var campos = $("#academias").find('input,select');
                		var botoes = $("#academias").find('button');
                		campos.attr('readonly','readonly');
                		botoes.attr('disabled','disabled');
                		$("#cnpj").val(value.cnpj);
	                    $("#razaoSocial").val(value.rSocial);
	                    $("#responsavel").val(value.responsavel);
	                    $("#telefone").val(value.telefone);
	                    $("#cep").val(value.cep);
	                    $("#idCep").val(value.idCep);
	                    $("#bairro").val(value.bairro);
	                    $("#endereco").val(value.endereco);
	                    $("#cidade").val(value.cidade);
	                    $("#numero").val(value.numero);
	                    $("#complemento").val(value.complemento);
	                    $("#email").val(value.email);
	                    $("#celular").val(value.celular);
	                    (value.matriz == 1) ? $("#quis").prop('checked',true) : $("#quis").prop('checked',false);
	                    focaMsg(".right_col");
                    	var e=$("#formCadastro").closest(".x_panel"),t=$("#formCadastro").find("i"),n=e.find(".x_content");
                        e.attr("style")?n.slideToggle(200,function(){
                        	e.removeAttr("style")
	                    }):'';
                    } 
                });
            }else if(res.rs == 2){
                $("#Warning").fadeIn();
                $("#rsWarning").html(res.msg);
                focaMsg(".right_col");
            }else if(res.rs == 0){
                $("#Alert").fadeIn();
                $("#rsAlert").html(res.msg);
                focaMsg(".right_col");                        
            }else{
                console.log("Não foi gerado lista!");
            }
        },"json");
    }
    
    deletar = function(id){
    	if(confirm('Deseja realmente excluir essa academia de seu sistema?')){
	    	$("#id").val(id);
	    	$.post('../cadastro/academia/php/uAcademia.php',{id:id},function(res){
	            //console.log(res);
	            if(res.rs == 1){
	                checkMsg();
	                $("#Success").fadeIn();
	                $("#rsSucess").empty().html(res.msg);
	                setInterval("fecha('#Success')", 10000);
	                focaMsg(".right_col");   	
	                ltAcademia();
	            }else if(res.rs == 2){
	                $("#Warning").fadeIn();
	                $("#rsWarning").html(res.msg);
	                focaMsg(".right_col");
	            }else if(res.rs == 0){
	                $("#Alert").fadeIn();
	                $("#rsAlert").html(res.msg);
	                focaMsg(".right_col");                        
	            }else{
	                console.log("Algo de errado ocorreu!");
	            }
	        },"json");
    	}
    }
    var cb = function (start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
        $('#reportrange_right span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    };

    var optionSet1 = {
        startDate: moment().subtract(29, 'days'),
        endDate: moment(),
        minDate: '01/01/2012',
        maxDate: '12/31/2015',
        dateLimit: {
            days: 60
        },
        showDropdowns: true,
        showWeekNumbers: true,
        timePicker: false,
        timePickerIncrement: 1,
        timePicker12Hour: true,
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        opens: 'right',
        buttonClasses: ['btn btn-default'],
        applyClass: 'btn-small btn-primary',
        cancelClass: 'btn-small',
        format: 'MM/DD/YYYY',
        separator: ' to ',
        locale: {
            applyLabel: 'Submit',
            cancelLabel: 'Clear',
            fromLabel: 'From',
            toLabel: 'To',
            customRangeLabel: 'Custom',
            daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr', 'Sa'],
            monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
            firstDay: 1
        }
    };

    $('#reportrange_right span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

    $('#reportrange_right').daterangepicker(optionSet1, cb);

    $('#reportrange_right').on('show.daterangepicker', function () {
        console.log("show event fired");
    });
    $('#reportrange_right').on('hide.daterangepicker', function () {
        console.log("hide event fired");
    });
    $('#reportrange_right').on('apply.daterangepicker', function (ev, picker) {
        console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
    });
    $('#reportrange_right').on('cancel.daterangepicker', function (ev, picker) {
        console.log("cancel event fired");
    });

    $('#options1').click(function () {
        $('#reportrange_right').data('daterangepicker').setOptions(optionSet1, cb);
    });

    $('#options2').click(function () {
        $('#reportrange_right').data('daterangepicker').setOptions(optionSet2, cb);
    });

    $('#destroy').click(function () {
        $('#reportrange_right').data('daterangepicker').remove();
    });
    
    $('#single_cal1').daterangepicker({
        singleDatePicker: true,
        calender_style: "picker_1"
    }, function (start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
    });
    $('#single_cal2').daterangepicker({
        singleDatePicker: true,
        calender_style: "picker_2"
    }, function (start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
    });
    $('#single_cal3').daterangepicker({
        singleDatePicker: true,
        calender_style: "picker_3"
    }, function (start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
    });
    $('#single_cal4').daterangepicker({
        singleDatePicker: true,
        calender_style: "picker_4"
    }, function (start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
    });
    
    $('#reservation').daterangepicker(null, function (start, end, label) {
        console.log(start.toISOString(), end.toISOString(), label);
    });
    
    // initialize the validator function
    validator.message.date = 'not a real date';

    // validate a field on "blur" event, a 'select' on 'change' event & a '.reuired' classed multifield on 'keyup':
    $('form')
      .on('blur', 'input[required], input.optional, select.required', validator.checkField)
      .on('change', 'select.required', validator.checkField)
      .on('keypress', 'input[required][pattern]', validator.keypress);

    $('.multi.required').on('keyup blur', 'input', function() {
      validator.checkField.apply($(this).siblings().last()[0]);
    });

    $('form').submit(function(e) {
      e.preventDefault();
      var submit = true;

      // evaluate the form using generic validaing
      if (!validator.checkAll($(this))) {
        submit = false;
      }

      if (submit){
          $.ajax({
              type:'POST',
              url:'../cadastro/academia/php/gAcademia.php',
              data:$(this).serialize(),
              dataType:"json",
              success:function(res){
                  //console.log(res);
                  if(res.rs == 1){
                      checkMsg();
                      $("#Success").fadeIn();
                      $("#rsSucess").empty().html(res.msg);
                      resetForm();
                      setInterval("fecha('#Success')", 10000);
                      focaMsg(".right_col");                  	
                      ltAcademia();                        
                  }else if(res.rs == 2){
                      $("#Warning").fadeIn();
                      $("#rsWarning").html(res.msg);
                      focaMsg(".right_col");
                  }else if(res.rs == 0){
                      //console.log(res);
                      $("#Alert").fadeIn();
                      $("#rsAlert").html(res.msg);
                      focaMsg(".right_col");                        
                  }else{
                      console.log("Não foi gerado um submit");
                  }
              }
          });
      }
      return false;
    });
    
    var handleDataTableButtons = function() {
        if ($("#datatable-buttons").length) {
          $("#datatable-buttons").DataTable({
            dom: "Bfrtip",
            buttons: [
              {
                extend: "copy",
                className: "btn-sm"
              },
              {
                extend: "csv",
                className: "btn-sm"
              },
              {
                extend: "excel",
                className: "btn-sm"
              },
              {
                extend: "pdfHtml5",
                className: "btn-sm"
              },
              {
                extend: "print",
                className: "btn-sm"
              },
            ],
            responsive: true
          });
        }
      };

      TableManageButtons = function() {
        "use strict";
        return {
          init: function() {
            handleDataTableButtons();
          }
        };
      }();
      var table = $('#datatable-responsive').DataTable();
      ltAcademia = function(){
      	table.clear().draw(false);
          $.post('../cadastro/academia/php/sAcademia.php',{lista:1},function(res){
	            //console.log(res);
	            if(res.rs == 1){
	            	var matriz;
	                $.each(res,function(index,value){
	                    //console.log(index+"-"+value.codigo);
	                	if(index != 'rs'){
	                		(value.matriz == 1) ? matriz = 'Sim' : matriz = 'Não';
		                    table.row.add([
		                    	'<input type="checkbox" class="flat" name="table_records" value="'+value.codigo+'">',
		                    	value.codigo,
		                    	value.rSocial,
		                    	value.responsavel,
		                    	value.telefone,
		                    	matriz,
		                    	'<a class="btn btn-sm btn-warning" data-toggle="tooltip" data-placement="top" title="Alterar Registro" href="#" onclick="editar('+value.codigo+');return false;">'+
	                    			'<i class="fa fa-pencil-square-o"></i>'+
	                    		'</a>'+
		                    	'<a class="btn btn-sm btn-primary" href="#" aria-label="Visualizar" onclick="visualizar('+value.codigo+');return false;">'+
		                    		'<i class="fa fa-binoculars" title="Visualizar Registro"></i>'+
		                    	'</a>'+
		                    	'<a class="btn btn-sm btn-danger" href="#" aria-label="Deletar" onclick="deletar('+value.codigo+');return false;">'+
		                    		'<i class="fa fa-trash-o" title="Excluir Registro"></i>'+
		                    	'</a>'
		                     ]).draw(false);
	                    } 
	                });
	            }else if(res.rs == 2){
	            	console.log(res.msg);
	            }else if(res.rs == 0){
	            	console.log(res.msg);
	            }else{
	                console.log("Não foi gerado lista!");
	            }
	        },"json");
      }
      ltAcademia();
      $('#datatable-keytable').DataTable({
        keys: true
      });

      //$('#datatable-responsive').DataTable();

      $('#datatable-scroller').DataTable({
        ajax: "js/datatables/json/scroller-demo.json",
        deferRender: true,
        scrollY: 380,
        scrollCollapse: true,
        scroller: true
      });

      $('#datatable-fixed-header').DataTable({
        fixedHeader: true
      });

      var $datatable = $('#datatable-checkbox');

      $datatable.dataTable({
        'order': [[ 1, 'asc' ]],
        'columnDefs': [
          { orderable: false, targets: [0] }
        ]
      });
/*         $datatable.on('draw.dt', function() {
        $('input').iCheck({
          checkboxClass: 'icheckbox_flat-green'
        });
      }); */

      TableManageButtons.init();
    
        var cnt = 10;
        
        TabbedNotification = function(options) {
          var message = "<div id='ntf" + cnt + "' class='text alert-" + options.type + "' style='display:none'><h2><i class='fa fa-bell'></i> " + options.title +
            "</h2><div class='close'><a href='javascript:;' class='notification_close'><i class='fa fa-close'></i></a></div><p>" + options.text + "</p></div>";

          if (!document.getElementById('custom_notifications')) {
            alert('doesnt exists');
          } else {
            $('#custom_notifications ul.notifications').append("<li><a id='ntlink" + cnt + "' class='alert-" + options.type + "' href='#ntf" + cnt + "'><i class='fa fa-bell animated shake'></i></a></li>");
            $('#custom_notifications #notif-group').append(message);
            cnt++;
            CustomTabs(options);
          }
        };

        CustomTabs = function(options) {
          $('.tabbed_notifications > div').hide();
          $('.tabbed_notifications > div:first-of-type').show();
          $('#custom_notifications').removeClass('dsp_none');
          $('.notifications a').click(function(e) {
            e.preventDefault();
            var $this = $(this),
              tabbed_notifications = '#' + $this.parents('.notifications').data('tabbed_notifications'),
              others = $this.closest('li').siblings().children('a'),
              target = $this.attr('href');
            others.removeClass('active');
            $this.addClass('active');
            $(tabbed_notifications).children('div').hide();
            $(target).show();
          });
        };

        CustomTabs();

        var tabid = idname = '';

        $(document).on('click', '.notification_close', function(e) {
          idname = $(this).parent().parent().attr("id");
          tabid = idname.substr(-2);
          $('#ntf' + tabid).remove();
          $('#ntlink' + tabid).parent().remove();
          $('.notifications a').first().addClass('active');
          $('#notif-group div').first().css('display', 'block');
        });
    
      
});
