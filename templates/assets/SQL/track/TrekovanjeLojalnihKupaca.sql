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
         'lojalnikupci',
         id,
         null,
         1,
         sysdate,
         'adm',
         (select max(sifra) from orgjed where sifra = otac),
         'adm',
         'LojKupci'
    from lojalnikupci 