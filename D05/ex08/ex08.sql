select last_name, first_name, DATE(birthdate) as birthdate
from user_card
WHERE birthdate BETWEEN '1989-01-01' AND '1989-12-31'
ORDER BY last_name;
