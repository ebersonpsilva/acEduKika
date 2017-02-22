<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Dados de Produtos</h3>
            </div>

        </div>
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                      <h2>Formulario de Cadastro<!-- <small>different form elements</small>--></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <br />
                            <div class="x_content bs-example-popovers">
                                <div class="alert alert-success alert-dismissible fade in" role="alert" id="Success" style="display: none;">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">Ã—</span>
                                    </button>
                                    <strong>SUCESSO!</strong>
                                    <div id="rsSucess"></div>
                                </div>
                                <div class="alert alert-info alert-dismissible fade in" role="alert" id="Info" style="display: none;">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">Ã—</span>
                                    </button>
                                    <strong>ATENÇÃO!</strong><br/>
                                    <div id="rsInfo"></div>
                                </div>
                                <div class="alert alert-warning alert-dismissible fade in" role="alert" id="Warning" style="display: none;">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">Ã—</span>
                                    </button>
                                    <strong>FALHA!</strong><br/>
                                    <div id="rsWarning"></div>
                                </div>
                                <div class="alert alert-danger alert-dismissible fade in" role="alert" id="Alert" style="display: none;">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">Ã—</span>
                                    </button>
                                    <strong>ALERTA!</strong><br/>
                                    <div id="rsAlert"></div>
                                </div>
                            </div>
										<form id="produtos" data-parsley-validate class="form-horizontal form-label-left">
											<div class="form-group">
												<label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Nome <span class="required">*</span>
												</label>
												<div class="col-md-6 col-sm-6 col-xs-12">
													<input type="text" id="razaoSocial" required="required" class="form-control col-md-7 col-xs-12" name="razaoSocial" />
												</div>
											</div>
											<div class="form-group">
												<label for="bairro" class="control-label col-md-3 col-sm-3 col-xs-12">Valor Mensal </label>
												<div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
													<input id="vrMensal" class="form-control" type="text" name="vrMensal">
												</div>
											</div>
											<div class="form-group">
												<label for="acrescimo" class="control-label col-md-3 col-sm-3 col-xs-12">Acréscimo (% ou R$) </label>
												<div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
													<input id="pAcrescimo" class="form-control" type="text" name="pAcrescimo">
												</div>
												<label for="bairro"	class="control-label col-md-5 col-sm-5 col-xs-12">
												</label>
													<div class="col-md-5 col-sm-5 col-xs-12 has-feedback">
														<input type="checkbox" id="aMensal" name="aMensal" value="1" checked="checked">
														Mensal
													</div>
											</div>
											<div class="form-group">
												<label for="acrescimo" class="control-label col-md-3 col-sm-3 col-xs-12">Desconto (% ou R$) </label>
												<div class="col-md-2 col-sm-2 col-xs-12 form-group has-feedback">
													<input id="pAcrescimo" class="form-control" type="text" name="pAcrescimo">
												</div>
												<label for="bairro"	class="control-label col-md-5 col-sm-5 col-xs-12">
												</label>
													<div class="col-md-5 col-sm-5 col-xs-12 has-feedback">
														<input type="checkbox" id="dMensal" name="dMensal" value="1">
														Mensal
													</div>
											</div>
											<div class="ln_solid"></div>
											<div class="form-group">
												<div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
													<input type="hidden" name="ukey" id="ukey"
														value="27bbe372132b8cf5c69598b89d14b3103a91102c936a01d614404398f36d37a5" />
													<button type="reset" class="btn btn-primary">Limpar</button>
													<button type="submit" class="btn btn-success">Gravar</button>
												</div>
											</div>
										</form>
                    </div>
                </div>
            </div>

            <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Pesquisar">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div>
            <!-- Table -->
            <div class="clearfix"></div>

            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Lista de Produtos</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a>
                                    </li>
                                    <li><a href="#">Settings 2</a>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>

                    <div class="x_content">
                        <div class="table-responsive">
                            <table class="table table-striped jambo_table bulk_action">
                                <thead>
                                    <tr class="headings">
                                        <th>
                                            <input type="checkbox" id="check-all" class="flat">
                                        </th>
                                        <th class="column-title">ID Academia </th>
                                        <th class="column-title">Razão Social </th>
                                        <th class="column-title">Responsavel </th>
                                        <th class="column-title">Contato </th>
                                        <th class="column-title">Academia Principal? </th>
                                        <th class="column-title no-link last"><span class="nobr">&nbsp;</span>
                                        </th>
                                        <th class="bulk-actions" colspan="7">
                                            <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr class="even pointer">
                                        <td class="a-center ">
                                            <input type="checkbox" class="flat" name="table_records">
                                        </td>
                                        <td class=" ">121000040</td>
                                        <td class=" ">Alphaville </td>
                                        <td class=" ">2.390 <i class="success fa fa-long-arrow-up"></i></td>
                                        <td class=" ">2,50 <i class="success fa fa-long-arrow-up"></i></td>
                                        <td class=" ">4,56 <i class="success fa fa-long-arrow-down"></i></td>
                                        <td class=" last"><a href="#">Editar &nbsp;|&nbsp; Visualizar</a>
                                        </td>
                                    </tr>
                                    <tr class="odd pointer">
                                        <td class="a-center ">
                                            <input type="checkbox" class="flat" name="table_records">
                                        </td>
                                        <td class=" ">121000050</td>
                                        <td class=" ">Campinas </td>
                                        <td class=" ">1.390 <i class="success fa fa-long-arrow-up"></i></td>
                                        <td class=" ">6,30 <i class="success fa fa-long-arrow-up"></i></td>
                                        <td class=" ">1,46 <i class="success fa fa-long-arrow-down"></i></td>
                                        <td class="a-right a-right ">66</td>
                                        <td class=" last"><a href="#">Editar &nbsp;|&nbsp; Visualizar</a>                            </td>
                                    </tr>
                                    <tr class="even pointer">
                                        <td class="a-center ">
                                            <input type="checkbox" class="flat" name="table_records">
                                        </td>
                                        <td class=" ">&nbsp;</td>
                                        <td class=" ">&nbsp;</td>
                                        <td class=" ">&nbsp;</i>
                                        </td>
                                        <td class=" ">&nbsp;</td>
                                        <td class=" ">&nbsp;</td>
                                        <td class="a-right a-right ">&nbsp;</td>
                                        <td class=" last"><a href="#">&nbsp;</a>
                                        </td>
                                    </tr>
                                    <tr class="odd pointer">
                                        <td class="a-center ">
                                            <input type="checkbox" class="flat" name="table_records">
                                        </td>
                                        <td class=" ">&nbsp;</td>
                                        <td class=" ">&nbsp;</td>
                                        <td class=" ">&nbsp;</td>
                                        <td class=" ">&nbsp;</td>
                                        <td class=" ">&nbsp;</td>
                                        <td class="a-right a-right ">&nbsp;</td>
                                        <td class=" last"><a href="#">&nbsp;</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<!-- bootstrap-daterangepicker -->
<!-- jQuery -->
<script src="../vendors/validator/validator.js"></script>
<script src="../production/js/customizado/generic.js"></script>
<script src="../libs/js/cep.js"></script>
<!-- jquery.inputmask -->
<script>
    $(document).ready(function () {
        $("#cnpj").inputmask("99.999.999/9999-99");
        $("#cep").inputmask("99999-999");
        $("#numero").maxlength({max: 5,showFeedback:false});
        //$("#numero").inputmask("999999");
        $("input[name=telefone]").inputmask("(99) 9999-9999");
        $("input[name=celular]").blur(function(){
            $(this).inputmask("(99) 9999[9]-9999");
        });
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
        $.post('../cadastro/academia/php/sAcademia.php',{lista:1},function(res){
            console.log(res);
            if(res.rs == 1){
                $.each(res.msg,function(index,value){
                    console.log(index+"-"+value);
                });
            }else if(res.rs == 2){
                $("#Warning").fadeIn();
                $("#rsWarning").html(res.msg);
                focaMsg("#Warning");
            }else if(res.rs == 0){
                $("#Alert").fadeIn();
                $("#rsAlert").html(res.msg);
                focaMsg("#Alert");                        
            }else{
                console.log("NÃ£o foi gerado lista!");
            }
        },"json");
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
            $("#idCep").val();
            $("#cnpj").focus();
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
    });
</script>
<!-- /jquery.inputmask -->

<!-- bootstrap-daterangepicker -->
<script>
    $(document).ready(function () {
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

    });
</script>

<script>
    $(document).ready(function () {
        var cb = function (start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
            $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
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
            opens: 'left',
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
        $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));
        $('#reportrange').daterangepicker(optionSet1, cb);
        $('#reportrange').on('show.daterangepicker', function () {
            console.log("show event fired");
        });
        $('#reportrange').on('hide.daterangepicker', function () {
            console.log("hide event fired");
        });
        $('#reportrange').on('apply.daterangepicker', function (ev, picker) {
            console.log("apply event fired, start/end dates are " + picker.startDate.format('MMMM D, YYYY') + " to " + picker.endDate.format('MMMM D, YYYY'));
        });
        $('#reportrange').on('cancel.daterangepicker', function (ev, picker) {
            console.log("cancel event fired");
        });
        $('#options1').click(function () {
            $('#reportrange').data('daterangepicker').setOptions(optionSet1, cb);
        });
        $('#options2').click(function () {
            $('#reportrange').data('daterangepicker').setOptions(optionSet2, cb);
        });
        $('#destroy').click(function () {
            $('#reportrange').data('daterangepicker').remove();
        });
    });
</script>

<script>
    $(document).ready(function () {
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
    });
</script>

<script>
    $(document).ready(function () {
        $('#reservation').daterangepicker(null, function (start, end, label) {
            console.log(start.toISOString(), end.toISOString(), label);
        });
    });
</script>
<!-- /bootstrap-daterangepicker -->
<!-- validator -->
    <script>
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
        fecha = function(campo){
            $(campo).fadeOut();
        }
        resetForm = function(){
            $("#academias")[0].reset();
            $("#bairro").removeAttr('readonly');
            $("#endereco").removeAttr('readonly');
            $("#cidade").removeAttr('readonly');
            $("#idCep").val();
            $("#cnpj").focus();
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
        // evaluate the form using generic validaing
        if (!validator.checkAll($(this))) {
          submit = false;
        }

        if (submit){
          //this.submit();
            $.ajax({
                type:'POST',
                url:'../cadastro/academia/php/gAcademia.php',
                data:$(this).serialize(),
                dataType:"json",
                success:function(res){
                    console.log(res);
                    if(res.rs == 1){
                        checkMsg();
                        $("#rsSucess").empty();
                        $("#Success").fadeIn();
                        $("#rsSucess").html(res.msg);
                        resetForm();
                        setInterval("fecha('#Success')", 10000);
                        focaMsg("#Success");                        
                    }else if(res.rs == 2){
                        $("#Warning").fadeIn();
                        $("#rsWarning").html(res.msg);
                        focaMsg("#Warning");
                    }else if(res.rs == 0){
                        console.log(res);
                        $("#Alert").fadeIn();
                        $("#rsAlert").html(res.msg);
                        focaMsg("#Alert");                        
                    }else{
                        console.log("NÃ£o foi gerado um submit");
                    }
                }
            });
        }
        return false;
      });
    </script>
    <!-- /validator -->