select count(*), artikal from cenovnikprodaje
where vremeod<sysdate and vremedo>sysdate
and tipceneobjekta = 'O'
group by artikal
having count(*)>1