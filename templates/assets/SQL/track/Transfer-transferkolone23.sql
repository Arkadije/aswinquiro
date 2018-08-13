select * from db_parametri where sifra='verzija'

select * from prodajniobjekat where transfertip=3

delete from transferrestrikcija where transfertip=3

delete from transferkolone where transfertip=3

insert into transferkolone
select transferkolone_id_seq.nextval, 3, t.tabela, t.ime, t.kolona, t.vrednost, t.redosled, t.azurirati 
from transferkolone t 
where t.transfertip = 2;

insert into transferrestrikcija
select transferkolone_id_seq.nextval, 3, t.transfertabela, t.restrikcija 
from transferrestrikcija t 
where t.transfertip = 2;

update prodajniobjekat set transfertip=3 where transfertip=2






insert into transferkolone
select transferkolone_id_seq.nextval, 3, t.tabela, t.ime, t.kolona, t.vrednost, t.redosled, t.azurirati 
from transferkolone t 
where t.transfertip = 2
and tabela='prodajniobjekat';