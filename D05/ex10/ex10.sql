select title as Title, summary as Summary, prod_year
from film f, genre g
where g.id_genre = f.id_genre
and g.name = "erotic"
order by prod_year desc;
