select title, summary
from film 
where (summary like "%42%" OR title like "%42%")
order by duration;
