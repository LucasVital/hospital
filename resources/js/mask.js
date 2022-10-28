$(document).ready(function(){
    $('.cpf').mask('000.000.000-00', {reverse: true});
    $('.peso').mask('000.0', {reverse: true});
    $('.altura').mask('0.00', {reverse: true});
    $('.cep').mask('00000-000');

    // função para a mascala celular 8 e 9 digitos
    let SPMaskBehavior = function (val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
        spOptions = {
            onKeyPress: function(val, e, field, options) {
                field.mask(SPMaskBehavior.apply({}, arguments), options);
            }
        };
    $('.phone').mask(SPMaskBehavior, spOptions);
});
