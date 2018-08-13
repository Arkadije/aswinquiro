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
                'postaviCenu',
                'rucno trackovanje',
                'cenovnik',
                UNETI_SKLADISTE,
                c.artikal,
               1::smallint,
                localtimestamp,
                'adm',
                UNETI_SKLADISTE,
                'mlp',
                null
     FROM cenovnik c;