INSERT INTO tracktable(
       procedura,
       parametri,
       tabela,
       podataksifra,
       podatakid,
       trackakcija,
       vreme,
       korisnik,
       gorgjed,
       gaplikacija,
       ipadresa
       )
   SELECT distinct
               'postaviKolicinu',
               'rucno trackovanje',
               'zaliha',
               z.velicina,
               z.artikal,
              1::smallint,
               localtimestamp,
               'adm',
               'X10',
               'mlp',
               null
    FROM zaliha z;
