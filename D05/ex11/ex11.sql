select UPPER(last_name) as NAME, first_name, price
from user_card u, member m, subscription s
where u.id_user = m.id_user_card
and m.id_sub = s.id_sub
and s.price > 42
order by last_name, first_name;
