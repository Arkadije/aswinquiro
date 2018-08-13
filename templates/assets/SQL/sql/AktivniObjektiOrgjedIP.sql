select max(t.vreme), 'dbserver'||t.gorgjed, p.ipadresa
  from tracktable t, skladiste s, prodajniobjekat p
 where t.gorgjed = s.orgjed
   and s.prodajniobjekat = p.sifra
   and trackakcija = 13
   and podataksifra = 'D'
 group by t.gorgjed, p.ipadresa
 order by max(vreme) desc
