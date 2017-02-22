jQuery(function($){
    function limpa_formulário_cep() {
        $("#endereco").val("").removeAttr('readonly');
        $("#bairro").val("").removeAttr('readonly');
        $("#cidade").val("").removeAttr('readonly');
        //$("#cepConf").val("");
    }
    $("#cep").blur(function() {
        var cep = $(this).val().replace(/\D/g, '');
        //var cepConf = $("#cepConf").val().replace(/\D/g, '');
        if (cep != "") {
            var validacep = (/^[0-9]{8}$/);
            if(validacep.test(cep)) {
                $("#endereco").val("...")
                $("#bairro").val("...")
                $("#cidade").val("...")
                $.post('../libs/php/sCep.php',{cep:cep},function(res){
                	//console.log(res);
                    if(res.rs == 2){
                        $("#endereco").val(res.endereco).attr('readonly','');
                        $("#bairro").val(res.bairro).attr('readonly','');
                        $("#cidade").val(res.cidade).attr('readonly','');
                        $("#idCep").val(res.idCep);
                        $("#numero").focus();
                    }else if(res.rs == 0){
                        $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {
                            if (!("erro" in dados)) {
                                $("#endereco").val(dados.logradouro).attr('readonly','');
                                $("#bairro").val(dados.bairro).attr('readonly','');
                                $("#cidade").val(dados.localidade).attr('readonly','');
                                $("#numero").focus();
                                $.post('../libs/php/iCep.php',{
                                    cep:cep,
                                    endereco:dados.logradouro,
                                    bairro:dados.bairro,
                                    cidade:dados.localidade,
                                    uf:dados.uf},function(res){
                                        if(res.rs == 1){
                                            $("#idCep").val(res.msg);
                                        }else if(res.rs == 0){
                                            $("#idCep").val('Error');
                                        }
                                },"json");
                            }
                            else {
                                limpa_formulário_cep();
                                alert("CEP não encontrado.");
                            }
                        });     
                    }
                },"json");
            }
            else {
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        }
//        else {
//            limpa_formulário_cep();
//        }
    });
});