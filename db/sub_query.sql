SELECT no_ex FROM expediente where cod_pa=3 in (SELECT cod_pa from paciente);
SELECT cod_pa FROM expediente where cod_pa in (SELECT cod_pa from expediente where cod_pa=3);