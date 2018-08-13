insert into tracktable
    (id,
     tabela,
     podatakid,
     podataksifra,
     trackakcija,
     vreme,
     korisnik,
     gorgjed,
     gaplikacija,
     ipadresa)
    select tracktable_id_seq.nextval,
           'artikli',
           id,
           sifra,
               1,
           sysdate,
           'adm',
           (select max(sifra) from orgjed where sifra = otac),
           'adm',
           'nikolagArtikli'
               from artikli
               where id in (select artikal from artikliosobine where aktivan = 'D')