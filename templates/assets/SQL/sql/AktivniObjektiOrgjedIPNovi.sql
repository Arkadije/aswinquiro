select max(t.vreme), 'dbserver'||t.gorgjed, p.ipadresa
  from tracktable t, skladiste s, prodajniobjekat p, skladistepobjekat sp
 where t.gorgjed = s.orgjed
   and sp.prodajniobjekat = p.sifra
   and sp.skladiste = s.orgjed
   and trackakcija = 13
   and podataksifra = 'D'
 group by t.gorgjed, p.ipadresa
 order by max(vreme) desc
