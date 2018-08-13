select  a.sifra, a.naziv, rz.brojracuna, rz.iznos, rz.vreme, vp.naziv
from    racunzaglavlja rz,
	racunstavke rs,
        racunplacanje rp,
        vrsteplacanja vp,
        artiklivarijante av,
        artikli a
where   rz.id = rs.racunzaglavlje
and    rz.id = rp.racunzaglavlje
and    rp.vrstaplacanja = vp.sifra
and    rs.artikal = av.artikal
and    rs.velicina = av.varijanta
and    av.artikal = a.id
and    vp.sifra ='05'