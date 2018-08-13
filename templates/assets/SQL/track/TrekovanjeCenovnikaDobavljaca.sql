-- samo slogovi iz cenovnika koji trenutno vaze
insert into tracktable (
id, 
tabela, 
podatakid, 
trackakcija, 
vreme, 
korisnik, 
gorgjed, 
gaplikacija, 
ipadresa
)
select
tracktable_id_seq.nextval, 
'cenovnikdobavljaca', 
s.id, 
1, 
sysdate, 
'adm', 
(select sifra from orgjed where sifra = otac), 
'vlp', 
'darko'
from cenovnikdobavljaca s
where s.vremedo >= sysdate
and s.valuta = 'DIN' 