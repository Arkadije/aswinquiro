-- za brend se unosi podataksifra

insert into tracktable (id, tabela, podataksifra, trackakcija, vreme, korisnik, gorgjed, gaplikacija, ipadresa)
select tracktable_id_seq.nextval, 'brend', b.sifra, 0, sysdate, 'adm', 
(select max(sifra) from orgjed where sifra = otac), 
'adm', 'darkod'
from brend b

-- za artikle treba i podatakid i podataksifra

insert into tracktable (id, tabela, podatakid, podataksifra, trackakcija, vreme, korisnik, gorgjed, gaplikacija, ipadresa)
select tracktable_id_seq.nextval, 'artikli', a.id, a.sifra, 0, sysdate, 'adm', 
(select max(sifra) from orgjed where sifra = otac), 
'adm', 'darkod'
from artikli a, artikliosobine ao
where a.id=ao.artikal

-- za komitente treba i podatakid i podataksifra

-- za sve artikle na specificnom VLP dokumentu 

insert into tracktable (id, tabela, podatakid, podataksifra, trackakcija, vreme, korisnik, gorgjed, gaplikacija, ipadresa)
select tracktable_id_seq.nextval, 'artikli', a.id, a.sifra, 0, sysdate, 'adm', 
(select max(sifra) from orgjed where sifra = otac), 
'adm', 'darkod'
from artikli a, artikliosobine ao, vlpstavke vs
where a.id=ao.artikal
and a.id=vs.artikal
and vs.vlpzaglavlje=234222

