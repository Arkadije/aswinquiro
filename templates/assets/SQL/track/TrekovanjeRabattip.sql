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
         'rabattip',
         null,
         sifra,
         1,
         sysdate,
         'adm',
         (select max(sifra) from orgjed where sifra = otac),
         'adm',
         'OgnjenAkcije'
    from rabattip 