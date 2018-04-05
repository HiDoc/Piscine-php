select distinct name from distrib
where id_distrib IN (42, 62, 63, 64, 65, 66, 67, 68, 69, 71, 88, 89, 90)
or name like "%Y%Y%"
or name like "%Y%"
or name like "%y%y%"
or name like "%y%"
limit 2,5;
