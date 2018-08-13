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
	       'artikligrupaclan',
	       grupa,
	       rednibroj,
               1,
	       sysdate,
	       'adm',
	       (select max(sifra) from orgjed where sifra = otac),
	       'adm',
	       'bojanmagc'
               from artikligrupaclan
               
	 
	       
delete from tracktable where ipadresa='bojanmagc'
