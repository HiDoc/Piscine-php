SELECT
DATEDIFF(GREATEST((select max(date_last_film) from member),
(select max(m.date) from member_history m ))
, LEAST((select min(date_last_film) from member),
(select min(m.date) from member_history m ))) as uptime;
