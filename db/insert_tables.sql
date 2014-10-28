use noturnall;

-- seed para tabela de administradores

INSERT INTO users (usr_name, usr_password, usr_active)
VALUES ('adm', '1q2w3e4r',1);

INSERT INTO users (usr_name, usr_password, usr_active)
VALUES ('thiago', 'noturnatall4ever', 1);

INSERT INTO users (usr_name, usr_password, usr_active)
VALUES ('eliton','noturnatall4ever', 1);

-- seed para tabela-helper de ativo

INSERT INTO active(act_id, act_name)
VALUES (0, 'Não');

INSERT INTO active(act_id, act_name)
VALUES (1, 'Sim');

-- seed para datas
--select dts_date, dts_local, dts_city_state from dates where dts_active = 1;

INSERT INTO dates(dts_date, dts_local, dts_city_state, dts_active, dts_record_by)
VALUES ('21/12/2013', 'Blackmore Rock Bar', 'São Paulo/SP', 1, 1);

INSERT INTO dates(dts_date, dts_local, dts_city_state, dts_active, dts_record_by)
VALUES ('29/03/2014', 'Carioca Club', 'São Paulo/SP', 1, 1);

INSERT INTO dates(dts_date, dts_local, dts_city_state, dts_active, dts_record_by)
VALUES ('24/04/2014', 'Assinatura Rock Walk', 'Limeira/SP', 1, 1);

INSERT INTO dates(dts_date, dts_local, dts_city_state, dts_active, dts_record_by)
VALUES ('09/05/2014', 'LifeClub', 'Florianópolis/SP', 1, 1);