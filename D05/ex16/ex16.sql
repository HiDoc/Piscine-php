SELECT
(SELECT COUNT(*) FROM member m
 WHERE m.date_last_film
 BETWEEN '2006/10/30' AND '2007/07/27'
 OR (DAY(m.date_last_film) = 24 AND MONTH(m.date_last_film) = 12)) +
(SELECT COUNT(*) FROM member_history me
WHERE me.date
BETWEEN '2006/10/30' AND '2007/07/27'
OR (DAY(me.date) = 24 AND MONTH(me.date) = 12))
AS movies;
