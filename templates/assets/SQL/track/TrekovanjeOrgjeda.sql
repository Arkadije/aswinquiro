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
         'orgjed',
         null,
         sifra,
         1,
         sysdate,
         'adm',
         (select max(sifra) from orgjed where sifra = otac),
         'adm',
         'OgnjenPrObj'
    from orgjed 
where sifra in (select orgjed from skladiste where prodajniobjekat <> '0')
